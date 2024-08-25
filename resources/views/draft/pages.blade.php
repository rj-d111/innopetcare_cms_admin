@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-700">Pages</h2>
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Create Entry
                </button>
            </div>

            <ul class="divide-y divide-gray-200">
                <li class="flex items-center justify-between py-4">
                    <div class="flex items-center">
                        <i class="fa fa-home text-green-500 mr-3"></i>
                        <span>Home</span>
                    </div>
                    <span class="text-sm text-gray-500">LANDING</span>
                </li>
                <li class="flex items-center justify-between py-4">
                    <div class="flex items-center">
                        <i class="fa fa-newspaper text-green-500 mr-3"></i>
                        <span>News & Press</span>
                        <button class="ml-2 text-blue-500 hover:text-blue-700 focus:outline-none">
                            <i class="fa fa-edit"></i> Add/Edit
                        </button>
                    </div>
                    <span class="text-sm text-gray-500">PAGE</span>
                </li>
                <li class="flex items-center justify-between py-4">
                    <div class="flex items-center">
                        <i class="fa fa-envelope text-green-500 mr-3"></i>
                        <span>Contact Us</span>
                    </div>
                    <span class="text-sm text-gray-500">PAGE</span>
                </li>
            </ul>

            <div class="flex justify-between items-center mt-4">
                <div class="flex space-x-2">
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        <i class="fa fa-th"></i>
                    </button>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        <i class="fa fa-list"></i>
                    </button>
                </div>
                <button
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Save Changes
                </button>
            </div>
        </div>
    </div>
@endsection
