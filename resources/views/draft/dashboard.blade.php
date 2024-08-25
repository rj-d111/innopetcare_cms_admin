@extends('layouts.app')

@section('content')
    <div class="flex h-screen bg-gray-200">
        <div class="flex flex-col w-64 bg-white border-r">
            <div class="flex items-center justify-center h-16 bg-blue-500">
                <h1 class="text-xl font-semibold text-white">statamic</h1>
            </div>
            <div class="flex-1 p-4 overflow-y-auto">
                <ul>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-tachometer-alt"></i>
                            <span class="ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 mt-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-folder"></i>
                            <span class="ml-2">Collections</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 mt-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-bars"></i>
                            <span class="ml-2">Navigation</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 mt-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-tags"></i>
                            <span class="ml-2">Taxonomies</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 mt-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-image"></i>
                            <span class="ml-2">Assets</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 mt-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-globe"></i>
                            <span class="ml-2">Globals</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 mt-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-wrench"></i>
                            <span class="ml-2">Blueprints</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 mt-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-th-large"></i>
                            <span class="ml-2">Fieldsets</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 mt-2 text-gray-700 rounded hover:bg-gray-200">
                            <i class="fa fa-cog"></i>
                            <span class="ml-2">Forms</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col flex-1 overflow-hidden">
            <header class="flex items-center justify-between flex-shrink-0 p-4 bg-white border-b">
                <div class="flex items-center">
                    <button class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="relative mx-4 lg:mx-0">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35m1.1-6.6a7.5 7.5 0 11-10.6 10.6 7.5 7.5 0 0110.6-10.6z">
                                </path>
                            </svg>
                        </span>
                        <input
                            class="w-full py-2 pl-10 pr-4 text-gray-700 bg-gray-200 border rounded-lg focus:outline-none focus:bg-white focus:border-blue-500"
                            type="text" placeholder="Search">
                    </div>
                </div>
                <div class="flex items-center">
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="relative z-10 block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                            <img class="object-cover w-full h-full" src="https://www.tailwind-kit.com/images/person/1.jpg"
                                alt="Your avatar">
                        </button>
                        <div x-show="open" @click.away="open = false"
                            class="absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <div class="text-2xl font-semibold text-gray-700">Getting Started with Statamic</div>
                    <div class="mt-4">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                            <div class="p-4 bg-white rounded-lg shadow">
                                <h2 class="text-lg font-semibold text-gray-700">Read the Documentation</h2>
                                <p class="mt-2 text-gray-500">Get to know Statamic by understanding its capabilities the
                                    right way.</p>
                            </div>
                            <div class="p-4 bg-white rounded-lg shadow">
                                <h2 class="text-lg font-semibold text-gray-700">Create a Collection</h2>
                                <p class="mt-2 text-gray-500">Collections contain the different types of content in the
                                    site.</p>
                            </div>
                            <div class="p-4 bg-white rounded-lg shadow">
                                <h2 class="text-lg font-semibold text-gray-700">Create a Blueprint</h2>
                                <p class="mt-2 text-gray-500">Blueprints define the custom fields used to create and store
                                    content.</p>
                            </div>
                            <div class="p-4 bg-white rounded-lg shadow">
                                <h2 class="text-lg font-semibold text-gray-700">Create a Navigation</h2>
                                <p class="mt-2 text-gray-500">Create multi-level lists of links that can be used to render
                                    navbars, footers, and so on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h2 class="text-xl font-semibold text-gray-700">Latest Articles</h2>
                        <div class="mt-4 bg-white rounded-lg shadow">
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <div class="text-gray-700">Create Entry</div>
                                    <button
                                        class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded hover:bg-blue-600">Create
                                        Entry</button>
                                </div>
                                <div class="mt-4">
                                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                                        <div class="p-4 bg-gray-100 rounded-lg">
                                            <div class="text-sm font-medium text-gray-700">Contact Form Submissions</div>
                                            <div class="text-xs text-gray-500">2022-11-10 18:43</div>
                                            <div class="mt-2 text-sm text-gray-700">Marty McFly</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
