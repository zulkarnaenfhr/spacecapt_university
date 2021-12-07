<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header('Location:login.php');
    }
    
    include '../../../config.php';
    $idFormInformatika = 21;
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

        <!-- link css navbar -->
        <link rel="stylesheet" href="../../style/Style Navbar/styleNavbar.css">

        <!-- link css tampil data -->
        <link rel="stylesheet" href="../../style/CRUD Data/Style Tampil Data/tampilData.css">

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
                                    <a class="dropdown-item" href="../../seluruh data mahasiswa/seluruhDataMahasiswa.php">Seluruh Data Mahasiswa</a>
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
                                                href="">Agroteknologi</a>
                                        </li>
                                        <li>
                                            <a
                                                id="jurusan"
                                                class="dropdown-item"
                                                href="../Agribisnis/dataAgribisnis.php">Agribisnis</a>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a id="navbar-login" aria-current="page" class="nav-link active" href="../../../logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section id="tampilDataInformatika">
                <div class="container-fluid">
                    <div class="container tampilDataInformatika-content">
                        <div class="row">
                            <h3 class="judulSection">Menampilkan Data Mahasiswa Agroteknologi</h3>
                        </div>
                        <div class="row">
                            <div class="col-6 option-left">
                                <form action="" method="POST">
                                    <input type="text" name="cariNpm" autocomplete="off">
                                    <button type="submit" name="tombolCari">Cari Npm</button>
                                </form>
                            </div>
                            <div class="col-6 option-right">
                                <?php 
                                    $idForm = 11;
                                    echo "<a href='../../form/form Tambah Data/formTambahDataMahasiswa.php?id=".$idForm."'><button >Masukkan Data Baru</button></a> ";
                                ?>
                            </div>
                        </div>
                    </div>
                    <section id="table-content">
                        <div class="container">
                            <table class="tabelOutput">
                                <tr class="judulTabel">
                                    <th class="tableNoUrut">Nomor</th>
                                    <th class="tableNpm">NPM</th>
                                    <th class="tableNama">Nama</th>
                                    <th class="tableKota">Kota</th>
                                    <th class="tableFakultas">Fakultas</th>
                                    <th class="tableJurusan">Jurusan</th>
                                    <th class="tableOption">Option</th>
                                </tr>
                                <?php 
                                    $id = 1;
                                    if (isset($_POST["tombolCari"])) {
                                        $ambilDataMahasiswa = cari($_POST["cariNpm"]);
                                    }
                                    if (!isset($_POST["tombolCari"])){
                                        $ambilDataMahasiswa = ambilSeluruhData($idFormInformatika);
                                    }
                                    while ($data = mysqli_fetch_assoc($ambilDataMahasiswa)) {
                                        ?>
                                <tr class="isiTabel">
                                    <th>
                                        <?php echo $id++ ?>
                                    </th>
                                    <th>
                                        <?php echo $data['NPM'] ?>
                                    </th>
                                    <th>
                                        <?php echo $data['Nama'] ?>
                                    </th>
                                    <th>
                                        <?php echo $data['Kota'] ?>
                                    </th>
                                    <th>
                                        <?php echo $data['nama_Fakultas'] ?>
                                    </th>
                                    <th>
                                        <?php echo $data['nama_Jurusan'] ?>
                                    </th>
                                    <th class="isi-tableOption">
                                        <ul>
                                            <li>
                                                <form
                                                    action="../../form/Hapus Data/hapusDataMahasiswa.php"
                                                    name="hapusData"
                                                    method="POST">
                                                    <input type="hidden" name="npmHapus" value="<?php echo $data['NPM'] ;?>">
                                                    <input type="hidden" name="idJurusan" value="<?php echo $data['id_Jurusan']?>">
                                                    <button type="submit" name="hapusData">Hapus</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="../../form/form Edit Data/editDataMahasiswa.php" name="editData" method="POST">
                                                    <input type="hidden" name="npmEdit" value="<?php echo $data['NPM']?>">
                                                    <input type="hidden" name="idJurusan" value="<?php echo $data['id_Jurusan']?>">
                                                    <button type="submit" name="editData">Edit</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </th>
                                </tr>
                                <?php  
                                } 
                                ?>
                            </table>
                        </div>
                    </section>

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