@extends('layouts.bootstrap')

@section('title', 'Artikel')

@section('container')
    
    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <div class="card-body">
                    <p><strong> {{ $article->judul}} </strong></p>
                    <p>Penulis   : {{ $article->penulis}}  </p>
                    <p>Kategori  : {{ $article->kategori}}  </p>
                    <p>{{ $article->subject}}</p>

                    <a href="/artikel" class="btn btn-primary">kembali</a>

                </div>
            </div>
        </div>
    </div>


@endsection