<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
 // ambil data dari formulir
 $Nama = $_POST['Id'];
 $Nama = $_POST['Nama'];
 $Umur = $_POST['Umur'];
 $Alamat = $_POST['Alamat'];
 $TTL = $_POST['TTL'];
 $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
 // buat query
 $sql = "INSERT INTO siswa (Id,Nama,Umur,Alamat,TTL,Jenis_Kelamin)
VALUE ('$Id','$Nama', '$Umur','$Alamat','$TTL', '$Jenis_Kelamin')";
 $query = mysqli_query($db, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php dengan status=sukses
 header('Location: index.php?status=sukses');
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header('Location: index.php?status=gagal');
 }
} else {
 die("Akses dilarang...");
}
?>