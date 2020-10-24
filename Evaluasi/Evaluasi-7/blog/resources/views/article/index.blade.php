@extends('layouts.dashboard')

@section('title', 'Home')

@section('container')

    <div class="container">
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h1> Ini Halaman Artikel</h1>

        @foreach ($articles->chunk(3) as $articleChunk)
            <div class="row">
                @foreach ($articleChunk as $article)
                <div class="col card mb-1 ml-1">
                    <div class="card-body">
                        <p><strong>{{ $article['judul']}} </strong></p>
                        <p>Penulis   : {{ $article['penulis']}}  </p>
                        <p>Kategori  : {{ $article['kategori']}}  </p>
                        <p>{{ substr($article['subject'], 0 , 100)}}.... </p>
                        <a href="/article/detail/{{$article->id}}/{{$article->slug}}" class='btn btn-info btn-sm'> detail </a>
                    </div>
                </div>
                @endforeach
            </div>    
        @endforeach
        <div>
            {{$articles->links() }}
        </div>
    </div>
    

@endsection
