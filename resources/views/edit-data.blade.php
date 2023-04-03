<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-sm">
        <br>

        <div class="text-center">
            <h4>Form Tambah Data Menu</h4>
            <br>
        </div>

        <div class="col text-start">
            <a class="btn btn-warning" href="{{ route('menu.index')}}">Kembali</a>
        </div>
        <!-- Membuat card -->
        <div class="card">
            <form action="{{ route('menu.update', $data->id) }}" method="POSt">
                {{-- {{ csrf_field() }} --}}
                @csrf
                @method('PUT')
                <div class="card-header text-center">
                    <div class="row">
                        <div class="col-11 text-start">
                            <h4>Form Tambah Data Menu</h4>
                        </div>
                        <div class="col-1 text-end">
                            <a class="btn-close" aria-label="Close" href="admin.php"></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="card-body">

                        <!-- Membuat inputan data menu -->
                        <h6>Nama : </h6>
                        <input type="text" name="nama" class="form-control" placeholder="Nama menu" required value="{{ $data->nama}}"><br>

                        <h6>Deskripsi : </h6>
                        <textarea name="deskripsi" class="form-control" rows="2" placeholder="Deskripsi">{{ $data->deskripsi}}</textarea><br>

                        <h6>Harga : </h6>
                        <input type="number" name="harga" class="form-control" placeholder="Harga" required value="{{ $data->harga}}"><br>

                        <h6>Gambar : </h6>
                        <input type="file" name="gambar" class="form-control" {{ $data->gambar}}><br>

                    </div>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
