@extends('layouts.dashboard')

@section('title', 'Home')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Tambah Data Artikel</h1>

                <form method="post" action="/article">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukan judul" name="judul" value="{{ old('judul') }} ">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="Masukan penulis" name="penulis" value="{{ old('penulis') }} ">
                        @error('penulis') 
                            <div class="invalid-feedback">{{ $message }} </div> 
                        @enderror 
                    </div>                    
                    <div class="form-group">
                        <label for="kategori">Ketegori</label>
                        <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="Masukan kategori" name="kategori" value="{{ old('kategori') }} ">
                        @error('kategori') 
                            <div class="invalid-feedback">{{ $message }} </div> 
                        @enderror 
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <textarea class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" rows="3" >{{ old('subject') }} </textarea>
                    </div>
           
                        <button type="submit" class="btn btn-primary m-3">Sumbit</button>
                </form>

            </div>
        </div>
    </div>
@endsection