<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tambahkan Font Instrument Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Instrument Sans', Arial, sans-serif;
            font-weight: 700;
            background-color: #ffffff;
        }

        /* Header */
        .dashboard-header {
            display: flex;
            font-family: 'Instrument Sans', Arial, sans-serif;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #00969A;
            color: white;
        }

        .logo {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .logout-btn {
            background-color: #e53935;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c62828;
        }

        /* Welcome Section */
        .welcome-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
        }

        .welcome-text h1 {
            margin: 0;
            color: #00969A;
        }

        .welcome-text p {
            margin: 5px 0 0;
            color: #6c757d;
        }

        .login-info p {
            margin: 0;
            text-align: right;
            color: #6c757d;
        }

        /* Menu Buttons */
        .menu-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            margin: 20px auto;
            background-color: #00969A;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
        }

        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px 15px;
            background-color: #78CDD7;
            color: #000;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            width: 150px;
            text-align: center;
        }

        .menu-item i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .menu-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #60B6C1;
        }


        /* Statistics Section */
        .statistics {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 15px;
            max-width: 800px;
            margin: 20px auto;
        }

        .stat-card {
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 150px;
            max-width: 200px;
        }

        .stat-icon {
            font-size: 2.5rem;
            color: #00969A;
            margin-bottom: 10px;
        }

        .stat-card h2 {
            margin: 0;
            font-size: 2rem;
            color: #00969A;
        }

        .stat-card p {
            margin: 5px 0 0;
            font-size: 0.9rem;
            color: #6c757d;
        }
        /* Gambar Ikon */
        .stat-icon {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }
        .logout-button {
            display: flex;
            align-items: center; /* Vertikal rata tengah */
            gap: 5px; /* Jarak antara ikon dan teks */
            background-color: #e53935;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.2s;
        }

        .logout-button i {
            font-size: 14px; /* Ukuran ikon */
        }

        .logout-button:hover {
            background-color: #c62828; /* Warna merah lebih gelap saat hover */
            transform: translateY(-3px); /* Tombol naik sedikit */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }
        .login-card {
            background-color: #00969A;
            color: white;
            padding: 15px 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #60B6C1;
            max-width: 200px;
            font-family: Arial, sans-serif;
            text-align: left;
        }

        .login-card .title {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        .login-card .time {
            margin: 10px 0 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Header -->
        <header class="dashboard-header">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" style="width: 40px;">
                <img src="kalisari.png" alt="Kalisari" style="width: 100px;">
            </a>
            <button class="logout-button">
                <i class="fas fa-power-off"></i>
                <img src="Shutdown.png" alt="Shutdown Logo" style="width: 20px; height: 20px;">
                <span>Logout</span>
            </button>
            
        </header>

        <!-- Welcome Section -->
        <div class="welcome-card">
            <div class="welcome-text">
                <h1>Selamat Datang</h1>
                <p>Klinik Pratama Kalisari Healthcare</p>
            </div>
            <div class="login-card">
                <p class="title">Waktu Login :</p>
                <p class="time">15/01/2025<br>08:00 WIB</p>
            </div>
            
        </div>

        <!-- Menu Buttons -->
        <div class="menu-container">
            <button class="menu-item">
                <i class="fas fa-folder"></i>
                <img src="{{ asset('Folder.png') }}" alt="Tim Medis" class="mb-3" style="width: 30px; height: auto;">
                <span>Data Pasien</span>
            </button>
            <button class="menu-item">
                <i class="fas fa-clock"></i>
                <img src="{{ asset('Clock.png') }}" alt="Tim Medis" class="mb-3" style="width: 30px; height: auto;">
                <span>Jadwal Dokter</span>
            </button>
            <button class="menu-item">
                <i class="fas fa-file-signature"></i>
                <img src="{{ asset('Sign_Doc.png') }}" alt="Tim Medis" class="mb-3" style="width: 30px; height: auto;">
                <span>Registrasi Pasien</span>
            </button>
            <button class="menu-item">
                <i class="fas fa-heart"></i>
                <img src="{{ asset('Trust.png') }}" alt="Tim Medis" class="mb-3" style="width: 30px; height: auto;">
                <span>Layanan</span>
            </button>
            <button class="menu-item">
                <i class="fas fa-money-bill"></i>
                <img src="{{ asset('Payment.png') }}" alt="Tim Medis" class="mb-3" style="width: 30px; height: auto;">
                <span>Pembayaran</span>
            </button>
        </div>
        
        

        <!-- Statistics Section -->
        <div class="statistics">
            <div class="stat-card">
                <img src="Book.png" alt="Layanan Umum" class="stat-icon">
                <div>
                    <i class="fas fa-book stat-icon"></i>
                    <h2>49</h2>
                    <p>Total Pasien<br>Layanan Umum</p>
                </div> 
            </div>
            <div class="stat-card">
                <img src="Test_Tube.png" alt="Pengambilan Darah" class="stat-icon">
                <div>
                    <i class="fas fa-vial stat-icon"></i>
                    <h2>19</h2>
                    <p>Total Pasien<br>Layanan Pengambilan Darah</p>
                </div>
            </div>
            <div class="stat-card">
                <img src="Insulin_Pen.png" alt="Vaksinasi" class="stat-icon">
                <div>
                    <i class="fas fa-syringe stat-icon"></i>
                    <h2>11</h2>
                    <p>Total Pasien<br>Layanan Vaksinasi</p>
                </div>
            </div>
            <div class="stat-card">
                <img src="Hand_Pill.png" alt="Suntik/Infus Vitamin" class="stat-icon">
                <div>
                    <i class="fas fa-pills stat-icon"></i>
                    <h2>23</h2>
                    <p>Total Pasien<br>Suntik/Infus Vitamin</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Mendapatkan elemen untuk menampilkan waktu login
        const loginTimeElement = document.getElementById('login-time');
    
        // Mendapatkan waktu saat ini
        const now = new Date();
    
        // Format tanggal dan jam
        const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
        const formattedDate = now.toLocaleDateString('id-ID', options); // Format Indonesia: DD/MM/YYYY
        const formattedTime = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' }); // Format HH:MM
    
        // Menampilkan hasil di elemen
        loginTimeElement.innerHTML = `${formattedDate}<br>${formattedTime} WIB`;
    </script>
</body>
</html>
