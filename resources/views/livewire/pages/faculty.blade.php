<div wire:init="loadFaculties">
    <section class="relative overflow-hidden bg-[#C0809A]">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(14,30,65,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(78,102,144,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="text-white uppercase text-2xl font-bold tracking-wide lg:text-4xl">Faculties</h2>
            <div class="mt-7 h-1 w-20 bg-[#f6c945]"></div>
        </div>
    </section>
    <x-section.breadcrumbs />
    <section class="mx-auto w-full px-5 md:px-10 pt-0 pb-10 md:py-20">
        <div class="w-full px-3">
            <label class="input input-warning rounded-xl input-lg w-full">
                <i class="fa-solid fa-search h-[1em] opacity-50"></i>
                <input wire:model.live.debounce.500ms="searchTerm" type="text" class="w-full"
                    placeholder="Search Faculties.." />
            </label>
        </div>

        <div class="mt-10">
            <div class="tabs tabs-border mb-5 justify-evenly overflow-x-auto" role="tablist"
                aria-label="Filter faculties by category">
                <button type="button" role="tab" aria-selected="{{ $selectedCategory === 'all' ? 'true' : 'false' }}"
                    wire:click="selectCategory('all')"
                    class="tab whitespace-nowrap uppercase tracking-wider text-lg text-[#C0809A] hover:text-amber-500 {{ $selectedCategory === 'all' ? 'tab-active text-amber-500' : '' }}">
                    All Faculties
                </button>
                @foreach ($categories as $category)
                <button type="button" role="tab"
                    aria-selected="{{ $selectedCategory === (string) $category->id ? 'true' : 'false' }}"
                    wire:click="selectCategory('{{ $category->id }}')"
                    class="tab whitespace-nowrap uppercase tracking-wider text-lg text-[#C0809A] hover:text-amber-500 {{ $selectedCategory === (string) $category->id ? 'tab-active text-amber-500' : '' }}">
                    {{ $category->name }}
                </button>
                @endforeach
            </div>

            @if (!$readyToLoad)
            <div class="flex w-full flex-col gap-4">
                <div class="skeleton h-40 w-full"></div>
                <div class="skeleton h-4 w-28"></div>
                <div class="skeleton h-4 w-full"></div>
            </div>
            @else
            <div wire:loading.flex wire:target="searchTerm, selectCategory" class="flex w-full flex-col gap-4">
                <div class="skeleton h-40 w-full"></div>
                <div class="skeleton h-4 w-28"></div>
                <div class="skeleton h-4 w-full"></div>
            </div>
            <div wire:loading.remove wire:target="searchTerm, selectCategory"
                class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:grid-cols-4">
                @forelse ($faculties as $faculty)
                <div
                    class="card bg-[#f6e9e3] p-0 shadow-sm transition-all duration-200 hover:scale-105 hover:shadow-md">
                    <figure onclick="document.getElementById('faculty-modal-{{ $faculty->id }}').showModal()"
                        class="relative cursor-pointer">
                        <img src="{{ $faculty->image ? asset('storage/' . $faculty->image) : asset('assets/images/speaker2.png') }}"
                            alt="{{ $faculty->name }}" class="h-full w-full rounded-xl object-cover lg:px-2">
                    </figure>
                    <div class="card-body text-center">
                        <h2 onclick="document.getElementById('faculty-modal-{{ $faculty->id }}').showModal()"
                            class="cursor-pointer text-xl font-semibold text-[#C0809A] hover:text-[#3c194f]">
                            {{ $faculty->name }}
                        </h2>
                        <div class="flex justify-center">
                            <div class="badge badge-dark badge-outline badge-sm">
                                <p class="text-sm">
                                    {{ $faculty->country === 'South Korea' ? 'Republic of Korea' : $faculty->country }}
                                </p>
                            </div>
                        </div>
                        @if ($faculty->categoryFaculty)
                        <p class="text-end text-xs italic text-gray-500">
                            {{ $faculty->categoryFaculty->name }}
                        </p>
                        @endif
                    </div>
                </div>

                <dialog id="faculty-modal-{{ $faculty->id }}" class="modal">
                    <div class="modal-box w-10/12 max-w-5xl">
                        <form method="dialog">
                            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                        </form>
                        <div class="flex items-center gap-3 pb-3">
                            <img class="h-20 w-20 rounded-full bg-[#f6e9e3]/20 object-cover shadow"
                                src="{{ $faculty->image ? asset('storage/' . $faculty->image) : asset('assets/images/speaker2.png') }}"
                                alt="{{ $faculty->name }}">
                            <div>
                                <p class="mb-0">
                                    <span class="text-lg font-semibold text-[#C0809A]">{{ $faculty->name }}</span>
                                    <br>
                                    {{ $faculty->country }}
                                </p>
                                @if ($faculty->categoryFaculty)
                                <p class="text-sm text-gray-500">
                                    {{ $faculty->categoryFaculty->name }}
                                </p>
                                @endif
                            </div>
                        </div>
                        @if ($faculty->scheduleSessions->isNotEmpty())
                        <p class="text-lg font-medium text-gray-700">Session as Moderator</p>
                        <div class="border-t pt-5">
                            @foreach ($faculty->scheduleSessions as $session)
                            <div class="flex flex-wrap gap-5 text-green-600">
                                <p>{{ \Carbon\Carbon::parse($session->date)->format('d F Y') }}</p>
                                <p>{{ $session->time }}</p>
                                <p>{{ $session->room }}</p>
                            </div>
                            <p class="mb-5 border-b border-dashed border-gray-800 pb-3 text-gray-500">
                                {{ $session->title_ses }}
                            </p>
                            @endforeach
                        </div>
                        <p class="text-lg font-medium text-gray-700">Session</p>
                        <div class="border-t pt-5">
                            @foreach ($faculty->schedules as $schedule)
                            <div class="flex flex-wrap gap-5 text-sky-600">
                                <p>{{ \Carbon\Carbon::parse($schedule->sesi->date)->format('d F Y') }}</p>
                                <p>{{ $schedule->time_speaker }}</p>
                                <p>{{ $schedule->sesi->room }}</p>
                            </div>
                            <p class="mb-1">{{ $schedule->sesi->title_ses }}</p>
                            <p class="mb-5 border-b border-dashed border-gray-800 pb-3 text-gray-500">
                                {{ $schedule->topic_title }}
                            </p>
                            @endforeach
                        </div>
                        @else
                        <p class="mb-5 text-center text-xs text-gray-500">*Session not available</p>
                        @endif
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
                @empty
                <p class="col-span-full py-10 text-center text-gray-500">No faculties found.</p>
                @endforelse
            </div>
            @endif

            <p class="mt-5 text-xs italic">*within confirmation</p>
        </div>
    </section>
</div>