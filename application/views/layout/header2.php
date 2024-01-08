<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="<?= base_url('assets_auth/') ?>images/header.png" type="image/jpg">
    <title>MineralVillage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADKbnvFurz7BLRUFmxJwveUd376p_U3NY&libraries=places"></script>


    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets2/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets2/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets2/') ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets_auth/') ?>images/logo.png" alt="Logo" width="260" height="70">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="<?= base_url('Beranda/'); ?>" class="nav-item nav-link<?= ($this->uri->segment(1) == 'beranda') ? 'active' : ''; ?>">Home</a>
                    <a href="<?= base_url('Education/'); ?>" class="nav-item nav-link">Education</a>
                    <a href="<?= base_url('AquaHub/'); ?>" class="nav-item nav-link">AquaHub</a>

                    <a href="<?= base_url('Profile/'); ?>" class="nav-item nav-link<?= ($this->uri->segment(1) == 'profile') ? 'active' : ''; ?>">Profile</a>
                </div>
                <a href="<?= base_url('Auth/logout'); ?>" class="btn btn-info rounded-pill px-3 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->