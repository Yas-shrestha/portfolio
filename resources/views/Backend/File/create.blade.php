<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add File</h2>
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
                    <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data"
                        class="space-y-6" x-data="fileUploader()">
                        @csrf

                        {{-- Drop Zone --}}
                        <div>
                            <x-input-label value="Images" class="mb-2" />

                            <div class="relative flex flex-col items-center justify-center w-full rounded-xl border-2 border-dashed transition-colors duration-150 cursor-pointer"
                                :class="dragging
                                    ?
                                    'border-indigo-400 bg-indigo-50' :
                                    'border-gray-300 bg-gray-50 hover:border-indigo-300 hover:bg-indigo-50'"
                                @dragover.prevent="dragging = true" @dragleave.prevent="dragging = false"
                                @drop.prevent="onDrop($event)" @click="$refs.fileInput.click()"
                                style="min-height: 160px;">

                                <input type="file" name="images[]" accept="image/*" multiple class="hidden"
                                    x-ref="fileInput" @change="onFileSelect($event)" />

                                <div class="flex flex-col items-center gap-2 pointer-events-none select-none py-8">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                    </svg>
                                    <p class="text-sm font-medium text-gray-600">
                                        Drag & drop images here
                                    </p>
                                    <p class="text-xs text-gray-400">or click to browse</p>
                                </div>
                            </div>

                            <x-input-error class="mt-2" :messages="$errors->get('images')" />
                        </div>

                        {{-- Preview Grid --}}
                        <div x-show="previews.length > 0" class="flex flex-wrap gap-2">
                            <template x-for="(preview, index) in previews" :key="index">
                                <div class="relative w-14 h-14 flex-shrink-0 overflow-visible">
                                    <img :src="preview.url" :alt="preview.name"
                                        class="w-14 h-14 object-cover rounded-md border border-gray-200" />

                                    <button type="button" @click.stop="removeFile(index)"
                                        style="position:absolute; top:-6px; right:-6px; width:16px; height:16px; border-radius:50%; background:#ef4444; border:2px solid white; cursor:pointer; display:flex; align-items:center; justify-content:center; z-index:50; padding:0;">
                                        <svg width="6" height="6" viewBox="0 0 10 10" fill="none">
                                            <path d="M1 1L9 9M9 1L1 9" stroke="white" stroke-width="2.5"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>
                        {{-- File count badge --}}
                        <p x-show="previews.length > 0" class="text-xs text-gray-500">
                            <span x-text="previews.length"></span> file(s) selected
                        </p>

                        {{-- Actions --}}
                        <div class="flex items-center justify-center gap-3">
                            <a href="{{ route('files.index') }}"
                                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                                Cancel
                            </a>
                            <x-primary-button>Save Files</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function fileUploader() {
            return {
                dragging: false,
                previews: [],
                selectedFiles: [],

                onDrop(event) {
                    this.dragging = false;
                    const files = Array.from(event.dataTransfer.files).filter(f => f.type.startsWith('image/'));
                    this.addFiles(files);
                },

                onFileSelect(event) {
                    const files = Array.from(event.target.files);
                    this.addFiles(files);
                },

                addFiles(files) {
                    files.forEach(file => {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            this.previews.push({
                                url: e.target.result,
                                name: file.name
                            });
                        };
                        reader.readAsDataURL(file);
                        this.selectedFiles.push(file);
                    });
                    this.syncInput();
                },

                removeFile(index) {
                    this.previews.splice(index, 1);
                    this.selectedFiles.splice(index, 1);
                    this.syncInput();
                },

                syncInput() {
                    const dt = new DataTransfer();
                    this.selectedFiles.forEach(f => dt.items.add(f));
                    this.$refs.fileInput.files = dt.files;
                }
            }
        }
    </script>
</x-app-layout>
