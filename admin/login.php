<?php
include ("../service/database.php");
session_start();
$alert="";
$success="";
if(isset($_POST['login'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $query = mysqli_query($db, "SELECT * FROM admin WHERE username='$username'");
    $result = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    if($result > 0){
        if(password_verify($password, $data['password'])){
            $_SESSION['username'] = $data['username'];
            $_SESSION['login'] = true;
            header("location: halaman_admin.php");
        } else{
            $alert = "<div class='alert alert-danger' role='alert'>Password salah</div>";
        }
    } else{
        $alert = "<div class='alert alert-danger' role='alert'>Username tidak ditemukan</div>";
    }
}


$db->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="../img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <section class="vh-100" style="background-color: #AFC8AD;">
        <div class="container py-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-6">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-10 col-lg-10 d-flex align-items-center">
                                <div class="card-body p-5 p-lg-5 text-black">

                                    <form action="" method="POST">
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Suka Wisata | Admin</h5>
                                        <?php
                                        echo $alert;
                                        ?>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-lg"
                                                name="username" />
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" name="password" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-dark btn-lg btn-block" type="submit"
                                                name="login">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>