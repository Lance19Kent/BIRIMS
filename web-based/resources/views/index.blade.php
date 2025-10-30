<!DOCTYPE html>
<html lang="en" class="scroll-pt-[80px] scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRIMS</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/Ellipse.png')}}" type="image/x-icon">

    <!-- Google Fonts: Poppins/IBM Plex Serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vite CSS & Javascript -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="min-h-screen max-w-full bg-[#F4F4F5]">

    <!-- Navbar Section -->
    @include('partials.navbar')
    <!-- Navbar Section -->

    <main class="min-h-screen max-w-full bg-[#F4F4F5] flex-1 flex flex-col">
        <!-- Hero Section -->
        <section class="h-screen w-full flex md:flex-row justify-between items-center-safe px-30 pt-[60px] flex-col">
        <div class="w-[550px] flex flex-col gap-[20px]">
            <h1 class="md:text-[50px] font-medium leading-[65px] text-[32px]" style="font-family: 'IBM Plex Serif', serif;">Barangay Integrated Record and Incident Management System</h1>
            <p class="text-[18px] font-medium text-[#A1A1AA] leading-[27px]">A digital platform designed to simplify and secure the management of barangay resident records, incidents, clearances, and certifications. </p>
            <a href="#step-section" class="w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] text-white border border-[var(--gray)] fill-white bg-[#EA580C] rounded-[4px] justify-center gap-2 duration-150 ease-in hover:bg-[var(--gray)] hover:text-[#EA580C] hover:fill-[#EA580C] hover:border-[var(--orange)]">
                <p class="text-[20px] font-medium">Get Started</p>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/>
                </svg>
            </a>
        </div>
        <div class="w-[550px] h-[430px] flex justify-end">
            <img src="{{asset('assets/svg/hero-svg.svg')}}" alt="Hero Image" class="w-[500px] h-[430px] whitespace-nowrap">
        </div>
    </section>
        <!-- Hero Section -->

        <!-- Steps Section -->
            <section class="h-screen w-full bg-white flex flex-col items-center justify-center gap-[30px] pb-[30px]" id="step-section">
        <div class="flex flex-col gap-2 justify-center items-center">
            <h1 style="font-family: 'IBM Plex Serif', serif;" class="text-[50px] font-medium">Get Your Documents In Just 3 Easy Steps!</h1>
            <p class="font-medium text-[18px] text-[#A1A1AA]">Access barangay clearances, residency, indigency, and business permits online - fast, convenient, and secure.</p>
        </div>
        <div class="w-full px-35 flex justify-between">
            <div class="flex flex-col justify-center items-center">
                <img src="{{asset('assets/svg/fill-up.svg')}}" alt="Fill-up Form Photo" class="w-[200px] h-[200px]">
                <h2 class="font-semibold text-[16px] mt-4 mb-2">Fill Up The Form</h2>
                <p class="font-medium text-[16px] text-[#A1A1AA] w-[200px] text-center">Complete the digital application form after you logged in - anytime, anywhere.</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg width="193" height="4" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2"/>
                </svg>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{asset('assets/svg/payment.svg')}}" alt="Payment Photo" class="w-[200px] h-[200px]">
                <h2 class="font-semibold text-[16px] mt-4 mb-2">Payment</h2>
                <p class="font-medium text-[16px] text-[#A1A1AA] w-[200px] text-center">Pay securely online or at the barangay office. Your request will be processed once payment is confirmed.</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg width="193" height="4" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2"/>
                </svg>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{asset('assets/svg/delivery.svg')}}" alt="Delivery Photo" class="w-[200px] h-[200px]">
                <h2 class="font-semibold text-[16px] mt-4 mb-2">Delivery</h2>
                <p class="font-medium text-[16px] text-[#A1A1AA] w-[200px] text-center">Get notified once your document is ready for pickup or deliver - simple, fast and reliable,</p>
            </div>
        </div>
    </section>
        <!-- Steps Section -->

        <!-- Barangay Certificates Section -->
        <section class="min-h-screen w-full flex flex-col items-center justify-center gap-[50px] py-8 pb-[80px] pt-[50px]" id="cards-certificates">
    <div class="flex flex-col gap-2 items-center justify-center">
        <h1 style="font-family: 'IBM Plex Serif', serif;" class="font-medium text-[50px]">Request Your Barangay Certificates Online</h1>
        <p class="font-medium text-[16px] text-[#A1A1AA] pl-[200px] pr-[200px] text-center">Easily apply for your barangay documents - no more long lines! Choose the certificate you need and submit your request in minutes.</p>
    </div>
    <div class="flex gap-[100px] flex-col justify-between w-full">
        <div class="flex justify-between items-center w-full px-[100px]">
            <div class="certificates">
                <img src="{{asset('assets/svg/certificates/residency.svg')}}" alt="Barangay Certificate of Residency Photo">
                <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                    <h1 class="font-semibold text-[18px]">Barangay Certificate of Residency</h1>
                    <p class="font-normal text-[14px] text-[#52525B]">Confirms that you are a resident of Barangay San Bartolome, Quezon City for a specific period.</p>
                    <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                </div>
            </div>
            <div class="certificates">
                <img src="{{asset('assets/svg/certificates/indigency.svg')}}" alt="Barangay Certificate of Indigency Photo">
                <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                    <h1 class="font-semibold text-[18px]">Barangay Certificate of Indigency </h1>
                    <p class="font-normal text-[14px] text-[#52525B]">Issued to residents who need proof of low income for financial assistance or other government aid.</p>
                    <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                </div>
            </div>
            <div class="certificates">
                <img src="{{asset('assets/svg/certificates/no-objection.svg')}}" alt="Barangay Certificate of No Objection Photo">
                <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                    <h1 class="font-semibold text-[18px]">Barangay Certificate of No Objection</h1>
                    <p class="font-normal text-[14px] text-[#52525B]">Official consent from the barangay for activities such as job application, permits, or other valid requests.</p>
                    <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between items-center w-full px-[100px]">
        <div class="certificates">
                <img src="{{asset('assets/svg/certificates/business.svg')}}" alt="Barangay Certificate for Business Photo">
                <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                    <h1 class="font-semibold text-[18px]">Barangay Certificate for Business</h1>
                    <p class="font-normal text-[14px] text-[#52525B]">Issued to confirm that a business is operating within the Barangay and complies with local regulations.</p>
                    <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                </div>
            </div>
        <div class="certificates">
                <img src="{{asset('assets/svg/certificates/oath-taking.svg')}}" alt="Barangay Certificate of Oath Taking Photo">
                <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                    <h1 class="font-semibold text-[18px]">Barangay Certificate of Oath Taking </h1>
                    <p class="font-normal text-[14px] text-[#52525B]">A document required to newly elected or appointed barangay officials, certifying their eligibility.</p>
                    <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                </div>
            </div>
        <div class="certificates">
                <img src="{{asset('assets/svg/certificates/sedula.svg')}}" alt="Barangay Certificate of Sedula Photo">
                <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                    <h1 class="font-semibold text-[18px]">Barangay Certificate of Community Tax (Sedula)</h1>
                    <p class="font-normal text-[14px] text-[#52525B]">Official proof for individual that has paid the community tax - commonly used for various legal transactions.</p>
                    <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                </div>
            </div>
    </div>
    </div>
