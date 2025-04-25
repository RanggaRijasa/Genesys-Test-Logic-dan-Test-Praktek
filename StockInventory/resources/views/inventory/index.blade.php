<x-app-layout>
    <div class="container py-4 px-5">
        <h2 class="mb-4">Master Inventory</h2>

        <form action="{{ route('inventory.store') }}" method="POST" class="mb-4">
            @csrf
            <input type="text" name="nama" placeholder="Nama Barang" required class="form-control mb-2">
            <input type="number" name="harga" placeholder="Harga" required class="form-control mb-2">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>
                        <form action="{{ route('inventory.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h3 class="mt-5">Transaksi Pembelian</h3>
        <form action="/purchase" method="POST" class="mb-4">
            @csrf
            <input type="number" name="inventory_id" placeholder="ID Barang" required class="form-control mb-2">
            <input type="number" name="jumlah" placeholder="Jumlah Pembelian" required class="form-control mb-2">
            <button type="submit" class="btn btn-success">Submit Pembelian</button>
        </form>

        <h3 class="mt-5">Transaksi Penjualan</h3>
        <form action="/sale" method="POST">
            @csrf
            <input type="number" name="inventory_id" placeholder="ID Barang" required class="form-control mb-2">
            <input type="number" name="jumlah" placeholder="Jumlah Penjualan" required class="form-control mb-2">
            <button type="submit" class="btn btn-warning">Submit Penjualan</button>
        </form>
    </div>
</x-app-layout>
