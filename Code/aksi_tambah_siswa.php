<?php

    if(isset($_POST['tambah']))
    {
        include_once 'koneksi.php';
        $nisn    = $_POST['nisn'];
        $nama   = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        
        $input  = mysqli_query($connection, "INSERT INTO db_siswa VALUES
        ('$nisn', '$nama', '$kelas', '$jk','$alamat')");
        
        if($input)
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Data Berhasil di Tambah")';  
            echo '</script>';
            echo "<script>window.location='direk_siswa_adm.php'</script>";
        }
        else
        {
            echo "gagal menambahkan data";
            echo "<a href = 'tambah_siswa.php'>kembali</a>";
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>