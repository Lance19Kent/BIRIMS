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

    <title>Terms and Conditions</title>
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
            <h1 style="font-family: 'IBM Plex Serif';" class="pt-[80px] relative z-10 text-[50px] font-medium">Terms and Conditions</h1>
            <p class="relative z-10 text-[var(--darkgray)]">Last Updated: October 24 2025</p>
        </div>
        <div class="mt-[50px] flex justify-between gap-[50px] pr-[230px] pl-[250px]">
            <div class="w-[410px] h-fit border border-[#71717A] flex flex-col sticky top-[170px] ">
                <h1 style="font-family: 'IBM Plex Serif';" class="font-medium text-[18px] p-[10px]">On this page</h1>
                <a href="#acceptance-of-terms" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">1. Acceptance of Terms</a>
                <a href="#user-accounts-and-registrations" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px]  duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">2. User Accounts and Registrations</a>
                <a href="#use-of-services" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">3. Use of Services</a>
                <a href="#incident-reporting" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">4. Incident Reporting</a>
                <a href="#data-privacy-and-security" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">5. Data Privacy and Security</a>
                <a href="#users-conduct" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">6. Users Conduct</a>
                <a href="#contact-information" class="font-medium text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--orangehover100)] hover:text-[var(--gray100)]">7. Contact Information</a>
            </div>
            <div class="w-[600px] h-fit flex flex-col gap-[10px]">
                <div id="acceptance-of-terms">
                    <h6 class="font-medium text-[18px]">1. Acceptance of Terms</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">By accessing and using the Barangay Integrated Record and Incident Management System (BIRIMS), you agree to comply with and be bound by these Terms and Conditions. If you do not agree, please discontinue using the system. The Barangay of San Bartolome, Quezon City reserves the right to modify or update these terms at any time without prior notice.</p>
                </div>
                <div id="user-accounts-and-registrations">
                    <h6 class="font-medium text-[18px]">2. User Accounts and Registrations</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Users must register using accurate and complete information. Each account is personal and should not be shared with others. You are responsible for maintaining the confidentiality of your account credentials and all activities under your account. Any unauthorized access or misuse should be reported immediately to the barangay administration.</p>
                </div>
                <div id="use-of-services">
                    <h6 class="font-medium text-[18px]">3. Use of Services</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">BIRIMS is designed to streamline barangay operations, including resident record management, document requests, and incident reporting. The system should only be used for official and lawful purposes. Misuse, tampering, or unauthorized access to data is strictly prohibited and may result in account suspension or legal action.</p>
                </div>
                <div id="incident-reporting">
                    <h6 class="font-medium text-[18px]">4. Incident Reporting</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">Residents may submit incident reports such as complaints, accidents, or community concerns through the platform. All reports must be factual and submitted in good faith. False, misleading, or malicious reports will not be tolerated and may result in account restrictions or penalties under barangay ordinances.</p>
                </div>
                <div id="data-privacy-and-security">
                    <h6 class="font-medium text-[18px]">5. Data Privacy and Security</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">BIRIMS values your privacy and ensures that all collected personal information is handled in accordance with the Data Privacy Act of 2012 (Republic Act No. 10173). Data is used solely for barangay administrative purposes and is protected from unauthorized access, disclosure, or alteration through secure protocols and restricted system access.</p>
                </div>
                <div id="users-conduct">
                    <h6 class="font-medium text-[18px]">6. Users Conduct</h6>
                    <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px]">All users are expected to behave responsibly and respectfully when using the system. Any form of cyberbullying, harassment, or spreading false information is prohibited. The barangay reserves the right to review, suspend, or remove users who violate these guidelines.</p>
                </div>
                <div id="contact-information">
                    <h6 class="font-medium text-[18px]">7. Contact Information</h6>
                   <p class="font-medium text-[18px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px]">If you have questions or concerns about this Privacy Policy, you may contact:
                        <a href="https://maps.app.goo.gl/t9oBHUwfVVHSXJFs9" target="_blank" class="flex gap-[10px] text-[16px] text-[var(--darkgray)] font-medium mt-[10px] stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:underline hover:stroke-[var(--orange)]">                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <span>Barangay San Bartolome, Quezon City, Metro Manila</span>
                        </a>
                        <a href="https://www.facebook.com/brgysanbartolome2014" target="_blank" class="flex items-center gap-[10px] text-[16px] text-[var(--darkgray)] font-medium duration-150 ease-out hover:text-[var(--orange)] hover:underline fill-[var(--darkgray)] hover:fill-[var(--orange)]">                
                            <svg class="size-5" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd"/>
                            </svg>
                            <span>www.facebook.com/brgysanbartolome2014</span>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="flex gap-[10px] text-[16px] items-center text-[var(--darkgray)] font-medium stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:stroke-[var(--orange)] hover:underline">                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <span>birim.sanbartolome@gmail.com</span>
                        </a>
                        <a href="#" class="flex gap-[10px] text-[16px] items-center text-[var(--darkgray)] font-medium stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:stroke-[var(--orange)] hover:underline">                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            <span>(02) 8123-4567</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
     @include('landingpages.partials.footer')
    <!-- Footer Section -->
</body>
</html>