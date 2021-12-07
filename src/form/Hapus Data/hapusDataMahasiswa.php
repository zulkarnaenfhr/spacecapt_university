<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header('Location:login.php');
    }
    
    include '../../../config.php';

    $idJurusan = $_POST['idJurusan'];
    $npmHapus = $_POST['npmHapus'];

    $hapusMahasiswa = hapusDataMahasiswa($npmHapus);

    if ($hapusMahasiswa) {
        echo "<script>
                alert('data berhasil dihapus');
            </script>";
            if($idJurusan == 11){
                echo "<script>
                        document.location.href = '../../Fasilkom/Informatika/dataInformatika.php'
                    </script>";
            }
            elseif ($idJurusan == 12) {
                echo "<script>
                        document.location.href = '../../Fasilkom/Sistem Informasi/dataSistemInformasi.php';
                    </script>";
            }
            elseif ($idJurusan == 13) {
                echo "<script>
                        document.location.href = '../../Fasilkom/Sains Data/dataSainsData.php';
                    </script>";
            }
    }else {
        echo "tidak";
    }
?>