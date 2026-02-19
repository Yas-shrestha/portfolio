<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add File
            </h2>

            <a href="{{ route('files.index') }}"
                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('files.store') }}" class="space-y-6">
                        @csrf

                        {{-- Title --}}
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                value="{{ old('title') }}" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="img" value="Img" />
                            <div>
                                <x-input-label for="images" value="Images (Multiple)" />
                                <x-text-input id="images" name="images[]" type="file" class="mt-1 block w-full"
                                    accept="image/*" multiple onchange="previewMultipleImages(event)" required
                                    autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('images')" />

                                <!-- Preview Grid -->
                                <div id="imagePreviewContainer" class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
                                </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('img')" />
                        </div>

                        <div id="imagePreviewContainer" class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4"></div>



                        {{-- Actions --}}
                        <div class="flex items-center justify-center gap-3">
                            <a href="{{ route('files.index') }}"
                                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                                Cancel
                            </a>

                            <x-primary-button>
                                Save File
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Optional: helper card --}}

        </div>
    </div>


    <script>
        let selectedFiles = [];

        function previewMultipleImages(event) {
            const files = Array.from(event.target.files);
            selectedFiles = files;
            displayPreviews();
        }

        function displayPreviews() {
            const container = document.getElementById('imagePreviewContainer');
            container.innerHTML = '';

            selectedFiles.forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = 'relative group';
                        div.innerHTML = `
                    <img src="${e.target.result}" alt="Preview ${index + 1}" 
                         class="w-full h-32 object-cover rounded-lg shadow-md" />
                    <button 
                        type="button"
                        onclick="removeImage(${index})"
                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1.5 
                               opacity-0 group-hover:opacity-100 transition-opacity hover:bg-red-600"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <div class="absolute bottom-2 left-2 bg-black bg-opacity-50 text-white text-xs px-2 py-1 rounded">
                        ${index + 1}
                    </div>
                `;
                        container.appendChild(div);
                    }

                    reader.readAsDataURL(file);
                }
            });
        }

        function removeImage(index) {
            selectedFiles.splice(index, 1);

            // Update file input
            const dt = new DataTransfer();
            selectedFiles.forEach(file => dt.items.add(file));
            document.getElementById('images').files = dt.files;

            displayPreviews();
        }
    </script>
</x-app-layout>
