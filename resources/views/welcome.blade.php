<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Gaya Retro */
        body {
            background: linear-gradient(to bottom right, #fef3c7, #fcd34d);
            font-family: 'Courier New', Courier, monospace;
            color: #2c2c2c;
        }
        .retro-box {
            background: linear-gradient(to bottom right, #ffffff, #ffe4b2);
            border: 4px solid #d97706;
            box-shadow: 0 8px 0 #a16207, 0 12px 24px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .retro-title {
            font-size: 2rem;
            font-weight: bold;
            color: #d97706;
            text-shadow: 2px 2px #a16207;
        }
        .retro-btn {
            background: linear-gradient(to bottom, #d97706, #fbbf24);
            border: 2px solid #a16207;
            box-shadow: 0 4px #a16207;
            color: white;
            text-shadow: 1px 1px #a16207;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .retro-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px #a16207;
        }
        .retro-btn:active {
            transform: translateY(2px);
            box-shadow: 0 2px #a16207;
        }
    </style>
</head>
<body class="h-screen flex justify-center items-center">
    <div class="retro-box p-8 rounded-lg w-96">
        <h1 class="retro-title mb-6">Sistem Manajemen Sekolah</h1>
        <p class="mb-4 text-gray-700">Selamat datang di sistem manajemen. Klik tombol di bawah untuk masuk sebagai admin.</p>
        <a href="/admin/login" class="retro-btn w-full py-2 rounded block text-center">Masuk sebagai Admin</a>
    </div>
</body>
</html>
