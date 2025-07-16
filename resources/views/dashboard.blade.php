<x-layouts.app>
        <main
            x-data="{showToast: false, message: ''}"
            class="p-8"
        >
            <h1 class="font-bold text-4xl text-amber-600">Talento</h1>
            <p class="mt-1 text-zinc-500">Discover roles worth your skills</p>

            <input
                class="bg-white border border-zinc-300 mt-6 rounded-md w-full px-5 py-2 shadow-xs focus:outline-none focus:ring-2 focus:ring-amber-500"
                type="text"
                placeholder="Search for roles, companies and type..."
            />

            <div
                x-data="{bookmarked: false}"
                class="mt-8"
            >
                <div class="bg-white p-6 rounded-lg shadow-xs border border-zinc-200">
                    <div class="flex flex-row-reverse justify-between items-center">
                        <button
                            class="hover:text-amber-600"
                            :class="bookmarked ? 'text-amber-500' : 'text-zinc-200'"
                            @click="
                            bookmarked = !bookmarked;
                            showToast = true;
                            setTimeout(() => showToast = false, 3000);
                            message = bookmarked ? 'Added to bookmarks' : 'Removed from bookmarks'
                            "
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="size-5"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6.32 2.577a49.255 49.255 0 0 1 11.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 0 1-1.085.67L12 18.089l-7.165 3.583A.75.75 0 0 1 3.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>

                        <p class="text-sm text-amber-600">Acme Corporation</p>
                    </div>

                    <p class="mt-1 font-semibold text-xl">Fullstack Developer</p>

                    <p class="flex gap-1 text-zinc-600 text-sm">
                        <span>Remote</span>
                        <span>&middot;</span>
                        <span>Part-time</span>
                    </p>

                    <div x-data="{showDetails: false}">
                        <button
                            x-show="!showDetails"
                            class="mt-2 bg-amber-600 px-4 py-1 text-white text-sm rounded-md hover:bg-amber-700 hover:cursor-pointer"
                            @click="showDetails = true"
                        >
                            View Details
                        </button>

                        <div x-show="showDetails">
                            <p class="text-sm mt-2">
                                As a Fullstack Developer at Acme Corporation, you'll build and maintain modern web
                                applications using both frontend and backend technologies. You'll collaborate closely
                                with designers and engineers to deliver seamless user experiences and scalable,
                                maintainable systems.
                            </p>
                            <button
                                class="mt-2 bg-zinc-200 px-4 py-1 text-sm rounded-md hover:bg-zinc-300 hover:cursor-pointer"
                                @click="showDetails = false"
                            >
                                Hide Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                x-show="showToast"
                class="fixed bottom-5 right-5 px-2 py-1 bg-green-100 text-green-800 border border-green-200 text-sm shadow rounded"
                x-text="message"
            ></div>
        </main>
    </x-layouts.app>
