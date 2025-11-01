<header class="fixed top-0 left-0 w-full z-[100] flex bg-white justify-between items-center px-4 h-16 sm:px-10 md:h-20">
    <div class=" flex items-center gap-2.5">
        <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="md:w-[50px] w-[35px]">
            <circle cx="25" cy="25" r="25" fill="#EA580C"/>
        </svg>
        <h1 class="font-medium font text-[24px] md:text-[30px] text-[#EA580C]">BIRIMS</h1>
    </div>
    <div class="h-[100%] w-full flex justify-end items-center pr-10">
        <ul class="hidden md:flex gap-6 lg:gap-[40px]" id="menu">
            <!-- The request()->is() function checks if the current URL matches and adds active automatically.
                    So when you move between pages, the correct menu stays highlighted -->
            <li><a href="{{url('/')}}" class="header-nav {{request()-> is('/') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{url('about')}}" class="header-nav {{request()-> is('about') ? 'active' : ''}}">About Us</a></li>
            <li><a href="{{url('contact')}}" class="header-nav {{request()-> is('contact') ? 'active' : ''}}">Contact</a></li>
            <li><a href="{{url('faq')}}" class="header-nav {{request()-> is('faq') ? 'active' : ''}}">FAQs</a></li>
            <li><a href="{{ url('login') }}" class="p-[12px] bg-[var(--orange)] text-white rounded-[4px] border border-white duration-150 ease-in hover:bg-white hover:text-[var(--orange)] hover:border-[var(--orange)]">SIGN-IN</a></li>
        </ul>
    </div>
</header>