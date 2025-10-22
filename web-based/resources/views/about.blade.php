<!DOCTYPE html>
<html lang="en" class="scroll-pt-[80px] scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/img/Ellipse.png')}}" type="image/x-icon">

    <!-- Google Fonts: Poppins/IBM Plex Serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>About Us</title>
        <!-- Vite CSS & Javascript -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="h-full w-full">
     <!-- Navbar Section -->
    @include('landingpages.partials.navbar')
    <!-- Navbar Section -->

    <main class="flex-1 min-h-screen bg-[var(--gray)] flex flex-col items-center justify-center">
        <section class="w-full h-screen relative flex justify-center items-center ">
            <svg viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 w-[250px]">
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
            <svg width="328" height="316" viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-20 left-0 z-0">
                <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C"/>
                <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5"/>
                <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C"/>
            </svg>
            <div class="h-fit w-[450px] flex flex-col justify-center text-center">
                <h1 class="text-[64px] font-medium" style="font-family: 'IBM Plex Serif';">About Us</h1>
                <p class="text-[var(--darkgray)] mt-[10px]">BIRIMS is the unified digital platform for our barangay to manage resident records, business permits, and incident reporting — helping our community stay safe, informed, and connected.</p>
                <a href="#our-story" class="py-[10px] bg-[var(--orange)] w-[140px] text-white border border-[var(--orange)] self-center mt-[20px] duration-150 ease-out hover:bg-[var(--gray)] hover:text-[var(--orange)] rounded-[4px] text-[20px]">See More</a>
            </div>
        </section>
        <section id="our-story" class="h-screen w-full bg-white flex flex-col">
            <h1 style="font-family: 'IBM Plex Serif';" class="font-medium text-[50px] text-center pt-[50px]">Our Story</h1>
            <div class="flex px-[100px] items-center pb-[100px] gap-[50px]" style="height: calc(100% - 80px);">
                <p class="w-[500px] text-[var(--darkgray)]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <img src="assets/img/san-bartolome-pic.png" alt="San Bartolome Image"/>
            </div>
        </section>
        <section class="w-full h-screen">

        </section>
    </main>

    <!-- Footer Section -->
     @include('landingpages.partials.footer')
    <!-- Footer Section -->
</body>
</html>