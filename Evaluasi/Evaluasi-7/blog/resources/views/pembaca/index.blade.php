@extends('layouts.bootstrap')

@section('title', 'Home')

@section('container')

    <div class="container">
       
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h1> Ini Halaman Artikel</h1>

                @foreach ($articless->chunk(3) as $articleChunk)
                    <div class="row">
                        @foreach ($articleChunk as $article)
                        <div class="col card mb-2 ml-2">
                            <div class="card-body">
                                <h4><strong>{{ $article['judul']}} </strong></h4>
                                <p>Penulis   : {{ $article['penulis']}}  </p>
                                <p style="margin-top:-20px;">Kategori  : {{ $article['kategori']}}  </p>
                                <p>{{ substr($article['subject'], 0 , 100)}} </p>
                            </div>
                                <div class="mr-3 mb-4"style="margin-top:-20px; margin-buttom:30px" >
                                    <a href="/artikel/page/{{$article->id}}/{{$article->slug}}" class='btn btn-info btn-sm ml-3'> read more </a>
                                </div>
                        </div>
                        @endforeach
                    </div>    
                @endforeach
            <div style="justify-content:center;">
                {{$articless->links() }}
            </div>
            @foreach ($articlesss as $articles)
                <div class="col card mb-1 ml-1">
                    <div class="card-body">
                        <p><strong>{{ $articles['judul']}} </strong></p>
                        <p>Penulis   : {{ $articles['penulis']}}  </p>
                        <p>Kategori  : {{ $articles['kategori']}}  </p>
                        <p>{{ substr($articles['subject'],0,200)}} </p>

                        <a href="/artikel/page/{{$articles->id}}/{{$articles->slug}}" class='btn btn-info btn-sm'> read more </a>
                    </div>
                </div>    
            @endforeach
        
    </div>
    

@endsection
