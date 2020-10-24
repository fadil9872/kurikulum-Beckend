@extends('layouts.bootstrap')

@section('title', 'pencarian')

@section('container')
    <div class="container">
        @foreach ($hasil as $judul)
            <div class="col card mb-1 ml-1">
                <div class="card-body">
                    <p><strong>{{ $judul['judul']}} </strong></p>
                    <p>Penulis   : {{ $judul['penulis']}}  </p>
                    <p>Kategori  : {{ $judul['kategori']}}  </p>
                    <p>{{ substr($judul['subject'],0,200)}} </p>
                    <div class="mr-3 mb-4"style="margin-top:-10px; margin-buttom:20px" >
                        <a href="/artikel/page/{{$judul->id}}/{{$judul->slug}}" class='btn btn-info btn-sm ml-3'> read more </a>
                    </div>
                </div>
            </div>    
        @endforeach
    </div>
@endsection