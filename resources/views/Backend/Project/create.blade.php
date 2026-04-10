<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add Project</h2>
            <a href="{{ route('projects.index') }}"
                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                Back
            </a>
        </div>
    </x-slot>

    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        trix-editor {
            min-height: 200px;
            font-size: 0.875rem;
            border: none !important;
            padding: 0.75rem 1rem;
            outline: none !important;
            box-shadow: none !important;
        }

        trix-toolbar {
            padding: 6px 10px;
            background-color: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
        }

        .trix-button-group {
            border: 1px solid #e5e7eb !important;
            border-radius: 6px !important;
        }

        .trix-button {
            border-bottom: none !important;
        }

        .trix-button--icon::before {
            opacity: 0.6;
        }
    </style>

    {{-- Single Alpine wrapper covering form AND modal --}}
    <div x-data="projectForm()">

        <div class="py-12">
            <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">

                    {{-- Card header --}}
                    <div class="flex items-center gap-3 px-6 py-4 border-b border-gray-100">
                        <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                            <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Project details</p>
                            <p class="text-xs text-gray-400">Fill in the information below</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('projects.store') }}" class="p-6 space-y-5">
                        @csrf

                        {{-- Title --}}
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                value="{{ old('title') }}" required autofocus placeholder="My awesome project" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        {{-- Slug --}}
                        <div>
                            <x-input-label for="slug" value="Slug" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full"
                                value="{{ old('slug') }}" placeholder="my-awesome-project" />
                            <p class="mt-1 text-xs text-gray-400">Leave empty to auto-generate from title</p>
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>

                        {{-- Client + Date --}}
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                            <div>
                                <x-input-label for="client" value="Client" />
                                <x-text-input id="client" name="client" type="text" class="mt-1 block w-full"
                                    value="{{ old('client') }}" placeholder="Client name" />
                                <x-input-error class="mt-2" :messages="$errors->get('client')" />
                            </div>
                            <div>
                                <x-input-label for="project_date" value="Project Date" />
                                <x-text-input id="project_date" name="project_date" type="date"
                                    class="mt-1 block w-full" value="{{ old('project_date') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('project_date')" />
                            </div>
                        </div>

                        {{-- Project URL --}}
                        <div>
                            <x-input-label for="project_url" value="Project URL" />
                            <x-text-input id="project_url" name="project_url" type="url" class="mt-1 block w-full"
                                value="{{ old('project_url') }}" placeholder="https://..." />
                            <x-input-error class="mt-2" :messages="$errors->get('project_url')" />
                        </div>

                        {{-- Description --}}
                        <div>
                            <x-input-label value="Description" class="mb-1" />
                            <div
                                class="mt-1 rounded-lg border border-gray-300 overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                <input id="description" type="hidden" name="description"
                                    value="{{ old('description') }}">
                                <trix-editor input="description"></trix-editor>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        {{-- Project Images --}}
                        <div>
                            <x-input-label value="Project Images" class="mb-1" />
                            <p class="text-xs text-gray-400 mb-3">Pick images from your file manager</p>

                            {{-- Selected previews --}}
                            <div class="flex flex-wrap gap-2 mb-3" x-show="selectedImages.length > 0">
                                <template x-for="(img, index) in selectedImages" :key="img.id">
                                    <div class="relative w-14 h-14 flex-shrink-0">
                                        <img :src="img.url"
                                            class="w-14 h-14 object-cover rounded-lg border border-gray-200" />
                                        <input type="hidden" name="file_ids[]" :value="img.id" />
                                        <button type="button" @click="removeImage(index)"
                                            style="position:absolute;top:-6px;right:-6px;width:16px;height:16px;border-radius:50%;background:#ef4444;border:2px solid white;cursor:pointer;display:flex;align-items:center;justify-content:center;z-index:50;padding:0;">
                                            <svg width="6" height="6" viewBox="0 0 10 10" fill="none">
                                                <path d="M1 1L9 9M9 1L1 9" stroke="white" stroke-width="2.5"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </template>
                            </div>

                            {{-- Open modal button --}}
                            <button type="button" @click="openModal = true"
                                class="inline-flex items-center gap-2 rounded-lg border border-dashed border-gray-300 bg-gray-50 px-4 py-2.5 text-sm text-gray-500 hover:border-indigo-400 hover:bg-indigo-50 hover:text-indigo-600 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M13.5 12h.008v.008H13.5V12zm-4.5 4.5h.008v.008H9v-.008z" />
                                </svg>
                                Choose from file manager
                                <span x-show="selectedImages.length > 0"
                                    class="inline-flex items-center rounded-full bg-indigo-100 px-2 py-0.5 text-xs font-medium text-indigo-700"
                                    x-text="selectedImages.length + ' selected'">
                                </span>
                            </button>
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center justify-end gap-3 pt-2 border-t border-gray-100">
                            <a href="{{ route('projects.index') }}"
                                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                                Cancel
                            </a>
                            <x-primary-button>Save Project</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- File Manager Modal — inside same x-data wrapper --}}
        <div x-show="openModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4"
            style="background: rgba(0,0,0,0.5);" @keydown.escape.window="openModal = false">

            <div class="bg-white rounded-xl w-full max-w-2xl flex flex-col" style="height: 70vh; max-height: 70vh;"
                @click.outside="openModal = false">

                {{-- Modal header --}}
                <div class="flex items-center justify-between px-5 py-3 border-b border-gray-100 flex-shrink-0">
                    <div>
                        <p class="text-sm font-medium text-gray-800">File manager</p>
                        <p class="text-xs text-gray-400">Click an image to select / deselect</p>

                    </div>
                    <button type="button" @click="openModal = false" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                {{-- Image grid — this scrolls --}}
                <div class="overflow-y-auto p-4 flex-1">

                    @if ($files->count() > 0)
                        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; padding: 16px;">
                            @foreach ($files as $file)
                                <div @click="toggleImage({{ $file->id }}, '{{ asset('storage/' . $file->file_name) }}')"
                                    style="position: relative; cursor: pointer; width: 100%; height: 200px; overflow: hidden; border-radius: 8px;object-position: center;">
                                    <img src="{{ asset('storage/' . $file->file_name) }}"
                                        style="width:100%; height:100%; object-fit:cover; border-radius:8px; border: 2px solid transparent; display:block;"
                                        :style="isSelected({{ $file->id }}) ? 'border-color: #6366f1;' :
                                            'border-color: transparent; opacity: 0.85;'" />
                                    <div x-show="isSelected({{ $file->id }})"
                                        style="position:absolute; top:4px; right:4px; width:18px; height:18px; background:#6366f1; border-radius:50%; display:flex; align-items:center; justify-content:center;">
                                        <svg width="10" height="10" fill="none" stroke="white"
                                            stroke-width="3" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="flex flex-col items-center justify-center h-full text-gray-400">
                            <svg class="w-10 h-10 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909" />
                            </svg>
                            <p class="text-sm">No files uploaded yet</p>
                            <a href="{{ route('files.create') }}"
                                class="mt-2 text-xs text-indigo-500 hover:underline">Upload files →</a>
                        </div>
                    @endif
                </div>

                {{-- Modal footer --}}
                <div class="flex items-center justify-between px-5 py-3 border-t border-gray-100 flex-shrink-0">
                    <p class="text-xs text-gray-400">
                        <span x-text="selectedImages.length"></span> image(s) selected
                    </p>
                    <button type="button" @click="openModal = false"
                        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">
                        Done
                    </button>
                </div>
            </div>
        </div>

    </div>{{-- end x-data --}}

    <script>
        function projectForm() {
            return {
                openModal: false,
                selectedImages: [],

                toggleImage(id, url) {
                    const exists = this.selectedImages.findIndex(i => i.id === id);
                    if (exists >= 0) {
                        this.selectedImages.splice(exists, 1);
                    } else {
                        this.selectedImages.push({
                            id,
                            url
                        });
                    }
                },

                isSelected(id) {
                    return this.selectedImages.some(i => i.id === id);
                },

                removeImage(index) {
                    this.selectedImages.splice(index, 1);
                }
            }
        }
    </script>

</x-app-layout>
