<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>HAPPNIC - Happy Picnic</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f5;
        }

        /* NAVBAR */
        .navbar-brand img {
            border-radius: 50%;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(20,83,45,0.85), rgba(20,83,45,0.85)),
                        url('images/picnic-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            color: #fff;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .hero p {
            font-size: 18px;
        }

        /* SECTION */
        .section-title {
            font-weight: 700;
            color: #2e7d32;
        }

        /* CARD */
        .feature-card {
            border: none;
            border-radius: 16px;
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        /* CTA */
        .cta {
            background: linear-gradient(90deg, #2e7d32, #66bb6a);
            color: white;
            border-radius: 20px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold" href="index.php">
            <img src="images/logo.jpg" width="42" class="me-2">
            HAPPNIC
        </a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link active" href="index.php">Home</a>
            <a class="nav-link" href="tentang.php">Tentang</a>
            <a class="nav-link" href="paket.php">Paket Piknik</a>
            <a class="nav-link" href="pesan.php">Pemesanan</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1>Happy Picnic (HAPPNIC)</h1>
        <p class="mt-3 mb-4">
            Solusi piknik estetik, praktis, dan nyaman<br>
            tanpa ribet membawa perlengkapan
        </p>
        <a href="paket.php" class="btn btn-light btn-lg px-5 shadow">
            Lihat Paket Piknik
        </a>
    </div>
</section>

<!-- KEUNGGULAN -->
<div class="container my-5 pt-4">
    <h2 class="text-center section-title mb-4">Mengapa Memilih HAPPNIC?</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card feature-card p-4 text-center shadow-sm h-100">
                <h5 class="fw-bold">Praktis</h5>
                <p>Kami siapkan semua perlengkapan, Anda tinggal menikmati piknik.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card feature-card p-4 text-center shadow-sm h-100">
                <h5 class="fw-bold">Estetik</h5>
                <p>Desain piknik cantik, cocok untuk foto dan momen spesial.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card feature-card p-4 text-center shadow-sm h-100">
                <h5 class="fw-bold">Fleksibel</h5>
                <p>Bisa untuk pasangan, keluarga, maupun sahabat.</p>
            </div>
        </div>
    </div>
</div>

<!-- PREVIEW PAKET -->
<div class="container my-5">
    <h2 class="text-center section-title mb-4">Pilihan Paket Piknik</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card feature-card shadow-sm h-100 text-center p-4">
                <h5 class="fw-bold">Paket Romantis</h5>
                <p>Piknik estetik untuk pasangan.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card feature-card shadow-sm h-100 text-center p-4">
                <h5 class="fw-bold">Paket Keluarga</h5>
                <p>Nyaman & aman untuk keluarga.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card feature-card shadow-sm h-100 text-center p-4">
                <h5 class="fw-bold">Paket Sahabat</h5>
                <p>Seru bersama teman & komunitas.</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="container my-5">
    <div class="cta p-5 text-center shadow">
        <h2 class="fw-bold">Siap Piknik Tanpa Ribet?</h2>
        <p class="mb-4">Pesan paket piknik HAPPNIC sekarang juga</p>
        <a href="pesan.php" class="btn btn-light btn-lg px-5">Pesan Sekarang</a>
    </div>
</div>

<!-- FOOTER -->
<footer class="bg-success text-white text-center p-4">
    © 2025 Happy Picnic (HAPPNIC) | E-Business Kezia Br Purba
</footer>

</body>
</html>
