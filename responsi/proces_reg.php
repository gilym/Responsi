<?php 
error_reporting(0);
session_start();
	
		$hostname = 'localhost';
		$username = 'root';
		$password = '';
		$dbname   = 'responsi';
		$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['Nohp'];


    $query = "INSERT INTO petugas (username,password,nama_lengkap,email,no_telpon) values ('$user' , '$pass' , '$nama' ,'$email','$hp')";
    $execute = mysqli_query($conn,$query);
    if($execute){
        echo '<script>alert("Tambah data berhasil")</script>';
        echo '<script>window.location="login.php"</script>';
    }else{
        echo 'gagal '.mysqli_error($conn);
    }




?>