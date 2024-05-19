
<!-- Halaman ini untuk menampilkan isi dari sebuah / single Artikel yg sudah di pilih dari halaman blog.blade.php !-->
<!DOCTYPE html>
<html lang="en">

@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $posti->judul }}</h2>
        <h4>Created by : {{ $posti->penulis }} in <a href="/categories/{{$posti->category->slug}}">{{ $posti->category->name }} </a></h4>
        <p>{!! $posti->artikel !!} </p>
    </article>
    <a href="/blog">Back to Post</a>
@endsection