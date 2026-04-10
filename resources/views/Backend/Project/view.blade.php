<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">View Project</h2>
            <a href="{{ route('projects.index') }}"
                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-4xl sm:px-6 lg:px-8 space-y-5">

            {{-- Main details card --}}
            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">

                {{-- Card header --}}
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                            <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Project details</p>
                            <p class="text-xs text-gray-400">Created {{ $project->created_at }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('projects.edit', $project) }}"
                            class="inline-flex items-center gap-1.5 rounded-md border border-gray-300 bg-white px-3 py-1.5 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                            </svg>
                            Edit
                        </a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline"
                            onsubmit="return confirm('Delete this project?')">
                            @csrf @method('DELETE')
                            <button
                                class="inline-flex items-center gap-1.5 rounded-md border border-red-200 bg-red-50 px-3 py-1.5 text-sm font-medium text-red-600 hover:bg-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Details grid --}}
                <div class="p-6 space-y-5">
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Title</p>
                        <p class="text-base font-medium text-gray-900">{{ $project->title }}</p>
                    </div>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Slug</p>
                            <p class="text-sm font-mono text-gray-600">{{ $project->slug }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Client</p>
                            <p class="text-sm text-gray-700">{{ $project->client ?? '—' }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Project Date</p>
                            <p class="text-sm text-gray-700">
                                {{ $project->project_date }}
                            </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Project URL</p>
                            @if ($project->project_url)
                                <a href="{{ $project->project_url }}" target="_blank"
                                    class="text-sm text-indigo-500 hover:underline break-all">
                                    {{ $project->project_url }}
                                </a>
                            @else
                                <p class="text-sm text-gray-700">—</p>
                            @endif
                        </div>
                    </div>

                    {{-- Description --}}
                    @if ($project->description)
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide mb-2">Description</p>
                            <div
                                class="prose prose-sm max-w-none text-gray-700 rounded-lg border border-gray-100 bg-gray-50 p-4">
                                {!! $project->description !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Images card --}}
            @if ($project->images->count() > 0)
                <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                    <div class="flex items-center gap-3 px-6 py-4 border-b border-gray-100">
                        <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                            <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M13.5 12h.008v.008H13.5V12zm0 0h.008v.008H13.5V12z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Project images</p>
                            <p class="text-xs text-gray-400">{{ $project->images->count() }} image(s) attached</p>
                        </div>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; padding: 16px;">
                        @foreach ($project->images as $image)
                            <a href="{{ asset('storage/' . $image->file->file_name) }}" target="_blank"
                                style="display:block; height:100px; overflow:hidden; border-radius:8px; border: 1px solid #e5e7eb;">
                                <img src="{{ asset('storage/' . $image->file->file_name) }}"
                                    alt="{{ $image->file->title }}"
                                    style="width:100%; height:100%; object-fit:cover; display:block; transition: opacity 0.15s;"
                                    onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'" />
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>

</x-app-layout>
