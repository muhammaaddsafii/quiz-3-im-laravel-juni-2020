@extends('layouts/master')

@section('title', 'Quiz 3 - Artikel')

@section('header', 'Detail Artikel')
    

@section('container')
<div class="row">
  <div class="col-6">
      <div class="card" style="">
          <div class="card-body">
            <h5 class="card-title">{{$article->judul}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$article->isi}}</h6>
            <p class="card-text">{{$article->slug}}</p>
            <p class="card-text">{{$article->tag}}</p>
            <a href="" class="card-link">Kembali</a>
          </div>
        </div>
  </div>
</div>
@endsection








