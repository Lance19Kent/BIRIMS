  <!-- sidebar page indicator -->
  <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>

  <section
      id="sidebar"
      class="bg-[#ffffff] fixed top-0 left-0 w-full h-[100vh] transition-all duration-300 border-r p-[20px] border-[#E4E4E7] max-w-[250px] hidden sm:flex flex-col gap-[20px]">
      <div id="sidebar-toggle" class=" absolute top-0 hover:cursor-pointer right-0 mr-[-20px] mt-[50px] h-[40px] w-[40px] bg-white rounded-[50%] border-solid border-[1px] border-[#D4D4D8] flex items-center justify-center">
          <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21.25 22.5L13.75 15L21.25 7.5M8.75 7.5V22.5" stroke="#71717A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
      </div>
      <div class="flex items-center justify-start gap-[10px]">
          <div class="h-[50px] w-[50px] rounded-[50%] bg-[#EA580C]"></div>
          <h1 class="text-[#EA580C] font-medium text-[30px]">BIRIMS</h1>
      </div>
      <nav class="w-full">
          <div class="w-full flex flex-col">
              <a href="{{ url('/home')}}" class="group flex gap-[10px] items-center py-[10px]">
                  <svg class="h-[30px] w-[30px] 
                    {{ request()->is('home') || request()->is('/') ? 'fill-[#ea580c]' : 'group-hover:fill-[#71717A] fill-[#A1A1AA]'}} transition-all duration-300 " xmlns="http://www.w3.org/2000/svg" height="24px"
                      viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                      <path
                          d="M160-200v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H600q-17 0-28.5-11.5T560-160v-200q0-17-11.5-28.5T520-400h-80q-17 0-28.5 11.5T400-360v200q0 17-11.5 28.5T360-120H240q-33 0-56.5-23.5T160-200Z" />
                  </svg>
                  <div class="font-semibold text-[20px]
                    {{request()->is('home') || request()->is('/') ? 'text-[#ea580c]' : 'group-hover:text-[#71717A] text-[#A1A1AA]'}} transition-all duration-300">Home</div>
              </a>
              <a href="{{ url('/notifications')}}" class="group flex gap-[10px] items-center py-[10px]">
                  <svg class="h-[30px] w-[30px] 
                    {{request()->is('notifications') ? 'fill-[#ea580c]' : 'group-hover:fill-[#71717A] fill-[#A1A1AA]'}}  transition-all duration-300" xmlns="http://www.w3.org/2000/svg" height="24px"
                      viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                      <path
                          d="M200-200q-17 0-28.5-11.5T160-240q0-17 11.5-28.5T200-280h40v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h40q17 0 28.5 11.5T800-240q0 17-11.5 28.5T760-200H200ZM480-80q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80Z" />
                  </svg>
                  <div class="font-semibold text-[20px] 
                    {{request()->is('notifications') ? 'text-[#ea580c]' : 'group-hover:text-[#71717A] text-[#A1A1AA]'}} transition-all duration-300">Notification</div>
              </a>
              <a href="{{url('/orders')}}" class="  group flex gap-[10px] items-center py-[10px]">
                  <svg class="h-[30px] w-[30px] 
                    {{request()->is('orders') ? 'fill-[#ea580c]' : 'group-hover:fill-[#71717A] fill-[#A1A1AA]'}} transition-all duration-300" xmlns="http://www.w3.org/2000/svg" height="24px"
                      viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                      <path
                          d="M70-427q-17 0-28.5-11.5T30-467q0-17 11.5-28.5T70-507h140q17 0 28.5 11.5T250-467q0 17-11.5 28.5T210-427H70Zm210 267q-50 0-85-35t-35-85h-50q-20 0-32-15t-7-34l9-38h125q42 0 71-29t29-71q0-13-3-24t-8-22h38q42 0 71-29t29-71q0-42-29-71t-71-29H180l6-24q6-28 27.5-45.5T264-800h406q20 0 32 15t7 34l-26 111h77q19 0 36 8.5t28 23.5l75 99q11 14 14 30.5t0 33.5l-27 133q-3 14-14 23t-25 9h-47q0 50-35 85t-85 35q-50 0-85-35t-35-85H400q0 50-35 85t-85 35ZM150-573q-17 0-28.5-11.5T110-613q0-17 11.5-28.5T150-653h180q17 0 28.5 11.5T370-613q0 17-11.5 28.5T330-573H150Zm130 333q17 0 28.5-11.5T320-280q0-17-11.5-28.5T280-320q-17 0-28.5 11.5T240-280q0 17 11.5 28.5T280-240Zm400 0q17 0 28.5-11.5T720-280q0-17-11.5-28.5T680-320q-17 0-28.5 11.5T640-280q0 17 11.5 28.5T680-240Zm-43-200h193l4-21-74-99h-95l-28 120Z" />
                  </svg>
                  <div class="font-semibold text-[20px]
                    {{request()->is('orders') ? 'text-[#ea580c]' : 'group-hover:text-[#71717A] text-[#A1A1AA]'}}  transition-all duration-300">My Orders</div>
              </a>
              <a href="{{ url('settings')}}" class="group flex gap-[10px] items-center py-[10px]">
                  <svg class="h-[30px] w-[30px] 
                {{request()->is('settings') ? 'fill-[#ea580c]' : 'group-hover:fill-[#71717A] fill-[#A1A1AA]' }}
                 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" height="24px"
                      viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                      <path
                          d="M433-80q-27 0-46.5-18T363-142l-9-66q-13-5-24.5-12T307-235l-62 26q-25 11-50 2t-39-32l-47-82q-14-23-8-49t27-43l53-40q-1-7-1-13.5v-27q0-6.5 1-13.5l-53-40q-21-17-27-43t8-49l47-82q14-23 39-32t50 2l62 26q11-8 23-15t24-12l9-66q4-26 23.5-44t46.5-18h94q27 0 46.5 18t23.5 44l9 66q13 5 24.5 12t22.5 15l62-26q25-11 50-2t39 32l47 82q14 23 8 49t-27 43l-53 40q1 7 1 13.5v27q0 6.5-2 13.5l53 40q21 17 27 43t-8 49l-48 82q-14 23-39 32t-50-2l-60-26q-11 8-23 15t-24 12l-9 66q-4 26-23.5 44T527-80h-94Zm49-260q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Z" />
                  </svg>
                  <div class="font-semibold text-[20px]
                {{request()->is('settings') ? 'text-[#ea580c]' : 'group-hover:text-[#71717A] text-[#A1A1AA]'}} 
                transition-all duration-300">Settings</div>
              </a>
              <div class="text-[16px] font-bold text-[#71717A]">Barangay</div>
              <a href="{{url('/documents')}}" class="group flex gap-[10px] items-center py-[10px]">
                  <svg class="h-[30px] w-[30px]  
                    {{request()->is('documents') ? 'fill-[#ea580c]' : 'group-hover:fill-[#71717A] fill-[#A1A1AA]'}} transition-all duration-300" xmlns="http://www.w3.org/2000/svg" height="24px"
                      viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                      <path
                          d="M320-440h320v-80H320v80Zm0 120h320v-80H320v80Zm0 120h200v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
                  </svg>
                  <div class="font-semibold text-[20px] 
                    {{request()->is('documents') ? 'text-[#ea580c]' : 'group-hover:text-[#71717A] text-[#A1A1AA]'}} transition-all duration-300">Documents</div>
              </a>
              <a href="{{url('/blotter')}}" class="group flex gap-[10px] items-center py-[10px]">
                  <svg class="h-[30px] w-[30px] 
                    {{request()->is('blotter') ? 'fill-[#ea580c]' : 'group-hover:fill-[#71717A] fill-[#A1A1AA]'}} transition-all duration-300" xmlns="http://www.w3.org/2000/svg" height="24px"
                      viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                      <path
                          d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm120-160h200q17 0 28.5-11.5T560-320q0-17-11.5-28.5T520-360H320q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280Zm0-160h320q17 0 28.5-11.5T680-480q0-17-11.5-28.5T640-520H320q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160h320q17 0 28.5-11.5T680-640q0-17-11.5-28.5T640-680H320q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Z" />
                  </svg>
                  <div class="font-semibold text-[20px]
                    {{request()->is('blotter') ? 'text-[#ea580c]' : 'group-hover:text-[#71717A] text-[#A1A1AA]'}} transition-all duration-300">Blotter</div>
              </a>
              <a href="{{url('/appointment')}}" class="group flex gap-[10px] items-center py-[10px]">
                  <svg class="h-[30px] w-[30px] 
                    {{request()->is('appointment') ? 'fill-[#ea580c]' : 'group-hover:fill-[#71717A] fill-[#A1A1AA]'}} transition-all duration-300" xmlns="http://www.w3.org/2000/svg" height="24px"
                      viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                      <path
                          d="M280-320v40q0 17 11.5 28.5T320-240q17 0 28.5-11.5T360-280v-40h40q17 0 28.5-11.5T440-360q0-17-11.5-28.5T400-400h-40v-40q0-17-11.5-28.5T320-480q-17 0-28.5 11.5T280-440v40h-40q-17 0-28.5 11.5T200-360q0 17 11.5 28.5T240-320h40Zm270-60h180q13 0 21.5-8.5T760-410q0-13-8.5-21.5T730-440H550q-13 0-21.5 8.5T520-410q0 13 8.5 21.5T550-380Zm0 120h100q13 0 21.5-8.5T680-290q0-13-8.5-21.5T650-320H550q-13 0-21.5 8.5T520-290q0 13 8.5 21.5T550-260ZM160-80q-33 0-56.5-23.5T80-160v-440q0-33 23.5-56.5T160-680h200v-120q0-33 23.5-56.5T440-880h80q33 0 56.5 23.5T600-800v120h200q33 0 56.5 23.5T880-600v440q0 33-23.5 56.5T800-80H160Zm280-520h80v-200h-80v200Z" />
                  </svg>
                  <div class="font-semibold text-[20px] 
                    {{request()->is('appointment') ? 'text-[#ea580c]' : 'group-hover:text-[#71717A] text-[#A1A1AA]'}} transition-all duration-300">Medical</div>
              </a>
              <a href="{{url('/announcements')}}" class="group flex gap-[10px] items-center py-[10px]">
                  <svg class="h-[30px] w-[30px] 
                    {{request()->is('announcements') ? 'fill-[#ea580c]' : 'group-hover:fill-[#71717A] fill-[#A1A1AA]'}}  transition-all duration-300" xmlns="http://www.w3.org/2000/svg" height="24px"
                      viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                      <path
                          d="M760-440h-80q-17 0-28.5-11.5T640-480q0-17 11.5-28.5T680-520h80q17 0 28.5 11.5T800-480q0 17-11.5 28.5T760-440ZM584-288q10-14 26-16t30 8l64 48q14 10 16 26t-8 30q-10 14-26 16t-30-8l-64-48q-14-10-16-26t8-30Zm120-424-64 48q-14 10-30 8t-26-16q-10-14-8-30t16-26l64-48q14-10 30-8t26 16q10 14 8 30t-16 26ZM280-360H160q-17 0-28.5-11.5T120-400v-160q0-17 11.5-28.5T160-600h120l132-132q19-19 43.5-8.5T480-703v446q0 27-24.5 37.5T412-228L280-360Z" />
                  </svg>
                  <div class="font-semibold text-[20px] 
                    {{request()->is('announcements') ? 'text-[#ea580c]' : 'group-hover:text-[#71717A] text-[#A1A1AA]'}} transition-all duration-300">Announcement</div>
              </a>
          </div>
      </nav>
  </section>