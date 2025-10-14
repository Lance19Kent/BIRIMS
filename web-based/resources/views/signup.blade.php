<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="assets/img/Ellipse.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE ACCOUNT</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="h-screen max-h-screen w-full relative">
    <img src="{{asset('assets/svg/login-svg.svg')}}" class="absolute h-full z-0">
    <header class="h-[60px] w-full z-10 relative flex items-center pl-5 gap-2 fill-white text-white">
        <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
            <circle cx="15" cy="15" r="15"/>
        </svg> 
        <a href="{{url('/')}}" class="font-medium text-[20px]">BIRIMS</a>
    </header>
    <main class="flex-1 w-full relative z-30 pl-5 flex items-center justify-between pr-[270px]" style="height: calc(100vh - 140px);">
        <div>
            <h1 class="font-medium text-[37px] text-white w-[370px]">Get Started, Create An Account</h1>
            <p class="text-white font-medium text-[14px] w-[350px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
        </div>
        <form class="w-[400px] h-fit flex flex-col gap-[30px]">
            <div class="leading-10">
                <h4 class="font-medium text-[18px] text-[var(--darkgray)]">Welcome to BIRIMS</h4>
                <h6 class="text-[50px] font-medium" style="font-family: 'IBM Plex Serif, serif;'">Create Account</h6>
            </div>
            <div class="flex flex-col gap-[20px]">
                <div>
                    <h1 class="font-semibold text-[14px]">Personal Information</h1>
                    <p class="text-red-600 text-[12px] font-semibold">* Indicates required field</p>
                </div>
                <div class="flex flex-col gap-[25px]">
                    <div class="flex flex-col gap-7">
                        <div class="w-full flex justify-between">
                            <span class="flex flex-col relative w-[190px]">                
                                <label class="font-semibold text-[13px]">First Name<span class="text-red-600 font-medium"> *</span></label>
                                <input type="text" placeholder="ex. Juan" class="peer text-[13px] w-full not-first-of-type:duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </span>
                            <span class="flex flex-col relative w-[190px]">                
                                <label class="font-semibold text-[13px]">Last Name<span class="text-red-600 font-medium"> *</span></label>
                                <input type="text" placeholder="ex. Dela Cruz" class="peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </span>
                        </div>
                            <div class="w-full flex justify-between">
                            <span class="flex flex-col relative w-[190px]">                
                                <label class="font-semibold text-[13px]">Middle Name <span class="text-[12px]">(Optional)</span></label>
                                <input type="text" placeholder="ex. Santos" class="peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </span>
                            <span class="flex flex-col relative w-[190px]">                
                                <label class="font-semibold text-[13px]">Birthdate<span class="text-red-600 font-medium"> *</span></label>
                                <input type="date" id="birthdateInput" class="peer text-[13px] text-[var(--darkgray)] w-full duration-150 ease-out h-[40px] border-b  border-black focus:outline-none focus:border-b focus:border-[var(--orange)] cursor-pointer">
                            </span>
                        </div>
                        <div class="w-full flex justify-between">
                            <span class="flex flex-col relative w-[190px]">                
                                <label class="font-semibold text-[13px]">Gender<span class="text-red-600 font-medium"> *</span></label>
                                <div class="text-[var(--darkgray)] text-[14px]">                            
                                    <select id="selectGender" class="border-b border-black h-[40px] w-full focus:outline-0 cursor-pointer ">
                                        <option disabled selected hidden class="text-[12px] text-[gray] ">Ex. Male</option>
                                        <option class="text-black text-[13px]" value="Male">Male</option>
                                        <option class="text-black text-[13px]" value="Female">Female</option>
                                        <option class="text-black text-[13px]" value="LGBTQA++">LGBTQA++</option>
                                        <option class="text-black text-[13px]" value="LGBTQA++">Prefer not to say</option>
                                    </select>
                                </div>
                            </span>
                            <span class="flex flex-col relative w-[190px]">                
                                <label class="font-semibold text-[13px]">Phone Number<span class="text-red-600 font-medium"> *</span></label>
                                <input type="tel" inputmode="numeric" id="phoneNumberInput" maxlength="11" pattern="[0-9]{11}"  placeholder="Ex. 09xxxxxxxxx" class="relative peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[13px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="flex gap-4 flex-col justify-between">
                        <a href="{{url('signup2')}}" class="bg-[var(--orange)] w-full border border-[var(--orange)] rounded-[4px] text-white text-[18px] text-center py-[8px] ease-out duration-150 hover:bg-white hover:text-[var(--orange)]">Next</a>
                        <a href="{{url('login')}}" class="bg-white block text-center w-full py-[8px] font-medium text-[var(--orange)] text-[18px] rounded-[4px] border border-[var(--orange)] duration-150 ease-out hover:bg-[var(--orange)] hover:text-white">Sign In</a>
                    </div>  
                </div>
            </div>
        </form>
    </main>
</body>
</html>