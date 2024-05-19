
<!DOCTYPE html>
<html lang="en">

@extends('layouts.main')
@section('container')
    @foreach ($posti as $postingan)
        <article class="mb-5">
            <h2>
                <a href="blog/{{ $postingan->slug }}/"> {{ $postingan->judul }} </a>
            </h2>
            <h5> By : {{ $postingan->penulis }} </h5>
            <p>{{ $postingan->excerpt }} </p>
        </article>
    @endforeach
@endsection

