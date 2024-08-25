@extends('layouts.app')

@section('contents')
<div class="container mx-auto flex flex-col md:flex-row items-center justify-center min-h-screen">
    <!-- Image Section -->
    <div class="md:w-1/2 flex justify-center">
        <img src="{{ asset('storage/images/platform.png') }}" alt="Platform" class="w-3/4">
    </div>
    <!-- Login Form Section -->
    <div class="md:w-1/2 bg-white p-8 rounded-lg shadow-lg">
        <div class="text-center mb-8">
            <img src="{{ asset('storage/images/innopetcare-black.png') }}" alt="InnoPetCare" class="w-48 mx-auto mb-4">
            <h2 class="text-2xl font-bold">Login as a Website Creator</h2>
            <p class="text-gray-600 mt-2">Welcome! Login to your account. Let's work together to care for our furry friends.</p>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" required>
            </div>
            <div class="mb-4 flex justify-between items-center">
                <a href="" class="text-sm text-gray-600">Forgot password?</a>
            </div>
            <button type="submit" class="w-full bg-gray-800 text-white px-4 py-2 rounded-lg font-semibold hover:bg-gray-900">LOG IN</button>
            <div class="mt-4 text-center">
                <span class="text-gray-600">Don't have an account? <a href="" class="text-gray-800 font-bold">Register</a></span>
            </div>
        </form>
    </div>
</div>
@endsection