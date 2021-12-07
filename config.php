<?php 
    $koneksi = new mysqli("localhost","root","","spacecapt_university");

    function cari ($keyword){
        global $koneksi;
        $ambilDataInformatika =  mysqli_query($koneksi,"SELECT * FROM datamahasiswa INNER JOIN jurusan on datamahasiswa.id_Jurusan = jurusan.id_Jurusan INNER JOIN fakultas ON jurusan.id_Fakultas = fakultas.id_Fakultas WHERE datamahasiswa.NPM = '$keyword'");
        return $ambilDataInformatika;
    }

    function ambilSeluruhData ($id_jurusan){ // ini buat yang masing - masing jurusan
        global $koneksi;
        $ambilDataInformatika = mysqli_query($koneksi,"SELECT * FROM datamahasiswa INNER JOIN jurusan on datamahasiswa.id_Jurusan = jurusan.id_Jurusan INNER JOIN fakultas ON jurusan.id_Fakultas = fakultas.id_Fakultas WHERE datamahasiswa.id_Jurusan = $id_jurusan;");
        return $ambilDataInformatika;
    }

    function ambilSeluruhDataMahasiswa (){
        global $koneksi;
        $ambilDataInformatika = mysqli_query($koneksi,"SELECT * FROM datamahasiswa INNER JOIN jurusan on datamahasiswa.id_Jurusan = jurusan.id_Jurusan INNER JOIN fakultas ON jurusan.id_Fakultas = fakultas.id_Fakultas ORDER BY datamahasiswa.id_jurusan ASC");
        return $ambilDataInformatika;
    }

    function tambahDataMahasiswa($data){
        global $koneksi;

        $npm = htmlspecialchars($data['npm']); 
        $nama = htmlspecialchars($data['nama']);
        $kota = htmlspecialchars($data['kota']);
        $jurusan = htmlspecialchars($data['jurusan']);

        $querySimpanData = mysqli_query($koneksi,"insert into datamahasiswa values('$npm','$nama','$kota','$jurusan')");

        return $querySimpanData;
    }

    function hapusDataMahasiswa($npmHapus){
        global $koneksi;

        $queryHapusDataMahasiswa = mysqli_query($koneksi,"DELETE FROM datamahasiswa WHERE NPM= $npmHapus");

        return $queryHapusDataMahasiswa;
    }

    function editDataMahasiswa($data){
        global $koneksi;

        $npmLama = htmlspecialchars($data['npmLama']);
        $npmBaru = htmlspecialchars($data['npmBaru']);
        $nama = htmlspecialchars($data['nama']);
        $kota = htmlspecialchars($data['kota']);
        $jurusan = htmlspecialchars($data['jurusan']);

        $queryEditData = mysqli_query($koneksi,"UPDATE datamahasiswa SET NPM='$npmBaru', Nama ='$nama', Kota='$kota', id_Jurusan = '$jurusan' WHERE NPM = '$npmLama'");

        return $queryEditData;
    }
    
    function cekUser($keyword){
        global $koneksi;

        $queryCekUser = mysqli_query($koneksi, "SELECT * FROM users WHERE Username = '$keyword';");

        return $queryCekUser;
    }

    function registration ($data){
        global $koneksi;

        // ambil data terlebih dahulu
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($koneksi,$data["password"]);
        $confirmPassword = mysqli_real_escape_string($koneksi,$data["confirmPassword"]);

        // cek apakah ada username atau tidak
        $cekUsername = cekUser($username);
        if (mysqli_fetch_assoc($cekUsername)) {
            echo "<script>
                    alert('Username telah ditemukan')    
                </script>";   
            return false;
        }
        
        // confirmasi password
        if ($password !== $confirmPassword) {
            echo "<script>
                    alert('password tidak sesuai')    
                </script>"; 
            return false;                                
        }
        
        // lakukan enkripsi passwordnya
        $password = password_hash($password,PASSWORD_DEFAULT);

        // tambahkan user baru ke database
        $queryTambahUser = mysqli_query($koneksi,"INSERT INTO users  VALUES ('$username','$password')");

        if ($queryTambahUser) {
            return 1;
        }else {
            return 0;
        }
    }
?>