@extends('layout/aplikasi')

@section('konten')
    <a href="/obat/create" class="btn btn-primary">+ Tambah Data</a>
    <table class = "table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nama_barang}}</td>
                <td>{{$item->harga}}</td>
                <td>{{$item->satuan}}</td>
                <td>{{$item->stok}}</td>
                <td><a class ='btn btn-success' href='{{ url('/obat/'.$item->id)}}'>Edit</a>
                <a class ='btn btn-danger' href='{{ url('/obat/'.$item->id)}}'>Hapus</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
    {{ $data->links() }}
@endsection