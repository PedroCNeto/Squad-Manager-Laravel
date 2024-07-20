@extends('layouts.main')

@section('title', 'Squad Manager - Create Squad')

@section('content')
<div class="container mt-5">
    <div class="form-container container-fluid p-3">
        <h2 class="text-center mb-4">Creating Squads</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 mb-4">
            <form action="/createsquad" method="POST">
                @csrf
                <div class="row mb-4">
                    <div class="col-auto d-flex align-items-center">
                        <label for="namesquad" class="mb-0">Squad Name: </label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="namesquad" placeholder="Insert the squad name here..." id="namesquad">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-auto d-flex align-items-center">
                        <label for="ranksquad" class="mb-0">Squad Rank: </label>
                    </div>
                    <div class="col">
                    <select name="ranksquad" id="ranksquad" class="form-control">
                        <option value="Sargent">Sargent</option>
                        <option value="Lieutenant">Lieutenant</option>
                        <option value="Captain">Captain</option>
                        <option value="Major">Major</option>
                        <option value="Colonel">Colonel</option>
                        <option value="General">General</option>
                    </select>                  
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto me-auto ms-auto d-flex">
                        <button type="submit" class="form-control bg-success">Confirm</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
        <div class="row mt-5">
            @foreach ($squads as $squad)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/squad.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $squad->name }} - {{ $squad->rank }}</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    @if($squad->status === 0)
                        <p class="card-text bg-success ms-auto me-auto mb-2"><small class="p-2">Free time</small></p>
                    @else
                        <p class="card-text bg-danger ms-auto me-auto mb-2"><small class="p-2">In Mission</small></p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
</div>


@endsection

