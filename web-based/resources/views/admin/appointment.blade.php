 <!-- header section -->
 @include('admin.shared.header')
 <!-- modal add announcement Section -->
 <div id="addModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
     <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
         <h3 class="font-bold text-[40px]">Create Appointment</h3>
         <div class="flex flex-col w-full">
             <Label class="font-medium text-[18px]">Service:</Label>
             <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 <option value="">Choose Service</option>
             </Select>
         </div>
         <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Date:</Label>
                 <input type="date" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             </div>
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Time:</Label>
                 <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     <option value="">Choose Time</option>
                 </Select>
             </div>
         </div>
         <div class="flex flex-col w-full">
             <Label class="font-medium text-[18px]">Symptoms:</Label>
             <textarea type="text" placeholder="Describe your symptoms (Optional)" value="₱0.00" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]"></textarea>
         </div>
         <div class="flex items-center flex-col sm:flex-row gap-[30px] w-full">
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">First Name:</Label>
                 <input type="text" placeholder="Ex. Juan" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             </div>
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Last Name:</Label>
                 <input type="text" placeholder="Ex. Dela Cruz" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             </div>
         </div>
         <div class="flex flex-col gap-[10px]">
             <div class="flex flex-col">
                 <Label class="font-medium text-[18px]">Middle Name:</Label>
                 <input type="text" placeholder="(Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             </div>
         </div>
         <div class="flex flex-col">
             <Label class="font-medium text-[18px]">Email:</Label>
             <input type="email" placeholder="Ex. juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
         </div>
         <div class="flex flex-col w-full gap-[20px]">
             <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Create Announcement</button>
             <div id="" class="flex cancelBtn items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
         </div>
     </form>
 </div>
 <!-- modal delete announcement Section -->
 <div id="deleteModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
     <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
         <h3 class="font-bold text-[40px]">Delete Appointment</h3>
         <div class="flex items-center justify-center w-full">
             <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete this appointment for <span class="text-[#EF4444]"> Juan Dela Cruz</span>? This action cannot be undone and the user’s appointment will be cancelled.</p>
         </div>
         <div class="flex flex-col w-full gap-[20px]">
             <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete Order</button>
             <div id="" class="flex cancelBtn items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
         </div>
     </form>
 </div>
 <!-- modal edit announcement Section -->
 <div id="editModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
     <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
         <h3 class="font-bold text-[40px]">Edit Appointment</h3>
         <div class="flex flex-col w-full">
             <Label class="font-medium text-[18px]">Service:</Label>
             <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 <option value="">Choose Service</option>
                 <option value="">Blood pressure monitoring</option>
             </Select>
         </div>
         <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Date:</Label>
                 <input type="date" placeholder="" value="2025-05-03" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             </div>
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Time:</Label>
                 <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     <option value="">Choose Time</option>
                     <option value="" selected>2:00 PM</option>
                 </Select>
             </div>
         </div>
         <div class="flex flex-col w-full">
             <Label class="font-medium text-[18px]">Symptoms:</Label>
             <textarea type="text" placeholder="Describe your symptoms (Optional)" value="₱0.00" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]"></textarea>
         </div>
         <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">First Name:</Label>
                 <input type="text" placeholder="Ex. Juan" value="Juan" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             </div>
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Last Name:</Label>
                 <input type="text" placeholder="Ex. Dela Cruz" value="Dela Cruz" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             </div>
         </div>
         <div class="flex flex-col gap-[10px]">
             <div class="flex flex-col">
                 <Label class="font-medium text-[18px]">Middle Name:</Label>
                 <input type="text" placeholder="(Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             </div>
         </div>
         <div class="flex flex-col">
             <Label class="font-medium text-[18px]">Email:</Label>
             <input type="email" placeholder="Ex. juandelacruz@gmail.com" value="juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
         </div>
         <div class="flex flex-col w-full gap-[20px]">
             <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Create Announcement</button>
             <div id="" class="flex cancelBtn items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
         </div>
     </form>
 </div>

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
                     <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Appointments</h1>
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
             <div class="w-full flex-col sm:flex-row items-start gap-[10px] sm:gap-[0] sm:items-center justify-between flex">
                 <div data-modal="addModal" class="addBtn rounded-[4px] group hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer hover:text-gray-50 bg-orange-500 px-[20px] py-[10px] text-[16px] font-medium text-white flex items-center gap-[12px]">
                     <svg class="h-[25px] group-hover:fill-gray-50 transition-all duration-300 w-[25px] fill-white" xmlns="http://www.w3.org/2000/svg" height="24px"
                         viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                         <path
                             d="M280-320v40q0 17 11.5 28.5T320-240q17 0 28.5-11.5T360-280v-40h40q17 0 28.5-11.5T440-360q0-17-11.5-28.5T400-400h-40v-40q0-17-11.5-28.5T320-480q-17 0-28.5 11.5T280-440v40h-40q-17 0-28.5 11.5T200-360q0 17 11.5 28.5T240-320h40Zm270-60h180q13 0 21.5-8.5T760-410q0-13-8.5-21.5T730-440H550q-13 0-21.5 8.5T520-410q0 13 8.5 21.5T550-380Zm0 120h100q13 0 21.5-8.5T680-290q0-13-8.5-21.5T650-320H550q-13 0-21.5 8.5T520-290q0 13 8.5 21.5T550-260ZM160-80q-33 0-56.5-23.5T80-160v-440q0-33 23.5-56.5T160-680h200v-120q0-33 23.5-56.5T440-880h80q33 0 56.5 23.5T600-800v120h200q33 0 56.5 23.5T880-600v440q0 33-23.5 56.5T800-80H160Zm280-520h80v-200h-80v200Z" />
                     </svg>
                     Add new appointment
                 </div>
                 <form class="flex  w-full sm:w-fit items-center gap-[20px]">
                     <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] border-gray-400 text-[18px] font-normal text-gray-400 gap-[8px]">
                         <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                             <path d="M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" />
                         </svg>
                         <select class="appearance-none focus:outline-none" name="" id="">
                             <option value="Filter">Filter By Time:</option>
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
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Service</th>
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Patient</th>
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Date Appointed</th>
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Time</th>
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr class="border-b-[1px] border-gray-300 bg-white">
                         <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Blood pressure monitroing</td>
                         <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Juan Dela Cruz</td>
                         <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">03-05-2025</td>
                         <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">2:00 PM</td>
                         <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                             <div data-modal="editModal" class="editBtn hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                 <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                     <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                 </svg>
                                 Edit
                             </div>
                             <div data-modal="deleteModal" class="deleteBtn hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                 <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                     <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                 </svg>
                                 Delete
                             </div>
                         </td>
                     </tr>
                 </tbody>
             </table>

             <!-- Mobile appointments Cards -->
             <div class="w-full gap-[20px] mb-[30px] flex sm:hidden flex-col">
                 <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                     <h6 class="text-[14px] text-gray-600 font-semibold">Service:</h6>
                     <p class="text-[16px] font-medium">Blood pressure monitoring</p>
                     <h6 class="text-[14px] text-gray-600 font-semibold">Patient:</h6>
                     <p class="text-[16px] font-medium">Juan Dela Cruz</p>
                     <h6 class="text-[14px] text-gray-600 font-semibold">Date Appointed:</h6>
                     <p class="text-[16px] font-medium">03-05-2025</p>
                     <h6 class="text-[14px] text-gray-600 font-semibold">Time:</h6>
                     <p class="text-[16px] font-medium">2:00 PM</p>
                     <h6 class="text-[14px] text-gray-600 font-semibold">Action:</h6>
                     <div class="w-full flex items-center gap-[10px]">
                         <div data-modal="editModal" class="editBtn hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                             <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                             </svg>
                             Edit
                         </div>
                         <div data-modal="deleteModal" class="deleteBtn hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                             <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                             </svg>
                             Delete
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