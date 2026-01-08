<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak - HAPPNIC</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f5;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(20,83,45,0.9), rgba(20,83,45,0.9)),
                        url('images/picnic-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            color: white;
        }

        /* CARD */
        .contact-card {
            border: none;
            border-radius: 18px;
            transition: 0.3s;
        }

        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .contact-icon {
            font-size: 40px;
            color: #2e7d32;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold" href="index.php">
            <img src="images/logo.jpg" width="42" class="me-2 rounded-circle">
            HAPPNIC
        </a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link" href="tentang.php">Tentang</a>
            <a class="nav-link" href="paket.php">Paket Piknik</a>
            <a class="nav-link" href="pesan.php">Pemesanan</a>
            <a class="nav-link active" href="kontak.php">Kontak</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1 class="fw-bold">Kontak Kami</h1>
        <p class="lead mt-2">
            Hubungi Happy Picnic (HAPPNIC) untuk informasi & pemesanan
        </p>
    </div>
</section>

<!-- CONTENT -->
<div class="container my-5 pt-4">
    <div class="row g-4 justify-content-center">

        <!-- WhatsApp -->
        <div class="col-md-3">
            <div class="card contact-card text-center p-4 h-100">
                <i class="bi bi-whatsapp contact-icon"></i>
                <h5 class="fw-bold mt-3">WhatsApp</h5>
                <p>0812 6386 7103</p>
            </div>
        </div>

        <!-- Instagram -->
        <div class="col-md-3">
            <div class="card contact-card text-center p-4 h-100">
                <i class="bi bi-instagram contact-icon"></i>
                <h5 class="fw-bold mt-3">Instagram</h5>
                <p>@happnic_</p>
            </div>
        </div>

        <!-- Email -->
        <div class="col-md-3">
            <div class="card contact-card text-center p-4 h-100">
                <i class="bi bi-envelope contact-icon"></i>
                <h5 class="fw-bold mt-3">Email</h5>
                <p>happnic@gmail.com</p>
            </div>
        </div>

        <!-- Area -->
        <div class="col-md-3">
            <div class="card contact-card text-center p-4 h-100">
                <i class="bi bi-geo-alt contact-icon"></i>
                <h5 class="fw-bold mt-3">Area Layanan</h5>
                <p>Medan & Sekitarnya</p>
            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->
<footer class="bg-success text-white text-center p-4">
    © 2025 Happy Picnic (HAPPNIC) | E-Business Kezia Br Purba
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
