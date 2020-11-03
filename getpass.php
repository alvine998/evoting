<?php

include 'config.php';  

$gethp = $_POST['nohp'];
$nim = $_POST['nim'];

$login = mysqli_query($koneksi, "select * from tb_datamahasiswa where nohp='$gethp'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    
    session_start();
    while( $ngecheck = mysqli_fetch_assoc($login) ){
        // $nama = $ngecheck['nama'];
         $_SESSION['nim'] = $nim;
        $_SESSION['nohp'] = $ngecheck['nohp'];;
    }

    // echo $_SESSION['nama'];
    // die;

    header("location:login2.php?pesan=Sukses dapat password");
} else {
    header("location:login2.php?pesan=Gagal dapat password");
}
?>