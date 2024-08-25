@extends('layouts.app')

@section('content')

<section class="flex justify-center items-center h-screen bg-gray-100">
    <div x-data="navbar" class="bg-white p-4 rounded shadow-lg">
        <h2 class="text-xl font-bold mb-4">Sections to be Included Navbar (Desktop Version)</h2>
        <div class="flex">
            <div class="w-1/2 bg-gray-200 p-4 rounded" x-ref="navbarArea" @dragover.prevent @drop="drop">
                <template x-for="(item, index) in navbarItems" :key="index">
                    <div class="flex items-center justify-between bg-white p-2 mb-2 rounded shadow"
                        :class="{'dragging': draggedItemIndex === index || draggedOverIndex === index}"
                        draggable="true"
                        @dragstart="dragStart(index)"
                        @dragover="dragOver(index)"
                        @dragend="dragEnd">
                        <span x-text="item"></span>
                        <button @click="removeItem(index)" class="text-red-500 hover:text-red-700">&times;</button>
                    </div>
                </template>
            </div>
            <div class="w-1/2 p-4">
                <h3 class="font-semibold mb-2">Contents to Drag and Drop</h3>
                <template x-for="(item, index) in availableItems" :key="index">
                    <div class="flex items-center bg-white p-2 mb-2 rounded shadow"
                        :class="{'dragging': draggedAvailableIndex === index}"
                        draggable="true"
                        @dragstart="dragStartAvailable(index)"
                        @dragend="dragEnd">
                        <span x-text="item"></span>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>

<script>
    function navbar() {
        return {
            navbarItems: ['Home'],
            availableItems: ['Services', 'About Us', 'Appointments', 'Contact Us', 'Medical Records'],
            draggedItemIndex: null,
            draggedAvailableIndex: null,
            draggedOverIndex: null,
            maxItems: 5,

            dragStart(index) {
                this.draggedItemIndex = index;
            },
            dragStartAvailable(index) {
                this.draggedAvailableIndex = index;
            },
            dragOver(index) {
                this.draggedOverIndex = index;
            },
            dragEnd() {
                this.draggedItemIndex = null;
                this.draggedAvailableIndex = null;
                this.draggedOverIndex = null;
            },
            drop(event) {
                if (this.draggedItemIndex !== null) {
                    const item = this.navbarItems.splice(this.draggedItemIndex, 1)[0];
                    if (this.draggedOverIndex !== null && this.draggedOverIndex !== this.draggedItemIndex) {
                        this.navbarItems.splice(this.draggedOverIndex, 0, item);
                    } else {
                        this.navbarItems.push(item);
                    }
                    this.draggedItemIndex = null;
                } else if (this.draggedAvailableIndex !== null) {
                    if (this.navbarItems.length >= this.maxItems) {
                        alert('Maximum of 5');
                        return;
                    }
                    const item = this.availableItems.splice(this.draggedAvailableIndex, 1)[0];
                    if (this.draggedOverIndex !== null) {
                        this.navbarItems.splice(this.draggedOverIndex, 0, item);
                    } else {
                        this.navbarItems.push(item);
                    }
                    this.draggedAvailableIndex = null;
                }
                this.draggedOverIndex = null;
            },
            removeItem(index) {
                const item = this.navbarItems.splice(index, 1)[0];
                this.availableItems.push(item);
            }
        };
    }
</script>
@endsection
