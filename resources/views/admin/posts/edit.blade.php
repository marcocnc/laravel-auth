@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <h1 class="text-center">Create</h1>

        @if ($errors->any())

            <div class="alert alert-danger" role="alert">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>


            </div>

        @endif


        <form action="{{ route('admin.posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text"
                class="form-control w-75 @error('name')
                    is-invalid
                @enderror"
                id="name"
                name="name"
                value="{{old('name', $post->name)}}"
                placeholder="Inserisci nome">

                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tecnologie usate</label>
                <textarea
                type="text"
                class="form-control w-75 @error('technologies')
                    is-invalid
                @enderror"
                id="technologies"
                name="technologies"
                value="{{old('technologies', $post->technologies)}}"
                placeholder="Inserisci le tecnologie usate"> </textarea>

                @error('technologies')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea
                type="text"
                class="form-control w-75 @error('description')
                    is-invalid
                @enderror"
                id="description"
                name="description"
                value="{{old('description', $post->description)}}"
                placeholder="Inserisci le tecnologie usate"> </textarea>

                @error('description')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Data inizio</label>
                <input
                type="date"
                class="form-control w-25 @error('start')
                    is-invalid
                @enderror"
                id="start"
                name="start"
                value="{{old('start', $post->start)}}">

                @error('start')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Data fine</label>
                <input
                type="date"
                class="form-control w-25"
                id="end"
                name="end"
                value="{{old('end', $post->end)}}">
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
