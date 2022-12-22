<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Harapan Bangsa</title>
    <link rel="shortcut icon" href="asset/logo-removebg-preview.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="sxtyle.css">
    <link rel="stylesheet" href="webstyle.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!--  -->
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- End -->

</head>
<body>

<section id="joinmember">
        <div class="container mb-4">
            <div class="row text-center mb-1 mt-5">
                <div class="col">
                    <div class="section-headline text-center">
                        <h2>Tambah Data Guru</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly  align-items-center">
                <div class="col-md-8">
                    <div class="edit-form h-100">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-7">
                                <div class="edit-data">
                                    <form action="aksi_tambah_guru.php" method="post">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" name="nip" class="form-control" required />
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" required />
                                        <label for="mapel" class="form-label">Mata Pelajaran</label>
                                        <input type="text" name="mapel" class="form-control" required />
                                        <label for="jk" class="form-label">Jenis Kelamin</label>
                                        <select name="jk" class="form-select" aria-label="Default select example"
                                            required>
                                            <option value="">Pilih</option>
                                            <option value="Pria"> Pria</option>
                                            <option value="Wanita"> Wanita</option>
                                        </select>
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" required />
                                        <p></p>
                                        <input type="submit" name="tambah" value="Tambah" class="back" style="background-color:rgb(0, 153, 255); color:white">
                                    </form>

                                    <a href="index_logout.php" style="border: none ;"><button
                                            class="back">Back To Homepage</button></a>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>