<?php
        if(isset($_GET['nisn']))
        {
            include('koneksi.php');
            $nisn    = $_GET['nisn'];
            $cek    = mysqli_query($connection, "SELECT nisn FROM db_siswa
            WHERE nisn = '$nisn'") or die(mysqli_error());
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else{
                $del = mysqli_query($connection, "DELETE FROM db_siswa WHERE nisn = '$nisn'");
                if ($del)
                {
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Data Berhasil Di Hapus")';  
                    echo '</script>';   
                    echo "<script>window.location = 'direk_siswa_adm.php';</script>";    
                }
                else
                {
                    echo "<h2>gagal menghapus data</h2>";
                    echo "<a href = 'direk_siswa_adm.php'>Kembali </a>";
                }
            }
        }   
        else{
            echo "<script>window.history.back()</script>";
        }
    ?>