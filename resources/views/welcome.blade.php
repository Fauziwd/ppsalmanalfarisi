<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f172a; /* Dark navy background */
            color: #f1f5f9; /* Light text */
        }
        .card {
            background-color: #1e293b; /* Card background */
            border-radius: 12px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #facc15; /* Button color */
            color: #0f172a; /* Button text color */
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #eab308; /* Hover color */
            transform: translateY(-4px);
        }
        .btn-primary:active {
            background-color: #ca8a04; /* Active color */
            transform: translateY(2px);
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center p-6">
    <div class="card p-10 max-w-lg w-full text-center">
        <div class="flex justify-center mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.656 0 3-1.344 3-3s-1.344-3-3-3-3 1.344-3 3 1.344 3 3 3zm0 2c-2.762 0-5 2.239-5 5h10c0-2.761-2.238-5-5-5z" />
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-yellow-400 mb-4">Selamat Datang!</h1>
        <p class="text-gray-400 mb-6">Sistem Manajemen Sekolah untuk mengelola data dengan mudah dan aman. Klik tombol di bawah untuk masuk ke dashboard admin.</p>
        <p id="loading-text" class="text-yellow-400 mb-4 hidden">Mohon Menunggu...</p>
        <a href="/admin/login" id="login-button" class="btn-primary w-full py-3 rounded-lg block">Masuk sebagai Admin</a>
    </div>

    <script>
        document.getElementById('login-button').addEventListener('click', function (event) {
            event.preventDefault();
            const loadingText = document.getElementById('loading-text');
            loadingText.classList.remove('hidden');
            setTimeout(() => {
                window.location.href = this.href;
            }, 500);
        });
    </script>
</body>
</html>