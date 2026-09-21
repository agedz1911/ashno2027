<nav class="space-y-4">
    <ul class="flex flex-col gap-5">
        <li>
            <a href="/" wire:navigate
                class="{{ request()->is('/') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Home
                <i class="fa-solid fa-angle-right"></i></a>
        </li>

        <li>
            <a href="/welcome-message" wire:navigate
                class="{{ request()->is('welcome-message') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Welcome Message
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/organizing-committee" wire:navigate
                class="{{ request()->is('organizing-committee') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Organizing
                Committee <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/faculties" wire:navigate
                class="{{ request()->is('faculties') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Faculties
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        {{-- <li>
            <a href="/topics" wire:navigate
                class="{{ request()->is('topics') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">
        Topics <i class="fa-solid fa-angle-right"></i></a>
        </li> --}}
        <li>
            <a href="{{route('program-at-glance')}}" wire:navigate
                class="{{ request()->is('program-at-glance') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Program
                at Glance <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="{{route('scientific-schedule')}}" wire:navigate
                class="{{ request()->is('scientific-schedule') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Scientific
                Schedule <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/registration" wire:navigate
                class="{{ request()->is('registration') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Registration
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/accommodation" wire:navigate
                class="{{ request()->is('accommodation') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Accommodation
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        {{--<li>
            <a href="/presentation-schedule" wire:navigate
                class="{{ request()->is('presentation-schedule') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Free Paper Schedule
        <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#"
                class=" justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Free Paper Presentation Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li> --}}
        <li>
            <a href="/submission" wire:navigate
                class="{{ request()->is('submission') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Abstract Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/sponsorship" wire:navigate
                class="{{ request()->is('sponsorship') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Become a Sponsor
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        {{-- <li>
            <a href="/visiting" wire:navigate
                class="{{ request()->is('visiting') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Visiting
        <i class="fa-solid fa-angle-right"></i></a>
        </li>

        <li>
            <a href="/social-program" wire:navigate
                class="{{ request()->is('social-program') ? 'text-[#C0809A]' : '' }} justify-between font-normal hover:text-[#0CA6DD] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-blue-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Social Program
                <i class="fa-solid fa-angle-right"></i></a>
        </li> --}}
    </ul>
</nav>