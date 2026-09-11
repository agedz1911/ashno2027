<div>

    <section class="relative overflow-hidden bg-[#075a99]">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(18,183,221,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(20,89,157,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="text-white uppercase text-2xl font-bold tracking-wide lg:text-4xl">Local Organizing Committee
            </h2>
            <div class="mt-7 h-1 w-20 bg-[#f6c945]"></div>
        </div>
    </section>

    <section class="mx-auto w-full pattern px-5 md:px-10 pt-0 pb-10 md:py-20">
        <div class="bg-competition w-full h-full absolute"></div>
        @foreach ($uniqueCategories as $category)
        <h2 class="text-center text-xl lg:text-2xl font-bold mb-5 uppercase text-primary">{{$category}}</h2>
        {{-- <div class="flex flex-col items-center text-center group">
            <div class="relative mb-4">

                <div
                    class="w-40 h-40 md:w-44 md:h-44 rounded-full p-1 bg-gradient-to-tr from-amber-500 via-emerald-600 to-amber-300 shadow-lg group-hover:scale-105 transition-transform duration-300">
                    <div class="w-full h-full rounded-full overflow-hidden bg-slate-200 border-2 border-white">

                        <img src="https://via.placeholder.com/200" alt="Dr. dr. Ferry Safriadi"
                            class="w-full h-full object-cover">
                    </div>
                </div>

                <div
                    class="absolute bottom-1 right-1 bg-emerald-800 text-amber-300 w-10 h-10 rounded-full flex items-center justify-center border-2 border-amber-400 shadow-md">
                    <i class="fa-solid fa-gavel text-sm"></i>
                </div>
            </div>

        </div> --}}
        <div class="flex flex-wrap gap-4 justify-center mb-12">
            @foreach ($committees as $committee)
            @if ($committee->category == $category)
            <div class="card w-full max-w-xs flex flex-col items-center text-center group ">
                <div
                    class="w-60 h-60 md:w-64 md:h-64 rounded-full p-1 bg-gradient-to-tr from-cyan-700 via-indigo-200 to-cyan-800 shadow-lg group-hover:scale-105 transition-transform duration-300">
                    <div class="w-full h-full rounded-full overflow-hidden bg-slate-200 border-2 border-white">

                        <img src="{{$committee->image ? asset('storage/' . $committee->image) : "
                            assets/images/speaker.png"}}" alt="{{$committee->name}}"
                            class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="card-body ">
                    <div class="w-full border-t-2 border-cyan-800/20 pt-3 flex flex-col items-center">
                        <h3 class="font-bold text-slate-800 text-base md:text-lg leading-tight mb-1">
                            {{ $committee->name }}</span>
                        </h3>
                        <div class="w-12 h-0.5 bg-cyan-400 my-2"></div>
                        @if ($committee->title != null)
                        <span
                            class="text-xs font-semibold text-cyan-800 uppercase tracking-wide bg-cyan-100/80 px-3 py-1 rounded-full border border-cyan-200">
                            ({{ $committee->title }})
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
        {{-- <div class="grid grid-cols-1 gap-3 relative ">
            @if (count($committees) > 0)
            @foreach ($uniqueCategories as $category)
            <div class="flex flex-col">
                <h1 class="font-semibold text-primary text-xl mt-5 md:mt-0">{{ $category }}</h1>
                <div class="flex flex-col">
                    @foreach ($committees as $committee)
                    @if ($committee->category == $category)
                    <ul class="list-disc list-inside">
                        <li class="mb-2 text-slate-600">{{ $committee->name }}
                            @if ($committee->title != null)
                            <br>
                            <span class="font-semibold ml-3">({{ $committee->title }})</span>
                            @endif
                        </li>
                    </ul>
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
            @else
            <div class="w-full border">
                <p class="text-gray-500 text-2xl text-center font-semibold">No Data</p>
            </div>
            @endif
        </div> --}}
    </section>
</div>