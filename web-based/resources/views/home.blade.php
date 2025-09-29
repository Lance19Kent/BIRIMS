<!DOCTYPE html>
<html lang="en" class="scroll-pt-20 scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRIMS</title>
    <link rel="icon" href="{{asset('img/Ellipse.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="/web-based/resources/css/app.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="min-h-screen w-full bg-[#F4F4F5]">
    <header class="h-20 w-screen bg-white flex pl-10 fixed">
        <div class="h-[100%] w-[189px] flex items-center gap-2.5">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="25" fill="#EA580C"/>
            </svg>
            <h1 class="font-medium font text-[30px] text-[#EA580C]">BIRIMS</h1>
        </div>
        <div class="h-[100%] w-full flex justify-end items-center pr-10">
            <ul class="flex gap-[40px] text-[#A1A1AA]">
                <li><a href="#">Home</a></li>
                <li><a href="#info-screen">Clearance</a></li>
                <li><a href="#cards-certificates">Residency</a></li>
                <li><a href="#blotter">Indigency</a></li>
                <li><a href="#contact-us">Business</a></li>
                <li><a href="#" class="p-[12px] bg-[#EA580C] text-white rounded-[4px]">SIGN-IN</a></li>
            </ul>
        </div>
    </header>
    <main class="min-h-screen w-full bg-[#F4F4F5] flex-1 flex flex-col">
        <section class="h-screen w-full flex justify-between items-center-safe px-30 pt-[60px]">
            <div class="w-[550px] flex flex-col gap-[20px]">
                <h1 class="text-[50px] font-medium leading-[65px]" style="font-family: 'IBM Plex Serif', serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                <p class="text-[18px] font-medium text-[#A1A1AA] leading-[27px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                <a href="#" class="w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] rounded-[4px] justify-center gap-2">
                    <p class="text-white text-[20px] font-medium">Get Started</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </a>
            </div>
            <div class="w-[550px] h-[430px] flex justify-end">
                <img src="{{asset('img/hero-pic.png')}}" alt="Hero Image" class="w-[500px] h-[430px] whitespace-nowrap">
            </div>
        </section>
        <section class="min-h-screen w-full bg-white flex flex-col items-center justify-center gap-[30px] pb-[100px]" id="info-screen">
            <div class="flex flex-col gap-2 justify-center items-center">
                <h1 style="font-family: 'IBM Plex Serif', serif;" class="text-[50px] font-medium">Get Your Documents In Just 3 Easy Steps!</h1>
                <p class="font-medium text-[18px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore </p>
            </div>
            <div class="w-full px-35 flex justify-between">
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('img/fill-up.png')}}" alt="Step 1" class="w-[200px] h-[200px]">
                    <h2 class="font-semibold text-[16px] mt-4 mb-2">Fill Up The Form</h2>
                    <p class="font-medium text-[16px] text-[#A1A1AA] w-[200px] text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <svg width="193" height="4" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2"/>
                    </svg>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('img/payment.png')}}" alt="Step 1" class="w-[200px] h-[200px]">
                    <h2 class="font-semibold text-[16px] mt-4 mb-2">Payment</h2>
                    <p class="font-medium text-[16px] text-[#A1A1AA] w-[200px] text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <svg width="193" height="4" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2"/>
                    </svg>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('img/delivery.png')}}" alt="Step 1" class="w-[200px] h-[200px]">
                    <h2 class="font-semibold text-[16px] mt-4 mb-2">Delivery</h2>
                    <p class="font-medium text-[16px] text-[#A1A1AA] w-[200px] text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
            </div>
        </section>
        <section class="min-h-screen w-full flex flex-col items-center justify-center gap-[50px] py-12 pb-[100px]" id="cards-certificates">
            <div class="flex flex-col gap-1 items-center justify-center">
                <h1 style="font-family: 'IBM Plex Serif', serif;" class="font-medium text-[50px]">Lorem ipsum dolor sit amet</h1>
                <p class="font-medium text-[16px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
            </div>
            <div class="flex gap-[100px] flex-col justify-between w-full">
                <div class="flex justify-between items-center w-full px-[100px]">
                    <div class="h-[400px] w-[300px] bg-white rounded-[8px] shadow-[10px_10px_0_#FDBA74]">
                        <img src="{{asset('img/certificates/certificate1.png')}}" alt="Barangay Certificate of Residency">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold text-[18px]">Barangay Certificate of Residency</h1>
                            <p class="font-normal text-[14px] text-[#52525B]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="w-full h-[45px] border-[1px] border-[#FDBA74] rounded-[4px] flex justify-center items-center font-medium text-[16px] text-[#FDBA74]">Get Certificate</a>
                        </div>
                    </div>
                    <div class="h-[400px] w-[300px] bg-white rounded-[8px] shadow-[10px_10px_0_#FDBA74]">
                        <img src="{{asset('img/certificates/certificate2.png')}}" alt="Barangay Certificate of No Indigency">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold text-[18px]">Barangay Certificate of Indigency </h1>
                            <p class="font-normal text-[14px] text-[#52525B]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="w-full h-[45px] border-[1px] border-[#FDBA74] rounded-[4px] flex justify-center items-center font-medium text-[16px] text-[#FDBA74]">Get Certificate</a>
                        </div>
                    </div>
                    <div class="h-[400px] w-[300px] bg-white rounded-[8px] shadow-[10px_10px_0_#FDBA74]">
                        <img src="{{asset('img/certificates/certificate3.png')}}" alt="Barangay Certificate of No Objection">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold text-[18px]">Barangay Certificate of No Objection</h1>
                            <p class="font-normal text-[14px] text-[#52525B]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="w-full h-[45px] border-[1px] border-[#FDBA74] rounded-[4px] flex justify-center items-center font-medium text-[16px] text-[#FDBA74]">Get Certificate</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center w-full px-[100px]">
                <div class="h-[400px] w-[300px] bg-white rounded-[8px] shadow-[10px_10px_0_#FDBA74]">
                        <img src="{{asset('img/certificates/certificate4.png')}}" alt="Barangay Certificate for Business">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold text-[18px]">Barangay Certificate for Business</h1>
                            <p class="font-normal text-[14px] text-[#52525B]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="w-full h-[45px] border-[1px] border-[#FDBA74] rounded-[4px] flex justify-center items-center font-medium text-[16px] text-[#FDBA74]">Get Certificate</a>
                        </div>
                    </div>
                <div class="h-[400px] w-[300px] bg-white rounded-[8px] shadow-[10px_10px_0_#FDBA74]">
                        <img src="{{asset('img/certificates/certificate5.png')}}" alt="Barangay Certificate of Oath Taking">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold text-[18px]">Barangay Certificate of Oath Taking </h1>
                            <p class="font-normal text-[14px] text-[#52525B]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="w-full h-[45px] border-[1px] border-[#FDBA74] rounded-[4px] flex justify-center items-center font-medium text-[16px] text-[#FDBA74]">Get Certificate</a>
                        </div>
                    </div>
                <div class="h-[400px] w-[300px] bg-white rounded-[8px] shadow-[10px_10px_0_#FDBA74]">
                        <img src="{{asset('img/certificates/certificate6.png')}}" alt="Barangay Certificate of Sedula">
                        <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                            <h1 class="font-semibold text-[18px]">Barangay Certificate of Sedula</h1>
                            <p class="font-normal text-[14px] text-[#52525B]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            <a href="#" class="w-full h-[45px] border-[1px] border-[#FDBA74] rounded-[4px] flex justify-center items-center font-medium text-[16px] text-[#FDBA74]">Get Certificate</a>
                        </div>
                    </div>
            </div>
            </div>
        </section>
        <section class="min-h-screen w-full bg-white flex items-center justify-center px-[150px] pb-[100px]" id="blotter">
            <img src="{{asset('img/blotter-pic.png')}}" alt="Blotter">
            <div class="flex flex-col gap-6 pl-20 w-[550px]">
                <h1 style="font-family: var(--font-ibm-plex-serif);" class="font-medium text-[50px] leading-[65px]">Need To File For a Blotter</h1>
                <p class="font-medium text-[18px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                <a href="#" class="w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] rounded-[4px] justify-center gap-2">
                    <p class="text-white text-[18px] font-medium">Get Started</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </a>
            </div>
        </section>
        <!-- <section class="min-h-screen w-full flex items-center justify-center pb-[100px]" id="contact-us">
            <div class="w-[600px] h-full flex flex-col gap-6 justify-center items-start px-20">
                <h1 class="font-medium text-[50px] leading-[65px]" style="font-family: var(--font-ibm-plex-serif);">Frequently Asked Questions</h1>
                <p class="font-medium text-[18px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                <a href="#" class="w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] rounded-[4px] justify-center gap-2">
                    <p class="text-white text-[18px] font-medium">Contact Us</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </a>
            </div>
            <div class="w-[600px] h-full flex flex-col gap-6 justify-center items-start px-10">
                <details class="mb-3">
                    <summary class="font-medium text-[18px] cursor-pointer">How to apply for a Barangay Clearance?</summary>
                    <p class="mt-2 text-[16px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                </details>
                <details class="mb-3">
                    <summary class="font-medium text-[18px] cursor-pointer">What are the requirements to request for my documents?</summary>
                    <p class="mt-2 text-[16px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                </details>
                <details class="mb-3">
                    <summary class="font-medium text-[18px] cursor-pointer">What are the types of documents i can request for?</summary>
                    <p class="mt-2 text-[16px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                </details>
                <details class="mb-3">
                    <summary class="font-medium text-[18px] cursor-pointer">Do i need to pay for a fee to deliver my documents?</summary>
                    <p class="mt-2 text-[16px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                </details>
                <details class="mb-3">
                    <summary class="font-medium text-[18px] cursor-pointer">Does (company name) support delivery services?</summary>
                    <p class="mt-2 text-[16px] text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                </details>
            </div>
        </section> -->
    </main>
    <footer class="h-[230px] bg-white flex justify-between items-center px-20">
        <div class="w-[450px]">
            <div class="flex items-center gap-2.5 mb-4">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#EA580C"/>
                </svg>
                <h1 class="font-medium font text-[30px] text-[#EA580C]">BIRIMS</h1>
            </div>
            <p class="font-medium text-[#A1A1AA] text-[12px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
            <div class="flex items-center gap-4 mt-4">
                <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4014 5.35156C14.4014 4.3457 15.2998 3.98437 16.3057 3.98437C17.3115 3.98437 18.3857 4.29688 18.3857 4.29688L19.0303 0.468749C19.0303 0.468749 17.6631 0 14.4014 0C12.3994 0 11.2373 0.761718 10.3877 1.88476C9.58691 2.94922 9.55762 4.6582 9.55762 5.76172V8.27149H6.96973V12.0117H9.55762V25H14.4014V12.0117H18.2393L18.5225 8.27149H14.4014V5.35156Z" fill="black"/>
                </svg>
                <svg width="29" height="25" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_46_815)">
                        <path d="M22.5516 0H26.8449L17.4651 10.5899L28.5 25H19.8595L13.0924 16.2601L5.34909 25H1.05284L11.0855 13.6731L0.5 0H9.35932L15.4764 7.98835L22.5516 0ZM21.0446 22.4614H23.4238L8.06673 2.40531H5.51391L21.0446 22.4614Z" fill="black"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_46_815">
                            <rect width="28" height="25" fill="white" transform="translate(0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_46_817)">
                        <path d="M17.6191 11.587C17.5084 11.5351 17.3966 11.4855 17.2838 11.4381C17.0864 7.88257 15.0992 5.847 11.7624 5.82618C9.83712 5.81366 8.11377 6.58117 7.03967 8.17455L8.87477 9.40531C9.63802 8.27324 10.8358 8.03186 11.718 8.03186C11.7281 8.03186 11.7384 8.03186 11.7485 8.032C12.8471 8.0388 13.6762 8.35111 14.2128 8.96014C14.6033 9.40355 14.8645 10.0163 14.9938 10.7896C14.0197 10.6277 12.9662 10.578 11.84 10.641C8.66752 10.8197 6.62796 12.6286 6.76496 15.1422C6.83447 16.4172 7.48417 17.5141 8.59427 18.2306C9.53292 18.8363 10.7418 19.1325 11.9982 19.0655C13.6573 18.9766 14.9589 18.3577 15.867 17.226C16.5566 16.3667 16.9928 15.253 17.1854 13.8498C17.9761 14.3163 18.5621 14.9302 18.8857 15.6682C19.4361 16.9228 19.4681 18.9844 17.7475 20.6651C16.24 22.1375 14.4279 22.7744 11.6893 22.7941C8.65147 22.7721 6.35396 21.8197 4.86021 19.9631C3.46141 18.2247 2.73851 15.7138 2.71156 12.5C2.73851 9.28619 3.46141 6.77518 4.86021 5.03682C6.35396 3.1803 8.65142 2.22783 11.6893 2.20583C14.7491 2.22807 17.0867 3.1851 18.6376 5.05055C19.3981 5.9653 19.9715 7.11575 20.3494 8.45709L22.5 7.89611C22.0418 6.2451 21.3209 4.82232 20.3398 3.64249C18.3516 1.25091 15.4436 0.0253701 11.6968 0H11.6818C7.94257 0.0253212 5.06716 1.25545 3.13546 3.65613C1.41655 5.7925 0.5299 8.76505 0.5001 12.4912L0.5 12.5L0.5001 12.5088C0.5299 16.2349 1.41655 19.2075 3.13546 21.3439C5.06716 23.7445 7.94257 24.9747 11.6818 25H11.6968C15.0211 24.9774 17.3644 24.1266 19.2948 22.241C21.8203 19.7742 21.7443 16.6822 20.9119 14.784C20.3147 13.4228 19.1761 12.3172 17.6191 11.587ZM11.8794 16.8629C10.4889 16.9394 9.04437 16.3292 8.97317 15.0224C8.92037 14.0534 9.67857 12.9721 11.9647 12.8433C12.2265 12.8286 12.4834 12.8213 12.7358 12.8213C13.5662 12.8213 14.3431 12.9002 15.0494 13.0512C14.786 16.2676 13.2407 16.7899 11.8794 16.8629Z" fill="black"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_46_817">
                            <rect width="22" height="25" fill="white" transform="translate(0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_46_819)">
                        <path d="M8.83317 12.5077C8.82911 10.2068 10.6913 8.33773 12.9917 8.33373C15.2925 8.32924 17.162 10.1906 17.1665 12.4919C17.1709 14.7932 15.3087 16.6618 13.0075 16.6663C10.7071 16.6707 8.83761 14.8089 8.83317 12.5077ZM6.5818 12.5121C6.58869 16.0572 9.46783 18.9246 13.012 18.9177C16.5565 18.9108 19.4256 16.0325 19.4187 12.4874C19.4118 8.94364 16.5322 6.07455 12.9873 6.08148C9.44308 6.08837 6.57492 8.96791 6.5818 12.5121ZM18.1591 5.8182C18.1608 6.64603 18.8338 7.31635 19.6617 7.31473C20.4899 7.31307 21.1602 6.64037 21.1589 5.81254C21.1573 4.9847 20.4842 4.314 19.656 4.31566C18.8278 4.31727 18.1575 4.99037 18.1591 5.8182ZM7.96891 22.6834C6.75026 22.6304 6.08849 22.4279 5.64747 22.2582C5.06344 22.0322 4.64669 21.7613 4.20807 21.3259C3.77028 20.8889 3.4985 20.4733 3.27047 19.8905C3.09918 19.4495 2.89303 18.7885 2.8359 17.5699C2.77394 16.2523 2.75978 15.8571 2.75372 12.5194C2.74723 9.18261 2.75939 8.78729 2.81691 7.46859C2.86911 6.25077 3.07286 5.58812 3.24215 5.1475C3.46813 4.56268 3.73829 4.14672 4.17448 3.70814C4.61144 3.26952 5.02697 2.99857 5.61017 2.77054C6.05084 2.59838 6.71178 2.39384 7.93004 2.33597C9.2483 2.27357 9.64318 2.26024 12.98 2.25375C16.3175 2.24725 16.7128 2.25902 18.0316 2.31693C19.2493 2.36996 19.9119 2.57167 20.3522 2.74218C20.9366 2.96815 21.3533 3.23754 21.7916 3.6745C22.2297 4.11151 22.5015 4.52621 22.7296 5.11068C22.9016 5.55009 23.1062 6.21185 23.1637 7.42972C23.2265 8.74799 23.2407 9.1433 23.2467 12.4801C23.2532 15.8178 23.241 16.2131 23.1832 17.531C23.1301 18.7496 22.928 19.4119 22.7579 19.8533C22.5319 20.4369 22.2618 20.8537 21.8252 21.2923C21.3886 21.7292 20.9731 22.0018 20.3895 22.2298C19.9496 22.4016 19.2879 22.6065 18.0704 22.6644C16.7522 22.7264 16.3572 22.7406 13.0193 22.7466C9.68244 22.7531 9.28761 22.7406 7.96891 22.6834ZM7.82311 0.0865601C6.49308 0.149353 5.58468 0.362341 4.79083 0.673425C3.96911 0.993787 3.27252 1.42308 2.5796 2.11888C1.8858 2.81508 1.45973 3.51288 1.14181 4.33544C0.834046 5.13129 0.625453 6.04012 0.566712 7.37098C0.508412 8.70429 0.495033 9.12953 0.501527 12.5239C0.508021 15.9178 0.522962 16.3439 0.586537 17.6776C0.650111 19.0072 0.862367 19.9152 1.1734 20.7094C1.49415 21.5312 1.92306 22.2274 2.61925 22.9208C3.31505 23.6141 4.01329 24.0398 4.83624 24.3582C5.63126 24.6655 6.54044 24.8749 7.87091 24.9332C9.20416 24.992 9.6298 25.0049 13.0233 24.9985C16.4184 24.992 16.8441 24.977 18.1774 24.9138C19.5074 24.8502 20.415 24.6372 21.2096 24.3269C22.0313 24.0054 22.7279 23.5773 23.4209 22.8811C24.1138 22.1852 24.5399 21.487 24.8578 20.6641C25.1656 19.8691 25.375 18.9598 25.4329 17.6302C25.4912 16.2961 25.505 15.87 25.4985 12.4761C25.492 9.08173 25.4767 8.65648 25.4135 7.32362C25.3503 5.99276 25.1373 5.08514 24.8266 4.29052C24.5055 3.46879 24.077 2.77294 23.3812 2.07919C22.6854 1.38622 21.9872 0.959314 21.1642 0.642224C20.3688 0.334412 19.46 0.124646 18.1296 0.0671265C16.7963 0.00799561 16.3706 -0.00494384 12.9759 0.00150147C9.582 0.00799561 9.15636 0.0225464 7.82311 0.0865601Z" fill="black"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_46_819">
                            <rect width="25" height="25" fill="white" transform="translate(0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="w-[580px] flex justify-between">
            <div class="flex flex-col gap-[5px]">
                <h2 class="font-medium text-[18px]">Documents</h2>
                <ul class="flex flex-col gap-[5px] text-[#A1A1AA] text-[16px] font-medium">
                    <li><a href="#">Clearance</a></li>
                    <li><a href="#">Residency</a></li>
                    <li><a href="#">Indigency</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-[5px]">
                <h2 class="font-medium text-[18px]">Navigation</h2>
                <ul class="flex flex-col gap-[5px] text-[#A1A1AA] text-[16px] font-medium">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Sign In</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-[5px]">
                <h2 class="font-medium text-[18px]">Resources</h2>
                <ul class="flex flex-col gap-[5px] text-[#A1A1AA] text-[16px] font-medium">
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-[5px]">
                <h2 class="font-medium text-[18px]">Resources</h2>
                <ul class="flex flex-col gap-[5px] text-[#A1A1AA] text-[16px] font-medium">
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html> 