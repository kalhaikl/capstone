<?php include ("../service/database.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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

<body class="container">
    <!-- navbar start -->
    <header>
        <nav class="navbar navbar-expand-lg bg-tertiary navbar-light bg-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand"> <img src="../img/logo.png" width="30">Suka Wisata</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../customer/book.php">Book</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- navbar end -->
    <main>