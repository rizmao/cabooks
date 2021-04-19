<?php  
include "koneksi.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>ubah materi</title>
</head>
<body>
	<h1>Ubah data meteri </h1>
	<?php  
	//koneksikan  file ke koneksi php
	include "koneksi.php";
	//ambil data id yang di kirim oleh crud.php
	if ( !isset($_GET['id'])){
        header('Location: daftar-member.php');
      }
      
      $id = $_GET['id'];
      
      $sql= "SELECT * FROM pemrograman WHERE id=$id";
      $result= mysqli_query($conn, $sql);
      $data= mysqli_fetch_assoc($result);
      
      
      if(mysqli_num_rows($result) < 1){
          die("Data Tidak ada");
      }
?>
	
<form method="POST">
    <table cellpadding="8">
    	<tr>
    		<td><input type="hidden" name="id" value="<?php echo $data['id'];?>"></td>
    		</td>
    	</tr>
      <tr>
        <td>Nomor</td>
        <td><input type="text" name="nomor" value="<?php echo $data['nomor'];?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama_materi" value="<?php echo $data['nama_materi'];?>"></td>
      </tr>
      <tr>
        <td>Jenis materi</td>
         <td><input type="text" name="jenis_materi" value="<?php echo $data['jenis_materi'];?>"></td>
		</td>
	</tr>
	<tr>
		 <td>File</td>
        <td><input type="link" name="file" value="<?php echo $data['file'];?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="update" ></td>
		<td><a href="crud.php"><input type="button" value="kembali"></a></td>
	</tr>
</table>
  </form>


<?php
include "koneksi.php";
//menampilakn data
if(isset($_POST['update'])){

$result = mysqli_query($conn, "UPDATE pemrograman SET nomor='$nomor',nama_materi='$nama_materi',jenis_materi='$jenis_materi' WHERE id=$id");
    header("location: crud.php");
	
    $id=$_POST['id'];
		$nomor=$_POST['nomor'];
		$nama_materi=$_POST['nama_materi'];
		$jenis_materi=$_POST['jenis_materi'];
		$file=$_POST['file'];

    $result = mysqli_query($conn, "UPDATE pemrograman SET nomor='$nomor',nama_materi='$nama_materi',jenis_materi='$jenis_materi', file='$file' WHERE id=$id");
    header("location: crud.php");

}
?>
	
</body>
</html>