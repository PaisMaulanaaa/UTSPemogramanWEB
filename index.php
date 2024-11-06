<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruang Game</title>
    
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMm6Pp4f4c5x6H2kM5P5k5RZ5QjO0xX5c5J5c5" crossorigin="anonymous">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #181818;
            color: #f5f5f5;
        }
        header {
            background: linear-gradient(to right, #1a1a1a, #333);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        .hero {
            background: url('assets/image/image4.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 120px 20px;
            text-align: center;
        }
        .hero h2 {
            font-size: 2.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }
        .btn-warning {
            background-color: #ffcc00;
            border-color: #ffcc00;
        }
        .featured-games {
            margin-top: 40px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .centered-section {
            text-align: center;
            padding: 60px 0;
        }
        footer {
            background-color: #222;
            color: white;
            padding: 40px 0;
        }
        .social-icon {
            color: #ffcc00;
            font-size: 2rem;
            margin-top: 20px;
            display: inline-block;
            transition: color 0.3s;
        }
        .social-icon:hover {
            color: #e6b800;
        }
  /* Mengatur warna font DataTables menjadi hitam */
    #gameTable_wrapper .dataTables_length,
    #gameTable_wrapper .dataTables_filter,
    #gameTable_wrapper .dataTables_info,
    #gameTable_wrapper .dataTables_paginate,
    #gameTable tbody {
        color: #000; /* Hitam untuk teks lainnya */
    }

    /* Mengatur warna font untuk kotak pencarian menjadi putih */
    #gameTable_wrapper .dataTables_filter input {
        color: #fff; /* Putih untuk teks di kotak pencarian */
        background-color: #333; /* Warna latar belakang kotak pencarian */
    }

    /* Mengatur warna font label pencarian menjadi putih */
    #gameTable_wrapper .dataTables_filter label {
        color: #fff; /* Putih untuk label di kotak pencarian */
    }

    /* Mengatur warna font untuk show entries menjadi putih */
    #gameTable_wrapper .dataTables_length label,
    #gameTable_wrapper .dataTables_length select {
        color: #fff; /* Putih untuk label dan dropdown show entries */
    }

    /* Mengatur warna latar belakang dropdown show entries */
    #gameTable_wrapper .dataTables_length select {
        background-color: #333; /* Warna latar belakang dropdown */
        color: #fff; /* Warna font dropdown */
    }
    </style>
</head>
<body>

<header>
    <h1>PAYS WEB</h1>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#home">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#game_series">Game Series</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#data_table">DataTables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#feedback">Feedback</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- ./Navbar -->

<!-- Hero Section -->
<div class="hero" id="home">
    <h2>Selamat Datang!</h2>
    <p>Temukan game seri GTA yang terkenal di sini dan cari tahu plot singkatnya, di situs web ini</p>
    <a href="#game_series" class="btn btn-warning btn-lg">Cari Sekarang</a>
</div>
<!-- ./Hero Section -->

<!-- Game Series Section -->
<div class="container featured-games" id="game_series">
    <h2 class="text-center mb-4">GTA Game Series</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="assets/image/image0.jpg" class="card-img-top" alt="Game 1">
                <div class="card-body">
                    <h5 class="card-title">Grand Theft Auto San Andreas</h5>
                    <p class="card-text">Cerita tentang CJ yang kembali ke Los Santos untuk membalas kematian ibunya.</p>
                    <a href="https://p2k.stekom.ac.id/ensiklopedia/Grand_Theft_Auto:_San_Andreas" class="btn btn-warning btn-lg">Cari Tahu</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/image/image2.jpg" class="card-img-top" alt="Game 2">
                <div class="card-body">
                    <h5 class="card-title">Grand Theft Auto IV</h5>
                    <p class="card-text">Kisah duo kriminal yang mirip Bonnie dan Clyde di Vice City.</p>
                    <a href="https://p2k.stekom.ac.id/ensiklopedia/Grand_Theft_Auto_IV" class="btn btn-warning btn-lg">Cari Tahu</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/image/image3.jpg" class="card-img-top" alt="Game 3">
                <div class="card-body">
                    <h5 class="card-title">Grand Theft Auto V</h5>
                    <p class="card-text">Tiga karakter yang terlibat dalam perampokan di Los Santos.</p>
                    <a href="https://p2k.stekom.ac.id/ensiklopedia/Grand_Theft_Auto_V" class="btn btn-warning btn-lg">Cari Tahu</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./Game Series Section -->

