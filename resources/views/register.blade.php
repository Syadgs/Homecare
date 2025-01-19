<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Kalisari Healthcare</title>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;700&display=swap" rel="stylesheet">
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
    
        /* Animasi pada .register-container */
        .register-container {
            background: white;
            width: 350px;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            opacity: 0; /* Mulai dengan tidak terlihat */
            transform: scale(0.9); /* Mulai lebih kecil */
            animation: fadeIn 1s ease-out forwards; /* Tambahkan animasi */
        }
    
        .register-container img {
            width: 100px;
            margin-bottom: 20px;
        }
    
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
    
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 700;
        }
    
        .form-group input {
            width: 100%; /* Memastikan input memiliki lebar penuh */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box; /* Sertakan padding dan border dalam ukuran total */
        }
    
        .form-group input:focus {
            outline: none;
            border-color: #33cabb;
        }
    
        .form-group .password-toggle {
            position: relative;
        }
    
        .form-group .password-toggle input {
            width: 100%; /* Memastikan input password memiliki lebar penuh */
            padding-right: 40px; /* Memberi ruang untuk ikon di kanan */
        }
    
        .form-group .password-toggle i {
            position: absolute;
            right: 10px; /* Tempatkan ikon di sisi kanan */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #888;
        }
    
        .form-group .password-toggle i:hover {
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
    
        .login-link {
            margin-top: 15px;
            font-size: 14px;
            font-weight: 700;
        }
    
        .login-link a {
            color: #33cabb;
            text-decoration: none;
            font-weight: 700;
        }
    
        .login-link a:hover {
            text-decoration: underline;
        }
    
        /* Password Toggle */
        .password-toggle {
            position: relative;
        }
    
        .password-toggle input {
            padding-right: 40px; /* Memberi ruang untuk ikon di kanan */
            width: 100%; /* Input mengambil seluruh lebar parent */
        }
    
        .password-toggle i {
            position: absolute;
            right: 10px; /* Letakkan ikon di kanan */
            top: 70%; /* Pastikan ikon sejajar vertikal di tengah */
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 14px;
            color: #888;
        }
    
        .password-toggle i:hover {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <img src="logo.png" alt="Kalisari Healthcare Logo">
        <form action="{{ route('register.process') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group password-toggle">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <i class="toggle-password" onclick="togglePassword()">Show</i>
            </div>
            <button type="submit" class="btn">Daftar</button>
        </form>
        <div class="login-link">
            Sudah punya akun? <a href="{{ route('login') }}">Login</a>
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
