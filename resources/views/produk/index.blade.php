<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Daftar Produk</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>

    <body style="background-color: gray">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <a href="{{ route('produk.create') }}" class="btn btn-md btn-success mb-3">Tambah Produk</a>
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($produk as $item)
                                        <tr>
                                            <td>
                                                {{ $item->nama_produk }}
                                            </td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>{{ $item->harga }}</td>
                                            <td>{{ $item->jumlah }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('produk.destroy', $item->id) }}" method="POST">
                                                    <a href="{{ route('produk.show', $item->id) }}"
                                                        class="btn btn-info">Detail</a>
                                                    <a href="{{ route('produk.edit', $item->id) }}"
                                                        class="btn btn-warning">Perbarui</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Daftar produk kosong
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $produk->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
