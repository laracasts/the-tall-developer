<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <title>Tailwind CSS</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
    </head>
    <body class="antialiased bg-zinc-50 text-zinc-800 max-w-5xl mx-auto">
        <nav class="px-8 py-4">
            <ul class="flex gap-10 text-sm justify-end">
                <li>
                    <a
                        class="hover:underline focus:underline"
                        href="{{ route('dashboard') }}"
                        >Dashboard</a
                    >
                </li>
                <li>
                    <a
                        class="hover:underline focus:underline"
                        href="{{ route('bookmarks.index') }}"
                        >Bookmarks</a
                    >
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button class="hover:underline focus:underline">Logout</button>
                    </form>

                </li>
            </ul>
        </nav>
        {{ $slot }}
    </body>
</html>
