<div>
    @if ($santri)
        <div id="detailsPanel" class="bg-gray-800 text-white p-4 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Detail Santri</h2>
            <p><strong>No:</strong> {{ $santri->no }}</p>
            <p><strong>NIS:</strong> {{ $santri->nis }}</p>
            <p><strong>Nama:</strong> {{ $santri->nama }}</p>
            <p><strong>Lulusan:</strong> {{ $santri->lulusan }}</p>
            <p><strong>Asal:</strong> {{ $santri->asal }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $santri->ttl }}</p>
            <p><strong>Status Yatim/Piatu:</strong> {{ $santri->status_yatim_piatu ? 'Tidak' : 'Ya' }}</p>
        </div>
    @else
        <div id="detailsPanel" class="bg-gray-800 text-white p-4 rounded-lg">
            <h2 class="text-lg font-bold mb-2">Detail Santri</h2>
            <p>Data belum dipilih.</p>
        </div>
    @endif
</div>
