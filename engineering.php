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

        .about {
            margin-top: auto;
            margin-left: 120px;
            margin-right: 50px;
        }

        .about h3 {
            font-size: 52px;
            font-weight: 200;
            text-transform: uppercase;
            margin-top: 30px;
            text-align: center;
        }

        .about p {
            font-size: 20px;
            color: rgba(0, 0, 0, 1);
            font-weight: 200;
            margin: 10px;
        }
    </style>

</head>

<body>
    <br><br><br><a href="beranda.php"><input type="button" value="kembali"></a>
    <class class="container-fluid"></class>
    <div class="controler">
        <div class="row about">
            <div class="col-5">
            </div>
            <div class="col">
                <h3>engineering</h3>
                <p>Bagi temen-temen programers yang saat ini merupakan mahasiswa Teknik Informatika atau Ilmu Komputer tentu saja sudah sangat lumrah jika temen-temen sering kali belajar melalui internet, baik itu untuk sesuatu yang terkait langsung dengan kurikulum perkuliahan ataupun sebatas pengayaan untuk menambah wawasan seputar teknologi.Sudah banyak sekali web-web berbahasa Indonesia yang bisa membantu belajar, ya salah satunya seperti CABOOKS ini. Temen-temen bisa mengikuti perkembangan teknologi dan pemrograman lewat Cabooks.</p>
            </div>
        </div>
    </div>


    <h1 style="text-align: center ;">Daftar Materi</h1>
    <div class="countainer align-center">
        <div class="row align-center">
            <table border="1" width="85%" align="center">
                <tr>
                    <th>Nomor</th>
                    <th>nama materi</th>
                    <th>jenis materi</th>
                    <th>file</th>
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
                }
                ?>
            </table>


        </div>
    </div>

</body>

</html>