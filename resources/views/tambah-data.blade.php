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
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                {{-- {{ csrf_field() }} --}}
                @csrf
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
                        {{-- <h6>Nama : </h6>
                        <input type="text" name="nama" class="form-control" placeholder="Nama menu" required><br>

                        <h6>Deskripsi : </h6>
                        <textarea name="deskripsi" class="form-control" rows="2" placeholder="Deskripsi"></textarea><br>

                        <h6>Harga : </h6>
                        <input type="number" name="harga" class="form-control" placeholder="Harga" required><br>

                        <h6>Gambar : </h6>
                        <input type="file" name="gambar" class="form-control"><br> --}}

                        {{-- <div id="show_item">
                            <div class="row">
                                <div class="col-md-2 mb-3">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama menu" required><br>
                                </div>

                                <div class="col-md-3">
                                    <textarea name="deskripsi" class="form-control" rows="2" placeholder="Deskripsi"></textarea><br>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <input type="number" name="harga" class="form-control" placeholder="Harga" required><br>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <input type="file" name="gambar" class="form-control"><br>
                                </div>

                                <div class="col-md-2 mb-3 d-grid">
                                    <button type="button" class="btn btn-success add_item_btn">Add More</button>
                                </div>
                            </div>
                        </div> --}}

                        <div id="show_item">
                            <div class="row">
                                <div class="col-md-2 mb-3">
                                    <input type="text" name="inputs[0][nama]" class="form-control" placeholder="Nama menu" required><br>
                                </div>

                                <div class="col-md-3">
                                    <textarea name="inputs[0][deskripsi]" class="form-control" rows="2" placeholder="Deskripsi"></textarea><br>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <input type="number" name="inputs[0][harga]" class="form-control" placeholder="Harga" required><br>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <input type="file" name="inputs[0][gambar]" class="form-control"><br>
                                </div>

                                <div class="col-md-2 mb-3 d-grid">
                                    <button type="button" class="btn btn-success add_item_btn">Add More</button>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.js"></script> --}}
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>

    <script>
        var i = 0;
        $(document).ready(function () {
            $(".add_item_btn").click(function () {
                ++i;
                // e.preventDefault();
                // $("#show_item").append(`<div class="row">
                //                 <div class="col-md-2 mb-3">
                //                     <input type="text" name="nama" class="form-control" placeholder="Nama menu" required><br>
                //                 </div>

                //                 <div class="col-md-3">
                //                     <textarea name="deskripsi" class="form-control" rows="2" placeholder="Deskripsi"></textarea><br>
                //                 </div>

                //                 <div class="col-md-2 mb-3">
                //                     <input type="number" name="harga" class="form-control" placeholder="Harga" required><br>
                //                 </div>

                //                 <div class="col-md-3 mb-3">
                //                     <input type="file" name="gambar" class="form-control"><br>
                //                 </div>

                //                 <div class="col-md-2 mb-3 d-grid">
                //                     <button type="button" class="btn btn-danger remove_item_btn">Remove</button>
                //                 </div>
                //             </div>`);
                $("#show_item").append(`<div class="row">
                                <div class="col-md-2 mb-3">
                                    <input type="text" name="inputs['+i+'][nama]" class="form-control" placeholder="Nama menu" required><br>
                                </div>

                                <div class="col-md-3">
                                    <textarea name="inputs['+i+'][deskripsi]" class="form-control" rows="2" placeholder="Deskripsi"></textarea><br>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <input type="number" name="inputs['+i+'][harga]" class="form-control" placeholder="Harga" required><br>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <input type="file" name="inputs['+i+'][gambar]" class="form-control"><br>
                                </div>

                                <div class="col-md-2 mb-3 d-grid">
                                    <button type="button" class="btn btn-danger remove_item_btn">Remove</button>
                                </div>
                            </div>`);
            });
        })

        $(document).on("click", ".remove_item_btn", function (e) {
            e.preventDefault();
            let row_item = $(this).closest(".row");
            $(row_item).remove();
        })
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
