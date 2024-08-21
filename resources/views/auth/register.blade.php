@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="w-full max-w-md p-8 space-y-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Register</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Create a new account</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ __('Name') }}</label>
                <input id="name" class="block mt-1 w-full border-gray-300 dark:bg-gray-900 dark:border-gray-700 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                @error('name')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ __('Email') }}</label>
                <input id="email" class="block mt-1 w-full border-gray-300 dark:bg-gray-900 dark:border-gray-700 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ __('Password') }}</label>
                <input id="password" class="block mt-1 w-full border-gray-300 dark:bg-gray-900 dark:border-gray-700 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300" type="password" name="password" required autocomplete="new-password" />
                @error('password')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="block mt-1 w-full border-gray-300 dark:bg-gray-900 dark:border-gray-700 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300" type="password" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between mt-6">
                <a class="text-sm text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300 transition-colors duration-300" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button type="submit" class="inline-flex items-center px-6 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
