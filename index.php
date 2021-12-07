<?php 
        session_start();

        if (!isset($_SESSION["login"])) {
            header('Location:Authentification and Authorization/login.php');
        }
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

        <!-- link cssnya -->
        <link rel="stylesheet" href="src/style/Style Landing Page/styleLandingPage.css">

        <!-- link css navbar -->
        <link rel="stylesheet" href="src/style/Style Navbar/styleNavbar.css">

        <title>LandingPage SpaceCapt University</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a id="homeBrand" class="navbar-brand" href="#">SpaceCapt University</a>
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
                            <a id="navbar-menu" class="nav-link active" aria-current="page" href="#">Home</a>
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
                                    <a
                                        class="dropdown-item"
                                        href="src/seluruh data mahasiswa/seluruhDataMahasiswa.php">Seluruh Data Mahasiswa</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <div class="fakultasIlmuKomputer">
                                    <li>
                                        <p class="dropdown-item">Fasilkom</p>
                                    </li>
                                    <div id="isiFakultas">
                                        <li>
                                            <a
                                                id="jurusan"
                                                class="dropdown-item"
                                                href="src/Fasilkom/Informatika/dataInformatika.php">Informatika</a>
                                        </li>
                                        <li>
                                            <a
                                                id="jurusan"
                                                class="dropdown-item"
                                                href="src/Fasilkom/Sistem Informasi/dataSistemInformasi.php">Sistem Informasi</a>
                                        </li>
                                        <li>
                                            <a
                                                id="jurusan"
                                                class="dropdown-item"
                                                href="src/Fasilkom/Sains Data/dataSainsData.php">Sains Data</a>
                                        </li>
                                    </div>
                                </div>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <div class="fakultasPeternakan">
                                    <li>
                                        <p class="dropdown-item">Fakultas Pertanian</p>
                                    </li>
                                    <div id="isiFakultas">
                                        <li>
                                            <a
                                                id="jurusan"
                                                class="dropdown-item"
                                                href="src/Fakultas Pertanian/Agroteknologi/dataAgroteknologi.php">Agroteknologi</a>
                                        </li>
                                        <li>
                                            <a
                                                id="jurusan"
                                                class="dropdown-item"
                                                href="src/Fakultas Pertanian/Agribisnis/dataAgribisnis.php">Agribisnis</a>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a
                                id="navbar-login"
                                aria-current="page"
                                class="nav-link active"
                                href="Authentification and Authorization/logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main id="landingPage">
            <section id="landingPage">
                <div class="landingPage-content">
                    <h1>Welcome To SpaceCapt University</h1>
                    <h3 style="text-align: center;">Silahkan Pilih Menu Pada Navbar</h3>
                </div>
            </section>
        </main>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    </body>

</html>