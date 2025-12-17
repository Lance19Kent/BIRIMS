<!-- header section -->
@include('partials.header')

<body class="relative">
    <!-- sidebar section -->
    @include('partials.sidebar')
    <!-- mobile sidebar section -->
    @include('partials.mobile-sidebar')
    <section class="w-full items-center flex sm:hidden px-[15px] py-[10px] border-b-[1px] border-b-gray-300 justify-between">
        <div class="flex gap-[10px] items-center">
            <svg id="openMenuBtn" class="h-[50px] w-[50px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
            </svg>
            <div class="h-[50px] w-[50px] rounded-[50%] bg-orange-600"></div>
        </div>
        <div class="flex items-center gap-[20px]">
            <div class="h-[40px] w-[40px] rounded-[50%] border-solid border-[2px] border-[#EA580C] overflow-hidden">
                <img class="w-full h-full object-center object-cover" src="{{asset('images/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg')}}" alt="">
            </div>
            <a href="#" class="group rounded-[4px] py-[7px] px-[8px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center gap-[12px]">
                <svg class="h-[25px] w-[25px]  group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                    <path
                        d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                </svg>
                <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">Log Out</div>
            </a>
        </div>
    </section>
    <main class="w-full h-[100vh] sm:pl-[290px] sm:pr-[20px] flex flex-col gap-[30px] transition-all duration-300">
        <div class="flex w-full items-start justify-between py-[25px] border-b-[1px] border-[#D4D4D8] px-[15px] sm:px-[0]">
            <div class="flex items-center gap-[10px] max-w-[579px]">
                <div class="flex flex-col">
                    <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Barangay Announcements</h1>
                    <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut
                         labore et dolore </p>
                </div>
            </div>
            <div class="sm:flex hidden gap-[20px]">
                <div class="h-[50px] w-[50px] rounded-[50%] border-solid border-[2px] border-[#EA580C] overflow-hidden">
                    <img class="w-full h-full object-center object-cover" src="{{asset('images/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg')}}" alt="">
                </div>
                <a href="#" class="group rounded-[4px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] px-[20px] flex items-center gap-[12px]">
                    <svg class="h-[25px] w-[25px]  group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px"
                        viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                        <path
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                    </svg>
                    <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">Log Out</div>
                </a>
            </div>
        </div>

        <section class="w-full items-center justify-center flex px-[15px] sm:px-[0]">
            @foreach ($announcements as $announcement)
            <div class="group relative w-full flex items-center border-b border-[#E4E4E7] py-[15px]">
                <div class="flex gap-[20px] mr-[50px]">
                    <div class="p-[8px] rounded-full
                        {{ $announcement->type === 'warning' ? 'bg-[#FF9727]' : '' }}
                        {{ $announcement->type === 'danger' ? 'bg-[#FF2727]' : '' }}
                        {{ $announcement->type === 'success' ? 'bg-[#27FF76]' : '' }}
                        {{ $announcement->type === 'info' ? 'bg-blue-600' : '' }}">
            <!-- icon stays -->
        </div>
        <div>
            <h1 class="text-[25px] font-serif font-medium">
                {{ $announcement->title }}
            </h1>

            <p class="text-[18px] text-[#71717A]">
                {{ $announcement->description }}
            </p>

                    <small class="text-[12px] text-[#D4D4D8] font-semibold">
                    {{ $announcement->announcement_date->format('d M Y') }}
                    </small>
                </div>
            </div>
        </div>
            @endforeach
        </section>
    </main>

    <script>
        // Event delegation - works for all notifications
        document.addEventListener('click', (e) => {
            // Check if clicked element is a toggle button
            const toggleBtn = e.target.closest('.toggle-btn');

            if (toggleBtn) {
                e.stopPropagation();
                const actionBox = toggleBtn.nextElementSibling;

                // Close all other open menus
                document.querySelectorAll('.action-box').forEach(box => {
                    if (box !== actionBox) {
                        box.style.display = 'none';
                    }
                });

                // Toggle current menu
                if (actionBox.style.display === 'flex') {
                    actionBox.style.display = 'none';
                } else {
                    actionBox.style.display = 'flex';
                }
            } else {
                // Close all menus when clicking outside
                document.querySelectorAll('.action-box').forEach(box => {
                    box.style.display = 'none';
                });
            }
        });
    </script>
</body>

</html>