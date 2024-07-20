@extends('layouts.main')

@section('title', 'Squad Manager - Main')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($missions as $mission)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="/images/squad.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $mission->name }} - {{ $mission->local }}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                @if($mission->status === 0)
                    <p class="card-text bg-success ms-auto me-auto mb-2"><small class="p-2">Finished</small></p>
                @else
                    <p class="card-text bg-danger ms-auto me-auto mb-2"><small class="p-2">Running</small></p>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

