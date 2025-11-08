     <!-- header Section -->
     @include('admin.shared.header')
     <!-- modal add user Section -->
     <div id="addModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
         <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
             <h3 class="font-bold text-[40px]">Add User</h3>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
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
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Birthdate:</Label>
                     <input type="date" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Gender:</Label>
                     <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Gender</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Place of Birth:</Label>
                     <input type="Email" placeholder="Ex. Quezon City" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Citizenship</Label>
                     <input type="text" placeholder="Ex. Filipino" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Civil Status:</Label>
                     <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Gender</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Occupation:</Label>
                     <input type="Email" placeholder="Ex. Teacher" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">House #:</Label>
                     <input type="text" placeholder="Ex. 123" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Street:</Label>
                     <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Street</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Email:</Label>
                     <input type="Email" placeholder="Ex. juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Create Passord:</Label>
                     <input type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Confirm Password:</Label>
                     <input type="text" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col w-full gap-[20px]">
                 <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Create User</button>
                 <div id="" class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
             </div>
         </form>
     </div>
     <!-- modal delete user Section -->
     <div id="deleteModal" class="modal w-full fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
         <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
             <h3 class="font-bold text-[40px]">Delete User</h3>
             <div class="flex items-center justify-center w-full">
                 <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete <span class="text-[#EF4444]">Juan Dela Cruz</span>? This action cannot be undone.</p>
             </div>
             <div class="flex flex-col w-full gap-[20px]">
                 <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete User</button>
                 <div id="" class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
             </div>
         </form>
     </div>
     <!-- modal edit user Section -->
     <div id="editModal" class="modal w-full fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
         <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
             <h3 class="font-bold text-[40px]">Edit User</h3>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">First Name:</Label>
                     <input type="text" placeholder="Ex. Juan" value="Juan" class="py-[10px] border-b-[1px]  border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Last Name:</Label>
                     <input type="text" placeholder="Ex. Dela Cruz" value="Dela Cruz" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Middle Name:</Label>
                     <input type="text" placeholder="(Optional)" value="Santiago" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Birthdate:</Label>
                     <input type="date" value="2005-10-09" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Gender:</Label>
                     <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Gender</option>
                         <option selected value="">Male</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Place of Birth:</Label>
                     <input type="Email" value="Quezon City" placeholder="Ex. Quezon City" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Citizenship</Label>
                     <input type="text" value="Filipino" placeholder="Ex. Filipino" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Civil Status:</Label>
                     <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Gender</option>
                         <option selected value="">Single</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Occupation:</Label>
                     <input type="Email" value="Professor" placeholder="Ex. Teacher" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">House #:</Label>
                     <input type="text" value="13" placeholder="Ex. 123" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Street:</Label>
                     <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Street</option>
                         <option selected value="">Hummingbird</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Email:</Label>
                     <input value="juandelacruz@gmail.com" type="Email" placeholder="Ex. juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Update Passord:</Label>
                     <input type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Confirm Password:</Label>
                     <input type="text" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col w-full gap-[20px]">
                 <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Edit User</button>
                 <div id="" class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
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
                         <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Users</h1>
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

             <section class="w-full px-[15px] sm:p-[0] flex flex-col gap-[15px]">
                 <div class="w-full flex-col sm:flex-row items-start gap-[10px] sm:gap-[0] sm:items-center justify-between flex">
                     <div data-modal="addModal" class=" addBtn rounded-[4px] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer hover:text-gray-50 bg-orange-500 px-[20px] py-[10px] text-[16px] font-medium text-white flex items-center gap-[12px]">
                         <svg class="h-[25px] w-[25px] fill-white" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                             <path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113Z" />
                         </svg>
                         Add new User
                     </div>
                     <form class="flex  w-full sm:w-fit items-center gap-[20px]">
                         <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] border-gray-400 text-[18px] font-normal text-gray-400 gap-[8px]">
                             <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" />
                             </svg>
                             <select class="appearance-none focus:outline-none" name="" id="">
                                 <option value="Filter">Filter By: Role</option>
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
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Name</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Email</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Verified</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Role</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Date Created</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
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
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Juan Dela Cruz</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">juandelacruz@gmail.com</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Resident</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">20-10-2024</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div class="rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-600">
                                     <svg class="h-[20px] w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                     </tbody>
                 </table>

                 <!-- Mobile User Cards -->
                 <div class="w-full gap-[20px] mb-[30px] flex sm:hidden flex-col">
                     <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                         <h6 class="text-[14px] text-gray-600 font-semibold">Full Name:</h6>
                         <p class="text-[16px] font-medium">Juan Dela Cruz</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Email:</h6>
                         <p class="text-[16px] font-medium underline">juandelacruz@gmail.com</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Verified:</h6>
                         <p class="text-[16px] font-medium">No</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Role:</h6>
                         <p class="text-[16px] font-medium">Resident</p>
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
                     <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                         <h6 class="text-[14px] text-gray-600 font-semibold">Full Name:</h6>
                         <p class="text-[16px] font-medium">Juan Dela Cruz</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Email:</h6>
                         <p class="text-[16px] font-medium underline">juandelacruz@gmail.com</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Verified:</h6>
                         <p class="text-[16px] font-medium">No</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Role:</h6>
                         <p class="text-[16px] font-medium">Resident</p>
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