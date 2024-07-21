@extends('layouts.main')

@section('title', 'Squad Manager - Create Mission')

@section('content')
<div class="container mt-5">
    <div class="form-container container-fluid p-3">
        <h2 class="text-center mb-4">Creating Mission</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 mb-4">
            <form action="/createmission" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <div class="col-auto d-flex align-items-center">
                        <label for="namemission" class="mb-0">Mission Name: </label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="namemission" placeholder="Insert the mission name here..." id="namemission">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-auto d-flex align-items-center">
                        <label for="placemission" class="mb-0">Mission Place: </label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="placemission" placeholder="Insert the place of the name here..." id="placemission">       
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-auto d-flex align-items-center">
                        <label for="squad_id" class="mb-0">Squad: </label>
                    </div>
                    <div class="col">
                    <select name="squad_id" id="squad_id" class="form-control">
                        @foreach ($squads as $squad)
                            @if($squad->status === 0)
                                <option value="{{ $squad->id }}">{{$squad->name}} - {{$squad->rank}}</option>
                            @endif
                        @endforeach
                    </select>                  
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-auto d-flex align-items-center">
                        <label for="image" class="mb-0">Mission Image: </label>
                    </div>
                    <div class="col">
                        <input type="file" id="image" name="image" class="form-control-file">
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
        @foreach ($missions as $mission)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="/images/missionsImg/{{ $mission->img }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $mission->name }} - {{ $mission->local }}</h5>
                    <p class="card-text text-center">Squad - {{ $mission->squad->name }}.</p>
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
