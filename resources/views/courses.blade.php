<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Courses:
                        <br>
                        <br>
                        {{-- @foreach ($messages as $message)
                        <div class="border border-1">
                            <p class="border border-1">From: {{ $message->name }}</p>
                            <br>
                            {{ $message->message }}
                            <br>
                            <br>
                            <p class="border border-1">Received {{ $message->created_at->diffForHumans() }}</p>
                            {{-- <p class="border border-1">To: {{ $message->professor->professor_name }}</p> --}}
                        </div>
                        <br>
                        @endforeach --}}


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

