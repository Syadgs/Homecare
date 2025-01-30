<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalisari Homecare</title>
    <!-- Google Font: Instrument Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 700;
            line-height: 1.6;
        }
        @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px); /* Mulai sedikit dari bawah */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Kembali ke posisi normal */
        }
        }

        /* Terapkan animasi pada setiap elemen dengan kelas fade-in */
        .fade-in {
            opacity: 0; /* Mulai tidak terlihat */
            animation: fadeIn 1s ease-out forwards; /* Durasi animasi */
        }

        /* Gunakan delay yang bervariasi */
        .fade-in:nth-child(1) {
            animation-delay: 0s; /* Kolom pertama tanpa delay */
        }
        .fade-in:nth-child(2) {
            animation-delay: 0.3s; /* Kolom kedua dengan delay 0.3 detik */
        }
        .fade-in:nth-child(3) {
            animation-delay: 0.6s; /* Kolom ketiga dengan delay 0.6 detik */
        }
        .navbar {
            background-color: #007B7F;
        }
        .navbar a {
            color: white !important;
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 700;
        }
        .hero-section {
            background-color: #007B7F;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }
        .hero-section img {
            width: 100px;
            margin-bottom: 20px;
        }
        .section-title {
            text-align: center;
            margin: 40px 0;
            font-family: 'Instrument Sans', sans-serif;
        }
        .card {
            border: none;
            font-family: 'Instrument Sans', sans-serif;
        }
        .card img {
            border-radius: 10px;
        }
        footer {
            background-color: #007B7F;
            color: white;
            padding: 20px 0;
            font-family: 'Instrument Sans', sans-serif;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
        h1, h2, h5, p {
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 700;
        }
        .why-homecare {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 50px 0;
            gap: 20px;
        }
        .why-text {
            background-color: #007B7F;
            color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            flex: 1;
        }
        .why-text ul {
            padding-left: 20px;
        }
        .why-text ul li {
            margin-bottom: 10px;
        }
        .why-images {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }
        .why-images img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }    
        /* Tombol Login */
        .login-btn {
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 700;
            color: white;
            background-color: #8EDBE6;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: inline-block;
        }

        /* Efek Hover */
        .login-btn:hover {
            background-color: #7DC9D4;
            text-decoration: none;
            box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png" alt="Logo" style="width: 40px;">
                <img src="/images/kalisari.png" alt="Kalisari" style="width: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="scrollToLayanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-white d-flex align-items-center justify-content-center" href="https://wa.me/+6282299996577" style="gap: 8px;">
                            <img src="/images/whatsapp.png" alt="WhatsApp Logo" style="width: 20px; height: 20px;">
                            +62822-9999-6577
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Why Section -->
    <div class="steps text-center py-5">
        <h2 class="mb-4" style="color: #8EDBE6;">Kalisari Homecare</h2>
        <div class="container text-center my-5">
            <div class="row">
                <div class="col-md-4 fade-in" style="animation-delay: 0s;">
                    <div class="text-center">
                        <img src="{{ asset('/images/hubungi_kami.png') }}" alt="Hubungi Kami" class="mb-3" style="width: 190px; height: auto;">
                        <h5 class="mb-2">Hubungi Kami</h5>
                        <p class="text-muted">Anda dapat menghubungi kami dengan WhatsApp melalui nomor yang sudah tertera pada website kami.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in" style="animation-delay: 0.3s;">
                    <div class="text-center">
                        <img src="{{ asset('/images/konsultasi.png') }}" alt="Konsultasi" class="mb-3" style="width: 190px; height: auto;">
                        <h5 class="mb-2">Konsultasi</h5>
                        <p class="text-muted">Berikan keluhan Anda untuk pengambilan tindakan medis.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in" style="animation-delay: 0.6s;">
                    <div class="text-center">
                        <img src="{{ asset('/images/tim_medis_datang.png') }}" alt="Tim Medis" class="mb-3" style="width: 190px; height: auto;">
                        <h5 class="mb-2">Tim Medis Datang</h5>
                        <p class="text-muted">Tenaga medis kami akan datang untuk memberikan pelayanan kepada Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="why-homecare py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%; min-height: 300px;">
                        <div class="p-4" style="background-color: #007B7F; color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px; text-align: justify;">
                            <h3 class="text-center">Kenapa Kalisari Homecare?</h3>
                            <ul class="list-unstyled mt-3" style="line-height: 1.8;">
                                <li>1. Tenaga yang terpercaya</li>
                                <li>2. Perawatan Berkualitas</li>
                                <li>3. Aman & Nyaman</li>
                                <li>4. Berkomitmen & Dedikasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="/images/kenapa_homecare.png" class="card-img-top" alt="Hubungi Kami">
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="layanan" class="container mt-5">
        <h2 class="text-center" style="color: #8EDBE6; margin-bottom: 40px; font-weight: bold;">Layanan Homecare</h2>
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card text-center" style="width: 650px; background-color: #007B7F; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; height: 450px;">
                    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                        <img src="/images/layanan_umum.png" alt="Layanan Umum" style="width: 280px; height: auto; border-radius: 10px; margin-bottom: 20px;">
                        <p style="color: #8EDBE6; font-weight: bold;">Layanan Umum</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card text-center" style="width: 650px; background-color: #007B7F; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; height: 450px;">
                    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                        <img src="/images/vitamin.png" alt="Suntik/Infus Vitamin" style="width: 280px; height: auto; border-radius: 10px; margin-bottom: 20px;">
                        <p style="color: #8EDBE6; font-weight: bold;">Suntik/Infus Vitamin</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card text-center" style="width: 650px; background-color: #007B7F; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; height: 450px;">
                    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                        <img src="/images/vaksin.png" alt="Vaksin" style="width: 280px; height: auto; border-radius: 10px; margin-bottom: 20px;">
                        <p style="color: #8EDBE6; font-weight: bold;">Vaksin</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card text-center" style="width: 650px; background-color: #007B7F; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; height: 450px;">
                    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                        <img src="/images/ambil_darah.png" alt="Pengambilan Darah" style="width: 280px; height: auto; border-radius: 10px; margin-bottom: 20px;">
                        <p style="color: #8EDBE6; font-weight: bold;">Pengambilan Darah (Lab)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background-color: #007B7F; color: white; padding: 40px 0;">
        <div class="container d-flex justify-content-between align-items-start">
            <!-- Logo dan Deskripsi -->
            <div class="logo-description" style="flex: 1; max-width: 400px;">
                <div class="logo-description" style="flex: 1; max-width: 400px; display: flex; align-items: center; gap: 15px;">
                    <!-- Logo -->
                    <img src="/images/logo.png" alt="Logo Kalisari" style="width: 100px;">
                    <img src="/images/kalisari.png" alt="Kalisari Healthcare" style="width: 175px;">
                </div>                
                <p style="line-height: 1.8; text-align: justify;">
                    Kalisari Homecare adalah sebuah layanan perawatan Homecare baik untuk layanan Perawat, Caregiver, dan Dokter 
                    yang dapat dipesan secara online.
                </p>
            </div>
    
      
    
            <!-- Kontak -->
            <div class="contact" style="flex: 1; max-width: 300px; text-align: left;">
                <p style="display: flex; align-items: center; margin: 0 0 10px;">
                    <img src="/images/Phone.png" alt="Phone" style="width: 20px; height: 20px; margin-right: 10px;">
                    +62 822-9999-6577
                </p>
                <p style="display: flex; align-items: center; margin: 0 0 10px;">
                    <img src="/images/Email.png" alt="Email" style="width: 20px; height: 20px; margin-right: 10px;">
                    kalisarihealthcare@gmail.com
                </p>
                <p style="display: flex; align-items: center; margin: 0 0 10px;">
                    <img src="/images/Instagram.png" alt="Instagram" style="width: 20px; height: 20px; margin-right: 10px;">
                    @kalisarihealthcare
                </p>
                <p style="display: flex; align-items: center; margin: 0;">
                    <img src="/images/Location.png" alt="Location" style="width: 20px; height: 20px; margin-right: 10px;">
                    Jl. Kalisari Raya No. 20, Kalisari Pasar Rebo, Jakarta Timur
                </p>
            </div>
        </div>
    </footer>
</body>
</html>