<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">View File</h2>
            <a href="{{ route('files.index') }}"
                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8 space-y-4">

            {{-- Image Card --}}
            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                <img src="{{ Storage::url($file->file_name) }}" alt="{{ $file->title }}"
                    class="w-full object-contain max-h-[500px] bg-gray-50" />
            </div>

            {{-- Details Card --}}
            <div class="bg-white shadow-sm sm:rounded-lg p-6 space-y-4">

                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">{{ $file->title }}</h3>
                    <a href="{{ Storage::url($file->file_name) }}" target="_blank"
                        class="inline-flex items-center gap-1.5 rounded-md border border-gray-300 bg-white px-3 py-1.5 text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                        Open original
                    </a>
                </div>

                <div class="border-t border-gray-100 pt-4 grid grid-cols-2 gap-4 text-sm">
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">File name</p>
                        <p class="font-mono text-gray-700 break-all">{{ $file->file_name }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Extension</p>
                        <p class="text-gray-700 uppercase">{{ pathinfo($file->file_name, PATHINFO_EXTENSION) }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Uploaded</p>
                        <p class="text-gray-700">{{ $file->created_at->format('d M Y, h:i A') }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Size</p>
                        <p class="text-gray-700">
                            @php
                                $path = Storage::disk('public')->path($file->file_name);
                                $size = file_exists($path) ? number_format(filesize($path) / 1024, 1) . ' KB' : 'N/A';
                            @endphp
                            {{ $size }}
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="border-t border-gray-100 pt-4 flex items-center justify-between">
                    <a href="{{ route('files.index') }}" class="text-sm text-gray-500 hover:text-gray-700">
                        ← Back to files
                    </a>

                    <form action="{{ route('files.destroy', $file) }}" method="POST"
                        onsubmit="return confirm('Delete this file?')">
                        @csrf @method('DELETE')
                        <button
                            class="inline-flex items-center gap-1.5 rounded-md border border-red-200 bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600 hover:bg-red-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            Delete file
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
