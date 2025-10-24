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

    <title>Privacy and Policy</title>
        <!-- Vite CSS & Javascript -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="w-full h-full">
     <!-- Navbar Section -->
    @include('landingpages.partials.navbar')
    <!-- Navbar Section -->

    <main class="w-full min-h-screen flex-1 bg-[var(--gray)] relative pb-[40px]">
        <svg viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 w-[230px]">
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
            <h1 style="font-family: 'IBM Plex Serif';" class="pt-[80px] relative z-10 text-[50px] font-medium">Privacy and Policy</h1>
            <p class="relative z-10 text-[var(--darkgray)]">Last Updated: October 24 2025</p>
        </div>
        <div class="mt-[50px] flex justify-between gap-[50px] pr-[230px] pl-[250px]">
            <div class="w-[350px] h-fit border border-[#71717A] flex flex-col ">
                <h1 style="font-family: 'IBM Plex Serif';" class="font-medium text-[18px] p-[10px]">On this page</h1>
                <a href="#" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">1. Acceptance of Terms</a>
                <a href="#" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px]  duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">2. User Accounts and Registrations</a>
                <a href="#" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">3. Use of Services</a>
                <a href="#" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">4. Incident Reporting</a>
                <a href="#" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">5. Data Privacy and Security</a>
                <a href="#" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">6. Users Conduct</a>
                <a href="#" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">7. Contact Information</a>
            </div>
            <div class="w-[600px] h-fit flex flex-col gap-[10px]">
                <div>
                    <h6 class="font-medium text-[18px]">1. Acceptance of Terms</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
                </div>
                <div>
                    <h6 class="font-medium text-[18px]">2. User Accounts and Registrations</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
                </div>
                <div>
                    <h6 class="font-medium text-[18px]">3. Use of Services</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
                </div>
                <div>
                    <h6 class="font-medium text-[18px]">4. Incident Reporting</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
                </div>
                <div>
                    <h6 class="font-medium text-[18px]">5. Data Privacy and Security</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
                </div>
                <div>
                    <h6 class="font-medium text-[18px]">6. Users Conduct</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
                </div>
                <div>
                    <h6 class="font-medium text-[18px]">7. Contact Information</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
     @include('landingpages.partials.footer')
    <!-- Footer Section -->
</body>
</html>