<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
 // ambil data dari formulir
 $Id = $_POST['Id'];
 $Nama = $_POST['Nama'];
 $Umur = $_POST['Umur'];
 $Alamat = $_POST['Alamat'];
 $TTL = $_POST['TTL'];
 $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
 // buat query update
 $sql = "UPDATE siswa SET Id='$Id', Nama='$Nama', Umur='$Umur', Alamat='$Alamat', TTL='$TTL', Jenis_Kelamin='$Jenis_Kelamin',
 WHERE id=$id";
 $query = mysqli_query($db, $sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: list-siswa.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 }
} else {
 die("Akses dilarang...");
}
?>