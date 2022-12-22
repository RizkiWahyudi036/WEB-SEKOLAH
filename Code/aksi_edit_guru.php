<?php

if (isset($_POST['edit']))
{
    include_once 'koneksi.php';
        $nip        = $_POST['nip'];
        $nama       = $_POST['nama'];
        $mapel      = $_POST['mapel'];
        $jk         = $_POST['jk'];
        $alamat     = $_POST['alamat'];
        $update     = mysqli_query($connection, " UPDATE db_guru SET
    
        nama        = '$nama',
        mapel       = '$mapel',
        jk          = '$jk',
        alamat      = '$alamat'
    
        WHERE nip   = '$nip'")
        
    or die(mysqli_error());
    
    
    if($update)
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Data Berhasil Di Update")';  
        echo '</script>';
        echo "<script>window.location = 'direk_guru_adm.php' </script>";
    }
    
    else
    {
        echo "<h2>gagal menyimpan data</h2>";
        echo "<a href ='edit_guru.php ?nip = ".$nip."'>kembali</a>";
    } 
}

else
{
        echo "<script>window.history.back()</>";
}


?>