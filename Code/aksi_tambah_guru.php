<?php

    if(isset($_POST['tambah']))
    {
        include_once 'koneksi.php';
        $nip    = $_POST['nip'];
        $nama   = $_POST['nama'];
        $mapel  = $_POST['mapel'];
        $jk     = $_POST['jk'];
        $alamat = $_POST['alamat'];
        
        $input  = mysqli_query($connection, "INSERT INTO db_guru VALUES
        ('$nip', '$nama', '$mapel', '$jk','$alamat')");
        
        if($input)
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Data Berhasil di Tambah")';  
            echo '</script>';
            echo "<script>window.location='direk_guru_adm.php'</script>";
        }
        else
        {
            echo "gagal menambahkan data";
            echo "<a href = 'tambah_guru.php'>kembali</a>";
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>