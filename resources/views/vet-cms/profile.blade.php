<div x-data="vetCMS()">
    <form @submit.prevent="updateIframe" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name of Veterinary Management System</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" x-model="systemName" @input="updateIframe">
        </div>
        <div class="mb-4">
            <label for="logo" class="block text-sm font-medium text-gray-700">Logo Picture</label>
            <input type="file" name="logo" id="logo" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" @change="updateLogo">
        </div>
        <div class="mb-4">
            @include('vet-cms.color-picker')
        </div>
        <div class="mb-4">
            <label for="desktopSections" class="block text-sm font-medium text-gray-700">Sections to Be Included (Desktop Version)</label>
            @include('vet-cms.drag-drop-desktop')
        </div>
        <div class="mb-4">
            <label for="mobileSections" class="block text-sm font-medium text-gray-700">Sections to Be Included (Mobile Version)</label>
            @include('vet-cms.drag-drop-mobile')
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Update Preview</button>
    </form>
</div>

<script>
    function vetCMS() {
        return {
            systemName: '',
            logo: null,
            navbarColor: '#0075ce',
            appbarColor: '#0075ce',
            desktopSections: '',
            mobileSections: '',
            iframeSrc: '/preview',

            updateLogo(event) {
                const file = event.target.files[0];
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.logo = e.target.result;
                    this.updateIframe(); // Trigger iframe update after logo is loaded
                };
                reader.readAsDataURL(file);
            },

            async updateIframe() {
                const formData = new FormData();
                formData.append('name', this.systemName);
                formData.append('logo', this.logo);
                formData.append('navbarColor', this.navbarColor);
                formData.append('appbarColor', this.appbarColor);
                formData.append('desktopSections', this.desktopSections);
                formData.append('mobileSections', this.mobileSections);

                console.log("Form Data:", [...formData]); // Debugging: log form data

                const response = await fetch('/preview', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: formData
                });

                const blob = await response.blob();
                const url = URL.createObjectURL(blob);
                this.iframeSrc = url;

                console.log("Iframe updated with URL:", url); // Debugging: log updated iframe URL
            }
        };
    }
</script>
