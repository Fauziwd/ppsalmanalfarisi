<!-- resources/views/santri.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="detailsPanel" class="bg-gray-800 text-white p-4 rounded-lg">
            <h2 class="text-lg font-bold mb-2">Detail Santri</h2>
            <p id="santriName">Santri tidak ditemukan.</p>
        </div>

        <!-- Tabel -->
        <table class="table-auto">
            <!-- Kolom tabel -->
        </table>
    </div>

    <script>
        function showDetails(record) {
            const detailsPanel = document.getElementById('detailsPanel');
            const santriName = document.getElementById('santriName');

            // Isi detail
            santriName.innerHTML = `
                <strong>Nama:</strong> ${record.nama}<br>
                <strong>NIS:</strong> ${record.nis}<br>
                <strong>Lulusan:</strong> ${record.lulusan}
            `;

            // Tampilkan panel
            detailsPanel.style.display = 'block';
        }
    </script>
@endsection
