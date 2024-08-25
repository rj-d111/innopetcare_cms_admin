@extends('layouts.app')




@section('navbar')
    <!-- Navbar -->
    <nav class="fixed w-full bg-amber-900 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <img src="{{ asset('storage/images/innopetcare-white.png') }}" alt="InnoPetCare" class="h-8">
            <div class="flex space-x-4 items-center">
                <div x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false" class="relative">
                    <button class="focus:outline-none">Resources</button>
                    <div x-show="open" class="absolute bg-white text-black mt-2 rounded shadow-lg w-32">
                        <a href="#" class="block px-4 py-2">Templates</a>
                        <a href="#" class="block px-4 py-2">Tutorials</a>
                        <a href="#" class="block px-4 py-2">Help Center</a>
                    </div>
                </div>
                <a href="{{ url('login')}}" class="focus:outline-none">Login</a>
                <a href="#" class="bg-white text-amber-900 px-4 py-2 rounded focus:outline-none">Start Creating</a>
            </div>
        </div>
    </nav>
@endsection

@section('content')
  <!-- Hero Section -->
  <section class="bg-cover bg-center pt-40" style="background-image: url('{{ asset('storage/images/background-pet.jpg') }}');">
    <div class="container mx-auto text-center py-16">
        <h1 class="text-4xl md:text-6xl font-bold text-white">Your furry friends deserve the best.</h1>
        <p class="text-xl md:text-2xl text-white mt-4">Create a website that reflects your passion for animal care with our easy-to-use CMS. No coding required!</p>
        <button class="mt-8 bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold">Start Creating</button>
    </div>
</section>

<!-- CMS Features Section -->
<section class="container mx-auto text-center py-16">
    {{-- <div class="relative inline-block">
        <img src="{{ asset('storage/images/stand-cms.png') }}" alt="Stand" class="w-64 h-32 mx-auto">
        <img src="{{ asset('storage/images/laptop-cms.png') }}" alt="Laptop" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72">
        <img src="{{ asset('storage/images/phone-cms.png') }}" alt="Phone" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 mt-16">
    </div> --}}
</section>

<!-- Footer Section -->
<footer class="container mx-auto text-center py-8">
    <p class="text-gray-800">We at <strong>InnoPetCare</strong> are passionate about animal care. To support this passion, we offer a special feature that can be added to your veterinary clinic website at no extra cost. This feature will automatically link to a page showcasing all animal shelters that use InnoPetCare. By doing this, you can help promote these shelters and contribute to the rescue of animals.</p>
</footer>
@endsection