</section>
        <!-- Barangay Certificates Section -->

        <!-- Blotter Section -->
        <section class="h-screen w-full bg-white flex items-center justify-center px-[150px] pb-[60px]" id="blotter">
    <img src="{{asset('assets/svg/blotter-svg.svg')}}" alt="Blotter">
    <div class="flex flex-col gap-6 pl-20 w-[550px]">
        <h1 style="font-family: var(--font-ibm-plex-serif);" class="font-medium text-[50px] leading-[65px]">Need To File For a Blotter</h1>
        <p class="font-medium text-[18px] text-[#A1A1AA]">Report incidents, disputes, or complaints directly to Barangay San Bartolome. Submit your blotter details online and let our team assist you promptly. </p>
        <a href="#" class="w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] text-white fill-white rounded-[4px] justify-center gap-2 border duration-150 ease-in border-white hover:fill-[var(--orange)] hover:bg-white hover:border-[var(--orange)] hover:text-[var(--orange)]">
            <p class="text-[18px] font-medium">Report Now</p>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/>
            </svg>
        </a>
    </div>
</section>
        <!-- Blotter Section -->

        <!-- FAQ Section -->  
        <section class="h-screen w-full flex items-center justify-center pb-[80px]" id="contact-us">
    <div class="w-[600px] h-full flex flex-col gap-6 justify-center items-start px-20">
        <h1 class="font-medium text-[50px] leading-[65px]" style="font-family: var(--font-ibm-plex-serif);">Frequently Asked Questions</h1>
        <p class="font-medium text-[18px] text-[#A1A1AA]">If you have any question or concern, you can contact us in <a href="" class="text-[var(--orange)] duration-150 ease-in hover:underline">birims.sanbartolome@gmail.com</a> and we will quickly response at you! You can also contact us in different platforms just by clicking Contact Us below.</p>
        <a href="{{url('contact')}}" class="w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] rounded-[4px] justify-center gap-2 text-white fill-white border duration-150 ease-in border-white hover:bg-[var(--gray)] hover:text-[var(--orange)] hover:fill-[var(--orange)] hover:border-[var(--orange)]">
            <p class="text-[18px] font-medium">Contact Us</p>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/>
            </svg>
        </a>
    </div>
    <div class="w-[600px] h-full flex flex-col gap-6 justify-center items-center px-10">
        <ul class="w-[600px] h-full mt-[100px]">
            <li class="p-[16px]">
                <label for="first" class="faq-details">How do i request for my barangay documents?</label>
                <input type="radio" name="accordion" id="first" class="hidden" checked class="bg-amber-300">
                <div class="content">
                    <p class="faq-summary">You can request barangay documents by visiting the Barangay Hall or through our online portal. Fill out the request form, provide valid identification, and indicate the document type you need.</p>
                </div>
            </li>
            <hr class="text-[#E4E4E7]">
            <li class="p-[16px]">
                <label for="second" class="faq-details">What are the requirements to request for my documents?</label>
                <input type="radio" name="accordion" id="second" class="hidden">
                <div class="content">
                    <p class="faq-summary">You’ll need a valid government-issued ID, proof of residency, and in some cases, supporting documents depending on the type of clearance or certificate you’re requesting.</p>
                </div>
            </li>
            <hr class="text-[#E4E4E7]">
            <li class="p-[16px]">
                <label for="third" class="faq-details">What are the types of documents i can request for?</label>
                <input type="radio" name="accordion" id="third" class="hidden">
                <div class="content">
                    <p class="faq-summary">The types of documents that you can request are: Barangay Clearance, Business Clearance, Cedula, Oath Taking Certificate and Certificate of Residence, Indigency or Good Moral Character.</p>
                </div>
            </li>
            <hr class="text-[#E4E4E7]">
            <li class="p-[16px]">
                <label for="fourth" class="faq-details">Do i need to pay for a fee to deliver my documents?</label>
                <input type="radio" name="accordion" id="fourth" class="hidden">
                <div class="content">
                    <p class="faq-summary">Yes, minimal processing or delivery fees may apply depending on your document type and delivery option.</p>
                </div>
            </li>
            <hr class="text-[#E4E4E7]">
            <li class="p-[16px]">
                <label for="fifth" class="faq-details">Does (company name) support delivery services?</label>
                <input type="radio" name="accordion" id="fifth" class="hidden">
                <div class="content">
                    <p class="faq-summary">Yes. We offer door-to-door document delivery through our barangay’s partnered courier service for added convenience.</p>
                </div>
            </li>
            <hr class="text-[#E4E4E7]">
        </ul>
    </div>
