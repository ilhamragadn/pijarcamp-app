<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Detail Produk</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>

    <body style="background-color: gray">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm rounded text-center">
                        <div class="card-header">
                            <h4>{{ $produk->nama_produk }}</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Keterangan: {{ $produk->keterangan }} <br> Harga: {{ $produk->harga }} <br> Jumlah:
                                {{ $produk->jumlah }}
                            </p>

                            <a href="{{ route('produk.index') }}" class="btn btn-md btn-secondary m-1">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
