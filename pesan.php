<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama       = $_POST['nama'];
    $paket      = $_POST['paket'];
    $tanggal    = $_POST['tanggal'];
    $lokasi     = $_POST['lokasi'];
    $pembayaran = $_POST['pembayaran'];

    // Simpan ke database
    $query = "INSERT INTO pesanan 
    (nama_pelanggan, paket, tanggal_pesan, lokasi, metode_pembayaran)
    VALUES 
    ('$nama', '$paket', '$tanggal', '$lokasi', '$pembayaran')";

    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
        // Nomor WhatsApp Admin (ganti dengan nomor kamu)
        $no_admin = "6289528848518";

        // Pesan WhatsApp
        $pesan = "Halo Admin HAPPNIC,%0A%0A".
                 "Ada pemesanan baru:%0A".
                 "Nama: $nama%0A".
                 "Paket: $paket%0A".
                 "Tanggal: $tanggal%0A".
                 "Lokasi: $lokasi%0A".
                 "Pembayaran: $pembayaran";

        echo "<script>
            alert('Pemesanan berhasil! Admin akan segera menghubungi Anda.');
            window.location.href='https://wa.me/$no_admin?text=$pesan';
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pemesanan - HAPPNIC</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f5;
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
            font-weight: 700;
        }

        /* CARD */
        .form-card {
            border: none;
            border-radius: 18px;
        }

        /* INPUT */
        .form-control, .form-select {
            border-radius: 10px;
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
            <a class="nav-link active" href="pesan.php">Pemesanan</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1>Form Pemesanan Piknik</h1>
        <p class="mt-2">Pesan paket piknik HAPPNIC dengan mudah & cepat</p>
    </div>
</section>

<!-- FORM -->
<div class="container my-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card form-card shadow p-4">
                <h4 class="text-center text-success fw-bold mb-4">
                    Detail Pemesanan
                </h4>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pilih Paket</label>
                        <select name="paket" class="form-select" required>
                            <option value="">-- Pilih Paket --</option>
                            <option>Paket Romantis</option>
                            <option>Paket Keluarga</option>
                            <option>Paket Sahabat</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Piknik</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lokasi Piknik</label>
                        <input type="text" name="lokasi" class="form-control" placeholder="Contoh: Taman Cadika Medan" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Metode Pembayaran</label>
                        <select name="pembayaran" class="form-select" required>
                            <option>Transfer Bank</option>
                            <option>E-Wallet</option>
                            <option>COD</option>
                        </select>
                    </div>

                    <button type="submit" name="simpan" class="btn btn-success w-100 py-2 fw-bold">
                        Kirim Pemesanan
                    </button>
                </form>
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
