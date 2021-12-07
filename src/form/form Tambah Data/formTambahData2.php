<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header('Location:login.php');
    }
    
    include '../../../config.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <!-- link css form tambah data -->
        <link
            rel="stylesheet"
            href="../../style/CRUD Data/Style Edit Tambah Data/styleEditTambahData.css">

        <!-- link css navbar -->
        <link rel="stylesheet" href="../../style/Style Navbar/styleNavbar.css">

        <title>LandingPage SpaceCapt University</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a id="homeBrand" class="navbar-brand" href="../../../index.php">SpaceCapt University</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                id="navbar-menu"
                                class="nav-link active"
                                aria-current="page"
                                href="../../../index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown" id="navbar-menu">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Data Mahasiswa
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Seluruh Data Mahasiswa</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"></li>
                                <li>
                                    <p class="dropdown-item">Fasilkom</p>
                                </li>
                                <div id="isiFakultas">
                                    <li>
                                        <a
                                            id="jurusan"
                                            class="dropdown-item"
                                            href="../../Fasilkom/Informatika/dataInformatika.php">Informatika</a>
                                    </li>
                                    <li>
                                        <a
                                            id="jurusan"
                                            class="dropdown-item"
                                            href="../../Fasilkom/Sistem Informasi/dataSistemInformasi.php">Sistem Informasi</a>
                                    </li>
                                    <li>
                                        <a
                                            id="jurusan"
                                            class="dropdown-item"
                                            href="../../Fasilkom/Sains Data/dataSainsData.php">Sains Data</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a
                                id="navbar-login"
                                aria-current="page"
                                class="nav-link active"
                                href="../../../logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="container-fluid">
                <div class="container">
                    <section id="formTambahDataMahasiswa">
                        <div class="formContainer">
                            <div>
                                <div class="penjelasan">
                                    <p class="judulForm">
                                        Data Mahasiswa
                                    </p>
                                    <p class="taglineForm">
                                        Masukkan data pribadi mahasiswa dengan lengkap
                                    </p>
                                </div>
                                <div class="formInputanData">
                                    <form class="formInputDataMahasiswa" action="" method="post">
                                        <fieldset>
                                            <input
                                                class="formInputan"
                                                type="number"
                                                name="npm"
                                                required="required"
                                                placeholder="Masukkan NPM">
                                        </fieldset>
                                        <fieldset>
                                            <input
                                                class="formInputan"
                                                type="text"
                                                name="nama"
                                                required="required"
                                                placeholder="Masukkan Nama Lengkap">
                                        </fieldset>
                                        <fieldset>
                                            <input
                                                class="formInputan"
                                                type="text"
                                                name="kota"
                                                required="required"
                                                placeholder="Masukkan Kota Asal">
                                        </fieldset>
                                        <fieldset>
                                            <select name="jurusan">
                                                <?php 
                                        $jurusan = mysqli_query($koneksi,"SELECT * FROM jurusan");
                                        while ($dataJurusan = mysqli_fetch_assoc($jurusan)) {
                                        echo '<option value="'.$dataJurusan['id_Jurusan'].'">'.$dataJurusan['nama_Jurusan'].'</option>';
                                        }
                                    ?>
                                            </select>
                                        </fieldset>
                                        <fieldset>
                                            <button type="submit" name="tambahData">Submit</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </main>

    <?php 
                if (isset($_POST["tambahData"])) {
                    $idForm = $_POST['jurusan'];
                    if (tambahDataMahasiswa($_POST)) {
                        echo "<script>alert('Data Berhasil di Edit')</script>";
                            if ($idForm == 11) {
                                echo "<script>
                                        document.location.href = '../../Fasilkom/Informatika/dataInformatika.php';
                                    </script>";
                            }
                            elseif ($idForm == 12) {
                                echo "<script>
                                        document.location.href = '../../Fasilkom/Sistem Informasi/dataSistemInformasi.php';
                                    </script>";
                            }
                            elseif ($idForm == 13) {
                                echo "<script>
                                        document.location.href = '../../Fasilkom/Sains Data/dataSainsData.php';
                                    </script>";
                            }
                    }else{
                        echo "<script>
                                alert('Gagal Bosku')
                            </script>";
                    }
                    
                }
        ?>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    </body>
</html>