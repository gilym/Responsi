<?php 
include 'db.php';
error_reporting(0);

$kode1 = $_GET['kode_barang'];
$query = "SELECT * FROM inventaris WHERE kode_barang = '$kode1' ";
$execute = mysqli_query($conn,$query);
$p = mysqli_fetch_object($execute);



$query = "DELETE FROM inventaris WHERE kode_barang = '$kode1'";


$execute = mysqli_query($conn,$query);
if($execute){
    echo '<script>alert("Data Berhasil Dihapus")</script>';
    echo '<script>window.location="daftar.php"</script>';
}else{
    echo 'gagal '.mysqli_error($conn);
}

?>
