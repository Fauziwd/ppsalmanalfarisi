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
            background-color: #0f172a; /* Dark navy background */
            color: #f1f5f9; /* Light text */
        }
        .card {
            background-color: #1e293b; /* Slightly lighter dark card */
            border-radius: 12px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #facc15; /* Filament-like yellow button */
            color: #0f172a; /* Dark text for button */
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #eab308; /* Darker yellow on hover */
            transform: translateY(-4px);
        }
        .btn-primary:active {
            background-color: #ca8a04; /* Even darker yellow on click */
            transform: translateY(2px);
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center p-6">

    <div class="card p-10 max-w-lg w-full">
        <!-- Logo -->
        <div class="flex justify-center mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.656 0 3-1.344 3-3s-1.344-3-3-3-3 1.344-3 3 1.344 3 3 3zm0 2c-2.762 0-5 2.239-5 5h10c0-2.761-2.238-5-5-5z" />
            </svg>
        </div>

        <!-- Title -->
        <h1 class="text-2xl font-bold text-yellow-400 text-center mb-4">Selamat Datang!</h1>
        <p class="text-center text-gray-400 mb-6">
            Sistem Manajemen Sekolah untuk mengelola data dengan mudah dan aman. Klik tombol di bawah untuk masuk ke dashboard admin.
        </p>

        <!-- Loading Text -->
        <p id="loading-text" class="text-center text-yellow-400 mb-4 hidden">Anda sedang mencoba masuk...</p>

        <!-- Button -->
        <a href="/admin/login" id="login-button" class="btn-primary w-full py-3 rounded-lg text-center block">Masuk sebagai Admin</a>
    </div>

    <script>
        // JavaScript to display the loading text
        const loginButton = document.getElementById('login-button');
        const loadingText = document.getElementById('loading-text');

        loginButton.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent immediate navigation

            // Show the loading text
            loadingText.classList.remove('hidden');

            // Navigate to the login page after a short delay
            setTimeout(() => {
                window.location.href = loginButton.href;
            }, 500); // Optional delay for better UI experience
        });
    </script>
</body>
</html>