</section>
        <!-- FAQ Section -->

        <!-- Create Account Section -->
        <section class="w-full bg-white relative" style="height: calc(100vh - 80px);" id="create-account">
        <div class="w-[155px] h-[234px] bg-[#EA580C] absolute rounded-br-[500px]"></div>
        <div class="w-[30px] h-[30px] bg-[#FFEDD5] rounded-full translate-x-[200px] translate-y-[50px] absolute"></div>
        <div class="w-[30px] h-[30px] bg-[#FB923C] rounded-full translate-x-[170px] translate-y-[100px] absolute"></div>

    <div class="w-full h-full flex flex-col gap-[20px] justify-center items-center px-[150px] text-center">
        <div class="flex flex-col ">
            <h1 class="z-10 relative text-[54px] font-medium" style="font-family: --font-ibm-plex-serif;">Create Your Account Now</h1>
            <hr class="z-0 translate-y-[48px] absolute w-[568px] border-5 border-[#EA580C]">
        </div>            
        <p class="text-[18px] text-[#A1A1AA] font-medium">So what are you waiting for? Request now your first online barangay document by signing in or creating your account!</p>
        <div class="flex gap-12 mt-4">
            <a href="{{ url('signup')}}" class="text-[18px] text-white font-medium px-[20px] py-[10px] bg-[#EA580C] rounded-[4px] duration-150 ease-in border border-[#EA580C] hover:bg-white hover:text-[var(--orange)]">Create Account</a>
            <a href="{{ url('login')}}" class="text-[18px] text-[#EA580C] font-medium px-[20px] py-[10px] bg-white rounded-[4px] border duration-150 ease-in border-[#e6c6b5] hover:bg-[var(--orange)] hover:text-white">Sign in To Account</a>
        </div>
    </div>
    <img src="assets/svg/create-account.svg" class="absolute bottom-0 right-0 w-[200px]">
</section>
        <!-- Create Account Section -->
    </main>

    <!-- Footer Section -->
    @include('partials.footer')
    <!-- Footer Section -->

</body>
</html> 