<?php

    if(isset($_POST['simpan']))
    {
        include_once 'koneksi.php';
        $nama   = $_POST['nama'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $pesan = $_POST['pesan'];
        
        $input  = mysqli_query($connection, "INSERT INTO contact VALUES
        ('$nama', '$email', '$subject','$pesan')");
        
        if($input)
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Berhasil Mengirim Pesan")';  
            echo '</script>';
            echo "<script>window.location='index.php'</script>";
        }
        else
        {
            echo "Gagal Mengirim Pesan";
            echo "<a href = 'index.php'>kembali</a>";
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>