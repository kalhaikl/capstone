<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suka Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+PE:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playwrite+PE:wght@100..400&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    * {
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    .home {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../img/pemandangan5.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 50px;
    }

    .home .content {
        text-align: center;
        padding-top: 200px;
    }

    .home .content h5 {
        color: white;
        font-family: "Playwrite PE", cursive;
        font-size: 60px;
        font-weight: 500;
        text-shadow: 0px 1px 1px black;
        margin-bottom: 50px;
    }

    .home .content p {
        color: white;
        font-size: 15px;
        font-weight: 600;
        text-shadow: 0 1px 1px black;
        margin-bottom: 50px;
    }

    .home .content a {
        padding: 10px;
        background: white;
        color: black;
        letter-spacing: 2px;
        font-weight: 550;
        text-decoration: none;
        border-radius: 10px;
    }

    .home .content a:hover {
        background: black;
        color: white;
    }

    @media (max-width: 850px) {
        .home {
            background-position: 50%;
        }
    }

    @media (max-width: 450px) {
        .home .content h5 {
            font-size: 40px;
        }
    }

    @media (max-width: 765px) {
        .about {
            padding: 0px;
        }
    }

    .main-txt h1 {
        text-align: center;
        margin-top: 30px;
        font-weight: 600;
        text-shadow: 0px 1px 1px black;
        font-family: "Roboto Condensed", sans-serif;
        ;
    }

    .packages .card {
        border-radius: 8px;
        border: none;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
        background: #DEF9C4;
    }

    .packages .card img {
        border-radius: 8px;
    }

    .packages .card .card-body {
        background: transparent;
    }

    .packages .card .card-body h3 {
        font-weight: 600;
        font-size: 25px;
    }

    .packages .card .card-body p {
        font-size: 15px;
    }

    .packages .card .card-body h6 {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .packages .card .card-body a {
        padding: 10px;
        text-decoration: none;
        border-radius: 8px;
        background: white;
        color: black;
    }

    .packages .card .card-body a:hover {
        background: black;
        color: white;
    }

    .service {
        background: #f9f9f9;
        margin-top: 50px;
    }

    .services .card {
        box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;
        border: none;
        border-radius: 8px;
        background: #DEF9C4;
    }

    .services .card .card-body h3 {
        font-weight: 600;
    }

    .services .card .card-body {
        text-align: center;
    }

    .about {
        margin-top: 50px;
        background: #f9f9f9;
        padding: 50px;
    }

    .about .card {
        border-radius: 10px;
    }

    .about h2 {
        letter-spacing: 1px;
        font-weight: 600;
    }

    .about p {
        font-size: 500;
    }

    #footer {
        width: 100%;
        margin-top: 0px;
        text-align: center;
        background: #f9f9f9;
    }

    #footer h1 {
        font-weight: 600;
        padding-top: 30px;
        text-shadow: 0px 0px 1px black;
    }

    .social-link {
        padding: 10px;
        border-radius: 5px;
        font-size: 20px;
        background: black;
        color: white;
        margin-left: 10px;
        margin-bottom: 10px;
        transition: 0.5s ease-in-out;
        cursor: pointer;
    }

    .social-link i:hover {
        background: white;
        color: black;
        border-radius: 10px;
    }

    .credit a {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-md fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"> <img src="../img/logo.png" width="30">Suka Wisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php#home">Beranda</a>
                    <a class="nav-link active" href="index.php#about">Tentang</a>
                    <a class="nav-link active" href="index.php#travel">Travel</a>
                    <a class="nav-link active" href="index.php#activities">Aktivitas</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- home start -->
    <div class="home" id="home">
        <div class="content">
            <h5>Beautiful of Ciwidey</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, molestias.</p>
            <a href="book.php">Booking</a>
        </div>
    </div>
    <!-- home end -->

    <!-- Card travel start -->
    <section class="packages" id="packages">
        <div class="container">
            <div class="main-txt">
                <h1 id="travel">Travel</h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-md-0 mt-0">
                    <div class="card">
                        <img src="../img/kawahputih.jpg" alt="">
                        <div class="card-body">
                            <h3>Kawah Putih</h3>
                            <p>Danau vulkanik berkabut dengan air berwarna putih kehijauan, terkenal akan pemandangan
                                mistis dan udara dingin.</p>
                            <p>Rp50.000</p>
                            <a href="book.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-md-0 mt-0">
                    <div class="card">
                        <img src="../img/situpatenggang.jpg" alt="">
                        <div class="card-body">
                            <h3>Situ Patenggang</h3>
                            <p>Danau alami di tengah perkebunan teh, populer untuk perahu dayung dan legenda cinta
                                lokal.</p>
                            <p>Rp50.000</p>
                            <a href="book.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-md-0 mt-0">
                    <div class="card">
                        <img src="../img/kawahrengganis.jpg" alt="">
                        <div class="card-body">
                            <h3>Kawah Rengganis</h3>
                            <p>Kawah alami dengan pemandian air panas alami, dikelilingi hutan, cocok untuk relaksasi
                                dan terapi alam.</p>
                            <p>Rp50.000</p>
                            <a href="book.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-md-0">
                    <div class="card">
                        <img src="../img/perkebunanteh.jpg" alt="">
                        <div class="card-body">
                            <h3>Perkebunan Teh Rancabali</h3>
                            <p>Hamparan luas kebun teh hijau yang asri, ideal untuk berjalan-jalan santai dan menikmati
                                udara segar.</p>
                            <p>Rp50.000</p>
                            <a href="book.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-md-0">
                    <div class="card">
                        <img src="../img/rancaupas.jpg" alt="">
                        <div class="card-body">
                            <h3>Ranca Upas</h3>
                            <p>Kawasan perkemahan yang luas dengan penangkaran rusa, dikenal untuk aktivitas outdoor
                                seperti berkemah dan berendam di air panas.</p>
                            <p>Rp50.000</p>
                            <a href="book.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-md-0">
                    <div class="card">
                        <img src="../img/bukitjamur.jpeg" alt="">
                        <div class="card-body">
                            <h3>Bukit Jamur</h3>
                            <p>Bukit dengan formasi batuan unik menyerupai jamur, dikelilingi pemandangan hijau, cocok
                                untuk foto-foto dan rekreasi.</p>
                            <p>Rp50.000</p>
                            <a href="book.php">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card travel end -->



    <!-- Activities start -->
    <section class="sevices">
        <div class="container" id="activities">
            <div class="main-txt">
                <h1>Aktivitas</h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-md-0 mt-0">
                    <div class="card">
                        <img src="../img/aktivitas 3.jpg" alt="">
                        <div class="card-body">
                            <h3>Menikmati pemandangan</h3>
                            <p>Dengan suasana alam yang tenang dan indah, menikmati pemandangan memberikan kedamaian dan
                                ketenangan, menghubungkan Anda dengan keindahan alam sekitar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-md-0 mt-0">
                    <div class="card">
                        <img src="../img/aktivitas 2.jpg" alt="">
                        <div class="card-body">
                            <h3>Arung Jeram</h3>
                            <p>Petualangan arung jeram menantang arus sungai deras, memberikan adrenalin dan kesenangan
                                tiada tara, sambil menguji keberanian dan keterampilan dalam menghadapi alam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-md-0 mt-0">
                    <div class="card">
                        <img src="../img/aktivitas 4.jpg" alt="">
                        <div class="card-body">
                            <h3>Eksplorasi</h3>
                            <p>Eksplorasi alam membawa Anda menjelajahi keindahan tersembunyi, menemukan tempat baru,
                                dan memperkaya pengalaman hidup dengan petualangan yang tak terlupakan.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="../img/pangalengan4.jpg" class="w-100" alt="...">
                    </div>
                    <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0">Pangalengan</h5>
                        <p>Another instance of placeholder content for this other custom component. It is intended to
                            mimic what some real-world content would look like, and we're using it here to give the
                            component a bit of body and size.</p>
                        <a href="https://youtu.be/DuU-bZdtr38?si=dVCcGGbxpC0d-BMc"
                            class="stretched-link text-decoration-none bg-success rounded-2 text-light">Tonton Video</a>
                    </div>
                </div>
            </div>
            <h3 style="text-align: center">Rekomendasi untuk anda</h3>
            <div class="row">
                <div class="col-md-3 py-md-0 mt-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/bTUpSFa0odU?si=ptM3EQ4CpJtDlcay"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 py-md-0 mt-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/0oE_BO2KiUo?si=vrE353TB_GT5cYyD"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 py-md-0 mt-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/QIQHsaJnam8?si=1IuYJeilxv_Jf2PG"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 py-md-0 mt-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/HFHfKbACRxU?si=U1sg1VKM_zX6Kpcw"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- activities end -->


    <!-- about start -->
    <section class="about" id="about">
        <div class="container">
            <div class="main-txt">
                <h1>Tentang</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="card mb-6" style="max-width: 540px;">
                    <div class="row g-0 d-flex justify-content-center">
                        <div class="col-md-6">
                            <img src="../img/logo.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="row-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Booking online</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <div class="row-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Cepat dan mudah</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- about end -->

    <!-- footer start -->
    <footer class="text-center text-lg-start bg-body-light text-muted">
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-6">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-6">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fa fa-gem me-3"></i>Suka Wisata
                        </h6>
                        <p>
                            Suka Wisata adalah perusahaan yang berdedikasi untuk menyediakan pengalaman perjalanan dan
                            liburan yang tak terlupakan di Ciwidey, Kabupaten Bandung. Didirikan dengan semangat
                            petualangan dan
                            cinta terhadap alam, kami menawarkan berbagai paket wisata yang dirancang untuk memenuhi
                            beragam minat dan kebutuhan pelanggan, mulai dari liburan keluarga hingga ekspedisi
                            petualangan yang menantang.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-6">
                        <!-- Links -->
                        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-6">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fa fa-home me-3"></i>Politeknik Negeri Bandung</p>
                            <p><i class="fa fa-envelope me-3"></i>
                                sukawisata@gmail.com
                            </p>
                            <p><i class="fa fa-phone me-3"></i>+6285871329004</p>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
        </section>
        <!-- Section: Links  -->
        <!-- Copyright -->
        <div class="text-center p-4">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Suka Wisata</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- footer end -->






    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <!-- script js -->
</body>

</html>