@extends('layout/aplikasi')

@section('konten')
<h1>{{$judul}}</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet earum ad voluptatum sequi dolor sed temporibus praesentium nam placeat ea!</p>
<p>
    <ul>
        <li>Email : {{ $kontak['email']}}</li>
        <li>Youtube : {{ $kontak['youtube']}}</li>
    </ul>
</p>
@endsection
   