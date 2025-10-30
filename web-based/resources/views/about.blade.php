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
    @include('partials.navbar')
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
                <p class="text-[var(--darkgray)] mt-[10px] text-[18px]">BIRIMS is the unified digital platform for our barangay to manage resident records, business permits, and incident reporting — helping our community stay safe, informed, and connected.</p>
                <a href="#our-story" class="py-[8px] bg-[var(--orange)] w-[140px] text-white border border-[var(--orange)] self-center mt-[20px] duration-150 ease-out hover:bg-[var(--gray)] hover:text-[var(--orange)] rounded-[4px] text-[20px]">See More</a>
            </div>
        </section>
        <section id="our-story" class="h-screen w-full bg-white flex flex-col">
            <h1 style="font-family: 'IBM Plex Serif';" class="font-medium text-[50px] text-center pt-[40px]">Our Story</h1>
            <div class="flex px-[80px] items-center justify-center pb-[100px] gap-[40px]" style="height: calc(100% - 80px);">
                <p class="w-[600px] text-[var(--darkgray)]">Barangay San Bartolome, Quezon City, has long faced challenges in managing resident records, incident reports, and manual request forms. Most processes were done on paper, making it time-consuming for both residents and barangay staff to access and organize important information. Through a series of observations and interviews with barangay officials and residents, our team discovered the need for a more efficient and accessible way to handle these records. The Barangay Integrated Record and Incident Management System (BIRIMS) was developed — a digital platform designed to simplify record management, improve data accuracy, and speed up the delivery of public services. BIRIMS aims to bridge the gap between technology and community service, helping San Bartolome embrace a smarter and more transparent system for the benefit of every resident.</p>
                <img src="assets/img/san-bartolome-pic.png" width="600" alt="San Bartolome Image"/>
            </div>
        </section>
        <section class="w-full min-h-screen pb-[30px]">
            <div class="pt-[50px] flex flex-col items-center ">
                <h1 style="font-family: 'IBM Plex Serif';" class="font-medium text-[50px]">Our Mission</h1>
                <p class="text-[var(--darkgray)]">Our System provides assitance to the residents of San Bartolome, Quezon City with having a Mission, Vision and Values inside our organization.</p>
            </div>
            <div class="flex justify-center items-start gap-[30px] pt-[50px]" style="height: calc(100vh - 150px);">
                <div class="w-[350px] flex flex-col items-center gap-[10px]">
                    <img src="assets/svg/about/rocket.svg" width="150">
                    <h3 style="font-family: 'IBM Plex Serif';" class="text-[25px] font-semibold">Our <span class="text-[var(--orange)]">MISSION</span></h3>
                    <p class="font-medium text-[16px] text-[var(--darkgray)] text-center">To provide an efficient and reliable digital platform that simplifies barangay record management, incident reporting, and documentation.</p>
                </div>
                <hr class="rotate-180 border h-[360px] border-[var(--darkgray)] "/>
                <div class="w-[350px] flex flex-col items-center gap-[10px]">
                    <img src="assets/svg/about/vision.svg" width="150">
                    <h3 style="font-family: 'IBM Plex Serif';" class="text-[25px] font-semibold">Our <span class="text-[var(--orange)]">VISION</span></h3>
                    <p class="font-medium text-[16px] text-[var(--darkgray)] text-center">To build a transparent and technology-driven community where data management and public service work hand in hand.</p>
                </div>
                <hr class="rotate-180 border h-[360px] border-[var(--darkgray)] "/>
                <div class="w-[350px] flex flex-col items-center gap-[10px]">
                    <img src="assets/svg/about/heart.svg" width="150">
                    <h3 style="font-family: 'IBM Plex Serif';" class="text-[25px] font-semibold">Our <span class="text-[var(--orange)]">VALUES</span></h3>
                    <ul class="text-[var(--darkgray)] font-medium text-[16px] text-center">
                        <li><span class="text-[var(--iconorange)]">Transparency</span> - open and honest service.</li>
                        <li><span class="text-[var(--iconorange)]">Efficiency</span> - saves time and effort.</li>
                        <li><span class="text-[var(--iconorange)]">Integrity</span> - accuracy and accountability.</li>
                        <li><span class="text-[var(--iconorange)]">Community Empowerment</span> - strengthen the bond between technology and local governance.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="w-full h-screen bg-white flex flex-col">
            <div class="flex justify-around pt-[50px]">
                <div class="flex flex-col w-[600px] ">
                    <h1 style="font-family: 'IBM Plex Serif';" class="font-medium text-[50px]">San Bartolome Vicinity</h1>
                    <p style="font-family: 'IBM Plex Serif';" class="font-medium text-[20px]"> Hwy, Novaliches, Quezon City, Metro Manila</p>
                </div>
                <p class="w-[500px] text-[var(--darkgray)] text-[16px] font-medium">
                   Located along Quirino Highway, Novaliches, Quezon City, Barangay San Bartolome is one of the most active and progressive barangays in Metro Manila. The area serves as a vital community hub, surrounded by schools, residential areas, and local businesses.
                </p>
            </div>
            <iframe class="mt-[20px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.2102367772827!2d121.03219277408235!3d14.70069967462017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0d8b7291c03%3A0xfebb36d4bd498470!2sSan%20Bartolome%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1761190349134!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>

    <!-- Footer Section -->
     @include('partials.footer')
    <!-- Footer Section -->
</body>
</html>