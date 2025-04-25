<x-app-layout>
    <div class="d-flex justify-content-center py-5">
        <div style="width: 320px; background: #fff; border: 1px dashed #333; padding: 20px; font-family: 'Courier New', Courier, monospace; font-size: 25px;">
            <h4 class="text-center mb-3">SLIP PENJUALAN</h4>
            <hr>

            <p>Nama Barang  : {{ $nama }}</p>
            <p>Jumlah       : {{ $jumlah }}</p>
            <p>Harga Satuan: Rp{{ number_format($harga, 0, ',', '.') }}</p>
            <p>Total        : Rp{{ number_format($total, 0, ',', '.') }}</p>

            <hr>
            <p class="text-center">Terima kasih</p>

            <div class="text-center mt-3">
                <a href="{{ route('inventory.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</x-app-layout>
