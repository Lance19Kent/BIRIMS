<header class="h-20 w-full bg-white flex pl-10 fixed z-100">
    <div class="h-[100%] w-[189px] flex items-center gap-2.5">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="25" cy="25" r="25" fill="#EA580C"/>
        </svg>
        <h1 class="font-medium font text-[30px] text-[#EA580C]">BIRIMS</h1>
    </div>
    <div class="h-[100%] w-full flex justify-end items-center pr-10">
        <ul class="flex gap-[40px]">
            <li><a href="" class="header-nav">Home</a></li>
            <li><a href="{{url('contact')}}" class="header-nav">About Us</a></li>
            <li><a href="{{url('contact')}}" class="header-nav">Contact</a></li>
            <li><a href="{{url('faq')}}" class="header-nav">FAQs</a></li>
            <li><a href="{{ url('login') }}" class="p-[12px] bg-[var(--orange)] text-white rounded-[4px] border border-white duration-150 ease-in hover:bg-white hover:text-[var(--orange)] hover:border-[var(--orange)]">SIGN-IN</a></li>
        </ul>
    </div>
</header>