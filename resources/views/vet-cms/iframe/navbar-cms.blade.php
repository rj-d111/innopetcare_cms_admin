<nav class="navbar" style="background-color: {{ $navbarColor }};">
    <div class="flex justify-between items-center p-4">
        <div class="flex items-center space-x-2">
            <img src="{{ $logo }}" alt="Logo" class="h-10 w-10">
            <nav class="flex space-x-2">
                <a href="#" class="">{{ $name }}</a>
            </nav>
        </div>

        {{-- Account Info --}}
        <div class="flex items-center space-x-2">
            <img src="https://via.placeholder.com/150" alt="User" class="h-8 w-8 rounded-full">
            <span class="text-gray-600">Moreen Sampang</span>
        </div>
    </div>
</nav>
