@extends('layouts.dashboard')

@section('title', 'Artikel')

@section('container')
    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p><strong> {{ $article->judul}} </strong></p>
                <p>Penulis   : {{ $article->penulis}}  </p>
                <p>Kategori  : {{ $article->kategori}}  </p>
                <p>{{ $article->subject}}</p>
                <a href="/article/edit/{{$article->id}}" class='btn btn-primary'> edit </a>
                <a href="/article" class="btn btn-primary">kembali</a>
        
                <form action="/article/delete/{{$article->id}}" method="post" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger d-inline">Delete</button>
                </form>
            </div>
        </div>
    </div>


@endsection