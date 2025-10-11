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
    <main class="flex-1 w-full relative z-30 pl-5 flex items-center justify-between pr-[140px]" style="height: calc(100vh - 140px);">
        <div>
            <h1 class="font-medium text-[37px] text-white w-[370px]">Get Started, Create An Account</h1>
            <p class="text-white font-medium text-[14px] w-[350px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
        </div>
        <form class="w-[700px] h-fit flex flex-col gap-[30px] ">
            <div class="leading-10">
                <h4 class="font-medium text-[18px] text-[var(--darkgray)]">Welcome to BIRIMS</h4>
                <h6 class="text-[50px] font-medium" style="font-family: 'IBM Plex Serif, serif;'">Create Account</h6>
            </div>
            <div class="flex flex-col gap-[20px]">
                <div>
                    <div class="w-full h-fit pb-[10px] relative">
                    </div>
                    <h1 class="font-semibold text-[14px]">Personal Information</h1>
                    <p class="text-red-600 text-[12px] font-semibold">* Indicates required field</p>
                </div>
                <div class="flex flex-col gap-7">
                    <div class="w-full flex justify-between">
                        <span class="flex flex-col relative leading-3 w-[310px]">                
                            <label class="font-semibold text-[13px]">First Name<span class="text-red-600 font-medium"> *</span></label>
                            <input type="text" placeholder="ex. Juan" class="peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </span>
                        <span class="flex flex-col relative leading-3 w-[310px]">                
                            <label class="font-semibold text-[13px]">Last Name<span class="text-red-600 font-medium"> *</span></label>
                            <input type="text" placeholder="ex. Dela Cruz" class="peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </span>
                    </div>
                        <div class="w-full flex justify-between">
                        <span class="flex flex-col relative leading-3 w-[310px]">                
                            <label class="font-semibold text-[13px]">Middle Name <span class="text-[12px]">(Optional)</span></label>
                            <input type="text" placeholder="ex. Santos" class="peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </span>
                        <span class="flex flex-col relative leading-3 w-[310px]">                
                            <label class="font-semibold text-[13px]">Birthdate<span class="text-red-600 font-medium"> *</span></label>
                            <input type="date" id="birthdateInput" class="peer text-[13px] text-[var(--darkgray)] w-full duration-150 ease-out h-[40px] border-b  border-black focus:outline-none focus:border-b focus:border-[var(--orange)] cursor-pointer">
                        </span>
                    </div>
                    <div class="w-full flex justify-between">
                        <span class="flex flex-col relative leading-3 w-[310px]">                
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
                        <span class="flex flex-col relative leading-3 w-[310px]">                
                            <label class="font-semibold text-[13px]">Phone Number<span class="text-red-600 font-medium"> *</span></label>
                            <input type="tel" inputmode="numeric" id="phoneNumberInput" maxlength="11" pattern="[0-9]{11}"  placeholder="Ex. 09xxxxxxxxx" class="relative peer text-[13px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:text-[14px] capitalize">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[13px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="flex gap-4 justify-between">
                      <a href="{{url('signup1')}}" class="bg-[var(--orange)] w-[340px] inline-block h-[45px] border border-[var(--orange)] text-[18px] font-medium text-white cursor-pointer rounded-[4px] duration-150 ease-out hover:text-[var(--orange)] hover:bg-white hover:border-[var(--orange)]">Next</a>
                    <a href="{{url('signup1')}}" class="bg-white block text-center w-[340px] py-[8px] font-medium text-[var(--orange)] text-[18px] rounded-[4px] border border-[var(--orange)] duration-150 ease-out hover:bg-[var(--orange)] hover:text-white">Sign In</a>
                </div>  
            </div>
        </form>
    </main>
    <footer class="w-full h-[80px] relative pl-5 flex gap-4 pt-[8px]">
        <a href="#">
            <svg class="w-[10px]" fill="white" viewBox="0 0 13 25" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.90137 5.35156C7.90137 4.3457 8.79981 3.98437 9.80567 3.98437C10.8115 3.98437 11.8857 4.29688 11.8857 4.29688L12.5303 0.468749C12.5303 0.468749 11.1631 0 7.90137 0C5.89941 0 4.7373 0.761718 3.8877 1.88476C3.08691 2.94922 3.05762 4.6582 3.05762 5.76172V8.27149H0.469727V12.0117H3.05762V25H7.90137V12.0117H11.7393L12.0225 8.27149H7.90137V5.35156Z"/>
            </svg>
        </a>
        <a href="#">
            <svg class="w-[21px]" viewBox="0 0 28 25" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.0516 0H26.3449L16.9651 10.5899L28 25H19.3595L12.5924 16.2601L4.84909 25H0.552836L10.5855 13.6731L0 0H8.85932L14.9764 7.98835L22.0516 0ZM20.5446 22.4614H22.9238L7.56673 2.40531H5.01391L20.5446 22.4614Z" fill="white"/>
            </svg>
        </a>
        <a href="#">
            <svg class="w-[18px]" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.1191 11.587C17.0084 11.5351 16.8966 11.4855 16.7838 11.4381C16.5864 7.88257 14.5992 5.847 11.2624 5.82618C9.33712 5.81366 7.61377 6.58117 6.53967 8.17455L8.37477 9.40531C9.13802 8.27324 10.3358 8.03186 11.218 8.03186C11.2281 8.03186 11.2384 8.03186 11.2485 8.032C12.3471 8.0388 13.1762 8.35111 13.7128 8.96014C14.1033 9.40355 14.3645 10.0163 14.4938 10.7896C13.5197 10.6277 12.4662 10.578 11.34 10.641C8.16752 10.8197 6.12796 12.6286 6.26496 15.1422C6.33447 16.4172 6.98417 17.5141 8.09427 18.2306C9.03292 18.8363 10.2418 19.1325 11.4982 19.0655C13.1573 18.9766 14.4589 18.3577 15.367 17.226C16.0566 16.3667 16.4928 15.253 16.6854 13.8498C17.4761 14.3163 18.0621 14.9302 18.3857 15.6682C18.9361 16.9228 18.9681 18.9844 17.2475 20.6651C15.74 22.1375 13.9279 22.7744 11.1893 22.7941C8.15147 22.7721 5.85396 21.8197 4.36021 19.9631C2.96141 18.2247 2.23851 15.7138 2.21156 12.5C2.23851 9.28619 2.96141 6.77518 4.36021 5.03682C5.85396 3.1803 8.15142 2.22783 11.1893 2.20583C14.2491 2.22807 16.5867 3.1851 18.1376 5.05055C18.8981 5.9653 19.4715 7.11575 19.8494 8.45709L22 7.89611C21.5418 6.2451 20.8209 4.82232 19.8398 3.64249C17.8516 1.25091 14.9436 0.0253701 11.1968 0H11.1818C7.44257 0.0253212 4.56716 1.25545 2.63546 3.65613C0.916552 5.7925 0.0299001 8.76505 0.0001 12.4912L0 12.5L0.0001 12.5088C0.0299001 16.2349 0.916552 19.2075 2.63546 21.3439C4.56716 23.7445 7.44257 24.9747 11.1818 25H11.1968C14.5211 24.9774 16.8644 24.1266 18.7948 22.241C21.3203 19.7742 21.2443 16.6822 20.4119 14.784C19.8147 13.4228 18.6761 12.3172 17.1191 11.587ZM11.3794 16.8629C9.98892 16.9394 8.54437 16.3292 8.47317 15.0224C8.42037 14.0534 9.17857 12.9721 11.4647 12.8433C11.7265 12.8286 11.9834 12.8213 12.2358 12.8213C13.0662 12.8213 13.8431 12.9002 14.5494 13.0512C14.286 16.2676 12.7407 16.7899 11.3794 16.8629Z" fill="white"/>
            </svg>
        </a>
        <a href="#">
            <svg class="w-[20px]" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.33314 12.5077C8.32908 10.2068 10.1913 8.33773 12.4917 8.33373C14.7925 8.32924 16.6619 10.1906 16.6664 12.4919C16.6709 14.7932 14.8087 16.6618 12.5075 16.6663C10.2071 16.6707 8.33758 14.8089 8.33314 12.5077ZM6.08177 12.5121C6.08865 16.0572 8.9678 18.9246 12.5119 18.9177C16.0565 18.9108 18.9255 16.0325 18.9186 12.4874C18.9118 8.94364 16.0322 6.07455 12.4872 6.08148C8.94305 6.08837 6.07489 8.96791 6.08177 12.5121ZM17.6591 5.8182C17.6607 6.64603 18.3338 7.31635 19.1617 7.31473C19.9898 7.31307 20.6601 6.64037 20.6589 5.81254C20.6573 4.9847 19.9842 4.314 19.156 4.31566C18.3278 4.31727 17.6575 4.99037 17.6591 5.8182ZM7.46888 22.6834C6.25023 22.6304 5.58846 22.4279 5.14744 22.2582C4.56341 22.0322 4.14666 21.7613 3.70804 21.3259C3.27025 20.8889 2.99847 20.4733 2.77044 19.8905C2.59915 19.4495 2.393 18.7885 2.33587 17.5699C2.27391 16.2523 2.25975 15.8571 2.25369 12.5194C2.2472 9.18261 2.25936 8.78729 2.31688 7.46859C2.36907 6.25077 2.57283 5.58812 2.74212 5.1475C2.9681 4.56268 3.23826 4.14672 3.67445 3.70814C4.11141 3.26952 4.52694 2.99857 5.11014 2.77054C5.55081 2.59838 6.21175 2.39384 7.43001 2.33597C8.74827 2.27357 9.14315 2.26024 12.48 2.25375C15.8175 2.24725 16.2128 2.25902 17.5315 2.31693C18.7493 2.36996 19.4119 2.57167 19.8522 2.74218C20.4366 2.96815 20.8533 3.23754 21.2915 3.6745C21.7297 4.11151 22.0015 4.52621 22.2295 5.11068C22.4016 5.55009 22.6062 6.21185 22.6637 7.42972C22.7264 8.74799 22.7407 9.1433 22.7467 12.4801C22.7532 15.8178 22.741 16.2131 22.6831 17.531C22.6301 18.7496 22.428 19.4119 22.2579 19.8533C22.0319 20.4369 21.7618 20.8537 21.3251 21.2923C20.8886 21.7292 20.473 22.0018 19.8894 22.2298C19.4495 22.4016 18.7878 22.6065 17.5704 22.6644C16.2521 22.7264 15.8572 22.7406 12.5192 22.7466C9.1824 22.7531 8.78758 22.7406 7.46888 22.6834ZM7.32308 0.0865601C5.99305 0.149353 5.08465 0.362341 4.2908 0.673425C3.46907 0.993787 2.77249 1.42308 2.07957 2.11888C1.38577 2.81508 0.9597 3.51288 0.64178 4.33544C0.334016 5.13129 0.125422 6.04012 0.066682 7.37098C0.00838119 8.70429 -0.00499772 9.12953 0.00149642 12.5239C0.00799056 15.9178 0.022932 16.3439 0.0865062 17.6776C0.15008 19.0072 0.362336 19.9152 0.673371 20.7094C0.994123 21.5312 1.42303 22.2274 2.11922 22.9208C2.81502 23.6141 3.51326 24.0398 4.33621 24.3582C5.13123 24.6655 6.04041 24.8749 7.37088 24.9332C8.70413 24.992 9.12977 25.0049 12.5233 24.9985C15.9184 24.992 16.3441 24.977 17.6773 24.9138C19.0074 24.8502 19.9149 24.6372 20.7096 24.3269C21.5313 24.0054 22.2279 23.5773 22.9209 22.8811C23.6138 22.1852 24.0399 21.487 24.3578 20.6641C24.6656 19.8691 24.875 18.9598 24.9328 17.6302C24.9912 16.2961 25.005 15.87 24.9985 12.4761C24.992 9.08173 24.9766 8.65648 24.9135 7.32362C24.8503 5.99276 24.6372 5.08514 24.3266 4.29052C24.0055 3.46879 23.577 2.77294 22.8812 2.07919C22.1854 1.38622 21.4871 0.959314 20.6642 0.642224C19.8688 0.334412 18.9599 0.124646 17.6295 0.0671265C16.2962 0.00799561 15.8706 -0.00494384 12.4759 0.00150147C9.08196 0.00799561 8.65633 0.0225464 7.32308 0.0865601Z" fill="white"/>
            </svg>
        </a>
    </footer>
</body>
</html>