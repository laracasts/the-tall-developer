<div>
    <input
        class="bg-white border border-zinc-300 mt-6 rounded-md w-full px-5 py-2 shadow-xs focus:outline-none focus:ring-2 focus:ring-amber-500"
        type="text"
        placeholder="Search for roles, companies and type..."
        wire:model.live.debounce.500ms="search"
    />

    @if($search)
    <p class="mt-4 text-sm text-amber-600">
        Showing results for "{{ $search }}"
    </p>
    @endif

    @foreach ($roles as $role)
        <x-role :role="$role" />
    @endforeach
</div>
