@extends('layouts.simple')

@section('title', 'Login - Squad Manager')

@section('content')

<main>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-card" style="background-color: #1f2121">
                <div>
                    <x-label for="email" class="text-white" value="{{ __('Email') }}" />
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" class="text-white" value="{{ __('Password') }}" />
                    <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me"  name="remember" />
                        <span class="ms-2 text-sm text-gray-600 text-white">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ms-4 bg-secondary">
                        {{ __('Log in') }}
                    </x-button>
                </div>
                <x-validation-errors class="mt-4 text-center text-white" />
            </div>

        </form>
</div>
</main>

@endsection


