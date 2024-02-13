<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Perbarui Produk</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>

    <body style="background-color: gray">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body my-2">
                            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-2">
                                    <label class="font-weight-bold">Nama Produk</label>
                                    <input type="text"
                                        class="form-control @error('nama_produk') is-invalid @enderror"
                                        name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}"
                                        placeholder="Masukkan Nama Produk">

                                    <!-- pesan error untuk nama_produk -->
                                    @error('nama_produk')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label class="font-weight-bold">Keterangan</label>
                                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                        name="keterangan" value="{{ old('keterangan', $produk->keterangan) }}"
                                        placeholder="Masukkan Keterangan">

                                    <!-- pesan error untuk keterangan -->
                                    @error('keterangan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label class="font-weight-bold">Harga</label>
                                            <input type="number"
                                                class="form-control @error('harga') is-invalid @enderror" name="harga"
                                                value="{{ old('harga', $produk->harga) }}" placeholder="Masukkan Harga">

                                            <!-- pesan error untuk harga -->
                                            @error('harga')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label class="font-weight-bold">Jumlah</label>
                                            <input type="number"
                                                class="form-control @error('jumlah') is-invalid @enderror"
                                                name="jumlah" value="{{ old('jumlah', $produk->jumlah) }}"
                                                placeholder="Masukkan Jumlah">

                                            <!-- pesan error untuk jumlah -->
                                            @error('jumlah')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">

                                    <a href="{{ route('produk.index') }}"
                                        class="btn btn-md btn-secondary mt-3 mx-1">Kembali</a>
                                    <button type="reset" class="btn btn-md btn-warning mt-3 mx-1">Perbarui</button>
                                    <button type="submit" class="btn btn-md btn-success mt-3 mx-1">Simpan</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
