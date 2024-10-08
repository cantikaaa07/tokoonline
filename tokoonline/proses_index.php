<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('username tidak valid!');location.href='index.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='index.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from petugas where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
                $_SESSION['status_login']=true;
                header("location: home_petugas.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
            }
        }
    }
?>