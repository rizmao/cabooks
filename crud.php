<!DOCTYPE html>
<html>

<head>
    <title>CRUD PEMROGRAMAN</title>

    <style>
        * {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 0;
            outline: 0;
            font-family: 'Open Sans', sans-serif;
        }

        .body {
            height: 100px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th {
            text-align: center;
            padding: 16px;
            background-color: darksalmon;
        }

        td {
            text-align: center;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: silver;
        }
    </style>

</head>

<body>
    <class class="container-fluid"></class>


    <h1 style="text-align: center ;">Daftar Materi</h1>
    <div class="countainer align-center">
        <div class="row align-center">
            <h3> Hallo Selamat Datang ADMIN</h3>
            <a href="materi_simpan.php"><input type="button" value="Tambah data"></a>
            <a href="beranda.php"><input type="button" value="kembali"></a>
            <a href="beranda.php"><input type="button" value="keluar"></a>
            <br><br><br>
            <table border="1" width="85%" align="center">
                <tr>
                    <th>Nomor</th>
                    <th>nama_materi</th>
                    <th>jenis_materi</th>
                    <th>file</th>
                    <th colspan="2">aksi</th>
                </tr>
                <?php
                //menyambungkan dengan koneksi
                include "koneksi.php";
                session_start();

                // check apakah session email sudah ada atau belum.
                // jika belum maka akan diredirect ke halaman index (login)
                if (empty($_SESSION['email'])) {
                }
                ?>
                <?php
                //query untuk menampilkan semua data siswa
                $result = mysqli_query($conn, "SELECT * FROM pemrograman  ");


                while ($data = mysqli_fetch_array($result)) {
                    //ambil semua eksekusi di sql //
                    echo "<tr>";
                    echo "<td>" . $data['nomor'] . "</td>";
                    echo "<td>" . $data['nama_materi'] . "</td>";
                    echo "<td>" . $data['jenis_materi'] . "</td>";
                    echo "<td>" . $data['file'] . "</td>";
                    echo "<td><a  href='ubah.php?id=" . $data['id'] . "'>ubah</a></td>";
                    echo "<td><a href='proses_hapus.php?id=" . $data['id'] . "'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>

        </div>
    </div>

</body>

</html>