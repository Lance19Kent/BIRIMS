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

    <title>FAQs</title>
        <!-- Vite CSS & Javascript -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="w-full h-full">
     <!-- Navbar Section -->
    @include('landingpages.partials.navbar')
    <!-- Navbar Section -->

    <main class="w-full min-h-screen flex-1 bg-[var(--gray)] relative pb-[40px]">
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
        <svg width="328" height="316" viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-20 z-0">
            <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C"/>
            <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5"/>
            <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C"/>
        </svg>
        <div class="flex flex-col items-center pt-[35px]">
            <h1 style="font-family: 'IBM Plex Serif';" class="pt-[80px] relative z-10 text-[50px] font-medium">Frequently Asked Questions</h1>
            <p class="relative z-10 text-[var(--darkgray)]">We're here to help with any questions you have about requests, reports, and supported features. </p>
        </div>
        <section class="h-full w-full flex justify-center pb-[20px]" id="contact-us">
            <div class="w-[600px] h-full flex flex-col gap-6 justify-center items-center px-10">
                <ul class="w-[600px] h-fit pt-[30px]">
                    <li class="p-[16px]">
                        <label for="first" class="faq-content">How do i request for my barangay documents?</label>
                        <input type="radio" name="accordion" id="first" class="hidden" checked >
                            <p class="faq-summary">You can request barangay documents by visiting the Barangay Hall or through our online portal. Fill out the request form, provide valid identification, and indicate the document type you need.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="second" class="faq-content">What are the requirements to request for my documents?</label>
                        <input type="radio" name="accordion" id="second" class="hidden">
                        <p class="faq-summary">You’ll need a valid government-issued ID, proof of residency, and in some cases, supporting documents depending on the type of clearance or certificate you’re requesting.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="third" class="faq-content">What are the types of documents i can request for?</label>
                        <input type="radio" name="accordion" id="third" class="hidden">
                        <p class="faq-summary">The types of documents that you can request are: Barangay Clearance, Business Clearance, Cedula, Oath Taking Certificate and Certificate of Residence, Indigency or Good Moral Character.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="fourth" class="faq-content">Do i need to pay for a fee to deliver my documents?</label>
                        <input type="radio" name="accordion" id="fourth" class="hidden">
                        <p class="faq-summary">Yes, minimal processing or delivery fees may apply depending on your document type and delivery option.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="fifth" class="faq-content">Does BIRIMS support delivery services?</label>
                        <input type="radio" name="accordion" id="fifth" class="hidden">
                        <p class="faq-summary">Yes. We offer door-to-door document delivery through our barangay’s partnered courier service for added convenience.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="fifth" class="faq-content">Can I authorize someone else to claim my requested document?</label>
                        <input type="radio" name="accordion" id="fifth" class="hidden">
                        <p class="faq-summary">Yes, you can authorize another person by providing a signed authorization letter, a copy of your valid ID, and a copy of the representative’s valid ID.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="fifth" class="faq-content">What should I do if I entered incorrect information in my request form?</label>
                        <input type="radio" name="accordion" id="fifth" class="hidden">
                        <p class="faq-summary">Contact the barangay staff immediately through the Contact Us page or visit the barangay office to request correction before the document is processed.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="fifth" class="faq-content">What types of incidents can I report?</label>
                        <input type="radio" name="accordion" id="fifth" class="hidden">
                        <p class="faq-summary">You can report incidents such as fire, theft, accidents, domestic disputes, lost items, or any emergency situations within the barangay.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="fifth" class="faq-content">How secure is my information in BIRIMS?</label>
                        <input type="radio" name="accordion" id="fifth" class="hidden">
                        <p class="faq-summary">All data is encrypted and stored securely following data privacy regulations to ensure the confidentiality of residents’ information.</p>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="p-[16px]">
                        <label for="fifth" class="faq-content">Is BIRIMS accessible on mobile phones?</label>
                        <input type="radio" name="accordion" id="fifth" class="hidden">
                        <p class="faq-summary">Yes. BIRIMS is designed to be mobile-responsive, so you can access it conveniently through any smartphone browser.</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <!-- Footer Section -->
     @include('landingpages.partials.footer')
    <!-- Footer Section -->
</body>
</html>