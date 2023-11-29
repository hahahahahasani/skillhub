<?php
session_start();
include "aksi/koneksi.php";

// require "aksi/aksi_hapus.php";

$email = $_SESSION['email'];

// inisialisasi level 
$query = mysqli_query($conn, "SELECT nama,level FROM user WHERE email = '$email'");
$ambil = mysqli_fetch_assoc($query);
$level = $ambil['level'];


if ($level == "siswa") {
    # code...
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idu = $_POST['id_user'];
    
        $sql = mysqli_query($conn, "DELETE FROM pendaftaran_course WHERE id_subkelas = '$idu'");
    
        if ($sql == true) {
            # code...
            header('Location: home.php');
            exit();
        } else {
            # code...
            echo "<script> 
                    alert('Gagal hapus kelas')
                </script>";
        }
    }
}elseif ($level == "pengajar") {
    # code...
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idp = $_POST['id_pengajar'];
    
        $sql = mysqli_query($conn, "UPDATE subkelas SET email = NULL WHERE subkelas.id_subkelas = $idp");
    
        if ($sql == true) {
            # code...
            header('Location: home.php');
            exit();
        } else {
            # code...
            echo "<script> 
                    alert('Gagal hapus kelas')
                </script>";
        }
    }
}



