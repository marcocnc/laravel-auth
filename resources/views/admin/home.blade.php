@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary py-4">
        Dashboard
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Ciao {{Auth::user()->name}}, bentornato!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
