<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="mb-4 text-lg font-semibold text-gray-900">Files </h2>
            <a href="{{ route('files.create') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-4 ">create</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __('Welcome,  to Manage Files ' . Auth()->user()->name) }}


                    @if (Auth()->user()->role == 'admin')
                        <!-- Responsive Table (Tailwind CSS) -->
                        <div class="w-full">


                            <div class="overflow-hidden rounded-xl border border-gray-200 bg-white">
                                <div class="overflow-x-auto">
                                    <table class="min-w-[800px] w-full border-separate border-spacing-0">

                                        <!-- Table Head -->
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Title</th>
                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Img</th>

                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    File_url</th>

                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Actions</th>
                                            </tr>
                                        </thead>

                                        <!-- Table Body -->
                                        <tbody class="divide-y divide-gray-200">
                                            @foreach ($files as $file)
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">
                                                        {{ $file->title }}</td>
                                                    <td class="px-4 py-3 text-sm text-gray-700"><img
                                                            src="{{ $file->img }}" alt="">
                                                    </td>

                                                    <td class="px-4 py-3 text-sm text-gray-700">
                                                        {{ $file->file_url }}
                                                    </td>
                                                    <td class="px-4 py-3 text-right space-x-2">
                                                        <a href="{{ route('files.show', $file) }}"
                                                            class="rounded-lg bg-blue-50 px-3 py-1.5 text-sm font-medium text-blue-600 hover:bg-blue-100">
                                                            View
                                                        </a>
                                                        <form action="{{ route('files.destroy', $file) }}"
                                                            method="POST" class="inline"
                                                            onsubmit="return confirm('Delete this message?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                class="rounded-lg bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600 hover:bg-red-100">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="p-4">
                                        {{ $files->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div></div>
            </div>

        </div>
    </div>
</x-app-layout>
