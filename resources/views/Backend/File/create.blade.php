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
                    <form method="POST" action="{{ route('files.store') }}" class="space-y-6"
                        enctype="multipart/form-data">
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
                                <div id="imagePreviewContainer" class="mt-4 flex flex-wrap gap-2"> </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('img')" />
                        </div>

                        <div id="imagePreviewContainer" class="mt-4 flex flex-wrap gap-2"></div>



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
                        div.style.cssText = 'position:relative;width:64px;height:64px;flex-shrink:0;';
                        div.innerHTML = `
                    <img src="${e.target.result}" alt="Preview ${index + 1}"
                         style="width:64px;height:64px;object-fit:cover;border-radius:6px;border:1px solid #e5e7eb;" />
                    <button
                        type="button"
                        onclick="removeImage(${index})"
                        style="position:absolute;top:-6px;right:-6px;width:18px;height:18px;border-radius:50%;background:#e24b4a;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;padding:0;"
                    >
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 9M9 1L1 9" stroke="white" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                    </button>
                `;
                        container.appendChild(div);
                    };

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
