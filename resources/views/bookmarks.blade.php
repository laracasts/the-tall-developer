<x-layouts.app>
    <main
            x-data="{showToast: false, message: ''}"
            class="p-8"
        >
            <h1 class="font-bold text-4xl text-amber-600">Bookmarks</h1>
            <p class="mt-1 text-zinc-500">These are your favorite roles</p>

            <livewire:roles-list type="bookmarked" />
    </main>
</x-layouts.app>
