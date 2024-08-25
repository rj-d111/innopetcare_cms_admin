@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8" x-data="{
        panels: [{
            image: '',
            teaser: '',
            heading: '',
            content: ''
        }]
    }">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Home</h2>

            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="main-heading">Main Heading</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="main-heading" type="text" placeholder="Main Heading">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="subtext">Subtext</label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="subtext" rows="3" placeholder="Write your subtext here..."></textarea>
                </div>

                <div class="mb-4" x-data="{ activeTab: 'write' }">
                    <div class="flex mb-2">
                        <button type="button"
                            :class="{ 'bg-blue-500 text-white': activeTab === 'write', 'bg-gray-200 text-gray-700': activeTab !== 'write' }"
                            @click="activeTab = 'write'"
                            class="py-2 px-4 rounded-tl rounded-bl focus:outline-none">Write</button>
                        <button type="button"
                            :class="{ 'bg-blue-500 text-white': activeTab === 'preview', 'bg-gray-200 text-gray-700': activeTab !== 'preview' }"
                            @click="activeTab = 'preview'"
                            class="py-2 px-4 rounded-tr rounded-br focus:outline-none">Preview</button>
                    </div>
                    <textarea x-show="activeTab === 'write'"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="content" rows="5" placeholder="Write your content here..."></textarea>
                    <div x-show="activeTab === 'preview'" class="p-4 bg-gray-100 rounded">Preview content here...</div>
                </div>

                <h3 class="text-xl font-semibold text-gray-700 mt-6 mb-4">Panels</h3>

                <template x-for="(panel, index) in panels" :key="index">
                    <div class="mb-6 bg-gray-100 p-4 rounded-lg shadow-inner">
                        <h4 class="text-lg font-semibold text-gray-700 mb-4">Panel <span x-text="index + 1"></span></h4>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="panel-image">Panel Image</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="file" x-model="panel.image">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="panel-teaser">Panel
                                Teaser</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Panel Teaser" x-model="panel.teaser">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="panel-heading">Panel
                                Heading</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Panel Heading" x-model="panel.heading">
                        </div>

                        <div class="mb-4" x-data="{ activeTab: 'write' }">
                            <div class="flex mb-2">
                                <button type="button"
                                    :class="{ 'bg-blue-500 text-white': activeTab === 'write', 'bg-gray-200 text-gray-700': activeTab !== 'write' }"
                                    @click="activeTab = 'write'"
                                    class="py-2 px-4 rounded-tl rounded-bl focus:outline-none">Write</button>
                                <button type="button"
                                    :class="{ 'bg-blue-500 text-white': activeTab === 'preview', 'bg-gray-200 text-gray-700': activeTab !== 'preview' }"
                                    @click="activeTab = 'preview'"
                                    class="py-2 px-4 rounded-tr rounded-br focus:outline-none">Preview</button>
                            </div>
                            <textarea x-show="activeTab === 'write'"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                rows="5" placeholder="Panel Content" x-model="panel.content"></textarea>
                            <div x-show="activeTab === 'preview'" class="p-4 bg-gray-100 rounded" x-text="panel.content">
                            </div>
                        </div>

                        <button type="button" class="text-red-500 hover:text-red-700 focus:outline-none"
                            @click="panels.splice(index, 1)">
                            <i class="fa fa-trash"></i> Remove Panel
                        </button>
                    </div>
                </template>

                <button type="button"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4"
                    @click="panels.push({ image: '', teaser: '', heading: '', content: '' })">
                    <i class="fa fa-plus"></i> Add Panel
                </button>

                <div class="flex items-center justify-between mt-6">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Save & Publish
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
