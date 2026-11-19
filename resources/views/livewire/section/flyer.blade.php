<div>
    @if ($flyers && $flyers->isNotEmpty())
    <div class="carousel w-full max-w-md rounded-2xl" x-data="{ 
         currentSlide: 0, 
         totalSlides: {{ count($flyers) }},
         interval: null 
     }" x-init="interval = setInterval(() => { 
         currentSlide = (currentSlide + 1) % totalSlides;
     }, 6000)" @mouseenter="clearInterval(interval)" @mouseleave="interval = setInterval(() => { 
         currentSlide = (currentSlide + 1) % totalSlides;
     }, 6000)">
        <div class="flex transition-transform duration-500 ease-in-out h-full"
            :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
            @foreach ($flyers as $index => $flyer)
            <div id="slide{{ $index + 1 }}"
                class="carousel-item relative w-full ease-in-out duration-300 h-full object-cover">
                {{-- @foreach ($flyer->image as $image) --}}
                <div class="flex w-full flex-col">
                    <figure>
                        <img src="{{ asset('storage/' . $flyer->image)}}" alt=""
                            class="h-full object-cover max-w-full rounded-2xl" />
                    </figure>
                    @if (filled($flyer->description))
                        <div class="mt-2 text-center">
                            <button class="btn btn-warning btn-sm rounded-xl" onclick="document.getElementById('flyer-modal-{{ $flyer->id }}').showModal()">Read More</button>
                        </div>
                    @endif
                </div>
                @if (filled($flyer->description))
                    <dialog id="flyer-modal-{{ $flyer->id }}" class="modal">
                        <div class="modal-box py-4 w-11/12 max-w-5xl bg-gray-900">
                            <h3 class="text-lg font-bold text-white">{{$flyer->title}}</h3>
                            {!! str($flyer->description)->markdown()->sanitizeHtml() !!}
                            <div class="modal-action">
                                <form method="dialog">
                                    <button class="btn btn-error">Close</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                @endif
                {{-- @endforeach --}}
                <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <button
                        @click="clearInterval(interval); currentSlide = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1; setTimeout(() => interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 6000), 6000)"
                        class="btn btn-circle btn-xs btn-outline">❮</button>
                    <button
                        @click="clearInterval(interval); currentSlide = (currentSlide + 1) % totalSlides; setTimeout(() => interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 6000), 6000)"
                        class="btn btn-circle btn-xs btn-outline">❯</button>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    @else
    <img src="assets/images/banner.png" class="w-full rounded-xl" alt="Banner">
    @endif
</div>