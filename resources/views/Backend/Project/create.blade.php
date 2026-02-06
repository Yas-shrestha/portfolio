<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Project
            </h2>

            <a href="{{ route('projects.index') }}"
                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('projects.store') }}" class="space-y-6">
                        @csrf

                        {{-- Title --}}
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                value="{{ old('title') }}" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        {{-- Slug --}}
                        <div>
                            <x-input-label for="slug" value="Slug" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full"
                                value="{{ old('slug') }}" placeholder="my-awesome-project" />
                            <p class="mt-1 text-xs text-gray-500">Leave empty if you want to generate it automatically.
                            </p>
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>

                        {{-- Category + Client --}}
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <x-input-label for="category" value="Category" />
                                <x-text-input id="category" name="category" type="text" class="mt-1 block w-full"
                                    value="{{ old('category') }}" placeholder="Web/ Laravel /php" />
                                <x-input-error class="mt-2" :messages="$errors->get('category')" />
                            </div>

                            <div>
                                <x-input-label for="client" value="Client" />
                                <x-text-input id="client" name="client" type="text" class="mt-1 block w-full"
                                    value="{{ old('client') }}" placeholder="Client name" />
                                <x-input-error class="mt-2" :messages="$errors->get('client')" />
                            </div>
                        </div>

                        {{-- Project date + URL --}}
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <x-input-label for="project_date" value="Project Date" />
                                <x-text-input id="project_date" name="project_date" type="date"
                                    class="mt-1 block w-full" value="{{ old('project_date') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('project_date')" />
                            </div>

                            <div>
                                <x-input-label for="project_url" value="Project URL" />
                                <x-text-input id="project_url" name="project_url" type="url"
                                    class="mt-1 block w-full" value="{{ old('project_url') }}"
                                    placeholder="https://..." />
                                <x-input-error class="mt-2" :messages="$errors->get('project_url')" />
                            </div>
                        </div>

                        {{-- Description --}}
                        <div>
                            <x-input-label for="description" value="Description" />
                            <textarea id="description" name="description" rows="6"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center justify-end gap-3">
                            <a href="{{ route('projects.index') }}"
                                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                                Cancel
                            </a>

                            <x-primary-button>
                                Save Project
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Optional: helper card --}}
            <div class="mt-6 rounded-lg border border-gray-200 bg-gray-50 p-4 text-sm text-gray-600">
                Tip: If you want the slug auto-generated from title, do it in your controller/request (server-side).
            </div>
        </div>
    </div>
</x-app-layout>
