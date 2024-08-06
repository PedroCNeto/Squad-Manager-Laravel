@extends('layouts.simple')

@section('title', 'Register - Squad Manager')

@section('content')

<main>
    <div class="d-flex justify-content-center flex-direction-column align-items-center" style="height: 100vh;">
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <h1 class="text-center mb-4 font-weight-bold">Squad Manager</h1>    
            <div class="login-card w-50 me-auto ms-auto" style="background-color: #1f2121">
                <div class="mb-4 text-wrap text-white">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                <div class="block">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="d-flex mt-4">
                    <x-button class="w-50 form-control bg-secondary">
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                    <a class="underline text-sm text-gray-600 ms-4 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Login Page') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
</main>

@endsection
