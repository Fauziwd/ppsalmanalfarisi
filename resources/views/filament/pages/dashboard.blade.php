<x-filament::page>
    {{-- Widget --}}
    <div>
        @foreach ($widgets as $widget)
            {{ $widget }}
        @endforeach
    </div>

    {{-- Modal untuk menampilkan detail santri --}}
    <div 
        x-data="{ showModal: false, santri: null }" 
        x-on:open-santri-modal.window="showModal = true; santri = $event.detail.santri"
        x-show="showModal" 
        class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75"
        style="display: none;"
    >
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl font-bold mb-4">Detail Santri</h2>
            <template x-if="santri">
                <div>
                    <p><strong>Nama:</strong> <span x-text="santri.nama"></span></p>
                    <p><strong>NIS:</strong> <span x-text="santri.nis"></span></p>
                    <p><strong>Asal:</strong> <span x-text="santri.asal"></span></p>
                    <p><strong>Lulusan:</strong> <span x-text="santri.lulusan"></span></p>
                    <p><strong>Tanggal Lahir:</strong> <span x-text="santri.ttl"></span></p>
                </div>
            </template>
            <button 
                class="mt-4 bg-red-500 text-white px-4 py-2 rounded"
                @click="showModal = false"
            >
                Tutup
            </button>
        </div>
    </div>
</x-filament::page>
