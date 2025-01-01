<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Bagian tabel utama -->
    <div class="overflow-x-auto  bg-gray-800 p-4 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold text-white mb-4">Tabel Santri</h2>
        {{ $this->table }}
    </div>

    <!-- Bagian detail santri -->
    <div class="bg-gray-900 text-white p-6 rounded-lg shadow-lg">
        @if ($selectedSantri)
            <!-- Header dengan foto dan informasi -->
            <div class="flex items-center mb-6">
                <img
                    src="{{ $selectedSantri->foto ?? 'https://via.placeholder.com/80' }}"
                    alt="Foto Santri"
                    class="w-20 h-20 rounded-full mr-4 border-2 border-yellow-500 shadow-md"
                />
                <div>
                    <h1 class="text-2xl font-bold">{{ $selectedSantri->nama }}</h1>
                    <p class="text-yellow-400">ANGKATAN {{ $selectedSantri->angkatan }}</p>
                </div>
            </div>

            <!-- Tab menu -->
            <div class="flex space-x-6 border-b border-gray-700 pb-2 mb-6">
                <button class="text-yellow-400 font-semibold border-b-2 border-yellow-400 focus:outline-none">
                    Data Diri
                </button>
                <button class="text-gray-400 hover:text-white transition">Capaian Hafalan</button>
                <button class="text-gray-400 hover:text-white transition">Capaian Akademik</button>
            </div>

            <!-- Detail Data Diri -->
            <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                <div class="grid grid-cols-2 gap-y-4">
                    <div>
                        <p class="text-yellow-400 font-semibold">No</p>
                        <p>{{ $selectedSantri->no }}</p>
                    </div>
                    <div>
                        <p class="text-yellow-400 font-semibold">NIS</p>
                        <p>{{ $selectedSantri->nis }}</p>
                    </div>
                    <div>
                        <p class="text-yellow-400 font-semibold">Nama</p>
                        <p>{{ $selectedSantri->nama }}</p>
                    </div>
                    <div>
                        <p class="text-yellow-400 font-semibold">Lulusan</p>
                        <p>{{ $selectedSantri->lulusan }}</p>
                    </div>
                    <div>
                        <p class="text-yellow-400 font-semibold">Asal</p>
                        <p>{{ $selectedSantri->asal }}</p>
                    </div>
                    <div>
                        <p class="text-yellow-400 font-semibold">Tanggal Lahir</p>
                        <p>{{ $selectedSantri->ttl }}</p>
                    </div>
                    <div>
                        <p class="text-yellow-400 font-semibold">Status Yatim/Piatu</p>
                        <p>{{ $selectedSantri->status_yatim_piatu ? 'Masih' : 'Yatim' }}</p>
                    </div>
                </div>
            </div>

            <!-- Tombol Read More -->
            <div class="text-center mt-6">
                <button
                    class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition shadow-lg"
                >
                    Read More
                </button>
            </div>
        @else
            <div class="text-center">
                <h2 class="text-lg font-bold mb-2">Detail Santri</h2>
                <p>Data belum dipilih.</p>
            </div>
        @endif
    </div>
</div>
