<div class="bg-[#F5F7FA]">
    <section class="relative overflow-hidden bg-[#C0809A]">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(14,30,65,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(78,102,144,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="text-white uppercase text-2xl font-bold tracking-wide lg:text-4xl">Abstract Submission</h2>
            <div class="mt-7 h-1 w-20 bg-[#f6c945]"></div>
        </div>
    </section>
    <x-section.breadcrumbs />

    <section class="py-12 max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 bg-[#F5F7FA]">
        @foreach ($guidelineAbstracts as $abstract)
        <div class="flex flex-col gap-5 mb-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#C0809A]">{{ $abstract->title }}</h2>
                </div>
            </div>
            {!! str($abstract->description)->markdown()->sanitizeHtml() !!}
        </div>
        @endforeach
    </section>
</div>