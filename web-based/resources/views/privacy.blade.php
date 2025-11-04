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

    <title>Privacy and Policy</title>
        <!-- Vite CSS & Javascript -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="w-full h-full">
     <!-- Navbar Section -->
    @include('partials.navbar')
    <!-- Navbar Section -->

    <main class="w-full min-h-screen flex-1 bg-[var(--gray)] relative md:pb-[260px] pb-[120px]">
        <svg viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 md:w-[250px] w-[130px] z-0">
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
        <svg viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute md:top-20 z-0 top-10 md:h-[360px] h-[200px]">
            <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C"/>
            <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5"/>
            <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C"/>
        </svg>
        <div class=" flex flex-col items-center pt-[35px] gap-[10px]">
            <h1 style="font-family: 'IBM Plex Serif';" class="pt-[80px] relative z-10 md:text-[50px] text-[32px] font-medium">Privacy and Policy</h1>
            <p class="relative z-10 text-[var(--darkgray)] md:text-[16px] text-[14px]">Last Updated: October 24 2025</p>
        </div>
        <div class="w-full mt-[50px] relative z-10 flex flex-col justify-center md:flex-row gap-[50px] px-[40px]">
           <div class="lg:w-[350px] md:w-[600px] sm-w-full flex ">
             <div class="w-full  bg-[var(--gray)] h-fit border border-[#71717A] flex flex-col rounded-[4px] sticky top-[150px]">
                <h1 style="font-family: 'IBM Plex Serif';" class="font-medium text-[16px] md:text-[18px] p-[10px] text-center md:text-left ">On this page</h1>
                <a href="#introduction" class="font-medium text-center md:text-left text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] privacy-nav-links active-privacy-nav">1. Introduction</a>
                <a href="#information-we-collect" class="privacy-nav-links font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px]  duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] text-center md:text-left ">2. Information We Collect</a>
                <a href="#use-of-services" class="privacy-nav-links font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] text-center md:text-left ">3. Use of Services</a>
                <a href="#data-privacy-and-protection" class="privacy-nav-links font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] text-center md:text-left ">4. Data Privacy and Protection</a>
                <a href="#data-sharing-and-disclosure" class="privacy-nav-links font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] text-center md:text-left ">5. Data Sharing and Disclosure</a>
                <a href="#user-rights" class="privacy-nav-links font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] text-center md:text-left ">6. User Rights</a>
                <a href="#updates-to-this-policy" class="privacy-nav-links font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] text-center md:text-left ">7. Updates to This Policy</a>
                <a href="#contact-us" class="privacy-nav-links font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] text-center md:text-left ">8. Contact Us</a>

            </div>
           </div>
           <div class="w-full lg:w-fit flex justify-center">
            <div class="w-full lg:max-w-[400px] h-fit flex flex-col gap-[10px] px-[20px] md:px-0">
                <div id="introduction" class="section">
                    <h6 class="font-medium md:text-[18px] text-[16px]">1. Introduction</h6>
                    <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px]">At BIRIMS (Barangay Integrated Record and Incident Management System), we value your privacy and are committed to protecting the personal information you share with us.
                    This Privacy Policy explains how we collect, use, and safeguard your data when you use our system and related services. </p>
                </div>
                <div id="information-we-collect" class="section">
                    <h6 class="font-medium md:text-[18px] text-[16px]">2. Information We Collect</h6>
                    <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px]">We may collect the following information to ensure accurate record management and efficient service delivery:
                        <ul class="list-disc flex flex-col gap-[5px] ml-[35px]">
                            <li class="text-[var(--darkgray)] font-medium leading-8" >Personal details such as name, address, contact number, and resident ID.</li>
                            <li class="text-[var(--darkgray)] font-medium leading-8" >Incident and report information submitted through the system.</li>
                            <li class="text-[var(--darkgray)] font-medium leading-8" >Login credentials (username and password).</li>
                            <li class="text-[var(--darkgray)] font-medium leading-8" >Technical information such as IP address, browser type, and access time for security monitoring.</li>
                        </ul>
                    </p>
                </div>
                <div id="use-of-services" class="section">
                    <h6 class="font-medium md:text-[18px] text-[16px]">3. Use of Services</h6>
                    <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px]">The information collected is used solely for the following purposes: 
                        <ul class="list-disc flex flex-col gap-[5px] ml-[35px]">
                            <li class="text-[var(--darkgray)] font-medium leading-8" >To manage barangay records and incident reports.</li>
                            <li class="text-[var(--darkgray)] font-medium leading-8" >To verify user identity and maintain account security.</li>
                            <li class="text-[var(--darkgray)] font-medium leading-8" >To improve the functionality and user experience of BIRIMS.</li>
                            <li class="text-[var(--darkgray)] font-medium leading-8" >To generate reports for barangay administrative purposes.</li>
                        </ul>
                    </p>
                </div>
                <div id="data-privacy-and-protection" class="section">
                    <h6 class="font-medium md:text-[18px] text-[16px]">4. Data Privacy and Protection</h6>
                    <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8">We implement appropriate security measures to protect your personal data from unauthorized access, disclosure, or misuse. All collected information is stored securely and can only be accessed by authorized barangay officials or system administrators.</p>
                </div>
                <div id="data-sharing-and-disclosure" class="section">
                    <h6 class="font-medium md:text-[18px] text-[16px] ">5. Data Sharing and Disclosure</h6>
                    <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px]">BIRIMS does not sell, trade, or rent user information.
                    Data may only be shared under the following conditions:
                    <ul class="list-disc flex flex-col gap-[5px] ml-[35px]">
                        <li class="text-[var(--darkgray)] font-medium leading-8">When required by law or official government requests.</li>
                        <li class="text-[var(--darkgray)] font-medium leading-8">With authorized barangay personnel who need access for record management.</li>
                        <li class="text-[var(--darkgray)] font-medium leading-8">With user consent for specific community-related purposes.</li>
                    </ul>
                    </p>
                </div>
                <div id="user-rights" class="section">
                    <h6 class="font-medium md:text-[18px] text-[16px]">6. User Rights</h6>
                    <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px]">You have the right to:
                    <ul class="list-disc flex flex-col gap-[5px] ml-[35px]">
                        <li class="text-[var(--darkgray)] font-medium leading-8">Access and review your personal information.</li>
                        <li class="text-[var(--darkgray)] font-medium leading-8">Request correction of inaccurate or outdated data.</li>
                        <li class="text-[var(--darkgray)] font-medium leading-8">Request deletion of your personal records, subject to barangay data retention policies.</li>
                    </ul>
                    </p>
                </div>
                <div id="updates-to-this-policy" class="section">
                    <h6 class="font-medium md:text-[18px] text-[16px]">7. Updates to This Policy</h6>
                    <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px]">We may update this Privacy Policy from time to time. All changes will be reflected on this page with the updated date above.</p>
                </div>
                <div id="contact-us" class="section ">
                    <h6 class="font-medium md:text-[18px] text-[16px]">8. Contact Us</h6>
                    <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px]">If you have questions or concerns about this Privacy Policy, you may contact:
                        <a href="https://maps.app.goo.gl/t9oBHUwfVVHSXJFs9" target="_blank" class="flex gap-[10px] text-[16px] text-[var(--darkgray)] font-medium mt-[10px] stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:underline hover:stroke-[var(--orange)] items-center">                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="md:size-6 size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <span class="text-[14px] md:text-[16px]">Barangay San Bartolome, Quezon City, Metro Manila</span>
                        </a>
                        <a href="https://www.facebook.com/brgysanbartolome2014" target="_blank" class="flex items-center gap-[10px] text-[16px] text-[var(--darkgray)] font-medium duration-150 ease-out hover:text-[var(--orange)] hover:underline fill-[var(--darkgray)] hover:fill-[var(--orange)]">                
                            <svg class="size-5" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd"/>
                            </svg>
                            <span class="text-[14px] md:text-[16px]">Barangay San Bartolome</span>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="flex gap-[10px] text-[16px] items-center text-[var(--darkgray)] font-medium stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:stroke-[var(--orange)] hover:underline">                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <span class="text-[14px] md:text-[16px] w-fit truncate block">birim.sanbartolome@gmail.com</span>
                        </a>
                        <a href="#" class="flex gap-[10px] text-[16px] items-center text-[var(--darkgray)] font-medium stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:stroke-[var(--orange)] hover:underline">                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            <span class="text-[14px] md:text-[16px]">(02) 8123-4567</span>
                        </a>
                    </p>
                </div>
            </div>
           </div>
        </div>
    </main>
    <!-- Footer Section -->
     @include('partials.footer')
    <!-- Footer Section -->
</body>
</html>