<?php
    require_once "config.php"; session_start();
        var_dump($_SESSION);
        // If session variable is not set it will redirect to login page
        if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
          header("location: index.php");
          exit;}
    
    $username = $_SESSION['username'];
    $nik=$_POST['nik'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $division = $_POST['division'];

                $query = "UPDATE biodata (username, nik, fname, lname, email, division) SET nik = '$nik',fname = '$fname',lname = '$lname',email = '$email',division = '$division' WHERE username = '$username'";
                $sql = mysqli_query($link, $query); // Eksekusi/ Jalankan query dari variabel $query
                
               if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                    echo "SUCCESS<|>Form berhasil diupload<|>";
                    include "view.php";
                }else{
                    // Jika Gagal, Lakukan :
                    echo "FAILED<|>Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                }
?>