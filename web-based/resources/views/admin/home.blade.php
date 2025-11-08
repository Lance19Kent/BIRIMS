 <!-- header section -->
 @include('admin.shared.header')

 <body class="relative">
     @include('admin.shared.sidebar')
         <!-- mobile sidebar section -->
         @include('admin.shared.mobile-sidebar')
         <!-- Main Section -->
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
                     <div class="h-[90px] min-w-[90px] sm:flex hidden max-w-[90px] rounded-[50%] overflow-hidden">
                         <img class="h-full w-full object-center object-cover" src="{{asset('images/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg')}}" alt="">
                     </div>
                     <div class="flex flex-col">
                         <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Welcome, Admin</h1>
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

             <section class="w-full items-center px-[15px] sm:px-[0] gap-[37px] flex-col flex">
                 <div class="w-full flex-wrap gap-[20px] sm:flex-row sm:px-[0] flex items-center justify-between">
                     <div class="rounded-[4px] p-[15px] flex flex-col gap-[13px] border-[1px] border-gray-300">
                         <div class="flex items-center gap-[10px] sm:gap-[90px] py-[5px] border-b-gray-300 border-b-[1px]">
                             <svg class="h-[60px] w-[60px] fill-[#89C6FF]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M71.93-187.69v-88.93q0-30.92 15.96-55.19 15.96-24.27 42.63-37.76 57.02-27.89 114.67-43.01 57.66-15.11 126.73-15.11 69.08 0 126.73 15.11 57.66 15.12 114.68 43.01 26.67 13.49 42.63 37.76 15.96 24.27 15.96 55.19v88.93H71.93Zm679.99 0v-93.85q0-39.38-19.28-75.07-19.29-35.68-54.72-61.23 40.23 6 76.39 18.57 36.15 12.58 69 29.73 31 16.54 47.88 38.99 16.88 22.44 16.88 49.01v93.85H751.92Zm-380-304.62q-57.75 0-98.87-41.12-41.12-41.13-41.12-98.88 0-57.75 41.12-98.87 41.12-41.13 98.87-41.13 57.75 0 98.88 41.13 41.12 41.12 41.12 98.87 0 57.75-41.12 98.88-41.13 41.12-98.88 41.12Zm345.38-140q0 57.75-41.12 98.88-41.12 41.12-98.87 41.12-6.77 0-17.23-1.54-10.47-1.54-17.23-3.38 23.66-28.45 36.37-63.12 12.7-34.67 12.7-72 0-37.34-12.96-71.73-12.96-34.38-36.11-63.3 8.61-3.08 17.23-4 8.61-.93 17.23-.93 57.75 0 98.87 41.13 41.12 41.12 41.12 98.87ZM131.92-247.69h480v-28.93q0-12.53-6.27-22.3-6.26-9.77-19.88-17.08-49.38-25.46-101.69-38.58-52.31-13.11-112.16-13.11-59.84 0-112.15 13.11-52.31 13.12-101.69 38.58-13.62 7.31-19.89 17.08-6.27 9.77-6.27 22.3v28.93Zm240-304.62q33 0 56.5-23.5t23.5-56.5q0-33-23.5-56.5t-56.5-23.5q-33 0-56.5 23.5t-23.5 56.5q0 33 23.5 56.5t56.5 23.5Zm0 304.62Zm0-384.62Z" />
                             </svg>
                             <div class="flex flex-col items-end">
                                 <p class="text-gray-600 font-regular text-[18px]">Users</p>
                                 <h1 class="text-[30px] font-medium">887</h1>
                             </div>
                         </div>
                         <div class="w-full flex items-center gap-[15px]">
                             <svg class="w-[20px] h-[20px] fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                 <path d="M480-400q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Z" />
                             </svg>
                             <p class="text-[14px] font-medium text-gray-600">In the past year</p>
                         </div>
                     </div>
                     <div class="rounded-[4px] p-[15px] flex flex-col gap-[13px] border-[1px] border-gray-300">
                         <div class="flex items-center gap-[10px] sm:gap-[90px] py-[5px] border-b-gray-300 border-b-[1px]">
                             <svg class="h-[60px] w-[60px] fill-[#FF89D7]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                 <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z" />
                             </svg>
                             <div class="flex flex-col items-end">
                                 <p class="text-gray-600 font-regular text-[18px]">Requests</p>
                                 <h1 class="text-[30px] font-medium">887</h1>
                             </div>
                         </div>
                         <div class="w-full flex items-center gap-[15px]">
                             <svg class="w-[20px] h-[20px] fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                 <path d="M480-400q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Z" />
                             </svg>
                             <p class="text-[14px] font-medium text-gray-600">In the past year</p>
                         </div>
                     </div>
                     <div class="rounded-[4px] p-[15px] flex flex-col gap-[13px] border-[1px] border-gray-300">
                         <div class="flex items-center gap-[10px] sm:gap-[90px] py-[5px] border-b-gray-300 border-b-[1px]">
                             <svg class="h-[60px] w-[60px] fill-[#8AFFC7]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M240-80q-50 0-85-35t-35-85v-120h120v-560h600v680q0 50-35 85t-85 35H240Zm480-80q17 0 28.5-11.5T760-200v-600H320v480h360v120q0 17 11.5 28.5T720-160ZM360-600v-80h360v80H360Zm0 120v-80h360v80H360ZM240-160h360v-80H200v40q0 17 11.5 28.5T240-160Zm0 0h-40 400-360Z" />
                             </svg>
                             <div class="flex flex-col items-end">
                                 <p class="text-gray-600 font-regular text-[18px]">Blotters</p>
                                 <h1 class="text-[30px] font-medium">887</h1>
                             </div>
                         </div>
                         <div class="w-full flex items-center gap-[15px]">
                             <svg class="w-[20px] h-[20px] fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                 <path d="M480-400q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Z" />
                             </svg>
                             <p class="text-[14px] font-medium text-gray-600">In the past year</p>
                         </div>
                     </div>
                     <div class="rounded-[4px] p-[15px] flex flex-col gap-[13px] border-[1px] border-gray-300">
                         <div class="flex items-center gap-[10px] sm:gap-[90px] py-[5px] border-b-gray-300 border-b-[1px]">
                             <svg class="h-[60px] w-[60px] fill-[#CF93FF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                 <path d="M480-400q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Z" />
                             </svg>
                             <div class="flex flex-col items-end">
                                 <p class="text-gray-600 font-regular text-[18px]">Appoints</p>
                                 <h1 class="text-[30px] font-medium">887</h1>
                             </div>
                         </div>
                         <div class="w-full flex items-center gap-[15px]">
                             <svg class="w-[20px] h-[20px] fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                 <path d="M480-400q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Z" />
                             </svg>
                             <p class="text-[14px] font-medium text-gray-600">In the past year</p>
                         </div>
                     </div>
                 </div>

                 <div class="w-full flex-col sm:flex-row flex items-center justify-between gap-[37px]">
                     <div class="rounded-[4px] h-fit sm:h-[368px] flex flex-col gap-[0] sm:gap-[10px] w-full max-w-[703px] fit px-[30px] py-[20px] border-[1px] border-gray-300">
                         <div class="flex flex-col">
                             <h1 class="text-[25px] font-medium">Barangay Blotter Reports</h1>
                             <p class="text-gray-500 ">Reports in the past year</p>
                         </div>
                         <div class="flex flex-col sm:flex-row w-full items-center py-[20px] gap-[64px] h-full">
                             <div class="h-fit sm:h-full w-[194px]">
                                 <canvas id="myPieChart"></canvas>
                             </div>
                             <div class="flex flex-col w-full overflow-auto max-h-[225px]">
                                 <div class="flex w-full items-center justify-between border-b-[1px]  border-b-gray-400 py-[10px]">
                                     <div class="flex items-center gap-[15px]">
                                         <div class="h-[20px] w-[20px] rounded-[50%] bg-[#FF89D7]">
                                         </div>
                                         <p class="font-regular text-[16px] ">Gemini Alley</p>
                                     </div>
                                     <div>197</div>
                                     <div>30%</div>
                                 </div>
                                 <div class="flex w-full items-center justify-between border-b-[1px]  border-b-gray-400 py-[10px]">
                                     <div class="flex items-center gap-[15px]">
                                         <div class="h-[20px] w-[20px] rounded-[50%] bg-[#CF93FF]">
                                         </div>
                                         <p class="font-regular text-[16px] ">Gold Street</p>
                                     </div>
                                     <div>197</div>
                                     <div>30%</div>
                                 </div>
                                 <div class="flex w-full items-center justify-between border-b-[1px]  border-b-gray-400 py-[10px]">
                                     <div class="flex items-center gap-[15px]">
                                         <div class="h-[20px] w-[20px] rounded-[50%] bg-[#89C6FF]">
                                         </div>
                                         <p class="font-regular text-[16px] ">Gumamela</p>
                                     </div>
                                     <div>197</div>
                                     <div>30%</div>
                                 </div>
                                 <div class="flex w-full items-center justify-between border-b-[1px]  border-b-gray-400 py-[10px]">
                                     <div class="flex items-center gap-[15px]">
                                         <div class="h-[20px] w-[20px] rounded-[50%] bg-[#FFEBA5]">
                                         </div>
                                         <p class="font-regular text-[16px] ">Hummingbird</p>
                                     </div>
                                     <div>197</div>
                                     <div>30%</div>
                                 </div>
                                 <div class="flex w-full items-center justify-between border-b-[1px]  border-b-gray-400 py-[10px]">
                                     <div class="flex items-center gap-[15px]">
                                         <div class="h-[20px] w-[20px] rounded-[50%] bg-[#8AFFC7]">
                                         </div>
                                         <p class="font-regular text-[16px] ">Hermes Drive</p>
                                     </div>
                                     <div>197</div>
                                     <div>30%</div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="rounded-[4px] h-fit sm:h-[368px] flex flex-col gap-[10px] w-full max-w-[500px] fit px-[30px] py-[20px] border-[1px] border-gray-300">
                         <div class="flex flex-col">
                             <h1 class="text-[25px] font-medium">Medical Appointment</h1>
                             <p class="text-gray-500 ">Appointments in the past year</p>
                         </div>
                         <div class="h-full w-full">
                             <canvas id="myBarChart"></canvas>
                         </div>
                     </div>
                 </div>

                 <div class="w-full flex flex-col gap-[10px] sm:flex-row sm:gap-[0] justify-between items-center mb-[30px]">
                     <div class="rounded-[4px] w-full sm:w-fit px-[43px] py-[15px] relative flex flex-col gap-[10px] items-center justify-center bg-[#89C6FF]">
                         <div class="flex text-center flex-col gap-[5px]">
                             <h4 class="text-[18px] font-regular text-white">New Visitors</h4>
                             <p class="text-[16px] text-[#005FB9] font-regular">Out of total number</p>
                         </div>
                         <div class="flex items-center py-[10px] justify-center relative">
                             <svg class="w-[150px] hidden sm:block h-[150px] transform -rotate-90">
                                 <circle
                                     class="text-[#C0E0FF]"
                                     stroke-width="10"
                                     stroke="currentColor"
                                     fill="transparent"
                                     r="65"
                                     cx="75"
                                     cy="75" />
                                 <circle
                                     class="text-white"
                                     stroke-width="10"
                                     stroke-dasharray="408"
                                     stroke-dashoffset="80"
                                     stroke-linecap="round"
                                     stroke="currentColor"
                                     fill="transparent"
                                     r="65"
                                     cx="75"
                                     cy="75" />
                             </svg>
                             <span class="absolute text-[30px] font-regular text-white">80%</span>
                         </div>
                         <div class="w-full block sm:hidden rounded-[20px] overflow-hidden bg-[#C0E0FF] h-[10px] mt-[10px]">
                             <div class="w-[80%] h-full bg-white rounded-[20px]"></div>
                         </div>
                     </div>
                     <div class="rounded-[4px] w-full sm:w-fit px-[43px] py-[15px] relative flex flex-col gap-[10px] items-center justify-center bg-[#FF89D7]">
                         <div class="flex text-center flex-col gap-[5px]">
                             <h4 class="text-[18px] font-regular text-white">Orders</h4>
                             <p class="text-[16px] text-[#9D0068] font-regular">delivered</p>
                         </div>
                         <div class="flex items-center py-[10px] justify-center relative">
                             <svg class="w-[150px] hidden sm:block h-[150px] transform -rotate-90">
                                 <circle
                                     class="text-[#FFCDEE]"
                                     stroke-width="10"
                                     stroke="currentColor"
                                     fill="transparent"
                                     r="65"
                                     cx="75"
                                     cy="75" />
                                 <circle
                                     class="text-white"
                                     stroke-width="10"
                                     stroke-dasharray="408"
                                     stroke-dashoffset="80"
                                     stroke-linecap="round"
                                     stroke="currentColor"
                                     fill="transparent"
                                     r="65"
                                     cx="75"
                                     cy="75" />
                             </svg>
                             <span class="absolute text-[30px] font-regular text-white">80%</span>
                         </div>
                         <div class="w-full block sm:hidden rounded-[20px] overflow-hidden bg-[#FFCDEE] h-[10px] mt-[10px]">
                             <div class="w-[80%] h-full bg-white rounded-[20px]"></div>
                         </div>
                     </div>
                     <div class="rounded-[4px] w-full sm:w-fit px-[43px] py-[15px] relative flex flex-col gap-[10px] items-center justify-center bg-[#8AFFC7]">
                         <div class="flex text-center flex-col gap-[5px]">
                             <h4 class="text-[18px] font-regular text-white">Verified</h4>
                             <p class="text-[16px] text-[#00763D] font-regular">Out of total users</p>
                         </div>
                         <div class="flex items-center py-[10px] justify-center relative">
                             <svg class="w-[150px] hidden sm:block h-[150px] transform -rotate-90">
                                 <circle
                                     class="text-[#CEFFE7]"
                                     stroke-width="10"
                                     stroke="currentColor"
                                     fill="transparent"
                                     r="65"
                                     cx="75"
                                     cy="75" />
                                 <circle
                                     class="text-white"
                                     stroke-width="10"
                                     stroke-dasharray="408"
                                     stroke-dashoffset="80"
                                     stroke-linecap="round"
                                     stroke="currentColor"
                                     fill="transparent"
                                     r="65"
                                     cx="75"
                                     cy="75" />
                             </svg>
                             <span class="absolute text-[30px] font-regular text-white">80%</span>
                         </div>
                         <div class="w-full block sm:hidden rounded-[20px] overflow-hidden bg-[#CEFFE7] h-[10px] mt-[10px]">
                             <div class="w-[80%] h-full bg-white rounded-[20px]"></div>
                         </div>
                     </div>
                     <div class="rounded-[4px] w-full sm:w-fit px-[43px] py-[15px] relative flex flex-col gap-[10px] items-center justify-center bg-[#CF93FF]">
                         <div class="flex text-center flex-col gap-[5px]">
                             <h4 class="text-[18px] font-regular text-white">Pending</h4>
                             <p class="text-[16px] text-[#510092] font-regular">Out of total Appointments</p>
                         </div>
                         <div class="flex items-center py-[10px] justify-center relative">
                             <svg class="w-[150px] hidden sm:block h-[150px] transform -rotate-90">
                                 <circle
                                     class="text-[#EFDCFF]"
                                     stroke-width="10"
                                     stroke="currentColor"
                                     fill="transparent"
                                     r="65"
                                     cx="75"
                                     cy="75" />
                                 <circle
                                     class="text-white"
                                     stroke-width="10"
                                     stroke-dasharray="408"
                                     stroke-dashoffset="80"
                                     stroke-linecap="round"
                                     stroke="currentColor"
                                     fill="transparent"
                                     r="65"
                                     cx="75"
                                     cy="75" />
                             </svg>
                             <span class="absolute text-[30px] font-regular text-white">80%</span>
                         </div>
                         <div class="w-full block sm:hidden rounded-[20px] overflow-hidden bg-[#EFDCFF] h-[10px] mt-[10px]">
                             <div class="w-[80%] h-full bg-white rounded-[20px]"></div>
                         </div>
                     </div>
                 </div>
             </section>

             <script>
                 const ctx = document.getElementById('myPieChart').getContext('2d');
                 const myPieChart = new Chart(ctx, {
                     type: 'pie',
                     data: {
                         labels: ['Gemini Alley', 'Gold Street', 'Gumamela', 'Hummingbird', 'Hermes Drive'],
                         datasets: [{
                             label: 'Reports',
                             data: [30, 25, 15, 15, 15],
                             backgroundColor: [
                                 '#FF89D7',
                                 '#CF93FF',
                                 '#89C6FF',
                                 '#FFEBA5',
                                 '#8AFFC7'
                             ],
                             borderColor: '#fff',
                             borderWidth: 2
                         }]
                     },
                     options: {
                         responsive: true,
                         plugins: {
                             legend: {
                                 display: false
                             },

                         }
                     }
                 });
                 const ctx2 = document.getElementById('myBarChart').getContext('2d');
                 const myBarChart = new Chart(ctx2, {
                     type: 'bar',
                     data: {
                         labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                         datasets: [{
                             label: 'Appointments',
                             data: [37, 20, 44, 27, 25, 50, 30, 40, 45, 20, 33, 60],
                             backgroundColor: [
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',
                                 '#89C6FF',

                             ],
                             borderColor: '#fff',
                             borderWidth: 2
                         }]
                     },
                     options: {
                         responsive: true,
                         plugins: {
                             legend: {
                                 display: false
                             },

                         }
                     }
                 });
             </script>
         </main>
 </body>

 </html>