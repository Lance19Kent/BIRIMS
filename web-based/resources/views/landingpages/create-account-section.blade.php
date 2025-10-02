<section class="w-full bg-white relative" style="height: calc(100vh - 80px);" id="create-account">
        <div class="w-[155px] h-[234px] bg-[#EA580C] absolute rounded-br-[500px]"></div>
        <div class="w-[30px] h-[30px] bg-[#FFEDD5] rounded-full translate-x-[200px] translate-y-[50px] absolute"></div>
        <div class="w-[30px] h-[30px] bg-[#FB923C] rounded-full translate-x-[170px] translate-y-[100px] absolute"></div>

    <div class="w-full h-full flex flex-col gap-[20px] justify-center items-center px-[150px] text-center">
        <div class="flex flex-col ">
            <h1 class="z-10 relative text-[54px] font-medium" style="font-family: --font-ibm-plex-serif;">Create Your Account Now</h1>
            <hr class="z-0 translate-y-[48px] absolute w-[568px] border-5 border-[#EA580C]">
        </div>            
        <p class="text-[18px] text-[#A1A1AA] font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
        <div class="flex gap-12 mt-4">
            <a href="{{ url('login')}}" class="text-[18px] text-white font-medium px-[20px] py-[10px] bg-[#EA580C] rounded-[4px] duration-150 ease-in border border-[#EA580C] hover:bg-white hover:text-[var(--orange)]">Create Account</a>
            <a href="{{ url('signup')}}" class="text-[18px] text-[#EA580C] font-medium px-[20px] py-[10px] bg-white rounded-[4px] border duration-150 ease-in border-[#EA580C] hover:bg-[var(--orange)] hover:text-white">Sign in To Account</a>
        </div>
    </div>
    <img src="assets/svg/create-acc-svg-bg.svg" class="absolute bottom-0 right-0 w-[250px]">
</section>