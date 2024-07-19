@extends('layouts.main')

@section('title', 'Squad Manager - Main')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($squads as $squad)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="/images/squad.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $squad->name }} - {{ $squad->rank }}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

