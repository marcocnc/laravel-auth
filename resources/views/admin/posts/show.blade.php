@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <h1>Nome</h1>
    <p class="fs-4">{{$post->name}}</p>

    <h3>Descrizione</h3>
    <p class="w-75">{{$post->description}}</p>

    <h3>Tecnologie usate</h3>
    <p class="w-75">{{$post->technologies}}</p>

    <h3>Data inizio</h3>
    <p class="w-75">{{$date_start_formatted}}</p>

    <h3>Data conclusione</h3>
    <p class="w-75">{{$date_end_formatted}}</p>
</div>
@endsection
