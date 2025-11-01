<header class="fixed top-0 left-0 w-full z-[100] flex bg-white items-center px-4 h-16 sm:px-10 md:h-20 justify-between">

         <!-- Hamburger Button (shows only on mobile) -->
    <button id="menu-btn" class="block md:hidden focus:outline-none cursor-pointer">
      <!-- 3-line hamburger icon -->
      <svg class="w-10" fill="none" stroke="var(--darkgray)" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <div class="md:flex items-center gap-2.5 bg ">
        <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="md:w-[50px] w-[35px] md:block hidden">
            <circle cx="25" cy="25" r="25" fill="#EA580C"/>
        </svg>
        <h1 class="font-medium font text-[30px] md:text-[30px] text-[#EA580C] ">BIRIMS</h1>
    </div>

    <div class="flex items-center">
        <!-- Off-canvas left panel on mobile; static/inline on md+ -->
        <div id="menu" class="fixed md:static left-0 top-16 md:top-auto md:left-auto z-40 md:flex md:justify-end md:items-center md:pr-10 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out w-64 md:w-auto h-[calc(100vh-4rem)] md:h-auto bg-white md:bg-transparent p-4 md:p-0">
            <!-- Column on mobile, row on md+ -->
            <ul class="flex flex-col md:flex-row gap-6 lg:gap-[40px]">
             <!-- The request()->is() function checks if the current URL matches and adds active automatically.
                     So when you move between pages, the correct menu stays highlighted -->
             <li><a href="{{url('/')}}" class="header-nav {{request()-> is('/') ? 'active' : ''}}">Home</a></li>
             <li><a href="{{url('about')}}" class="header-nav {{request()-> is('about') ? 'active' : ''}}">About Us</a></li>
             <li><a href="{{url('contact')}}" class="header-nav {{request()-> is('contact') ? 'active' : ''}}">Contact</a></li>
             <li><a href="{{url('faq')}}" class="header-nav {{request()-> is('faq') ? 'active' : ''}}">FAQs</a></li>
            </ul>
        </div>
        <a href="{{ url('login') }}" class="whitespace-nowrap p-[12px] bg-[var(--orange)] text-white rounded-[4px] border border-white duration-150 ease-in hover:bg-white hover:text-[var(--orange)] hover:border-[var(--orange)] text-[14px] md:text-[16px]">SIGN-IN</a>
    </div>

</header>