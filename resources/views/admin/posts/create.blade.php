@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <h1 class="text-center">Create</h1>

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control w-75" placeholder="Inserisci nome">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tecnologie usate</label>
                <textarea type="text" class="form-control w-75" placeholder="Inserisci le tecnologie usate"> </textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data inizio</label>
                <input type="date" class="form-control w-25">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data fine</label>
                <input type="date" class="form-control w-25">
            </div>
        </form>
    </div>
@endsection
