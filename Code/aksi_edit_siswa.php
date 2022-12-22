<?php

if (isset($_POST['edit']))
{
    include_once 'koneksi.php';
        $nisn       = $_POST['nisn'];
        $nama       = $_POST['nama'];
        $kelas      = $_POST['kelas'];
        $jk         = $_POST['jk'];
        $alamat     = $_POST['alamat'];
        $update     = mysqli_query($connection, " UPDATE db_siswa SET
    
        nama        = '$nama',
        kelas       = '$kelas',
        jk          = '$jk',
        alamat      = '$alamat'
    
        WHERE nisn   = '$nisn'")
        
    or die(mysqli_error());
    
    
    if($update)
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Data Berhasil Di Update")';  
        echo '</script>';
        echo "<script>window.location = 'direk_siswa_adm.php'</script>";
    }
    
    else
    {
        echo "<h2>gagal menyimpan data</h2>";
        echo "<a href ='edit_siswa.php ?nisn = ".$nisn."'>kembali</a>";
    } 
}

else
{
        echo "<script>window.history.back()</script>";
}


?>