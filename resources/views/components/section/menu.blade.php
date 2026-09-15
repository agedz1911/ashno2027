<ul class="flex flex-wrap gap-6 uppercase items-center justify-center">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-[#C0809A]' : 'text-gray-800' }} hover:text-fuchsia-800 hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{  request()->is('about-ins') || request()->is('about-wfns') || request()->is('wfns-congress-2027') ? 'text-[#C0809A]' : 'text-gray-800' }} hover:cursor-pointer hover:text-fuchsia-800">
            About <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="{{route('wfns-congress-2027')}}" wire:navigate
                    class="{{ request()->is('wfns-congress-2027') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800 "> WFNS Congress 2027 <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="{{route('about-wfns')}}" wire:navigate
                    class="{{ request()->is('about-wfns') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800 "> WFNS <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="{{route('about-ins')}}" wire:navigate
                    class="{{ request()->is('about-ins') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800 "> INS <i class="fa-solid fa-angle-right"></i></a>
            </li>

        </ul>
    </div>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') || request()->is('welcome-message')  ? 'text-[#C0809A]' : 'text-gray-800' }} hover:cursor-pointer hover:text-fuchsia-800">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/welcome-message" wire:navigate
                    class="{{ request()->is('welcome-message') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800 ">Welcome
                    Message <i class="fa-solid fa-angle-right"></i></a>
            </li>

            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800 ">Local Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/faculties" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800 ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('topics') || request()->is('scientific-schedule') ? 'text-[#C0809A]' : 'text-gray-800' }} hover:cursor-pointer hover:text-fuchsia-800">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">

            {{-- <li>
                <a href="/topics" wire:navigate
                    class="{{ request()->is('topics') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800">
            Topics <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
            <li>
                <a href="/program-at-glance" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/scientific-schedule" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>

    <li>
        <a href="/registration" wire:navigate
            class="{{ request()->is('registration') ? 'text-[#C0809A]' : 'text-gray-800' }} hover:text-fuchsia-800 hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="/accommodation" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-[#C0809A]' : 'text-gray-800' }} hover:text-fuchsia-800 hover:underline">Accommodation
        </a>
    </li>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('submission')  || request()->is('presentation-schedule')  ? 'text-[#C0809A]' : 'text-gray-800' }} hover:cursor-pointer hover:text-fuchsia-800">
            Free Paper <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            {{-- <li>
                <a href="/presentation-schedule" wire:navigate
                    class="{{ request()->is('presentation-schedule') ? 'text-[#C0809A]' : '' }} justify-between hover:text-fuchsia-800">
            Free Paper Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" class="justify-between hover:text-fuchsia-800">Free Paper Presentation Submission <i
                        class="fa-solid fa-angle-right"></i></a>
            </li> --}}
            <li>
                <a href="/submission" wire:navigate
                    class="{{ request()->is('submission') ? 'text-fuchsia-800' : '' }} justify-between hover:text-fuchsia-800">Abstract
                    Submission<i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('visiting')  || request()->is('social-program')  ? 'text-[#C0809A]' : 'text-gray-800' }} hover:cursor-pointer hover:text-fuchsia-800">
            Visiting <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/visiting" wire:navigate
                    class="{{ request()->is('visiting') ? 'text-[#C0809A]' : '' }} justify-between hover:text-fuchsia-800">
                    Bali <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/visiting#venue"
                    class="{{ request()->is('visiting#venue') ? 'text-[#C0809A]' : '' }} justify-between hover:text-fuchsia-800">Conference
                    Venue <i class="fa-solid fa-angle-right"></i></a>
            </li>
            {{-- <li>
                <a href="/social-program" wire:navigate
                    class="{{ request()->is('social-program') ? 'text-[#C0809A]' : '' }} justify-between hover:text-fuchsia-800">Social
            Program <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
    </div>
    <li>
        <a href="/sponsorship" wire:navigate
            class="{{ request()->is('sponsorship') ? 'text-[#C0809A]' : 'text-gray-800' }} hover:text-fuchsia-800 hover:underline">Become a Sponsor
        </a>
    </li>

</ul>