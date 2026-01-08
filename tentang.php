<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - HAPPNIC</title>

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
            font-size: 42px;
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
        .about-card {
            border: none;
            border-radius: 16px;
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
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link active" href="tentang.php">Tentang</a>
            <a class="nav-link" href="paket.php">Paket Piknik</a>
            <a class="nav-link" href="pesan.php">Pemesanan</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1>Tentang HAPPNIC</h1>
        <p class="mt-3">
            Mengenal lebih dekat layanan Happy Picnic
        </p>
    </div>
</section>

<!-- CONTENT -->
<div class="container my-5 pt-4">
    <div class="row g-4 align-items-center">

        <!-- DESKRIPSI -->
        <div class="col-md-6">
            <h3 class="section-title">Happy Picnic (HAPPNIC)</h3>
            <p>
                Happy Picnic (HAPPNIC) adalah layanan penyewaan perlengkapan piknik
                estetik dan praktis. Kami hadir untuk membantu Anda menikmati
                momen piknik tanpa ribet membawa atau membeli perlengkapan sendiri.
            </p>
            <p>
                Cocok untuk pasangan, keluarga, maupun sahabat dengan konsep
                yang bersih, nyaman, dan Instagramable.
            </p>
        </div>

        <!-- VISI MISI -->
        <div class="col-md-6">
            <div class="card about-card shadow p-4">
                <h5 class="section-title">Visi</h5>
                <p>
                    Menjadi layanan piknik estetik yang praktis dan terpercaya.
                </p>

                <h5 class="section-title mt-4">Misi</h5>
                <ul>
                    <li>Menyediakan perlengkapan piknik berkualitas</li>
                    <li>Mempermudah pemesanan secara online</li>
                    <li>Menciptakan pengalaman piknik berkesan</li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->
<footer class="bg-success text-white text-center p-4">
    © 2025 Happy Picnic (HAPPNIC) | E-Business Kezia Br Purba
</footer>

</body>
</html>
