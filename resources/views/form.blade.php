@extends('layouts/master')

@section('title', 'Quiz 3 - Create Artikel')

@section('header', 'Form Menambah Data Artikel')
    

@section('container')
<form class="col-4" method="POST" action="/artikel">
    @csrf
    <div class="form-group" >
      <label for="title">Masukkan Judul Artikel</label>
      <input type="text" class="form-control" id="title" name="judul">
      <label for="content">Masukkan Isi</label>
      <input type="text" class="form-control" id="content" name="isi">
      <label for="slug">Masukkan Slug Artikel</label>
      <input type="text" class="form-control" id="slug" name="slug">
      <label for="tag">Masukkan Tag Artikel</label>
      <input type="text" class="form-control" id="tag" name="tag">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection







