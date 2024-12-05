<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom Styling */
        body {
            background-color: #1f2937; /* Dark background */
            color: #e5e7eb; /* Light text */
        }
        .card {
            background-color: #2d3748; /* Dark card background */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #fbbf24; /* Yellow button */
            color: #1f2937; /* Dark text for button */
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #f59e0b; /* Darker yellow on hover */
            transform: translateY(-5px);
        }
        .btn-primary:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body class="h-screen flex justify-center items-center">

    <div class="card p-8 max-w-sm w-full">
        <h1 class="text-3xl font-bold text-yellow-400 text-center mb-6">Sistem Manajemen Sekolah</h1>
        <p class="text-lg text-gray-300 text-center mb-6">Selamat datang di sistem manajemen. Klik tombol di bawah untuk masuk sebagai admin.</p>
        
        <!-- Login Button -->
        <a href="/admin/login" class="btn-primary w-full py-3 text-center rounded-lg font-semibold">Masuk sebagai Admin</a>
    </div>

</body>
</html>
