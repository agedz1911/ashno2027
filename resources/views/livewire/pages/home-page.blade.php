<div class="relative">
    <section class="lg:min-h-screen banner relative pb-16 lg:pb-28">
        <div class="absolute inset-0 bg-gradient-to-t from-[#C6BFB0]/40 from-10% to-[#F6E9E3]/80"></div>
        <div
            class="z-10 relative pt-10 md:pt-14 lg:pt-32 flex flex-col md:flex-row items-start justify-start md:items-start md:justify-center gap-4">

            <div class="px-5 md:px-20 order-1 lg:order-1 w-full max-w-4xl flex flex-col items-center md:items-start">
                <img src="{{asset('assets/images/logo/logo-all.png')}}" class="max-w-xl w-full" alt="Banner">
                <img src="{{asset('assets/images/logo/icon.png')}}" class="max-w-sm w-full" alt="">
                <div class="w-full max-w-3xl mt-2 text-center md:text-start">
                    <p class="text-2xl font-bold tracking-wider mb-4">The 10<sup>th</sup> Conference of the Asian
                        Society of Head &
                        Neck Oncology (ASHNO) in conjunction with <br>
                        The 1<sup>st</sup> Surabaya Head & Neck Oncology Summit (SHNOS)
                    </p>
                    <p class="italic font-bold text-lg md:text-3xl">" Sea to Summit: Innovating,
                        Bridging Gaps & Driving Change "</p>
                </div>
                <div class="flex flex-col md:flex-row lg:justify-start justify-center items-center gap-3 mt-5">
                    <div class="flex items-center">
                        <div class="shrink-0 bg-gradient-to-br from-[#0E1E41] to-[#C0809A] p-4 rounded-full">
                            <i class="fa fa-calendar-o text-xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate">
                                Thursday to Sunday
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                August 5<sup>th</sup> - 8<sup>th</sup>, 2027
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center px-5">
                        <div class="shrink-0 bg-gradient-to-br from-[#0E1E41] to-[#C0809A] p-4 rounded-full">
                            <i class="fa fa-map-marker text-xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate ">
                                The Westin Surabaya
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                East Java, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-7 w-full gap-1 flex flex-wrap justify-center md:justify-start">
                    <a class="btn bg-[#C0809A] hover:bg-[#5f3e4b] hover:text-white rounded-xl"><i
                            class="fa-solid fa-file-download mr-1 text-xs"></i>Download
                        Announcement </a>
                    <a href="/registration" wire:navigate class="btn hover:bg-[#C0809A] btn-outline rounded-xl"><i
                            class="fa-solid fa-pen-to-square"></i> Register Now </a>
                </div>
            </div>
            <div class="px-1 order-2 lg:order-2">
                <livewire:section.flyer />
            </div>
        </div>
        <div
            class="absolute wave block md:hidden lg:block overflow-hidden w-full z-0 left-0 leading-none bottom-[-1px]">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="white" fill-opacity="1" d="M0,256L720,224L1440,160L1440,320L720,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <section class="px-2 -mt-10 lg:-mt-30 lg:px-7 pb-24">
        <div id="countdown" class="flex flex-wrap justify-center lg:justify-end md:flex-row w-full mx-auto gap-4">
            <div class="card bg-gradient-to-tr from-[#0E1E41] to-[#C0809A] rounded-2xl w-full max-w-2xl">
                <div class="card-body">
                    <div class="flex justify-evenly gap-4 items-center">
                        <div class="text-center">
                            <span id="days" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                            <small class="text-white mt-0 text-xs">Days</small>
                        </div>
                        <div class="text-center">
                            <span id="hours" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                            <small class="text-white mt-0 text-xs">Hours</small>
                        </div>
                        <div class="text-center">
                            <span id="minutes" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                            <small class="text-white mt-0 text-xs">Minutes</small>
                        </div>
                        <div class="text-center">
                            <span id="seconds" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                            <small class="text-white mt-0 text-xs">Seconds</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-t via-[#4E6690] from-[#0E1E41] to-[#fff] relative z-0 py-28">
        <div class="relative">

            <div class="mx-auto w-full px-5 sm:px-8 lg:px-12">
                <div class="mb-10 flex flex-col gap-4 text-center sm:mb-12">
                    <h2 class="text-3xl font-bold uppercase sm:text-4xl">Welcome <span
                            class="text-[#C0809A]">Message</span></h2>
                    <div class="mx-auto h-1 w-16 bg-[#C0809A]"></div>
                </div>

                <div class="grid gap-2 lg:grid-cols-3">
                    @foreach ($welcomeMessages as $welcomeMessage)
                    <article
                        class="flex h-full flex-col overflow-hidden border border-white/20 bg-[#075a99] rounded-md shadow-[0_18px_45px_rgba(11,20,90,0.2)]">
                        <div class="flex-1 p-7 sm:p-9">
                            <p class="mb-4 text-xs font-bold uppercase tracking-[0.16em] text-white">{{
                                $welcomeMessage->title }}</p>
                            <div class="h-px w-12 bg-[#0ca6dd]"></div>
                            <div class="mt-6 text-justify text-sm sm:text-base leading-7 text-slate-200">
                                {!! Str::limit(str($welcomeMessage->description)->markdown()->sanitizeHtml(), 450) !!}
                            </div>
                        </div>

                        <div class="p-0">
                            <div class="flex items-center justify-between gap-4 flex-col">
                                <div class="flex relative flex-col md:flex-row min-w-0 items-center gap-4">

                                    <img src="{{ $welcomeMessage->image ? asset('storage/' . $welcomeMessage->image) : asset('assets/images/speaker.png') }}"
                                        alt="{{ $welcomeMessage->name }}" class="z-10">
                                    <div class="min-w-0 p-6 sm:p-7 z-10">
                                        <p class="text-sm leading-5 text-white">{{ $welcomeMessage->title }}</p>
                                        <h3
                                            class="mt-1 text-lg lg:text-base xl:text-lg font-bold leading-tight text-white sm:text-xl">
                                            {{ $welcomeMessage->name }}</h3>
                                        @if ($welcomeMessage->name2 && $welcomeMessage->title2)
                                        <p class="mt-2 text-xs leading-5 text-slate-500">{{ $welcomeMessage->name2 }},
                                            {{ $welcomeMessage->title2 }}</p>
                                        @endif
                                    </div>
                                </div>
                                <a href="{{ route('welcome-message') }}#welcome-message-{{ $welcomeMessage->id }}"
                                    class="btn btn-outline btn-primary mb-5 text-white">Read more</a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="w-full max-w-6xl mx-auto border-t mt-10 pt-10 border-white border-opacity-35">
                <div class="mb-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="w-full border-e border-opacity-35 border-white ">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="200"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Speakers</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="5"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Pre & Congress Days</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="10"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Parallel Session Room </p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="3000"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Expected Attendance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-16 py-20  relative z-0 bg-competition">
        <div class="w-full pt-5">
            <div class="text-center pb-6 m-auto">
                <h2 class="mb-5 md:mb-8 text-3xl font-bold uppercase ">Dates to <span
                        class="text-primary">Remember</span></h2>
            </div>
            <livewire:section.important-date />
        </div>
    </section>

    {{--
    <livewire:section.carousel-sponsor /> --}}

    <section class="w-full pt-24 pb-3 px-2 lg:px-4">
        <div class="text-center mb-5 pb-10">
            <h2 class="md:text-3xl text-xl font-semibold uppercase mb-1"> THE <span class="text-primary">Venue</span>
            </h2>
        </div>
        <div class="">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="lg:w-1/3 w-fit">
                    <div
                        class="py-10  px-4 text-white rounded-lg shadow-md bg-gradient-to-tl from-[#0CA6DD] to-[#1B1464]">
                        <div class="">
                            <h5 class="pb-2 tracking-wide font-semibold">EVENT VENUE :
                            </h5>
                            <p class="pb-5 m-0 text-sm"> Bali Nusa Dua Convention Center </p>
                            <h5 class="pb-2 tracking-wide font-semibold">ADDRESS :
                            </h5>
                            <p class="pb-5 m-0 text-sm"> Nusa Dua Lot, Jl. Nusa Dua NW/1, Benoa,
                                South Kuta, Kabupaten Badung, Bali 80361
                            </p>

                            <a href="https://maps.app.goo.gl/6Qg2DCTgMUtXKKkS6" target="_blank"
                                class="hover:text-sky-500">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1 flex flex-col md:flex-row gap-2">
                    <iframe class="rounded-lg w-full "
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.901220328931!2d115.22591027501619!3d-8.795350491256988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2432481681435%3A0x28d2de6bdbd07735!2sBali%20Nusa%20Dua%20Convention%20Center!5e0!3m2!1sen!2sid!4v1786434899650!5m2!1sen!2sid"
                        width="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-5 justify-items-center">

                <div class="w-full ">
                    <a><img src="{{asset('assets/images/bali/1.jpg')}}"
                            class="w-full max-h-96 object-cover rounded-xl shadow-md" alt="venue bali "></a>
                </div>
                <div class="w-full ">
                    <a><img src="{{asset('assets/images/bali/2.jpg')}}"
                            class="w-full max-h-96 object-cover rounded-xl shadow-md" alt="venue bali "></a>
                </div>
                <div class="w-full ">
                    <a><img src="{{asset('assets/images/bali/3.jpg')}}"
                            class="w-full max-h-96 object-cover object-top rounded-xl shadow-md" alt="venue bali "></a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('livewire:navigated', function() {
        const days = document.getElementById('days');
        const hours = document.getElementById('hours');
        const minutes = document.getElementById('minutes');
        const seconds = document.getElementById('seconds');

        // Check if all elements are found
        const elementsExist = days && hours && minutes && seconds;

        // If any element is missing, log a warning and return
        if (!elementsExist) {
            console.warn('One or more countdown elements not found.');
            return;
        }

        // Get current date and time
        const currentTime = new Date();

        const targetTime = new Date(2027, 7, 5, 8, 0, 0);

        // Update countdown time
        function updateCountdown() {
            const currentTime = new Date();
            const diff = targetTime - currentTime;

            const d = Math.floor(diff / 1000 / 60 / 60 / 24);
            const h = Math.floor((diff / 1000 / 60 / 60) % 24);
            const m = Math.floor((diff / 1000 / 60) % 60);
            const s = Math.floor((diff / 1000) % 60);

            // Update elements if they exist
            if (days) days.innerHTML = d;
            if (hours) hours.innerHTML = h < 10 ? '0' + h : h;
            if (minutes) minutes.innerHTML = m < 10 ? '0' + m : m;
            if (seconds) seconds.innerHTML = s < 10 ? '0' + s : s;
        }

        // Call updateCountdown initially and set it to run every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    });
</script>