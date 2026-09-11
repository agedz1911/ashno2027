<div>

    <section class="relative overflow-hidden bg-[#075a99]">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(18,183,221,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(20,89,157,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="text-white uppercase text-2xl font-bold tracking-wide lg:text-4xl">Become a Sponsor</h2>
            <div class="mt-7 h-1 w-20 bg-[#f6c945]"></div>
        </div>
    </section>

    <section class="mx-auto w-full px-5 md:px-10 pt-0 pb-10 md:py-20 ">
        <div class="mb-5 text-justify text-gray-900 ">
            <p>As we prepare to make history with the WFNS 2027; the first-ever WFNS world congress hosted in the ASEAN region - your organization has an unprecedented opportunity to position itself at the forefront of global neurosurgical innovation.
                Partnering with us allows you to connect directly with international key opinion leaders, showcase cutting-edge medical technologies, and expand your brand footprint across a rapidly growing healthcare market.
                To secure your place among our core corporate partners and receive the comprehensive sponsorship proposal, please contact the Congress Secretariat via email at <a class="text-primary hover:text-indigo-600 hover:underline" href="mailto:inasponsor@wfns2027bali.org">inasponsor@wfns2027bali.org</a> (for local partners) or <a class="text-primary hover:text-indigo-600 hover:underline" href="mailto:intsponsor@wfns2027bali.org">intsponsor@wfns2027bali.org</a> (for international partners).
            </p>
        </div>
        <div class="my-5 ">
            <h1 class="text-lg font-bold mb-2">Force Majeure, Event Modifications, and Sponsor Property Liability</h1>
            <p class="text-gray-900 text-justify">The organizing committee shall not be held liable for any financial losses, unfulfilled promotional exposure, or operational disruptions resulting from a force majeure event—including natural disasters, facility failure, or man-made emergencies - occurring prior to, during, or after the event.</p>
            <ul class="list-disc ml-5 text-gray-900 text-justify mt-4">
                <li>Sponsorship Non-Refundability: If a force majeure event requires a change of venue, event modification, early conclusion, or postponement of up to six (6) months, sponsorship fees remain strictly non-refundable. The committee will make reasonable efforts to deliver contractual benefits during the rescheduled event or through adjusted exposure channels</li>
                <li>Property & Material Damage (All Conditions): Under any and all conditions, the committee accepts no liability whatsoever for any loss, theft, damage, or destruction of sponsor equipment, exhibition structures, merchandise, promotional materials, or personal property, whether occurring on-site, in storage, in transit, or during travel delays, regardless of the cause</li>
                <li>Insurance Requirement: Sponsoring companies are strongly advised to maintain independent commercial insurance, including general liability, equipment, and cargo insurance, to cover exhibition structures, corporate property damage, and commercial disruption</li>
            </ul>
        </div>
    </section>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 pattern">
        @foreach ($sortedGroupedSponsors as $category => $sponsors)
        <div class="border-b-2 border-dashed py-8 border-gray-300">
            <div class="">
                <div class="m-auto p-4">
                    <h2 class="mb-1 mt-3 text-2xl font-semibold text-center text-primary uppercase">{{ $category }}</h2>
                </div>
                <div class="flex flex-wrap justify-center items-center mx-5">
                    @foreach ($sponsors as $sponsor)
                    @if ($sponsor->category == 'Gold Sponsor')
                    <div class="p-0 border-x border-gray-300 w-full md:w-1/2 lg:w-1/3">
                        <div class="tooltip tooltip-primary tooltip-bottom" data-tip="{{$sponsor->company}}">
                            <div class="p-2 opacity-75 hover:opacity-100 text-center">
                                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                    target="_blank">
                                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                        class="img-fluid" alt="' . $sponsor->company . '" />' : '<small
                                        class="text-center text-primary">' . $sponsor->company . '</small>' !!}
                                </a>
                            </div>
                        </div>
                    </div>
                    @elseif ($sponsor->category == 'Silver Sponsor')
                    <div class="p-0 border-x border-gray-300 w-full md:w-1/3 lg:w-1/4">
                        <div class="tooltip tooltip-primary tooltip-bottom" data-tip="{{$sponsor->company}}">
                            <div class="p-2 opacity-75 hover:opacity-100 text-center">
                                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                    target="_blank">
                                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                        class="img-fluid" alt="' . $sponsor->company . '" />' : '<small
                                        class="text-center text-primary">' . $sponsor->company . '</small>' !!}
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="p-0 border-x border-gray-300 w-full md:w-1/4 lg:w-1/5">
                        <div class="tooltip tooltip-primary tooltip-bottom" data-tip="{{$sponsor->company}}">
                            <div class="p-2 opacity-75 hover:opacity-100 text-center">
                                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                    target="_blank">
                                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                        class="img-fluid" alt="' . $sponsor->company . '" />' : '<small
                                        class="text-center text-primary">' . $sponsor->company . '</small>' !!}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>