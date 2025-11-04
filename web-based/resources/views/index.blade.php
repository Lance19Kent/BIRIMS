<!DOCTYPE html>
<html lang="en" class="md:scroll-pt-[80px] scroll-pt-[60px] scroll-smooth">
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

    <main class="min-h-screen w-full bg-[#F4F4F5] flex-1 flex flex-col">

        <!-- Hero Section -->
        <section class="min-h-screen w-full flex md:flex-row justify-between items-center lg:px-[30px] md:px-[20px] px-[40px] md:pt-[60px] flex-col pt-[90px] text-center md:text-left md:gap-0 gap-[30px] pb-[60px] md:pb-0">
            <div class="w-full md:max-w-[550px] flex flex-col gap-[20px] items-center md:items-start">
                <h1 class="md:text-[50px] font-medium md:leading-[65px] text-[32px]" style="font-family: 'IBM Plex Serif', serif;">Barangay Integrated Record and Incident Management System</h1>
                <p class="md:text-[18px] text-[16px] font-medium text-[#A1A1AA] leading-[27px]">A digital platform designed to simplify and secure the management of barangay resident records, incidents, clearances, and certifications. </p>
                <a href="#step-section" class="w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] text-white border border-[var(--gray)] fill-white bg-[#EA580C] rounded-[4px] justify-center gap-2 duration-150 ease-in hover:bg-[var(--gray)] hover:text-[#EA580C] hover:fill-[#EA580C] hover:border-[var(--orange)]">
                    <p class="md:text-[20px] font-medium">Get Started</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/>
                    </svg>
                </a>
            </div>
            <div class="w-full md:max-w-[550px] max-w-[220px] flex justify-end">
                <img src="{{asset('assets/svg/hero-svg.svg')}}" alt="Hero Image">
            </div>
        </section>
        <!-- Hero Section -->

        <!-- Steps Section -->
        <section class="min-h-screen w-full bg-white flex flex-col items-center justify-center gap-[30px] lg:pb-[30px] pb-[50px] px-[40px] lg:px-0 text-center lg:pt-0 pt-[30px]" id="step-section">
            <div class="flex flex-col gap-2 justify-center items-center">
                <h1 style="font-family: 'IBM Plex Serif', serif;" class="md:text-[50px] text-[32px] font-medium">Get Your Documents In Just 3 Easy Steps!</h1>
                <p class="font-medium md:text-[18px] text-[16px] text-[#A1A1AA]">Access barangay clearances, residency, indigency, and business permits online - fast, convenient, and secure.</p>
            </div>
            <div class="w-full lg:px-35 flex md:flex-row flex-col items-center justify-between gap-[50px] lg:gap-0">
                <div class="flex w-fit flex-col justify-center items-center ">
                    <img src="{{asset('assets/svg/fill-up.svg')}}" alt="Fill-up Form Photo" class="md:w-[200px] w-[150px]">
                    <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Fill Up The Form</h2>
                    <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px] text-center">Complete the digital application form after you logged in - anytime, anywhere.</p>
                </div>
                <div class="flex flex-col justify-center items-center rotate-90 md:rotate-0">
                    <svg class="lg:h-[4px] md:h-[2px] h-[1.5px]" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2"/>
                    </svg>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('assets/svg/payment.svg')}}" alt="Payment Photo" class="md:w-[200px] w-[150px]">
                    <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Payment</h2>
                    <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px] text-center">Pay securely online or at the barangay office. Your request will be processed once payment is confirmed.</p>
                </div>
                <div class="flex flex-col justify-center items-center rotate-90 md:rotate-0">
                    <svg class="lg:h-[4px] md:h-[2px] h-[1.5px]" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2"/>
                    </svg>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('assets/svg/delivery.svg')}}" alt="Delivery Photo" class="md:w-[200px] w-[150px]">
                    <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Delivery</h2>
                    <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px]  text-center">Get notified once your document is ready for pickup or deliver - simple, fast and reliable,</p>
                </div>
            </div>
        </section>
        <!-- Steps Section -->

        <!-- Barangay Certificates Section -->
        <section class="min-h-screen w-full flex flex-col items-center justify-center gap-[50px] lg:px-[40px] md:px-[20px] px-[40px] py-8 pb-[80px] md:pt-[60px] lg:pt-[30px] pt-[30px]" id="cards-certificates">
            <div class="flex flex-col gap-2 items-center justify-center">
                <h1 style="font-family: 'IBM Plex Serif', serif;" class="font-medium md:text-[50px] text-[32px] text-center">Request Your Barangay Certificates Online</h1>
                <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] md:pl-[200px] md:pr-[200px] text-center 
                  ">Easily apply for your barangay documents - no more long lines! Choose the certificate you need and submit your request in minutes.</p>
            </div>
            <div class="flex md:gap-[100px] flex-col justify-between w-full">
                <div class="flex md:flex-row flex-col lg:gap-3.5 md:gap-3.5 gap-[50px] justify-between items-center w-full lg:px-[100px]">
                    <div class="certificates">
                        <img src="{{asset('assets/svg/certificates/residency.svg')}}" alt="Barangay Certificate of Residency Photo">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Residency</h1>
                            <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Confirms that you are a resident of Barangay San Bartolome, Quezon City for a specific period.</p>
                            <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                        </div>
                    </div>
                    <div class="certificates">
                        <img src="{{asset('assets/svg/certificates/indigency.svg')}}" alt="Barangay Certificate of Indigency Photo">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Indigency </h1>
                            <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Issued to residents who need proof of low income for financial assistance or other government aid.</p>
                            <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                        </div>
                    </div>
                    <div class="certificates">
                        <img src="{{asset('assets/svg/certificates/no-objection.svg')}}" alt="Barangay Certificate of No Objection Photo">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of No Objection</h1>
                            <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Official consent from the barangay for activities such as job application, permits, or other valid requests.</p>
                            <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex md:flex-row flex-col lg:gap-3.5 md:gap-3.5 gap-[50px] justify-between items-center w-full lg:px-[100px]">
                <div class="certificates">
                        <img src="{{asset('assets/svg/certificates/business.svg')}}" alt="Barangay Certificate for Business Photo">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate for Business</h1>
                            <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Issued to confirm that a business is operating within the Barangay and complies with local regulations.</p>
                            <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                        </div>
                    </div>
                <div class="certificates">
                        <img src="{{asset('assets/svg/certificates/oath-taking.svg')}}" alt="Barangay Certificate of Oath Taking Photo">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Oath Taking </h1>
                            <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">A document required to newly elected or appointed barangay officials, certifying their eligibility.</p>
                            <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                        </div>
                    </div>
                <div class="certificates">
                        <img src="{{asset('assets/svg/certificates/sedula.svg')}}" alt="Barangay Certificate of Sedula Photo">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Community Tax (Sedula)</h1>
                            <p class="font-normal md:text-[14px] text-[12px] text-[#52525B] ">Official proof for individual that has paid the community tax - commonly used for various legal transactions.</p>
                            <a href="{{url('login')}}" class="certificates-btn">Get Certificate</a>
                        </div>
                    </div>
            </div>
            </div>
        </section>
        <!-- Barangay Certificates Section -->

        <!-- Blotter Section -->
        <section class="min-h-screen w-full bg-white flex md:flex-row flex-col-reverse items-center md:justify-center justify-end pt-[30px] md:pt-0 md:px-[150px] md:pb-[60px] px-[40px] md:gap-0 gap-[50px]" id="blotter">
            <img src="{{asset('assets/svg/blotter-svg.svg')}}"  class="md:w-[510px] w-[250px]" alt="Blotter">
            <div class="flex flex-col gap-6 md:pl-20 max-w-[550px] w-full items-center md:items-start">
                <h1 style="font-family: var(--font-ibm-plex-serif);" class="font-medium md:text-[50px] text-[32px] md:leading-[65px] text-center md:text-left">Need To File For a Blotter</h1>
                <p class="font-medium md:text-[18px] text-[16px] text-[#A1A1AA] text-center md:text-left">Report incidents, disputes, or complaints directly to Barangay San Bartolome. Submit your blotter details online and let our team assist you promptly. </p>
                <a href="#" class="md:max-w-[190px] max-w-[170px] w-full flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] text-white fill-white rounded-[4px] justify-center gap-2 border duration-150 ease-in border-white hover:fill-[var(--orange)] hover:bg-white hover:border-[var(--orange)] hover:text-[var(--orange)]">
                    <p class="md:text-[18px] text-[16px] font-medium">Report Now</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/>
                    </svg>
                </a>
            </div>
        </section>
        <!-- Blotter Section -->

        <!-- FAQ Section -->  
        <section class="md:h-screen min-h-screen w-full flex md:flex-row pt-[30px] md:pt-0 flex-col items-center justify-center pb-[80px] md:gap-0 gap-[30px] px-[40px] md:px-0" id="contact-us">
            <div class="w-full md:max-w-[600px] flex flex-col md:gap-6 gap-3 justify-center items-start md:px-20">
                <h1 class="font-medium md:text-[50px] text-[32px] md:leading-[65px] text-center md:text-left" style="font-family: var(--font-ibm-plex-serif);">Frequently Asked Questions</h1>
                <p class="font-medium md:text-[18px] text-[16px] text-center md:text-left text-[#A1A1AA]">If you have any question or concern, you can contact us in <a href="" class="text-[var(--orange)] duration-150 ease-in hover:underline">birims.sanbartolome@gmail.com</a> and we will quickly response at you! You can also contact us in different platforms just by clicking Contact Us below.</p>
                <div class="w-full flex justify-center md:justify-start">
                    <a href="{{url('contact')}}" class="max-w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] rounded-[4px] justify-center gap-2 text-white fill-white border duration-150 ease-in border-white hover:bg-[var(--gray)] hover:text-[var(--orange)] hover:fill-[var(--orange)] hover:border-[var(--orange)]">
                    <p class="md:text-[18px] text-[16px] font-medium">Contact Us</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/>
                    </svg>
                </a>
                </div>
            </div>
            <div class="w-full md:max-w-[600px] flex flex-col gap-6 justify-center items-center md:px-10">
                <ul class="w-full max-w-[600px] h-full md:mt-[100px]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="first" class="faq-details">How do i request for my barangay documents?</label>
                        <input type="radio" name="accordion" id="first" class="hidden" checked class="bg-amber-300">
                        <div class="content">
                            <p class="faq-summary">You can request barangay documents by visiting the Barangay Hall or through our online portal. Fill out the request form, provide valid identification, and indicate the document type you need.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="second" class="faq-details">What are the requirements to request for my documents?</label>
                        <input type="radio" name="accordion" id="second" class="hidden">
                        <div class="content">
                            <p class="faq-summary">You’ll need a valid government-issued ID, proof of residency, and in some cases, supporting documents depending on the type of clearance or certificate you’re requesting.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="third" class="faq-details">What are the types of documents i can request for?</label>
                        <input type="radio" name="accordion" id="third" class="hidden">
                        <div class="content">
                            <p class="faq-summary">The types of documents that you can request are: Barangay Clearance, Business Clearance, Cedula, Oath Taking Certificate and Certificate of Residence, Indigency or Good Moral Character.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="fourth" class="faq-details">Do i need to pay for a fee to deliver my documents?</label>
                        <input type="radio" name="accordion" id="fourth" class="hidden">
                        <div class="content">
                            <p class="faq-summary">Yes, minimal processing or delivery fees may apply depending on your document type and delivery option.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="md:p-[16px] py-[16px]">
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
        <section class="min-h-screen md:h-full w-full bg-white relative px-[40px] pb-[100px]" style="height: calc(100vh - 80px);" id="create-account">
            <svg viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-0 absolute md:top-0 z-0 top-0 md:h-[300px] h-[200px]">
                <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C"/>
                <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5"/>
                <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C"/>
            </svg>
            <svg viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 md:w-[230px] w-[150px] z-[0]">
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
            <div class="w-full h-full flex flex-col gap-[10px] justify-center items-center md:px-[150px] text-center">
                <div class="w-full flex flex-col items-center">
                    <h1 class="w-fit z-10 relative md:text-[54px] text-[40px] font-medium" style="font-family: --font-ibm-plex-serif;">Create Your Account Now</h1>
                    <hr class="hidden md:block z-0 translate-y-[48px] absolute w-full md:max-w-[568px] border-5 border-[#EA580C]">
                     <hr class=" md:hidden block z-0 translate-y-[40px] absolute w-[200px] border-3 border-[#EA580C]">
                      <hr class="md:hidden block z-0 translate-y-[100px] absolute w-[220px] border-3 border-[#EA580C]">
                </div>            
                <p class="md:text-[18px] text-[14px] text-[#A1A1AA] font-medium">So what are you waiting for? Request now your first online barangay document by signing in or creating your account!</p>
                <div class="flex md:gap-12 gap-6 mt-4 md:flex-row flex-col">
                    <a href="{{ url('signup')}}" class="md:text-[18px] text-[16px] text-white font-medium px-[20px] py-[10px] bg-[#EA580C] rounded-[4px] duration-150 ease-in border border-[#EA580C] hover:bg-white hover:text-[var(--orange)]">Create Account</a>
                    <a href="{{ url('login')}}" class="md:text-[18px] text-[16px] text-[#EA580C] font-medium px-[20px] py-[10px] bg-white rounded-[4px] border duration-150 ease-in border-[#e6c6b5] hover:bg-[var(--orange)] hover:text-white">Sign in To Account</a>
                </div>
            </div>
        </section>
        <!-- Create Account Section -->
         
    </main>

    <!-- Footer Section -->
    @include('partials.footer')
    <!-- Footer Section -->

</body>
</html> 