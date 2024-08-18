@extends('layouts.main')

@section('title', 'Squad Manager - ' . $mission->name)

@section('content')
<div class="container mt-5">
    <div class="form-container container-fluid p-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 mb-4">
                <h2 class="mb-4">{{ $mission->name }}</h2>
                <h4 class="mb-2">Localization: {{ $mission->local }}</h4>
                <h4 class="mb-2">Squad: {{ $mission->squad->name }}</h4>
                @if($mission->supports != null)
                    <h4 class="mb-2">Mission Supports: </h4>
                    @foreach($mission->supports as $support)
                        <h5> - {{$support}}</h5>
                    @endforeach
                @endif
                @if($mission->status === 0)
                    <h4 class="text-center bg-success mb-2">Status: Finished</h4>
                @else
                    <h4 class="text-center bg-danger mb-2">Status: Running</h4>
                    <form action="{{ $mission->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button class="form-control bg-success">Finish Mission</button>
                    </form>            
                @endif
            </div>
            <div class="col-md-6 mb-4">
                <img class="card-img-top img-fluid" src="/images/missionsImg/{{ $mission->img }}" alt="Card image cap">
            </div>
        </div>
    </div>
</div>
            <!-- <form action="/createmission" method="POST" enctype="multipart/form-data">
                @csrf
                </form> -->

@endsection

