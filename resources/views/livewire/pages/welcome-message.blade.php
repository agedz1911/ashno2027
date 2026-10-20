<div>
    <section class="relative overflow-hidden bg-[#C0809A]">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(14,30,65,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(78,102,144,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="text-white uppercase text-2xl font-bold tracking-wide lg:text-4xl">Welcome Message</h2>
            <div class="mt-7 h-1 w-20 bg-[#f6c945]"></div>
        </div>
    </section>
    <x-section.breadcrumbs />

    <section class="pattern relative overflow-hidden py-16 sm:py-20 lg:py-28">
        <div class="mx-auto flex max-w-7xl flex-col gap-12 px-5 sm:px-8 lg:gap-20 lg:px-12">
            @foreach ($messages as $welcomeMessage)
            <article id="welcome-message-{{ $welcomeMessage->id }}"
                class="grid min-h-[640px] grid-cols-1 overflow-hidden rounded-3xl border border-slate-200/80 bg-white shadow-xl lg:grid-cols-12">
                <div
                    class="relative flex flex-col justify-between overflow-hidden bg-gradient-to-b from-[#C0809A] via-[#4E6690] to-[#0a101c] text-white lg:col-span-5">
                    <div class="batik-overlay pointer-events-none absolute inset-0 opacity-70"></div>

                    <div class="pointer-events-none absolute right-0 top-0 w-48 p-4 opacity-20">
                        <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 0C110 50 150 90 200 100C150 110 110 150 100 200C90 150 50 110 0 100C50 90 90 50 100 0Z"
                                stroke="#D4AF37" stroke-width="1.5" />
                            <circle cx="100" cy="100" r="30" stroke="#D4AF37" stroke-width="1" />
                        </svg>
                    </div>

                    <div
                        class="pointer-events-none absolute bottom-1/4 left-0 top-1/4 flex w-28 items-center opacity-15">
                        <svg class="h-auto w-full text-amber-200" viewBox="0 0 100 300" fill="currentColor">
                            <path
                                d="M50 0C60 40 90 80 90 130C90 180 60 220 50 300C40 220 10 180 10 130C10 80 40 40 50 0Z"
                                opacity="0.5" />
                        </svg>
                    </div>

                    <div class="relative z-10 flex flex-grow flex-col items-center justify-center p-6 sm:p-8">
                        <div
                            class="group relative aspect-[4/5] w-full max-w-xs overflow-hidden rounded-2xl border-2 border-amber-400/30 shadow-2xl">
                            <img src="{{ $welcomeMessage->image ? asset('storage/' . $welcomeMessage->image) : asset('assets/images/speaker.png') }}"
                                alt="{{ $welcomeMessage->name ?: 'Welcome message speaker' }}"
                                class="h-full w-full object-cover object-top transition-transform duration-500 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                        </div>
                    </div>

                    <div
                        class="relative z-10 space-y-2 border-t border-white/10 bg-slate-900/40 px-8 pb-8 pt-5 backdrop-blur-sm">
                        <div class="mb-3 h-1 w-10 rounded-full bg-amber-400"></div>
                        @if ($welcomeMessage->title)
                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-300">
                            {{ $welcomeMessage->title }}
                        </p>
                        @endif
                        @if ($welcomeMessage->name)
                        <h2 class="pt-1 font-serif text-xl font-bold leading-snug tracking-wide text-white sm:text-2xl">
                            {{ $welcomeMessage->name }}
                        </h2>
                        @endif

                        @if ($welcomeMessage->name2 || $welcomeMessage->title2)
                        <div class="mt-5 flex items-center gap-4 border-t border-white/20 pt-5">
                            <img src="{{ $welcomeMessage->image2 ? asset('storage/' . $welcomeMessage->image2) : asset('assets/images/speaker.png') }}"
                                alt="{{ $welcomeMessage->name2 ?: 'Additional speaker' }}"
                                class="h-16 w-16 shrink-0 rounded-full border-2 border-white/20 object-cover" />
                            <div class="min-w-0">
                                @if ($welcomeMessage->title2)
                                <p class="text-xs leading-5 text-cyan-50">
                                    {{ $welcomeMessage->title2 }}
                                </p>
                                @endif
                                @if ($welcomeMessage->name2)
                                <h3 class="mt-1 font-bold leading-tight text-white">
                                    {{ $welcomeMessage->name2 }}
                                </h3>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="pointer-events-none relative h-24 w-full overflow-hidden opacity-30">
                        <img src="{{ asset('assets/images/bg2.png') }}" alt=""
                            class="h-full w-full object-cover object-bottom" />
                    </div>
                </div>

                <div
                    class="content-artwork-bg relative flex flex-col justify-between p-8 sm:p-12 lg:col-span-7 lg:p-14">
                    <div
                        class="pointer-events-none absolute inset-0 flex items-center justify-end overflow-hidden opacity-40">
                        <img src="{{ asset('assets/images/pattern/design-option-1.png') }}" alt=""
                            class="h-full w-full object-cover object-right" />
                    </div>

                    <div class="relative z-10 space-y-6">
                        <span
                            class="gold-double-underline text-xs font-extrabold uppercase tracking-widest text-slate-500">
                            Welcome Message
                        </span>

                        <h1
                            class="pt-2 tulisan2 font-serif text-2xl font-bold leading-tight tracking-tight text-brand-darkPurple sm:text-3xl lg:text-4xl">
                            From {{ $welcomeMessage->title }}
                        </h1>

                        <div
                            class="welcome-message-copy pt-2 text-sm font-normal leading-relaxed text-slate-700 sm:text-base">
                            {!! str($welcomeMessage->description ?? '')->markdown()->sanitizeHtml() !!}
                        </div>
                    </div>

                    <div class="relative z-10 mt-6 space-y-2 border-t border-slate-200/80 pt-8 sm:pt-10">
                        <div class="h-14 w-48 text-slate-900">
                            @if ($welcomeMessage->image2 != null)
                            <img src="{{ asset('storage/' . $welcomeMessage->image2) }}" alt="Welcome Message Image"
                                class="h-full w-full object-cover">
                            @endif
                        </div>

                        @if ($welcomeMessage->name)
                        <h3 class="text-sm font-bold tracking-wide text-slate-900">
                            {{ $welcomeMessage->name }}
                        </h3>
                        @endif
                        @if ($welcomeMessage->title)
                        <p class="mt-0.5 text-xs font-extrabold uppercase tracking-widest text-slate-500">
                            {{ $welcomeMessage->title }}
                        </p>
                        @endif
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </section>
</div>