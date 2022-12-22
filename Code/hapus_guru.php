<?php
        if(isset($_GET['nip']))
        {
            include('koneksi.php');
            $nip    = $_GET['nip'];
            $cek    = mysqli_query($connection, "SELECT nip FROM db_guru WHERE nip = '$nip'") 
            or die(mysqli_error());
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else{
                $del = mysqli_query($connection, "DELETE FROM db_guru WHERE nip = '$nip'");
                if ($del)
                {
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Data Berhasil Di Hapus")';  
                    echo '</script>';   
                    echo "<script>window.location = 'gdirek_siswa_adm.php';</script>";    
                }
                else
                {
                    echo "<h2>gagal menghapus data</h2>";
                    echo "<a href = 'gdirek_siswa_adm.php'>Kembali </a>";
                }
            }
        }   
        else{
            echo "<script>window.history.back()</script>";
        }
    ?>