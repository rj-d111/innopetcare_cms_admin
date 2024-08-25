@extends('layouts.app')

@section('title', 'Create Vet Management System')

@section('navbar')
    @include('vet-cms.navbar')
@endsection

@section('content')
    <div class="pt-24"></div>
    <div x-data="{ open: false }" class="min-h-screen flex">
        <!-- Drawer for small screens -->
        <div x-show="open" x-cloak class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
            <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>
            <div x-show="open" x-transition
                class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
                <div class="px-4 pt-5 pb-2 flex">
                    <button @click="open = false" class="-m-2 p-2 inline-flex items-center justify-center text-gray-400">
                        <span class="sr-only">Close menu</span>
                        <!-- Heroicon name: x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-2">
                    <a href="#" class="block px-4 py-2 text-gray-900 font-semibold">Home</a>
                    <a href="#" class="block px-4 py-2 text-gray-900">Services</a>
                    <a href="#" class="block px-4 py-2 text-gray-900">Appointments</a>
                    <a href="#" class="block px-4 py-2 text-gray-900">Medical Records</a>
                    <a href="#" class="block px-4 py-2 text-gray-900">Profile</a>
                </div>
            </div>
        </div>

        <!-- Sidebar for larger screens -->
        <div class="hidden lg:flex lg:flex-col lg:w-64 bg-white p-4">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('storage/app/public/images/innopetcare-logo.svg') }}" alt="Logo" class="h-10 w-10">
                <h1 class="text-xl font-bold">Vet Management</h1>
            </div>
            <nav class="mt-6 space-y-1">
                <a href="#" class="block px-4 py-2 text-gray-900 font-semibold">Home</a>
                <a href="#" class="block px-4 py-2 text-gray-900">Services</a>
                <a href="#" class="block px-4 py-2 text-gray-900">Appointments</a>
                <a href="#" class="block px-4 py-2 text-gray-900">Medical Records</a>
                <a href="#" class="block px-4 py-2 text-gray-900">Profile</a>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h2 class="text-xl font-bold">Vet Management System</h2>
                <button @click="open = !open" class="lg:hidden text-gray-600">
                    <!-- Heroicon name: menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </header>
            <main class="flex-1 p-4 grid grid-cols-3 gap-4">
                <!-- Web preview will be hidden on small screens -->
                <div class="hidden lg:block col-span-2">
                    <!-- Web preview content here -->
                    <div class="border rounded-lg p-4 bg-white">
                        <h3 class="text-lg font-semibold mb-4">Web Preview</h3>
                        <!-- Your web preview content goes here -->
                        @include('vet-cms.preview-web')
                    </div>
                </div>
                <!-- Profile and other sections -->
                <div class="col-span-3 lg:col-span-1">
                    <div class="border rounded-lg p-4 bg-white">
                        <h3 class="text-lg font-semibold mb-4">Profile</h3>
                        @include('vet-cms.profile')
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
