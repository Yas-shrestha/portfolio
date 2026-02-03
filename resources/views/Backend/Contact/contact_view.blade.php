<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Contact Message
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    View details & manage this message
                </p>
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                    ← Back
                </a>

                <form action="{{ route('contacts.destroy', $contact) }}" method="POST"
                    onsubmit="return confirm('Delete this message?')">
                    @csrf
                    @method('DELETE')
                    <button
                        class="inline-flex items-center rounded-lg bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

            <!-- success message -->
            @if (session('success'))
                <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid gap-6 lg:grid-cols-3">

                <!-- Left: Sender card -->
                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                    <div class="flex items-center gap-4">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-full bg-gray-900 text-white font-semibold">
                            {{ strtoupper(substr($contact->name ?? 'U', 0, 1)) }}
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-gray-900">{{ $contact->name }}</h3>
                            <p class="text-sm text-gray-500">Sender</p>
                        </div>
                    </div>

                    <div class="mt-6 space-y-4">
                        <div class="rounded-xl bg-gray-50 p-4">
                            <p class="text-xs font-semibold uppercase tracking-wide text-gray-500">Email</p>
                            <a href="mailto:{{ $contact->email }}"
                                class="mt-1 block break-all text-sm font-medium text-gray-900 hover:underline">
                                {{ $contact->email }}
                            </a>
                        </div>

                        @if (!empty($contact->phone))
                            <div class="rounded-xl bg-gray-50 p-4">
                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-500">Phone</p>
                                <a href="tel:{{ $contact->phone }}"
                                    class="mt-1 block text-sm font-medium text-gray-900 hover:underline">
                                    {{ $contact->phone }}
                                </a>
                            </div>
                        @endif

                        <div class="rounded-xl bg-gray-50 p-4">
                            <p class="text-xs font-semibold uppercase tracking-wide text-gray-500">Received</p>
                            <p class="mt-1 text-sm font-medium text-gray-900">
                                {{ optional($contact->created_at)->format('M d, Y • h:i A') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right: Message card -->
                <div class="lg:col-span-2 rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                    <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wide text-gray-500">Subject</p>
                            <h3 class="mt-1 text-lg font-semibold text-gray-900">
                                {{ $contact->subject ?? 'No subject' }}
                            </h3>
                        </div>

                        <!-- Status pill (optional) -->
                        <span
                            class="inline-flex w-fit items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                            Message
                        </span>
                    </div>

                    <div class="mt-6">
                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-500">Message</p>

                        <div class="mt-2 rounded-xl border border-gray-200 bg-gray-50 p-4">
                            <p class="whitespace-pre-wrap text-sm leading-relaxed text-gray-800">
                                {{ $contact->message }}
                            </p>
                        </div>
                    </div>

                    <!-- Quick actions -->
                    <div class="mt-6 flex flex-col gap-2 sm:flex-row">
                        <a href="mailto:{{ $contact->email }}?subject={{ urlencode('Re: ' . ($contact->subject ?? 'Your message')) }}"
                            class="inline-flex items-center justify-center rounded-xl bg-gray-900 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-800">
                            Reply via Email
                        </a>

                        <button type="button" onclick="navigator.clipboard.writeText(@js($contact->message))"
                            class="inline-flex items-center justify-center rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                            Copy Message
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
