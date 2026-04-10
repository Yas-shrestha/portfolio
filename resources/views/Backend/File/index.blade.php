<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-medium text-gray-900">Files</h2>
            <a href="{{ route('files.create') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 transition ease-in-out duration-150">
                + Create
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <p class="text-sm text-gray-500 mb-6">Welcome, {{ Auth()->user()->name }}</p>

                @if (Auth()->user()->role == 'admin')
                    <div class="overflow-hidden rounded-xl border border-gray-200 bg-white">
                        <div class="overflow-x-auto">
                            <table class="min-w-full w-full divide-y divide-gray-200 table-fixed">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-20">
                                            Preview</th>
                                        <th
                                            class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-24">
                                            File</th>
                                        <th
                                            class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            URL</th>
                                        <th
                                            class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider w-36">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-100">
                                    @foreach ($files as $file)
                                        @php $ext = pathinfo($file->file_name, PATHINFO_EXTENSION); @endphp
                                        <tr class="hover:bg-gray-50 transition">
                                            {{-- Thumbnail — click to open lightbox --}}
                                            <td class="px-4 py-3">
                                                <a href="{{ Storage::url($file->file_name) }}" target="_blank"
                                                    class="block group" title="Open in new tab">
                                                    <img src="{{ Storage::url($file->file_name) }}"
                                                        alt="{{ $file->title }}"
                                                        class="w-9 h-9 object-cover rounded-md border border-gray-200 group-hover:opacity-75 transition" />
                                                </a>
                                            </td>

                                            {{-- Title + extension --}}
                                            <td class="px-4 py-3">
                                                <span
                                                    class="text-sm font-medium text-gray-800">{{ $file->title }}</span>
                                                <span class="text-xs text-gray-400">.{{ $ext }}</span>
                                            </td>

                                            {{-- URL --}}
                                            <td class="px-4 py-3 max-w-xs">
                                                <span class="text-xs text-gray-400 font-mono truncate block">
                                                    {{ $file->file_name }}
                                                </span>
                                            </td>

                                            {{-- Actions --}}
                                            <td class="px-4 py-3 text-right space-x-2">
                                                <a href="{{ route('files.show', $file) }}"
                                                    class="inline-flex items-center px-3 py-1.5 rounded-md text-xs font-medium bg-gray-100 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                                    View
                                                </a>
                                                <form action="{{ route('files.destroy', $file) }}" method="POST"
                                                    class="inline" onsubmit="return confirm('Delete this file?')">
                                                    @csrf @method('DELETE')
                                                    <button
                                                        class="inline-flex items-center px-3 py-1.5 rounded-md text-xs font-medium bg-gray-100 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 py-3 border-t border-gray-100">
                            {{ $files->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
