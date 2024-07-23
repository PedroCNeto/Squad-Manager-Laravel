@extends('layouts.main')

@section('title', 'Squad Manager - ' . $mission->name)

@section('content')
<div class="container mt-5">
    <div class="form-container container-fluid p-3">
        <h2 class="text-center mb-4">Creating Mission</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 mb-4">
            <form action="/createmission" method="POST" enctype="multipart/form-data">
                @csrf
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

