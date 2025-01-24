<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tambahkan Font Instrument Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Instrument Sans', Arial, sans-serif;
            font-weight: 700;
            background-color: #ffffff;
        }

        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(10px); /* Elemen sedikit turun */
            }
            to {
                opacity: 1;
                transform: translateY(0); /* Elemen kembali ke tempatnya */
            }
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
            animation: fade-in 1s ease-in-out;
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

        .time {
        display: block;
        text-align: left;
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
            animation: fade-in 1s ease-in-out 0.5s;
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
            animation: fade-in 1s ease-in-out 1s;
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

        /* Modal Background */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            overflow: auto;
        }

        /* Konten Modal */
        .modal-content {
            background-color: #ffffff;
            margin: 5% auto;
            padding: 20px;
            width: 90%;
            max-width: 700px;
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            animation: fade-in 0.8s ease-in-out;
        }

        /* Header Modal */
        .modal-header {
            display: flex;
            align-items: center; /* Rata tengah vertikal antara ikon dan teks */
            background-color: #67CED1;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            justify-content: flex-start; /* Posisi ikon + teks di sebelah kiri */
            gap: 10px; /* Jarak antara ikon dan teks */
        }

        .modal-header .icon {
            width: 30px;
            height: 30px;
        }

        .modal-header h2 {
            font-size: 24px;
            color: #000; /* Ubah warna teks menjadi hitam */
            margin: 0;
            font-weight: bold;
        }

        /* Kartu Dokter */
        .doctor-card {
            display: flex; /* Gunakan Flexbox */
            align-items: center; /* Vertikal sejajar */
            background-color: #67CED1;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            animation: fade-in 0.8s ease-in-out;
        }

        /* Foto Dokter */
        .doctor-photo {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 20px; /* Jarak antara foto dan konten di sebelah kanan */
            display: flex;
            flex-shrink: 0; /* Pastikan ukuran foto tetap */
        }

        /* Informasi Dokter */
        .doctor-info {
            display: flex; /* Gunakan Flexbox untuk tata letak vertikal */
            flex-direction: column;
            justify-content: center; /* Posisikan nama dokter di bawah tengah foto */
            align-items: center; /* Pastikan konten berada di tengah */
            text-align: center;
            width: 100%;
        }

        /* Nama Dokter */
        .doctor-info h3 {
            font-size: 18px;
            color: #000;
            margin: 10px 0 0; /* Tambahkan jarak ke atas */
        }

        /* Tabel Jadwal */
        .schedule-row {
            display: grid;
            grid-template-columns: repeat(6, 1fr); /* 6 kolom */
            gap: 10px;
            width: 100%;
            margin-top: 10px; /* Tambahkan jarak antara nama dan jadwal */
        }

        .schedule-row div {
            text-align: center;
        }

        .schedule-row span {
            display: block;
            padding: 5px;
            border-radius: 3px;
            background-color: #00969A;
            color: white;
            font-size: 12px;
        }

        /* Tombol Back */
        .back-button {
            float: right;
            background-color: #67CED1;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #67CED1;
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
            <form action="{{ url('/logout') }}" method="GET" style="display: inline;">
                <button class="logout-button" type="submit">
                    <i class="fas fa-power-off"></i>
                    <img src="Shutdown.png" alt="Shutdown Logo" style="width: 20px; height: 20px;">
                    <span>Logout</span>
                </button>
            </form>
            
        </header>

        <!-- Welcome Section -->
        <div class="welcome-card">
            <div class="welcome-text">
                <h1>Selamat Datang</h1>
                <p>Klinik Pratama Kalisari Healthcare</p>
            </div>
            <div class="login-card">
                <p class="title">Waktu Login :</p>
                <p class="time" id="time">Pukul :</p>
            </div>
        </div>

        <!-- Menu Buttons -->
        <div class="menu-container">
            <button class="menu-item">
                <i class="fas fa-folder"></i>
                <img src="{{ asset('Folder.png') }}" alt="Tim Medis" class="mb-3" style="width: 30px; height: auto;">
                <span>Data Pasien</span>
            </button>
            <button class="menu-item" id="showModalButton">
                <i class="fas fa-clock"></i>
                <img src="{{ asset('Clock.png') }}" alt="Tim Medis" class="mb-3" style="width: 30px; height: auto;">
                <span>Jadwal Dokter</span>
            </button>
            <div id="scheduleModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="Clock.png" alt="Clock Icon" class="icon">
                        <h2>Jadwal Dokter</h2>
                    </div>                    
                    <!-- Dokter 1 -->
                    <div class="doctor-card">
                        <img src="dr_salwa.png" alt="dr. Salwa" class="doctor-photo">
                        <div class="doctor-info">
                            <h3>dr. Salwa</h3>
                            <div class="schedule-row">
                                <div><span>Senin</span><span>15.00-21.00</span></div>
                                <div><span>Selasa</span><span>08.00-21.00</span></div>
                                <div><span>Rabu</span><span>08.00-21.00</span></div>
                                <div><span>Kamis</span><span>08.00-15.00</span></div>
                                <div><span>Jum'at</span><span>08.00-21.00</span></div>
                                <div><span>Sabtu</span><span>08.00-21.00</span></div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Dokter 2 -->
                    <div class="doctor-card">
                        <img src="dr_ece.png" alt="dr. Ece Yurika Wulandari" class="doctor-photo">
                        <div class="doctor-info">
                            <h3>dr. Ece Yurika Wulandari</h3>
                            <div class="schedule-row">
                                <div><span>Senin</span><span>08.00-15.00</span></div>
                                <div><span>Selasa</span><span>08.00-21.00</span></div>
                                <div><span>Rabu</span><span>08.00-21.00</span></div>
                                <div><span>Kamis</span><span>08.00-15.00</span></div>
                                <div><span>Jum'at</span><span>08.00-21.00</span></div>
                                <div><span>Sabtu</span><span>08.00-15.00</span></div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Tombol Back -->
                    <button class="back-button" onclick="goBack()">Back</button>
                </div>
            </div>
            <button class="menu-item" onclick="window.location.href='{{ route('reservasi') }}'">
                <i class="fas fa-file-signature"></i>
                <img src="{{ asset('Sign_Doc.png') }}" alt="Tim Medis" class="mb-3" style="width: 30px; height: auto;">
                <span>Reservasi HC</span>
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
        function updateLoginTime() {
        const now = new Date();
        const options = { 
            year: 'numeric', 
            month: '2-digit', 
            day: '2-digit', 
            hour: '2-digit', 
            minute: '2-digit', 
            second: '2-digit', 
            hour12: false, 
            timeZone: 'Asia/Jakarta'
        };
        
        const formattedTime = now.toLocaleString('id-ID', options);
        const dateAndTime = formattedTime.split(','); // Pisahkan tanggal dan waktu

        // Menampilkan tanggal di atas dan waktu di bawah
        document.getElementById('time').innerHTML = `${dateAndTime[0]}<br>${dateAndTime[1]}`;
    }

    updateLoginTime();

    // Ambil elemen-elemen yang dibutuhkan
    var modal = document.getElementById('scheduleModal');
        var btn = document.getElementById('showModalButton');
        var closeBtn = document.getElementsByClassName('close-btn')[0];

        // Ketika tombol diklik, tampilkan modal
        btn.onclick = function() {
            modal.style.display = 'block';
        }

        // Ketika tombol close diklik, tutup modal
        closeBtn.onclick = function() {
            modal.style.display = 'none';
        }

        // Ketika pengguna mengklik di luar modal, tutup modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        function goBack() {
        // Mengubah URL di browser tanpa me-reload
        history.pushState(null, null, '/admin'); // Ganti '/homepage' dengan URL halaman utama kamu
        
        // Menampilkan konten halaman utama (misalnya menyembunyikan modal dan menampilkan konten utama)
        document.getElementById('scheduleModal').style.display = 'none'; // Menutup modal atau konten pop-up
        // Bisa juga menambahkan logika untuk menampilkan konten halaman utama
    }
    </script>
</body>
</html>
