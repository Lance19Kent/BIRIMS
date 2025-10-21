<!DOCTYPE html>
<html lang="en" class="scroll-pt-[80px]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/img/Ellipse.png')}}" type="image/x-icon">

    <!-- Google Fonts: Poppins/IBM Plex Serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Contact Us</title>
        <!-- Vite CSS & Javascript -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="w-full h-full">
     <!-- Navbar Section -->
    @include('landingpages.partials.navbar')
    <!-- Navbar Section -->

    <main class="w-full h-screen flex-1 bg-[var(--gray)] relative">
        <svg width="185" height="185" viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0">
        <g clip-path="url(#clip0_58_1146)">
            <path d="M185 65.366H65.3661V185H185V65.366Z" fill="#FDBA74"/>
            <path d="M125.184 5.55005H5.55005V125.184H125.184V5.55005Z" stroke="#111111" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
            <clipPath id="clip0_58_1146">
                <rect width="185" height="185" fill="white"/>
            </clipPath>
        </defs>
        </svg>
        <svg width="328" height="316" viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-20 z-0">
            <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C"/>
            <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5"/>
            <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C"/>
        </svg>
        <div class="flex flex-col items-center pt-[35px]">
            <h1 style="font-family: 'IBM Plex Serif';" class="pt-[80px] relative z-10 text-[50px] font-medium">Contact us right now!</h1>
            <p class="relative z-10 text-[var(--darkgray)]">We are committed to processing the information in order to contact you and talk about your project. </p>
        </div>
        <div class="flex justify-center pt-[20px] items-center">
            <div class="w-[500px] h-[300px] flex flex-col justify-center gap-[30px] pl-[50px] pr-[60px]">
                <div class="flex gap-[20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--iconorange)" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <a href="#" class="text-[16px]">birim.sanbartolome@gmail.com</a>
                </div>
                <div class="flex gap-[20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--iconorange)" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <a href="#" class="text-[16px]">P22M+7WC, Quirino Hwy, Novaliches, Quezon City, Metro Manila, Philippines</a>
                </div>
                <div class="flex gap-[20px]">
                    <svg fill="var(--iconorange)" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" class="size-6">
                        <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd"/>
                    </svg>
                    <a href="#" class="text-[16px]">www.facebook.com/brgysanbartolome2014</a>
                </div>
                <div class="flex gap-[20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--iconorange)" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    <a href="#" class="text-[16px]">+28 277 6775</a>
                </div>
            </div>
            <div class="w-[500px] h-[350px] bg-amber-100 pr-[75px]">
                <form class="flex flex-col gap-[30px]">
                    <span class="flex flex-col relative leading-3">                
                        <label class="font-semibold text-[13px]">Name</label>
                            <input type="text" placeholder="Ex. Juan Dela Cruz" class="peer text-[13px] w-full duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] placeholder:text-[14px] relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--darkgray)" class="size-5 absolute top-[22px] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                    </span>
                    <span class="flex flex-col relative leading-3">                
                        <label class="font-semibold text-[13px]">Email</label>
                            <input type="text" placeholder="example@chakraui" class="peer text-[13px] w-full duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] placeholder:text-[14px]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute bottom-[12px] w-[20px] stroke-[var(--darkgray)] opacity-0 pointer-events-none peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </span>
                    <span class="flex flex-col relative leading-3">                
                        <label class="font-semibold text-[13px]">Subject</label>
                            <input type="text" placeholder="Ex. Website Bug" class="peer text-[13px] w-full duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] placeholder:text-[14px] relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--darkgray)" class="size-5 absolute top-[22px] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                    </span>
                </form>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
     @include('landingpages.partials.footer')
    <!-- Footer Section -->
</body>
</html>