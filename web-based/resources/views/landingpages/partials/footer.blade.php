<footer class="h-[230px] flex justify-between items-center px-20">
    <div class="w-[450px]">
        <div class="flex items-center gap-2.5 mb-4">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="25" fill="#EA580C"/>
            </svg>
            <h1 class="font-medium font text-[30px] text-[#EA580C]">BIRIMS</h1>
        </div>
        <div class="flex flex-col gap-[10px]">
            <div class="flex stroke-[var(--darkgray)] items-center gap-[10px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <p class="font-medium text-[#A1A1AA] text-[12px]">P22M+7WC, Quirino Hwy, Novaliches, Quezon City, Metro Manila, Philippines</p>
            </div>
            <div class="flex stroke-[var(--darkgray)] items-center gap-[10px]">
                <svg fill="var(--darkgray)" class="size-5" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                    <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd"/>
                </svg>
                <p class="font-medium text-[#A1A1AA] text-[12px]">www.facebook.com/brgysanbartolome2014</p>
            </div>
            <div class="flex stroke-[var(--darkgray)] items-center gap-[10px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <p class="font-medium text-[#A1A1AA] text-[12px]">birim.sanbartolome@gmail.com</p>
            </div>
        </div>

        <p class="font-medium text-[#A1A1AA] text-[12px]"></p>

    </div>
    <div class="w-[580px] flex justify-end gap-[70px]">
        <div class="flex flex-col gap-[5px]">
            <h2 class="font-medium text-[18px]">Services</h2>
            <ul class="flex flex-col gap-[5px]">
                <li><a href="{{url('login')}}" class="footer-nav">Blotter</a></li>
                <li><a href="{{url('login')}}" class="footer-nav">Documents</a></li> 
                <li><a href="{{url('login')}}" class="footer-nav">Appointment</a></li>
                <li><a href="{{url('login')}}" class="footer-nav">Announcement</a></li>
            </ul>
        </div>
        <div class="flex flex-col gap-[5px]">
            <h2 class="font-medium text-[18px]">Navigation</h2>
            <ul class="flex flex-col gap-[5px]">
                <li><a href="#" class="footer-nav">Home</a></li>
                <li><a href="{{url('about')}}" class="footer-nav">About</a></li>
                <li><a href="{{url('contact')}}" class="footer-nav">Contact</a></li>
                <li><a href="{{url('login')}}" class="footer-nav">Sign In</a></li>
            </ul>
        </div>
        <div class="flex flex-col gap-[5px]">
            <h2 class="font-medium text-[18px]">Resources</h2>
            <ul class="flex flex-col gap-[5px]">
                <li><a href="{{url('faq')}}" class="footer-nav">FAQs</a></li>
                <li><a href="{{url('terms')}}" class="footer-nav">Terms</a></li>
                <li><a href="{{url('privacy')}}" class="footer-nav">Privacy Policy</a></li>
                <li><a href="{{url('signup')}}" class="footer-nav">Sign Up</a></li>
            </ul>
        </div>
    </div>
</footer>