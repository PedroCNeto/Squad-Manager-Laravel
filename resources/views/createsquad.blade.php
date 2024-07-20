@extends('layouts.main')

@section('title', 'Squad Manager - Create Squad')

@section('content')
<div class="container mt-5">
    <div class="form-container container-fluid bg-body p-4">
        <h2 class="text-center mb-4">Creating Squads</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="row">
                    <div class="col-auto d-flex align-items-center">
                        <label for="name-squad" class="mb-0">Squad Name: </label>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" name="name-squad" id="name-squad">
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <label for="rank-squad" class="mb-0">Squad Rank: </label>
                    </div>
                    <div class="col">
                        <select name="rank-squad" id="rank-squad" class="form-control">
                            <option value="Teste">Teste</option>
                        </select>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

