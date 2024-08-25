@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <form id="veterinaryForm">
            <!-- Veterinary Name -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="veterinary-name">
                    Veterinary Name
                </label>
                <input type="text" id="veterinary-name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter Veterinary Name" required>
            </div>

            <!-- Logo Icon -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="logo-icon">
                    Logo Icon
                </label>
                <input type="file" id="logo-icon"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Navbar Color -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="navbar-color">
                    Navbar Color
                </label>
                <input type="color" id="navbar-color"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <!-- Appbar Color -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="appbar-color">
                    Appbar Color
                </label>
                <input type="color" id="appbar-color"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <!-- Sections to be Included -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Sections to be Included
                </label>
                <div class="flex items-center mb-2">
                    <input type="checkbox" id="appointments" class="mr-2 leading-tight">
                    <label for="appointments" class="text-gray-700">Appointments</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="checkbox" id="patients" class="mr-2 leading-tight">
                    <label for="patients" class="text-gray-700">Patients</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="checkbox" id="billing" class="mr-2 leading-tight">
                    <label for="billing" class="text-gray-700">Billing</label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
