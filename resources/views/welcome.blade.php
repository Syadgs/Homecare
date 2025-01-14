<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalisari Homecare</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Instrumen Sans, sans-serif;
            weight: 700;
        }
        .navbar {
            background-color: #008c9e; /* Warna latar belakang navbar */
            color: white;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }
        .nav-link {
            color: white !important;
        }
        .btn-whatsapp {
            background-color: #25d366;
            color: white;
            border: none;
        }
        .btn-whatsapp:hover {
            background-color: #20b954;
            color: white;
        }
        .btn-login {
            background-color: white;
            color: #008c9e;
            border: none;
        }
        .btn-login:hover {
            background-color: #e0f7fa;
        }
        .steps {
            margin-top: 50px; /* Jarak dari atas */
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .footer a {
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span>Kalisari Homecare</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/layanan">Layanan</a>
                    </li>
                </ul>
                <a href="https://wa.me/082212345678" class="btn btn-whatsapp mx-2">📞 0822-1234-5678</a>
                <a href="/login" class="btn btn-login">Login</a>
            </div>
        </div>
    </nav>

    <!-- Steps Section -->
    <div class="steps text-center py-5">
        <h2 class="mb-4" style="color: #008c9e;">Langkah-Langkah Kalisari Homecare</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/hubungi_kami.png') }}" alt="Hubungi Kami" class="img-fluid mb-3" style="max-width: 200px;">
                    <h5>Hubungi Kami</h5>
                    <p>Anda dapat menghubungi kami dengan WhatsApp melalui nomor yang sudah tertera pada website kami.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/layanan.png') }}" alt="Konsultasi" class="img-fluid mb-3" style="max-width: 200px;">
                    <h5>Konsultasi</h5>
                    <p>Berikan keluhan Anda untuk pengambilan tindakan medis.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/tim_medis_datang.png') }}" alt="Tim Medis Datang" class="img-fluid mb-3" style="max-width: 200px;">
                    <h5>Tim Medis Datang</h5>
                    <p>Tim medis kami akan datang untuk memberikan pelayanan kepada Anda.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="why-homecare py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="p-4" style="background-color: #008c9e; color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <h3>Kenapa Kalisari Homecare?</h3>
                        <ul class="list-unstyled mt-3" style="line-height: 1.8;">
                            <li>1. Tenaga yang terpercaya</li>
                            <li>2. Perawatan Berkualitas</li>
                            <li>3. Aman & Nyaman</li>
                            <li>4. Berkomitmen & Dedikasi</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/Mengapa.png') }}" alt="Mengapa Kalisari"  class="img-fluid" style="max-width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <div class="services text-center py-5">
        <h2 class="mb-4" style="color: #008c9e;">Layanan Homecare</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/service1.jpg') }}" alt="Layanan Umum" class="card-img-top img-fluid" style="border-radius: 10px;">
                        <div class="card-body">
                            <p class="card-text">Layanan Umum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/service2.jpg') }}" alt="Suntik/Infus Vitamin" class="card-img-top img-fluid" style="border-radius: 10px;">
                        <div class="card-body">
                            <p class="card-text">Suntik/Infus Vitamin</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/service3.jpg') }}" alt="Vaksin" class="card-img-top img-fluid" style="border-radius: 10px;">
                        <div class="card-body">
                            <p class="card-text">Vaksin</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/service4.jpg') }}" alt="Pengambilan Darah" class="card-img-top img-fluid" style="border-radius: 10px;">
                        <div class="card-body">
                            <p class="card-text">Pengambilan Darah (Laboratorium)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; 2025 Kalisari Homecare. Semua Hak Dilindungi. <br> Kontak: <a href="tel:082112345678">0821-1234-5678</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
