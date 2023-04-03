@extends('layouts.app')

@section('content')
<div class="container-sm">
    <br>

    <div class="row">
        <div class="col">
            <div class="col text-start">
                <a class="btn btn-primary" href="{{ route('menu.create')}}">Tambah Menu</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>
        <div class="col">
            <div class="col text-end">
                <a class="btn btn-warning" href="/">Kembali</a>
            </div>
        </div>
    </div>

    <br>

    <div class="card">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data menu</h4>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $no}}</td>
                            <td>{{ $row->nama}}</td>
                            <td>{{ $row->deskripsi}}</td>
                            <td>{{ $row->harga}}</td>
                            <td>
                                {{-- {{ $row->gambar}} --}}
                                <img src="{{ asset('fotoMenu/'.$row->gambar) }}" alt="" width="60px">
                            </td>
                            <td>
                                <a href="{{ route('menu.edit', $row->id)}}" class="btn btn-warning" >Edit</a>
                                <form action="{{ route('menu.destroy', $row->id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                                {{-- <a href="{{ route('menu.destroy', $row->id)}}" class="btn btn-danger">Hapus</a> --}}
                            </td>
                        </tr>
                        @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection
