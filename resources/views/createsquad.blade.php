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
</div>


@endsection

