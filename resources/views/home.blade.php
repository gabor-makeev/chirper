<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        @forelse ($chirps as $chirp)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold"> {{ $chirp->user ? $chirp->user->name : 'Anonymous' }}</div>
                        <div class="mt-1">{{ $chirp->message }}</div>
                        <div class="text-sm text-gray-500 mt-2">
                            {{ $chirp->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No chirps yet. Be the first to chirp!</p>
        @endforelse
    </div>
</x-layout>