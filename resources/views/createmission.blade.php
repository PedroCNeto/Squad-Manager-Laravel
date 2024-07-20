@extends('layouts.main')

@section('title', 'Squad Manager - Create Mission')

@section('content')
<div class="container mt-5">
    <div class="form-container container-fluid p-3">
        <h2 class="text-center mb-4">Creating Mission</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 mb-4">
            <form action="/createmission" method="POST">
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
                            <option value="{{ $squad->id }}">{{$squad->name}} - {{$squad->rank}}</option>
                        @endforeach
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
</div>


@endsection

