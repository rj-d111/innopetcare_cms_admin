<div x-data="app()" x-init="initColors()" class="relative">
    <div>
        <!-- Navbar Color Picker -->
        <label for="navbar-color-picker" class="block mb-1 font-semibold">Navbar Color (For Desktop Users)</label>
        <div class="flex flex-row relative items-center">
            <input id="navbar-color-picker" type="color" class="border border-gray-400 p-2 rounded-lg" x-model="navbarColor" @input="updateNavbarColor">
            <div @click="toggleColorPicker('navbar')" class="cursor-pointer rounded-full ml-3 my-auto h-10 w-10 flex" :style="{ backgroundColor: navbarColor }">
                <svg xmlns="http://www.w3.org/2000/svg" :class="navbarIconColor" class="h-6 w-6 mx-auto my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
            </div>
            <span class="ml-2" x-text="navbarColor"></span>
            <div x-show="navbarPickerOpen" @click.away="navbarPickerOpen = false" x-transition class="border border-gray-300 origin-top-right absolute left-16 top-0 mt-2 rounded-md shadow-lg">
                <div class="rounded-md bg-white shadow-xs p-2">
                    <input type="color" class="border border-gray-400 p-2 rounded-lg" x-model="navbarColor" @input="updateNavbarColor" @click.stop>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <!-- App Bar Color Picker -->
        <label for="appbar-color-picker" class="block mb-1 font-semibold">App Bar Color (For Mobile Users)</label>
        <div class="flex flex-row relative items-center">
            <input id="appbar-color-picker" type="color" class="border border-gray-400 p-2 rounded-lg" x-model="appbarColor" @input="updateAppbarColor">
            <div @click="toggleColorPicker('appbar')" class="cursor-pointer rounded-full ml-3 my-auto h-10 w-10 flex" :style="{ backgroundColor: appbarColor }">
                <svg xmlns="http://www.w3.org/2000/svg" :class="appbarIconColor" class="h-6 w-6 mx-auto my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
            </div>
            <span class="ml-2" x-text="appbarColor"></span>
            <div x-show="appbarPickerOpen" @click.away="appbarPickerOpen = false" x-transition class="border border-gray-300 origin-top-right absolute left-16 top-0 mt-2 rounded-md shadow-lg">
                <div class="rounded-md bg-white shadow-xs p-2">
                    <input type="color" class="border border-gray-400 p-2 rounded-lg" x-model="appbarColor" @input="updateAppbarColor" @click.stop>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function app() {
        return {
            navbarColor: '#0075ce', // Default navbar color
            appbarColor: '#0075ce', // Default appbar color
            navbarIconColor: 'text-white',
            appbarIconColor: 'text-white',
            navbarPickerOpen: false,
            appbarPickerOpen: false,
            initColors() {
                this.setIconColor(this.navbarColor, 'navbar');
                this.setIconColor(this.appbarColor, 'appbar');
            },
            setIconColor(hexColor, type) {
                const luminance = this.getLuminance(hexColor);
                if (type === 'navbar') {
                    this.navbarIconColor = luminance > 0.5 ? 'text-black' : 'text-white';
                } else if (type === 'appbar') {
                    this.appbarIconColor = luminance > 0.5 ? 'text-black' : 'text-white';
                }
            },
            getLuminance(hexColor) {
                const r = parseInt(hexColor.slice(1, 3), 16) / 255;
                const g = parseInt(hexColor.slice(3, 5), 16) / 255;
                const b = parseInt(hexColor.slice(5, 7), 16) / 255;
                const a = [r, g, b].map(v => v <= 0.03928 ? v / 12.92 : Math.pow((v + 0.055) / 1.055, 2.4));
                return (0.2126 * a[0] + 0.7152 * a[1] + 0.0722 * a[2]);
            },
            updateNavbarColor(event) {
                this.navbarColor = event.target.value;
                this.setIconColor(this.navbarColor, 'navbar');
                this.navbarPickerOpen = false;
            },
            updateAppbarColor(event) {
                this.appbarColor = event.target.value;
                this.setIconColor(this.appbarColor, 'appbar');
                this.appbarPickerOpen = false;
            },
            toggleColorPicker(type) {
                if (type === 'navbar') {
                    this.navbarPickerOpen = !this.navbarPickerOpen;
                    if (this.navbarPickerOpen) {
                        this.$nextTick(() => document.getElementById('navbar-color-picker').click());
                    }
                } else if (type === 'appbar') {
                    this.appbarPickerOpen = !this.appbarPickerOpen;
                    if (this.appbarPickerOpen) {
                        this.$nextTick(() => document.getElementById('appbar-color-picker').click());
                    }
                }
            }
        }
    }
</script>
