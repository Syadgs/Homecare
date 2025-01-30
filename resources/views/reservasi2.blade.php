<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi - Kalisari Healthcare</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Instrument Sans', Arial, sans-serif;
            font-weight: 700;
            background: url('{{ asset("/images/khc_frontdesk.png") }}') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
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

        /* Background Blur */
        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(10px); /* Blur background */
            z-index: 1; /* Di belakang form */
        }

        /* Container Form */
        .reservasi-container {
            position: relative;
            z-index: 2;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            padding: 40px 30px;
            max-width: 600px;
            width: 100%;
            animation: fade-in 1s ease-in-out;
        }

        .reservasi-container img.logo {
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }

        .form-group label {
            width: 150px; /* Lebar kolom label */
            font-size: 14px;
            color: #333;
            text-align: left;
            margin-right: 10px;
        }

        .form-group input,
        .form-group select {
            flex: 1; /* Kotak input akan mengambil sisa ruang */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
        }

        .form-group select {
            appearance: none;
        }

        /* Tombol Next */
        .reservasi-container .btn-next {
            background-color: #67CED1;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .reservasi-container .btn-next:hover {
            background-color: #5BB3B8;
        }

        .reservasi-container .btn-next:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        input::placeholder, textarea::placeholder {
            color: gray;
            font-style: italic;
        }

        .pernyataan {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }

        .pernyataan input[type="checkbox"] {
            width: 18px;
            height: 18px;
        }
    </style>
</head>
<body>
    <!-- Blur Background -->
    <div class="background-overlay"></div>

    <!-- Reservasi Form -->
    <div class="reservasi-container">
        <!-- Gambar Logo -->
        <img src="{{ asset('/images/kalisari.png') }}" alt="Kalisari Healthcare" class="logo">

        <!-- Form -->
        <form id="reservasi-form">
            <!-- Nama Pasien -->
            <div class="form-group">
                <label for="poliklinik">Poliklinik</label>
                <input type="text" placeholder="HC/HOMECARE"  id="poliklinik" required>
            </div>

            <!-- Alamat -->
            <div class="form-group">
                <label for="dokter">Dokter</label>
                <select id="dokter" required onchange="updateJamPraktek()">
                    <option value="" disabled selected>Pilih</option>
                    <option value="dr_salwa">dr. Salwa</option>
                    <option value="dr_ece">dr. Ece Yurika Wulandari</option>
                </select>
            </div>

            <!-- No HP/WA -->
            <div class="form-group">
                <label for="jaminan">Jaminan</label>
                <select id="jaminan" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="umum">Umum</option>
                    <option value="asuransi">Asuransi</option>
                </select>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="tanggal_booking">Tanggal Booking</label>
                <input type="tanggal_booking" id="tanggal_booking" required>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label for="jam_praktek">Jam Praktek</label>
                <select id="jam_praktek" required>
                    <option value="" disabled selected>Pilih</option>
                </select>
            </div>

            <!-- Tanggal Lahir -->
            <div class="form-group">
                <label for="tanggal_lahir">Jam Kedatangan</label>
                <input type="text" placeholder="Sesuai Jam Praktek yang dipilih" id="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Keterangan</label>
                <input type="text" id="tanggal_lahir" required>
            </div>

            <div class="form-group pernyataan">
                <input type="checkbox" id="pernyataan" required>
                <label for="pernyataan" style="color: red; font-weight: bold;">Saya menyatakan data yang diisi adalah benar dan dapat dipertanggungjawabkan</label>
            </div>            

            <!-- Tombol Next -->
            <button type="button" class="btn-next" id="next-button" disabled>Kirim</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('reservasi-form');
        const inputs = form.querySelectorAll('input, select');
        const nextButton = document.getElementById('next-button');

        // Aktifkan tombol jika semua input terisi
        inputs.forEach(input => {
            input.addEventListener('input', () => {
                const allFilled = Array.from(inputs).every(i => i.value.trim() !== '');
                nextButton.disabled = !allFilled;
            });
        });

        // Aksi tombol Next
        nextButton.addEventListener('click', () => {
            form.submit();
        });

        function updateJamPraktek() {
            const dokter = document.getElementById('dokter').value;
            const jamPraktek = document.getElementById('jam_praktek');

            // Reset opsi jam praktek
            jamPraktek.innerHTML = '<option value="" disabled selected>Pilih</option>';

            // Data jadwal praktek
            const jadwal = {
                dr_salwa: [
                    'Senin, 15.00-21.00 WIB',
                    'Selasa, 08.00-21.00 WIB',
                    'Kamis, 08.00-15.00 WIB',
                    'Jum\'at, 08.00-21.00 WIB',
                    'Sabtu, 08.00-21.00 WIB'
                ],
                dr_ece: [
                    'Senin, 08.00-15.00 WIB',
                    'Rabu, 08.00-21.00 WIB',
                    'Jum\'at, 08.00-15.00 WIB'
                ]
            };

            // Tambahkan opsi berdasarkan pilihan dokter
            if (jadwal[dokter]) {
                jadwal[dokter].forEach(function(jam) {
                    const option = document.createElement('option');
                    option.value = jam;
                    option.textContent = jam;
                    jamPraktek.appendChild(option);
                });
            }
        }
    </script>
</body>
</html>
