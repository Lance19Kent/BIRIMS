  <!-- header section -->
  @include('partials.header')
  <!-- modal Section -->

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
                      <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Request Documents</h1>
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

          <section class="w-full items-center px-[15px] sm:px-[0] justify-center flex">
              <div class=" flex flex-col w-full max-w-[815px] gap-[30px]">
                  <div class="flex items-center">
                      <div id="btnShowForm" class="py-[12px] text-[14px] font-medium text-[#EA580C] border-b-[#EA580C] px-[12px] w-fit border-b-[1px] hover:cursor-pointer">Book Appointment</div>
                      <div id="btnShowSched" class="py-[12px] text-[14px] font-medium text-[#D4D4D8] border-b-[#D4D4D8] px-[12px] w-fit border-b-[1px] hover:cursor-pointer">My Appointments</div>
                  </div>

                  <form id="schedForm" method="POST" class="flex flex-col gap-[30px] w-full mb-[30px]">
                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Diagnostic Services:</label>
                          <div class="w-full flex px-[8px] py-[10px] rounded-[4px] border-[#A1A1AA] border-solid border-[1px]">
                              <select class="w-full text-[18px] font-normal focus:outline-none" name="" id="">
                                  <option value="">Blood Test</option>
                              </select>
                          </div>
                      </div>
                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Date:</label>
                          <div class="w-full flex px-[8px] py-[10px] rounded-[4px] border-[#A1A1AA] border-solid border-[1px]">
                              <input type="date" class="w-full text-[18px] font-normal focus:outline-none" />
                          </div>
                      </div>
                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Time:</label>
                          <div class="w-full flex px-[8px] py-[10px] rounded-[4px] border-[#A1A1AA] border-solid border-[1px]">
                              <select class="w-full text-[18px] font-normal focus:outline-none" name="" id="">
                                  <option value="">2:30 PM</option>
                              </select>
                          </div>
                      </div>
                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Symptoms:</label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="text" class=" text-[18px] font-normal focus:outline-none w-full" placeholder="Describe your symptoms" />
                          </div>
                      </div>
                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Fisrt Name:</label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="text" class=" text-[18px] font-normal focus:outline-none w-full" placeholder="Ex. Juan" />
                          </div>
                      </div>
                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Last Name:</label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="text" class=" text-[18px] font-normal focus:outline-none w-full" placeholder="Ex. Dela Cruz" />
                          </div>
                      </div>
                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Middle Name:</label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="text" class=" text-[18px] font-normal focus:outline-none w-full" placeholder="(Optional)" />
                          </div>
                      </div>
                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Email:</label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="email" class="w-full text-[18px] font-normal focus:outline-none" placeholder="sample@gmail.com" />
                          </div>
                      </div>
                      <div class="w-full flex items-center justify-end gap-[50px]">
                          <button class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 hover:cursor-pointer transition-all duration-300 border-[#FDBA74] border-[1px] px-[20px] py-[8px] text-[20px] text-[#FDBA74] font-medium">Cancel</button>
                          <button type="submit" class="rounded-[4px] hover:cursor-pointer hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] px-[20px] py-[8px] text-[20px] text-[#ffffff] font-medium">Save</button>
                      </div>
                  </form>

                  <div id="notifSched" class="w-full hidden flex-col">
                      <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px] px-[0px] border-[#E4E4E7] py-[15px]">
                          <div class="flex gap-[20px]">
                              <div class="flex flex-col gap-[0px]">
                                  <h1 class="font-medium text-[25px] font-serif">Blood Test Schedule</h1>
                                  <p class="text-[18px] font-normal text-[#71717A]">Dr. Maria Santos (Hermathology) • 10 September 28, 2025 at 10:30 AM • Blood Test</p>
                                  <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                              </div>
                          </div>
                          <div class="margin-left-auto flex">
                              <div class="toggle-btn cursor-pointer flex items-center justify-center border-solid border-[1px] border-[#E4E4E7] h-[40px] w-[40px] rounded-[50%]">
                                  <svg class="fill-[#A1A1AA]" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#EFEFEF">
                                      <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                  </svg>
                              </div>
                              <!-- Action -->
                              <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[25px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="m382-354 339-339q12-12 28-12t28 12q12 12 12 28.5T777-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Mark as Read</div>
                                  </div>
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Cancel Appointment</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px] px-[0px] border-[#E4E4E7] py-[15px]">
                          <div class="flex gap-[20px]">
                              <div class="flex flex-col gap-[0px]">
                                  <h1 class="font-medium text-[25px] font-serif">Blood Test Schedule</h1>
                                  <p class="text-[18px] font-normal text-[#71717A]">Dr. Maria Santos (Hermathology) • 10 September 28, 2025 at 10:30 AM • Blood Test</p>
                                  <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                              </div>
                          </div>
                          <div class="margin-left-auto flex">
                              <div class="toggle-btn cursor-pointer flex items-center justify-center border-solid border-[1px] border-[#E4E4E7] h-[40px] w-[40px] rounded-[50%]">
                                  <svg class="fill-[#A1A1AA]" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#EFEFEF">
                                      <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                  </svg>
                              </div>
                              <!-- Action -->
                              <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[25px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="m382-354 339-339q12-12 28-12t28 12q12 12 12 28.5T777-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Mark as Read</div>
                                  </div>
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Cancel Appointment</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[25px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                          <div class="flex gap-[20px]">
                              <div class="flex flex-col gap-[0px]">
                                  <h1 class="font-medium text-[25px] font-serif">Blood Test Schedule</h1>
                                  <p class="text-[18px] font-normal text-[#71717A]">Dr. Maria Santos (Hermathology) • 10 September 28, 2025 at 10:30 AM • Blood Test</p>
                                  <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                              </div>
                          </div>
                          <div class="margin-left-auto flex">
                              <div class="toggle-btn cursor-pointer flex items-center justify-center border-solid border-[1px] border-[#E4E4E7] h-[40px] w-[40px] rounded-[50%]">
                                  <svg class="fill-[#A1A1AA]" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#EFEFEF">
                                      <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                  </svg>
                              </div>
                              <!-- Action -->
                              <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[25px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="m382-354 339-339q12-12 28-12t28 12q12 12 12 28.5T777-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Mark as Read</div>
                                  </div>
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Cancel Appointment</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px] px-[0px] border-[#E4E4E7] py-[15px]">
                          <div class="flex gap-[20px]">
                              <div class="flex flex-col gap-[0px]">
                                  <h1 class="font-medium text-[25px] font-serif">Blood Test Schedule</h1>
                                  <p class="text-[18px] font-normal text-[#71717A]">Dr. Maria Santos (Hermathology) • 10 September 28, 2025 at 10:30 AM • Blood Test</p>
                                  <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                              </div>
                          </div>
                          <div class="margin-left-auto flex">
                              <div class="toggle-btn cursor-pointer flex items-center justify-center border-solid border-[1px] border-[#E4E4E7] h-[40px] w-[40px] rounded-[50%]">
                                  <svg class="fill-[#A1A1AA]" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#EFEFEF">
                                      <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                  </svg>
                              </div>
                              <!-- Action -->
                              <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[25px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="m382-354 339-339q12-12 28-12t28 12q12 12 12 28.5T777-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Mark as Read</div>
                                  </div>
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Cancel Appointment</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[25px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                          <div class="flex gap-[20px]">
                              <div class="flex flex-col gap-[0px]">
                                  <h1 class="font-medium text-[25px] font-serif">Blood Test Schedule</h1>
                                  <p class="text-[18px] font-normal text-[#71717A]">Dr. Maria Santos (Hermathology) • 10 September 28, 2025 at 10:30 AM • Blood Test</p>
                                  <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                              </div>
                          </div>
                          <div class="margin-left-auto flex">
                              <div class="toggle-btn cursor-pointer flex items-center justify-center border-solid border-[1px] border-[#E4E4E7] h-[40px] w-[40px] rounded-[50%]">
                                  <svg class="fill-[#A1A1AA]" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#EFEFEF">
                                      <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                  </svg>
                              </div>
                              <!-- Action -->
                              <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[25px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="m382-354 339-339q12-12 28-12t28 12q12 12 12 28.5T777-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Mark as Read</div>
                                  </div>
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Cancel Appointment</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px] px-[0px] border-[#E4E4E7] py-[15px]">
                          <div class="flex gap-[20px]">
                              <div class="flex flex-col gap-[0px]">
                                  <h1 class="font-medium text-[25px] font-serif">Blood Test Schedule</h1>
                                  <p class="text-[18px] font-normal text-[#71717A]">Dr. Maria Santos (Hermathology) • 10 September 28, 2025 at 10:30 AM • Blood Test</p>
                                  <small class="font-semibold text-[#D4D4D8] text-[12px]">05 May 2023</small>
                              </div>
                          </div>
                          <div class="margin-left-auto flex">
                              <div class="toggle-btn cursor-pointer flex items-center justify-center border-solid border-[1px] border-[#E4E4E7] h-[40px] w-[40px] rounded-[50%]">
                                  <svg class="fill-[#A1A1AA]" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#EFEFEF">
                                      <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                  </svg>
                              </div>
                              <!-- Action -->
                              <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[25px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="m382-354 339-339q12-12 28-12t28 12q12 12 12 28.5T777-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Mark as Read</div>
                                  </div>
                                  <div class="flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Cancel Appointment</div>
                                  </div>
                              </div>
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

          document.addEventListener('DOMContentLoaded', function() {
              const btnForm = document.getElementById('btnShowForm');
              const btnSched = document.getElementById('btnShowSched');
              const schedForm = document.getElementById('schedForm');
              const notifSched = document.getElementById('notifSched');
              const modal = document.getElementById('modal');

              btnSched.addEventListener('click', function() {
                  if (!btnSched.classList.contains('text-orange-600')) {
                      // show schedule
                      notifSched.style.display = 'flex';
                      schedForm.style.display = 'none';

                      // make Sched active
                      btnSched.classList.add('text-orange-600', 'border-b-orange-600');
                      btnSched.classList.remove('text-gray-400', 'border-b-gray-400');

                      // make Form inactive
                      btnForm.classList.add('text-gray-400', 'border-b-gray-400');
                      btnForm.classList.remove('text-orange-600', 'border-b-orange-600');
                  }
              });

              btnForm.addEventListener('click', function() {
                  if (!btnForm.classList.contains('text-orange-600')) {
                      // show form
                      notifSched.style.display = 'none';
                      schedForm.style.display = 'flex';

                      // make Form active
                      btnForm.classList.add('text-orange-600', 'border-b-orange-600');
                      btnForm.classList.remove('text-gray-400', 'border-b-gray-400');

                      // make Sched inactive
                      btnSched.classList.add('text-gray-400', 'border-b-gray-400');
                      btnSched.classList.remove('text-orange-600', 'border-b-orange-600');
                  }
              });
          });
      </script>
  </body>

  </html>