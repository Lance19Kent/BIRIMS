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
            <div class="w-full">
                <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px]  border-[#E4E4E7] py-[15px]">
                    <div class="flex gap-[10px] sm:gap-[20px]">
                        <div class="h-fit w-fit flex items-center justify-center mt-[10px] p-[8px] rounded-[50%] bg-blue-600">
                            <svg class="h-[25px] sm:h-[50px] w-[25px] sm:w-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#EFEFEF">
                                <path d="M438-226 296-368l58-58 84 84 168-168 58 58-226 226ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-[0px] mr-[50px]">
                            <h1 class="font-medium text-[25px] font-serif">Barangay Zumba Session</h1>
                            <p class="text-[18px] font-normal text-[#71717A]">Join us for a fun, high-energy Zumba Session this Saturday at 6:00 AM at the Covered Court! Get fit, move to the music, and connect with your neighbors.</p>
                            <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                        </div>
                    </div>
                </div>
                <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px]  border-[#E4E4E7] py-[15px]">
                    <div class="flex gap-[10px] sm:gap-[20px] mr-[50px]">
                        <div class="h-fit w-fit flex items-center justify-center mt-[10px] p-[8px] rounded-[50%] bg-[#FF9727]">
                            <svg class="h-[25px] sm:h-[50px] w-[25px] sm:w-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#EFEFEF">
                                <path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 412L346-160H160v-186L28-480l132-134v-186h186l134-132 134 132h186v186l132 134-132 134v186H614L480-28Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-[0px]">
                            <h1 class="font-medium text-[25px] font-serif">Immediate Evacuation Order</h1>
                            <p class="text-[18px] font-normal text-[#71717A]">Flash Flood Alert: Due to continuous heavy rainfall and rising water levels along the creek, residents in low-lying areas (Purok 5 and 6) are ordered to evacuate immediately to the Barangay Hall or the designated evacuation center at ABC Elementary School. </p>
                            <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                        </div>
                    </div>
                </div>
                <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px]  border-[#E4E4E7] py-[15px]">
                    <div class="flex gap-[10px] sm:gap-[20px]mr-[50px]">
                        <div class="h-fit w-fit flex items-center justify-center mt-[10px] p-[8px] rounded-[50%] bg-[#FF2727]">
                            <svg class="h-[25px] sm:h-[50px] w-[25px] sm:w-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#EFEFEF">
                                <path d="M480-79q-16 0-30.5-6T423-102L102-423q-11-12-17-26.5T79-480q0-16 6-31t17-26l321-321q12-12 26.5-17.5T480-881q16 0 31 5.5t26 17.5l321 321q12 11 17.5 26t5.5 31q0 16-5.5 30.5T858-423L537-102q-11 11-26 17t-31 6Zm-40-361h80v-240h-80v240Zm40 120q17 0 28.5-11.5T520-360q0-17-11.5-28.5T480-400q-17 0-28.5 11.5T440-360q0 17 11.5 28.5T480-320Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-[0px]">
                            <h1 class="font-medium text-[25px] font-serif">Community Tax Certificate (Cedula) Renewal Deadline</h1>
                            <p class="text-[18px] font-normal text-[#71717A]">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30.</p>
                            <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                        </div>
                    </div>
                </div>
                <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px]  border-[#E4E4E7] py-[15px]">
                    <div class="flex gap-[10px] sm:gap-[20px] mr-[50px]">
                        <div class="h-fit w-fit flex items-center justify-center mt-[10px] p-[8px] rounded-[50%] bg-[#FFF427]">
                            <svg class="h-[25px] sm:h-[50px] w-[25px] sm:w-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#EFEFEF">
                                <path d="M756-120 537-339l84-84 219 219-84 84Zm-552 0-84-84 276-276-68-68-28 28-51-51v82l-28 28-121-121 28-28h82l-50-50 142-142q20-20 43-29t47-9q24 0 47 9t43 29l-92 92 50 50-28 28 68 68 90-90q-4-11-6.5-23t-2.5-24q0-59 40.5-99.5T701-841q15 0 28.5 3t27.5 9l-99 99 72 72 99-99q7 14 9.5 27.5T841-701q0 59-40.5 99.5T701-561q-12 0-24-2t-23-7L204-120Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-[0px]">
                            <h1 class="font-medium text-[25px] font-serif">Free Basic First Aid and CPR Training</h1>
                            <p class="text-[18px] font-normal text-[#71717A]">The Barangay Health Committee invites all residents to a free Basic First Aid and CPR training session. Learn life-saving skills! It will be held this Saturday, November 4, 9:00 AM at the Barangay Covered Court. Limited slots available; register at the office.</p>
                            <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                        </div>
                    </div>
                </div>
                <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px]  border-[#E4E4E7] py-[15px]">
                    <div class="flex gap-[10px] sm:gap-[20px] mr-[50px]">
                        <div class="h-fit w-fit flex items-center justify-center mt-[10px] p-[8px] rounded-[50%] bg-[#27FF76]">
                            <svg class="h-[25px] sm:h-[50px] w-[25px] sm:w-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#EFEFEF">
                                <path d="M480-120q-75 0-140.5-28.5t-114-77q-48.5-48.5-77-114T120-480q0-75 28.5-140.5t77-114q48.5-48.5 114-77T480-840q82 0 155.5 35T760-706v-94h80v240H600v-80h110q-41-56-101-88t-129-32q-117 0-198.5 81.5T200-480q0 117 81.5 198.5T480-200q105 0 183.5-68T756-440h82q-15 137-117.5 228.5T480-120Zm112-192L440-464v-216h80v184l128 128-56 56Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-[0px]">
                            <h1 class="font-medium text-[25px] font-serif">Clean-Up Drive: Oplan Linis Barangay:</h1>
                            <p class="text-[18px] font-normal text-[#71717A]">Join the monthly community clean-up drive, "Oplan Linis Barangay," this Sunday, October 15, starting at 6:00 AM. We will focus on clearing drainage and public spaces to prevent dengue and flooding. Gloves and trash bags will be provided.</p>
                            <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                        </div>
                    </div>
                </div>
            </div>
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