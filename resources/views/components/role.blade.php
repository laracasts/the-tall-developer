<div
                x-data="{bookmarked: {{ $role->isBookmarkedBy(auth()->user()) ? 'true' : 'false' }}}"
                class="mt-8"
            >
                <div class="bg-white p-6 rounded-lg shadow-xs border border-zinc-200">
                    <div class="flex flex-row-reverse justify-between items-center">
                        <button
                            @class([
                                'hover:text-amber-600',
                                'text-amber-500' => $role->isBookmarkedBy(auth()->user()),
                                'text-zinc-200' => !$role->isBookmarkedBy(auth()->user())
                            ])
                            wire:click = "toggleBookmark('{{ $role->id }}')"
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
                        <p class="text-sm text-amber-600">{{ $role->company }}</p>
                    </div>

                    <p class="mt-1 font-semibold text-xl">{{ $role->title }}</p>

                    <p class="flex gap-1 text-zinc-600 text-sm">
                        <span>{{ $role->location }}</span>
                        <span>&middot;</span>
                        <span>{{ $role->type }}</span>
                    </p>

                    <div x-data="{showDetails: false}">
                        <button
                            x-show="!showDetails"
                            class="mt-2 bg-amber-600 px-4 py-1 text-white text-sm rounded-md hover:bg-amber-700 hover:cursor-pointer"
                            @click="showDetails = true"
                        >
                            View Details
                        </button>

                        <div
                            x-cloak
                            x-show="showDetails"
                        >
                            <p class="text-sm mt-2">
                                {{ $role->details }}
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
