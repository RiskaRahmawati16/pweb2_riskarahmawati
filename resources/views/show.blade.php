@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href='/obat' class="btn btn-secondary"> << Kembali </a>
        <h1>{{ $data->id}}</h1>
        <p>
            <b>Nama Barang</b> {{ $data->nama_barang}}
        </p>

        <p>
            <b>Harga</b> {{ $data->harga}}
        </p>

        <p>
            <b>Satuan</b> {{ $data->satuan}}
        </p>

        <p>
            <b>Stok</b> {{ $data->stok}}
        </p>
    </div>
@endsection