<!-- About Section -->
<div class="container centered-section" id="about">
    <h2>About Us</h2>
    <p>PAYS WEB adalah platform yang dirancang untuk para penggemar seri game Grand Theft Auto (GTA). Kami menawarkan:</p>
    <ul style="list-style-type: none;">
        <li>🎮 <strong>Informasi Lengkap</strong>: Temukan detail menarik dari setiap seri GTA, mulai dari alur cerita, karakter utama, hingga latar tempat yang ikonik.</li>
        <li>📖 <strong>Review dan Ulasan</strong>: Lihat ulasan mendalam tentang berbagai seri GTA, termasuk pandangan dari pemain lain untuk membantu Anda memilih game favorit.</li>
        <li>📜 <strong>Sejarah GTA</strong>: Pelajari bagaimana seri GTA berkembang dari waktu ke waktu, inovasi yang dihadirkan, dan dampaknya dalam industri game.</li>
        <li>🚀 <strong>Tautan ke Game</strong>: Akses langsung ke game favorit Anda dengan cepat melalui situs ini.</li>
    </ul>
    <p>Halo, saya Faiz Maulana, pengelola PAYS WEB. Saya menciptakan situs ini untuk berbagi informasi, cerita, dan pengalaman bermain dengan sesama pemain. Saya berharap situs ini dapat menjadi tempat di mana semua penggemar GTA bisa menemukan informasi dan inspirasi baru tentang game yang mereka sukai. Selamat menikmati!</p>
</div>

<!-- Contact Section -->
<div class="container centered-section" id="contact">
    <h2>Contact Us</h2>
    <p>Kontak informasi untuk menghubungi tim kami.</p>
    <a href="https://www.instagram.com/fzmauln_/profilecard/?igsh=MTJuejdqeHhhbHB1dQ==" target="_blank" class="social-icon">
        <img src="assets/image/logo ig.png" alt="Instagram Logo" style="width: 70px; height: auto;">
    </a>
    <a href="https://www.facebook.com/profile.php?id=100009251515567&mibextid=kFxxJD" target="_blank" class="social-icon">
        <img src="assets/image/logo fb.png" alt="Facebook Logo" style="width: 40px; height: auto;">
    </a>
    <!-- Tambahkan tombol "Someone else here" di sini -->
    <div class="text-center mt-4">
        <a href="404.html" class="btn btn-warning">Someone else here</a>
    </div>
</div>
<!-- ./Contact Section -->

<!-- Feedback Form Section -->
<div class="container centered-section" id="feedback">
    <h2>Feedback Form</h2>
    <form action="your_form_submission_url" method="post" style="max-width: 600px; margin: auto;">
        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subjek" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Pesan" required></textarea>
        </div>
        <button type="submit" class="btn btn-warning w-100">Kirim</button>
    </form>
</div>
<!-- ./Feedback Form Section -->


<!-- DataTables Section -->
<div class="container" id="data_table">
    <h2>Game List with DataTables</h2>
    <table id="gameTable" class="display">
        <thead>
            <tr>
                 <th>Judul Game</th>
            <th>Tahun Rilis</th>
            <th>Pengembang</th>
            <th>Genre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Grand Theft Auto III</td>
            <td>2001</td>
            <td>Rockstar Games</td>
            <td>Action-Adventure</td>
        </tr>
        <tr>
            <td>Grand Theft Auto: Vice City</td>
            <td>2002</td>
            <td>Rockstar Games</td>
            <td>Action-Adventure</td>
        </tr>
        <tr>
            <td>Grand Theft Auto V</td>
            <td>2013</td>
            <td>Rockstar Games</td>
            <td>Action-Adventure</td>
            <!-- Tambahkan data game lainnya -->
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="text-center">
    <p>&copy; 2023 Ruang Game. All Rights Reserved.</p>
</footer>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $('#gameTable').DataTable();
    });
</script>
</body>
</html>
