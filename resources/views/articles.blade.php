@extends('layouts/master')

@section('title', 'Quiz 3 - Artikel')

@section('header', 'Daftar Artikel')
    

@section('container')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul Artikel</th>
        <th scope="col">Isi Artikel</th>
        <th scope="col">Slug Artikel</th>
        <th scope="col">Tag Artikel</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
      <tr>
      <th scope="row">{{$article->id}}</th>
        <td>{{$article->judul}}</td>
        <td>{{$article->isi}}</td>
        <td>{{$article->slug}}</td>
        <td>{{$article->tag}}</td>
        <td>
          <a href="/artikel/{{$article->id}}" class="badge badge-primary">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/artikel/create" class="btn btn-info">Tambah Data Artikel</a>
@endsection

@push('scripts')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush







