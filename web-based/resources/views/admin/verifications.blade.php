   <!-- header Section -->
   @include('admin.shared.header')
   <!-- modal add announcement Section -->
   <div id="addModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden items-center justify-center">
       <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
           <h3 class="font-bold text-[40px]">Verification Request</h3>
           <div class="flex flex-col gap-[5px] w-full">
               <p class="font-regular text-[20px] text-gray-500">Valid ID</p>
               <p class="font-regular text-[20px] text-gray-500">Juan Dela Cruz</p>
               <p class="font-regular text-[20px] text-gray-500">juandelacruz@gmail.com</p>
           </div>
           <div class="w-full rounded-[4px] overflow-hidden h-fit sm:h-[287px]">
               <img class="h-full w-full object-center justify-center" src="{{asset('images/Screenshot 2025-10-01 204358.png')}}" alt="">
           </div>
           <div class="flex flex-col w-full gap-[20px]">
               <button class="w-full cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Go Back</button>
           </div>
       </form>
   </div>
   <!-- modal delete announcement Section -->
   <div id="deleteModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
       <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
           <h3 class="font-bold text-[40px]">Reject Verification</h3>
           <div class="flex items-center justify-center w-full">
               <p class="font-regular text-[20px] text-gray-500">You are about to reject <span class="text-[#EF4444]"> Juan Dela Cruz's</span> Verification request, write down your reason why.</p>
           </div>
           <div class="flex flex-col w-full">
               <Label class="font-medium text-[18px]">Reason:</Label>
               <textarea type="text" placeholder="Write down your reason for rejection" value="₱0.00" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]"></textarea>
           </div>
           <div class="flex flex-col w-full gap-[20px]">
               <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Reject</button>
               <div id="" class="flex cancelBtn items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
           </div>
       </form>
   </div>
   <!-- modal edit announcement Section -->
   <div id="editModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden items-center justify-center">
       <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
           <h3 class="font-bold text-[40px]">User Verified</h3>
           <div class="flex items-center justify-center w-full">
               <p class="font-regular w-full text-[20px] text-gray-500">User <span class="text-[#EF4444]"> Juan Dela Cruz</span> Has been verified.</p>
           </div>
           <div class="flex flex-col w-full gap-[20px]">
               <button class="w-full cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Go Back</button>
           </div>
       </form>
   </div>

   <body class="relative">
       <!--sidebar section -->
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
                       <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Verifications</h1>
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

           <section class="w-full flex px-[15px] sm:px-[0] flex-col gap-[15px]">
               <div class="w-full items-center justify-between flex">
                   <form class="flex  w-full sm:w-fit items-center gap-[20px]">
                       <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] border-gray-400 text-[18px] font-normal text-gray-400 gap-[8px]">
                           <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                               <path d="M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" />
                           </svg>
                           <select class="appearance-none focus:outline-none" name="" id="">
                               <option value="Filter">Filter By Document:</option>
                           </select>
                       </div>

                       <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] w-full sm:w-[308px] border-gray-400 text-[18px] font-normal text-gray-600 gap-[8px]">
                           <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                               <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                           </svg>
                           <input class="w-full focus:outline-none" placeholder="Search" type="text">
                       </div>
                   </form>
               </div>

               <table class="w-full hidden sm:table border-collapse text-left border-[1px] border-gray-300 rounded-[4px]">
                   <thead>
                       <tr class="border-b-[1px] border-gray-300 bg-[#FFF7ED]">
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Full Name</th>
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Email</th>
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Document</th>
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Date Submitted</th>
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr class="border-b-[1px] border-gray-300 bg-white">
                           <td data-modal="addModal" class="addBtn hover:underline cursor-pointer px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                           <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">juandelacruz@gmail.com</td>
                           <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Valid ID</td>
                           <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">03-05-2025</td>
                           <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                               <div data-modal="editModal" class="editBtn hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                   <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                       <path d="m424-408-86-86q-11-11-28-11t-28 11q-11 11-11 28t11 28l114 114q12 12 28 12t28-12l226-226q11-11 11-28t-11-28q-11-11-28-11t-28 11L424-408Zm56 328q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                   </svg>
                                   Verify
                               </div>
                               <div data-modal="deleteModal" class="deleteBtn hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                   <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                       <path d="m480-424 116 116q11 11 28 11t28-11q11-11 11-28t-11-28L536-480l116-116q11-11 11-28t-11-28q-11-11-28-11t-28 11L480-536 364-652q-11-11-28-11t-28 11q-11 11-11 28t11 28l116 116-116 116q-11 11-11 28t11 28q11 11 28 11t28-11l116-116Zm0 344q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                   </svg>
                                   Reject
                               </div>
                           </td>
                       </tr>
                   </tbody>
               </table>

               <!-- Mobile appointments Cards -->
               <div class="w-full gap-[20px] mb-[30px] flex sm:hidden flex-col">
                   <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                       <h6 class="text-[14px] text-gray-600 font-semibold">Full Name:</h6>
                       <p data-modal="addModal" class="addBtn text-[16px] font-medium">Juan Dela Cruz</p>
                       <h6 class="text-[14px] text-gray-600 font-semibold">Email:</h6>
                       <p class="text-[16px] font-medium">juandelacruz@gmail.com</p>
                       <h6 class="text-[14px] text-gray-600 font-semibold">Dcoument:</h6>
                       <p class="text-[16px] font-medium">Valid ID</p>
                       <h6 class="text-[14px] text-gray-600 font-semibold">Date Submitted:</h6>
                       <p class="text-[16px] font-medium">03-05-2025</p>
                       <h6 class="text-[14px] text-gray-600 font-semibold">Action:</h6>
                       <div class="w-full flex items-center gap-[10px]">
                           <div data-modal="editModal" class="editBtn hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                               <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                   <path d="m424-408-86-86q-11-11-28-11t-28 11q-11 11-11 28t11 28l114 114q12 12 28 12t28-12l226-226q11-11 11-28t-11-28q-11-11-28-11t-28 11L424-408Zm56 328q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                               </svg>
                               Verify
                           </div>
                           <div data-modal="deleteModal" class="deleteBtn hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                               <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                   <path d="m480-424 116 116q11 11 28 11t28-11q11-11 11-28t-11-28L536-480l116-116q11-11 11-28t-11-28q-11-11-28-11t-28 11L480-536 364-652q-11-11-28-11t-28 11q-11 11-11 28t11 28l116 116-116 116q-11 11-11 28t11 28q11 11 28 11t28-11l116-116Zm0 344q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                               </svg>
                               Reject
                           </div>
                       </div>
                   </div>

               </div>
           </section>

       </main>
       <script>
           document.addEventListener('DOMContentLoaded', function() {
               // 🔹 Open modal
               document.querySelectorAll('.addBtn, .editBtn, .deleteBtn').forEach(btn => {
                   btn.addEventListener('click', function() {
                       const modalId = this.getAttribute('data-modal');
                       const modal = document.getElementById(modalId);
                       if (!modal) return;
                       modal.classList.remove('hidden');
                       modal.classList.add('flex');
                   });
               });

               // 🔹 Close modal (for all)
               document.querySelectorAll('.cancelBtn').forEach(btn => {
                   btn.addEventListener('click', function() {
                       const modal = this.closest('.modal');
                       if (!modal) return;
                       modal.classList.remove('flex');
                       modal.classList.add('hidden');
                   });
               });

           });
       </script>
   </body>

   </html>