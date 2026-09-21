<footer class="pt-20 text-center text-white relative mt-10">
    <div class="absolute wave block md:hidden lg:block overflow-hidden w-full z-0 left-0 leading-none top-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill-opacity="1"
                d="M0,128L48,149.3C96,171,192,213,288,245.3C384,277,480,299,576,272C672,245,768,171,864,160C960,149,1056,203,1152,218.7C1248,235,1344,213,1392,202.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
    </div>
    <div class="absolute inset-0 bg-gradient-to-b from-[#0E1E41] to-[#0E1E41]/90"></div>
    <div class="relative">
        <div class="flex flex-col items-center w-full max-w-4xl m-auto">

            <img src="assets/images/logo/logo-event.png" class="max-w-xs" alt="Icon" class="">

            <div class="border-b border-white m-auto mb-6 mt-4 w-full max-w-3xl pb-10">

                <p class="mt-6 font-semibold mb-3">Congress Secretariat</p>
                <p class="mb-3"> Komplek Duta Merlin Blok C 35-36. <br>
                    Jl. Gajah Mada 3 – 5, Jakarta 10130, Indonesia </p>

                <div class="py-5 mt-3">
                    <ul class="m-0 p-0 flex flex-row gap-5 lg:gap-8 justify-center">
                        <li class=" rounded-md p-2 w-10 bg-[#C0809A] hover:bg-[#0E1E41] tooltip-bottom tooltip"
                            data-tip="ashno2027@pharma-pro.com">
                            <a href="mailto:ashno2027@pharma-pro.com" class="">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </a>
                        </li>
                        <li class=" rounded-md p-2 w-10 bg-[#C0809A] hover:bg-[#0E1E41] tooltip-bottom tooltip"
                            data-tip="+6221 6386 9502">
                            <a href="tel:+622163869502" class="">
                                <i class="fa fa-phone text-xl"></i>
                            </a>
                        </li>
                        <li class=" rounded-md p-2 w-10 bg-[#C0809A] hover:bg-[#0E1E41] tooltip-bottom tooltip"
                            data-tip="+62 822-7783-2431">
                            <a href="tel:+6282277832431" class="">
                                <i class="fa fa-mobile-screen text-xl"></i>
                            </a>
                        </li>
                        <li class=" rounded-md p-2 w-10 bg-[#C0809A] hover:bg-[#0E1E41] tooltip-bottom tooltip"
                            data-tip="+62 822-7783-2431">
                            <a href="https://wa.me/+6282277832431" class="">
                                <i class="fa fa-whatsapp text-xl"></i>
                            </a>
                        </li>

                        <li class=" rounded-md p-2 w-10 bg-[#C0809A] hover:bg-[#0E1E41] tooltip-bottom tooltip"
                            data-tip="@">
                            <a href="javascript:void(0)" class="">
                                <i class="fa fa-instagram text-xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pb-10 mt-4">
                <ul class="p-0 m-0 flex flex-row flex-wrap gap-4 lg:gap-6 justify-center">
                    <li class="text-sm font-normal hover:text-[#C0809A] hover:underline"><a
                            href="{{route('organizing-committee')}}">Committee</a></li>
                    <li class="text-sm font-normal hover:text-[#C0809A] hover:underline"><a
                            href="{{route('faculties')}}">Faculties</a></li>
                    <li class="text-sm font-normal hover:text-[#C0809A] hover:underline"><a
                            href="{{route('program-at-glance')}}">Schedule</a></li>
                    <li class="text-sm font-normal hover:text-[#C0809A] hover:underline"><a
                            href="{{route('registration')}}">Registration</a></li>
                    <li class="text-sm font-normal hover:text-[#C0809A] hover:underline"><a
                            href="{{route('submission')}}">Submission</a></li>
                    <li class="text-sm font-normal hover:text-[#C0809A] hover:underline"><a
                            href="{{route('sponsors')}}">Become a Sponsor</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="pb-6 pt-1 mt-5">
            <p class="text-xs">MIS - IT Pharma-Pro © {{ now()->year }}</p>
        </div>
    </div>
</footer>