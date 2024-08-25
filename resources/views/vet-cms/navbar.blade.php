<div class="fixed w-full bg-white first-navbar z-10" x-data="{ view: 'desktop', editing: false }">
    <section id="navbar-1" class="p-4 shadow mb-1">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('storage/images/innopetcare-logo.svg') }}" alt="Logo" class="h-10 w-10">
                <nav class="flex space-x-2">
                    <a href="#" class="">Home</a>
                    <span class="text-gray-600">/</span>
                    <a href="#" class="text-gray-600">Vet Management System</a>
                </nav>
            </div>
    
            {{-- Account Info --}}
            <div class="flex items-center space-x-2">
                <img src="https://via.placeholder.com/150" alt="User" class="h-8 w-8 rounded-full">
                <span class="text-gray-600">Moreen Sampang</span>
            </div>
        </div>
    </section>
    
    <section id="navbar-2" class="p-4 shadow mb-4">
        <div class="flex justify-between items-center">
            {{-- Project Title --}}
            <div class="flex items-center space-x-4">
                <input type="text" x-show="editing" x-model="projectName" class="border border-gray-300 rounded p-1"
                    @blur="editing = false">
                <span x-show="!editing" @click="editing = true" class="cursor-pointer">Sample Vet Management</span>
            </div>
    
            {{-- Screen Previews --}}
            <div class="flex space-x-2">
                <button @click="view = 'desktop'"
                    :class="{ 'bg-blue-500 text-white': view === 'desktop', 'bg-gray-200 text-gray-600': view !== 'desktop' }"
                    class="p-2 rounded">
                    <img src="{{ asset('storage/images/laptop.svg') }}" alt="Desktop" class="h-5 w-5">
                </button>
                <button @click="view = 'mobile'"
                    :class="{ 'bg-blue-500 text-white': view === 'mobile', 'bg-gray-200 text-gray-600': view !== 'mobile' }"
                    class="p-2 rounded">
                    <img src="{{ asset('storage/images/mobile.svg') }}" alt="Mobile" class="h-5 w-5">
                </button>
            </div>
    
            {{-- Action Buttons --}}
            <div class="flex items-center space-x-2">
                <button class="bg-gray-200 p-2 rounded">Preview</button>
                <button class="bg-gray-200 p-2 rounded">Save</button>
                <button class="bg-blue-500 text-white p-2 rounded">Publish</button>
            </div>
        </div>
    </section>
    
</div>


<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('projectData', () => ({
            projectName: 'Sample Vet Management'
        }));
    });
</script>
