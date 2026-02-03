<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __('Welcome, ' . Auth()->user()->name) }}

                    <p class="my-5 text-lg font-semibold">New Feature otw</p>

                    @if (Auth()->user()->role == 'admin')
                        <!-- Responsive Table (Tailwind CSS) -->
                        <div class="w-full">
                            <h2 class="mb-4 text-lg font-semibold text-gray-900">Contact Messages</h2>

                            <div class="overflow-hidden rounded-xl border border-gray-200 bg-white">
                                <div class="overflow-x-auto">
                                    <table class="min-w-[800px] w-full border-separate border-spacing-0">

                                        <!-- Table Head -->
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Name</th>
                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Email</th>

                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Subject</th>
                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Message</th>
                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Date</th>
                                                <th
                                                    class="px-4 py-3 text-center text-xs font-semibold uppercase text-gray-600">
                                                    Actions</th>
                                            </tr>
                                        </thead>

                                        <!-- Table Body -->
                                        <tbody class="divide-y divide-gray-200">
                                            @foreach ($contacts as $contact)
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3 text-sm font-medium text-gray-900">
                                                        {{ $contact->name }}</td>
                                                    <td class="px-4 py-3 text-sm text-gray-700">{{ $contact->email }}
                                                    </td>

                                                    <td class="px-4 py-3 text-sm text-gray-700">{{ $contact->subject }}
                                                    </td>
                                                    <td class="px-4 py-3 text-sm text-gray-700 max-w-xs truncate">
                                                        {{ $contact->message }}</td>
                                                    <td class="px-4 py-3 text-sm text-gray-500">
                                                        {{ $contact->created_at->format('Y-m-d') }}</td>
                                                    <td class="px-4 py-3 text-right space-x-2">
                                                        <a href="{{ route('contacts.show', $contact->id) }}"
                                                            class="rounded-lg bg-blue-50 px-3 py-1.5 text-sm font-medium text-blue-600 hover:bg-blue-100">
                                                            View
                                                        </a>
                                                        <form action="{{ route('contacts.destroy', $contact->id) }}"
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
                                        {{ $contacts->links() }}
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
