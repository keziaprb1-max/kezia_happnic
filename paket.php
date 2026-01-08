<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Paket Piknik - HAPPNIC</title>

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
            color: white;
        }

        .hero h1 {
            font-size: 42px;
            font-weight: 700;
        }

        /* CARD */
        .paket-card {
            border: none;
            border-radius: 16px;
            transition: 0.3s;
        }

        .paket-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .paket-card img {
            height: 220px;
            object-fit: cover;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
        }

        .section-title {
            font-weight: 700;
            color: #2e7d32;
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
            <a class="nav-link" href="tentang.php">Tentang</a>
            <a class="nav-link active" href="paket.php">Paket Piknik</a>
            <a class="nav-link" href="pesan.php">Pemesanan</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1>Paket Piknik HAPPNIC</h1>
        <p class="mt-3">Pilih paket piknik sesuai kebutuhan Anda</p>
    </div>
</section>

<!-- CONTENT -->
<div class="container my-5 pt-4">
    <h2 class="text-center section-title mb-4">Pilihan Paket Piknik</h2>

    <div class="row g-4">

        <!-- Paket Romantis -->
        <div class="col-md-4">
            <div class="card paket-card h-100">
                <img src="images/romantis.png">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Paket Romantis</h5>
                    <p>Piknik estetik untuk momen berdua.</p>
                    <ul class="text-start">
                        <li>Tikar piknik</li>
                        <li>Bantal dekoratif</li>
                        <li>Meja lipat</li>
                        <li>Dekorasi bunga</li>
                    </ul>
                    <p class="fw-bold text-success">Rp 150.000 / hari</p>
                    <a href="pesan.php" class="btn btn-success w-100">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Paket Keluarga -->
        <div class="col-md-4">
            <div class="card paket-card h-100">
                <img src="images/keluarga.png">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Paket Keluarga</h5>
                    <p>Nyaman & aman untuk keluarga.</p>
                    <ul class="text-start">
                        <li>Tikar besar</li>
                        <li>Meja lipat</li>
                        <li>Peralatan makan</li>
                        <li>Payung besar</li>
                    </ul>
                    <p class="fw-bold text-success">Rp 200.000 / hari</p>
                    <a href="pesan.php" class="btn btn-success w-100">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Paket Sahabat -->
        <div class="col-md-4">
            <div class="card paket-card h-100">
                <img src="images/sahabat.png">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Paket Sahabat</h5>
                    <p>Seru bersama teman & komunitas.</p>
                    <ul class="text-start">
                        <li>Tikar piknik</li>
                        <li>Meja lipat</li>
                        <li>Bantal duduk</li>
                        <li>Keranjang rotan</li>
                    </ul>
                    <p class="fw-bold text-success">Rp 180.000 / hari</p>
                    <a href="pesan.php" class="btn btn-success w-100">Pesan Sekarang</a>
                </div>
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
