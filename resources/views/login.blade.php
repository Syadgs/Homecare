<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kalisari Healthcare</title>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
    
        /* Background blur */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('khc_frontdesk.png') no-repeat center center;
            background-size: cover;
            filter: blur(8px);
            z-index: -1;
        }
    
        /* Animasi fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9); /* Mulai lebih kecil */
            }
            to {
                opacity: 1;
                transform: scale(1); /* Kembali ke ukuran normal */
            }
        }
    
        /* Container login dengan animasi */
        .login-container {
            background: white;
            width: 350px;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            opacity: 0; /* Mulai tersembunyi */
            transform: scale(0.9); /* Mulai lebih kecil */
            animation: fadeIn 1s ease-out forwards; /* Aktifkan animasi */
        }
    
        .login-container img {
            width: 100px;
            margin-bottom: 20px;
        }
    
        .form-group {
            margin-bottom: 15px; /* Jarak antar form group */
            text-align: left;
        }
    
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 700;
        }
    
        .form-group input {
            width: 100%; /* Memastikan input mengambil lebar penuh */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box; /* Menyertakan padding dalam total width */
        }
    
        .form-group input:focus {
            outline: none;
            border-color: #33cabb;
        }
    
        /* Password Toggle */
        .form-group.password-toggle {
            position: relative;
        }
    
        .form-group.password-toggle input {
            width: 100%; /* Input mengambil seluruh lebar parent */
            padding-right: 40px; /* Memberi ruang untuk teks atau ikon di sisi kanan */
            box-sizing: border-box; /* Sertakan padding dan border dalam ukuran total */
        }
    
        .form-group.password-toggle .toggle-password {
            position: absolute; /* Posisi absolut untuk "Show/Hide" */
            right: 10px; /* Letakkan di kanan */
            top: 70%; /* Tempatkan di tengah vertikal */
            transform: translateY(-50%); /* Koreksi posisi vertikal */
            cursor: pointer; /* Tambahkan pointer pada hover */
            font-size: 14px;
            color: #888;
        }
    
        .form-group.password-toggle .toggle-password:hover {
            color: #555; /* Ubah warna saat hover */
        }
    
        .btn {
            display: block;
            width: 100%; /* Pastikan tombol memiliki lebar penuh */
            padding: 10px;
            background: #33cabb;
            border: none;
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            text-align: center;
        }
    
        .btn:hover {
            background: #2aa69e;
        }
    
        .register-link {
            margin-top: 15px;
            font-size: 14px;
            font-weight: 700;
        }
    
        .register-link a {
            color: #33cabb;
            text-decoration: none;
            font-weight: 700;
        }
    
        .register-link a:hover {
            text-decoration: underline;
        }
    
        /* Password Wrapper for Flexbox (if needed) */
        .password-wrapper {
            display: flex;
            align-items: center;
        }
    
        .password-wrapper input {
            flex: 1;
            padding-right: 40px;
        }
    
        .password-wrapper .toggle-password {
            cursor: pointer;
            margin-left: -30px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="logo.png" alt="Kalisari Healthcare Logo" class="logo">
        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group password-toggle">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <i class="toggle-password" onclick="togglePassword()">Show</i>
                </div>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="register-link">
            Belum punya akun? <a href="{{ route('register') }}">Registrasi</a>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password'); // Ambil elemen input password
            const passwordToggle = document.querySelector('.toggle-password'); // Ambil elemen ikon toggle
    
            // Periksa tipe input password
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text'; // Ubah tipe ke "text" untuk menampilkan password
                passwordToggle.textContent = 'Hide'; // Ubah ikon menjadi mata tertutup
            } else {
                passwordInput.type = 'password'; // Ubah tipe kembali ke "password"
                passwordToggle.textContent = 'Show'; // Ubah ikon menjadi mata terbuka
            }
        }
    </script>
</body>
</html>