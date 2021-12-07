<?php 
    session_start();
    include '../config.php';

    if (isset($_POST["registerUser"])) {
        if (registration($_POST)>0) {
            echo "<script>
                alert('user baru berhasil ditambahkan!');
            </script>";
            echo "<script>
                document.location.href = 'login.php';
            </script>";
        } else {
            echo mysqli_error($koneksi);
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link css form login -->
    <link rel="stylesheet"
        href="../src/style/authentication and authorization/Style Form Register/styleFormRegister.css">

    <!-- link css navbar -->
    <link rel="stylesheet" href="../src/style/Style Navbar/styleNavbar.css">

    <title>LandingPage SpaceCapt University</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a id="homeBrand" class="navbar-brand" href="../index.php">SpaceCapt University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="navbar-menu" class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navbar-login" aria-current="page" class="nav-link active" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="container-fluid">
                <section id="formRegister">
                    <ul>
                        <li>
                            <h3>Silahkan Register Account Terlebih Dahulu</h3>
                        </li>
                        <li>
                            <form class="dataLogin" action="" method="post">
                                <ul>
                                    <li class="row">
                                        <div class="col-4">
                                            <label" for="username">username :</label>
                                        </div>
                                        <div class="col-6"> <input type="text" name="username" id="username" required>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-4"> <label for="password">password :</label> </div>
                                        <div class="col-6"> <input type="password" name="password" id="password"
                                                required> </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-4"> <label for="confirmpassword">confirm password :</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="password" name="confirmpassword" id="confirmpassword" required>
                                        </div>
                                    </li>
                                    <li> 
                                        <button name="registeruser"> 
                                            <a id="buttonregister" href="register.php">register account</a> 
                                        </button> 
                                        <button> 
                                            <a id="buttonhaveaccount" href="login.php">have any account?</a> 
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </main>
    <!-- option 1:
                                                bootstrap bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-mrcw6zmfylzcla8nl+ntuvf0sa7msxsp1uyjomp4yleunsfap+jcxn/twtiaxvxm"
        crossorigin="anonymous"></script>
</body>

</html>