<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/dashboard.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,500&display=swap" rel="stylesheet">

    <title><?= $title; ?></title>
</head>

<body>


    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#" class="">
                        SIPEMA
                    </a>
                </li>
                <li>
                    <a href="/dashboard" id="dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="/profile" id="profile">Profile</a>
                </li>
                <li>
                    <a href="/materi" id="materi">Materi</a>
                </li>
                <li>
                    <a href="/kuis" id="kuis">Kuis</a>
                </li>
                <?php
                if (($role == 2)) {
                    echo '<li><a href="/pojokguru" class="pojok-guru">Pojok Guru</a></li>';
                }
                ?>
                <li>
                    <a href="/auth/logout" onClick="return confirm('Yakin keluar?')">Keluar</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->


        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <a href="#menu-toggle" class=" navbar-brand" id="menu-toggle"> <span class="navbar-toggler-icon"></span></a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropleft  ">
                        <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $nama; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/profile">Ubah Profil</a>
                            <a class="dropdown-item" href="/auth/logout" onClick="return confirm('Yakin keluar?')">Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>