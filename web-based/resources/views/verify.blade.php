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
                      <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Verify Account</h1>
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

          <section class="w-full px-[15px] sm:px-[0] items-center justify-center flex">
              <div class="flex w-full max-w-[948px] flex-col gap-[30px] mb-[30px]">
                  <div class="flex flex-col sm:flex-row w-full gap-[30px]">
                      <svg class="w-[290px] hidden sm:block h-[190px]" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                          <path style="fill:#F2F2F2;" d="M471.917,109.027H40.084C17.981,109.027,0,127.008,0,149.111v286.463
                            c0,22.103,17.981,40.083,40.084,40.083h431.833c22.103,0,40.083-17.981,40.083-40.083V149.111
                            C512,127.008,494.019,109.027,471.917,109.027z" />
                          <path style="fill:#E5E5E5;" d="M0,149.111v286.463c0,22.103,17.981,40.083,40.084,40.083h361.731L37.697,109.104
                            C16.701,110.344,0,127.811,0,149.111z" />
                          <g>
                              <path style="fill:#999999;" d="M428.092,231.95H248.518c-4.427,0-8.017-3.588-8.017-8.017s3.589-8.017,8.017-8.017h179.574
                                c4.427,0,8.017,3.588,8.017,8.017S432.519,231.95,428.092,231.95z" />
                              <path style="fill:#999999;" d="M428.092,197.745H248.518c-4.427,0-8.017-3.588-8.017-8.017s3.589-8.017,8.017-8.017h179.574
                                c4.427,0,8.017,3.588,8.017,8.017S432.519,197.745,428.092,197.745z" />
                              <path style="fill:#999999;" d="M428.092,430.764H86.046c-4.427,0-8.017-3.588-8.017-8.017s3.589-8.017,8.017-8.017h342.046
                                c4.427,0,8.017,3.588,8.017,8.017S432.519,430.764,428.092,430.764z" />
                          </g>
                          <path style="fill:#FF7452;" d="M304.788,39.079c-1.522-1.739-3.721-2.736-6.032-2.736h-85.511c-2.311,0-4.51,0.997-6.032,2.736
                            c-1.522,1.739-2.22,4.05-1.914,6.341l12.827,96.2c0.531,3.983,3.928,6.957,7.946,6.957h59.858c4.018,0,7.416-2.975,7.946-6.957
                            l12.827-96.2C307.008,43.129,306.31,40.818,304.788,39.079z" />
                          <path style="fill:#E24642;" d="M212.282,97.804l5.843,43.815c0.531,3.983,3.928,6.957,7.946,6.957h59.858
                            c4.018,0,7.416-2.975,7.946-6.957l5.843-43.815H212.282z" />
                          <path style="fill:#5AC779;" d="M336.167,256.534c-37.426,0-67.875,30.448-67.875,67.875s30.449,67.875,67.875,67.875
                            s67.875-30.448,67.875-67.875S373.593,256.534,336.167,256.534z" />
                          <path style="fill:#00A085;" d="M363.958,364.493c-37.426,0-67.875-30.448-67.875-67.875c0-11.577,2.92-22.483,8.053-32.03
                            c-21.317,11.459-35.844,33.974-35.844,59.822c0,37.426,30.449,67.875,67.875,67.875c25.849,0,48.363-14.528,59.822-35.844
                            C386.441,361.572,375.535,364.493,363.958,364.493z" />
                          <path style="fill:#AFF078;" d="M331.894,347.39c-2.194,0-4.379-0.897-5.961-2.653l-19.24-21.378
                            c-2.962-3.291-2.695-8.36,0.596-11.322c3.291-2.962,8.36-2.696,11.322,0.595l13.951,15.502l28.255-24.724
                            c3.332-2.915,8.397-2.578,11.312,0.755c2.916,3.332,2.578,8.396-0.755,11.312l-34.205,29.929
                            C335.651,346.737,333.768,347.39,331.894,347.39z" />
                          <path style="fill:#FFD652;" d="M143.766,179.574c-27.995,0-50.772,22.777-50.772,50.772s22.777,50.772,50.772,50.772
                            s50.772-22.777,50.772-50.772S171.762,179.574,143.766,179.574z" />
                          <path style="fill:#FB9D46;" d="M119.182,230.347c0-23.469,16.01-43.261,37.678-49.052c-4.179-1.117-8.567-1.721-13.094-1.721
                            c-27.995,0-50.772,22.777-50.772,50.772s22.777,50.772,50.772,50.772c4.527,0,8.915-0.604,13.094-1.721
                            C135.192,273.608,119.182,253.815,119.182,230.347z" />
                          <path style="fill:#FFD652;" d="M169.42,275.775h-51.307c-22.103,0-40.084,17.981-40.084,40.083v68.409
                            c0,4.428,3.589,8.017,8.017,8.017h115.441c4.427,0,8.017-3.588,8.017-8.017v-68.409C209.503,293.755,191.522,275.775,169.42,275.775
                            z" />
                          <path style="fill:#FB9D46;" d="M104.217,384.267v-68.409c0-22.103,17.981-40.083,40.084-40.083h-26.188
                            c-22.103,0-40.084,17.981-40.084,40.083v68.409c0,4.428,3.589,8.017,8.017,8.017h26.188
                            C107.806,392.284,104.217,388.696,104.217,384.267z" />
                      </svg>
                      <div class="w-full flex flex-col gap-[20px]">
                          <h1 class="font-semibold text-[40px]">We Need To Verify Your Identity</h1>
                          <p class="text-[16px] text-gray-400 font-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temr sit ametadip nt
                              <br>
                              <br>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              Lorem ipsum dolor sit ametadipiscing elit, sed do eiusmod
                          </p>
                      </div>
                  </div>
                  <div class="flex flex-col gap-[30px] w-full">
                      <a href="#" class="w-full flex items-center gap-[8px] rounded-[4px] border-[1px] border-gray-400 p-[10px] group">
                          <svg class="h-[70px] min-w-[50px] w-[70px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                              <path d="M566.15-461.54h163.08v-40H566.15v40Zm0-110.77h163.08v-40H566.15v40ZM230.77-347.69h264.61v-6.62q0-35-35.15-54.19-35.15-19.19-97.15-19.19-62 0-97.16 19.19-35.15 19.19-35.15 54.19v6.62Zm132.31-144.62q25.3 0 42.65-17.34 17.35-17.35 17.35-42.66 0-25.31-17.35-42.65-17.35-17.35-42.65-17.35-25.31 0-42.66 17.35-17.34 17.34-17.34 42.65t17.34 42.66q17.35 17.34 42.66 17.34ZM184.62-200q-27.62 0-46.12-18.5Q120-237 120-264.62v-430.76q0-27.62 18.5-46.12Q157-760 184.62-760h590.76q27.62 0 46.12 18.5Q840-723 840-695.38v430.76q0 27.62-18.5 46.12Q803-200 775.38-200H184.62Zm0-40h590.76q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93v-430.76q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H184.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93v430.76q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69ZM160-240v-480 480Z" />
                          </svg>
                          <div class="flex flex-col">
                              <h3 class="font-medium text-[20px] group-hover:underline">Valid ID - Government Issued</h3>
                              <small class="font-normal text-gray-400 text-[14px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temr sit ametadip nt </small>
                          </div>
                      </a>
                  </div>
                  <div class="flex flex-col gap-[30px] w-full">
                      <a href="#" class="w-full flex items-center gap-[8px] rounded-[4px] border-[1px] border-gray-400 p-[10px] group">
                          <svg class="h-[70px] min-w-[50px] w-[70px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                              <path d="M566.15-461.54h163.08v-40H566.15v40Zm0-110.77h163.08v-40H566.15v40ZM230.77-347.69h264.61v-6.62q0-35-35.15-54.19-35.15-19.19-97.15-19.19-62 0-97.16 19.19-35.15 19.19-35.15 54.19v6.62Zm132.31-144.62q25.3 0 42.65-17.34 17.35-17.35 17.35-42.66 0-25.31-17.35-42.65-17.35-17.35-42.65-17.35-25.31 0-42.66 17.35-17.34 17.34-17.34 42.65t17.34 42.66q17.35 17.34 42.66 17.34ZM184.62-200q-27.62 0-46.12-18.5Q120-237 120-264.62v-430.76q0-27.62 18.5-46.12Q157-760 184.62-760h590.76q27.62 0 46.12 18.5Q840-723 840-695.38v430.76q0 27.62-18.5 46.12Q803-200 775.38-200H184.62Zm0-40h590.76q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93v-430.76q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H184.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93v430.76q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69ZM160-240v-480 480Z" />
                          </svg>
                          <div class="flex flex-col">
                              <h3 class="font-medium text-[20px] group-hover:underline">Valid ID - Government Issued</h3>
                              <small class="font-normal text-gray-400 text-[14px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temr sit ametadip nt </small>
                          </div>
                      </a>
                  </div>
                  <div class="flex flex-col gap-[30px] w-full">
                      <a href="#" class="w-full flex items-center gap-[8px] rounded-[4px] border-[1px] border-gray-400 p-[10px] group">
                          <svg class="h-[70px] min-w-[50px] w-[70px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                              <path d="M566.15-461.54h163.08v-40H566.15v40Zm0-110.77h163.08v-40H566.15v40ZM230.77-347.69h264.61v-6.62q0-35-35.15-54.19-35.15-19.19-97.15-19.19-62 0-97.16 19.19-35.15 19.19-35.15 54.19v6.62Zm132.31-144.62q25.3 0 42.65-17.34 17.35-17.35 17.35-42.66 0-25.31-17.35-42.65-17.35-17.35-42.65-17.35-25.31 0-42.66 17.35-17.34 17.34-17.34 42.65t17.34 42.66q17.35 17.34 42.66 17.34ZM184.62-200q-27.62 0-46.12-18.5Q120-237 120-264.62v-430.76q0-27.62 18.5-46.12Q157-760 184.62-760h590.76q27.62 0 46.12 18.5Q840-723 840-695.38v430.76q0 27.62-18.5 46.12Q803-200 775.38-200H184.62Zm0-40h590.76q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93v-430.76q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H184.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93v430.76q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69ZM160-240v-480 480Z" />
                          </svg>
                          <div class="flex flex-col">
                              <h3 class="font-medium text-[20px] group-hover:underline">Valid ID - Government Issued</h3>
                              <small class="font-normal text-gray-400 text-[14px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temr sit ametadip nt </small>
                          </div>
                      </a>
                  </div>
                  <div class="flex flex-col gap-[30px] w-full">
                      <a href="#" class="w-full flex items-center gap-[8px] rounded-[4px] border-[1px] border-gray-400 p-[10px] group">
                          <svg class="h-[70px] min-w-[50px] w-[70px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                              <path d="M566.15-461.54h163.08v-40H566.15v40Zm0-110.77h163.08v-40H566.15v40ZM230.77-347.69h264.61v-6.62q0-35-35.15-54.19-35.15-19.19-97.15-19.19-62 0-97.16 19.19-35.15 19.19-35.15 54.19v6.62Zm132.31-144.62q25.3 0 42.65-17.34 17.35-17.35 17.35-42.66 0-25.31-17.35-42.65-17.35-17.35-42.65-17.35-25.31 0-42.66 17.35-17.34 17.34-17.34 42.65t17.34 42.66q17.35 17.34 42.66 17.34ZM184.62-200q-27.62 0-46.12-18.5Q120-237 120-264.62v-430.76q0-27.62 18.5-46.12Q157-760 184.62-760h590.76q27.62 0 46.12 18.5Q840-723 840-695.38v430.76q0 27.62-18.5 46.12Q803-200 775.38-200H184.62Zm0-40h590.76q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93v-430.76q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H184.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93v430.76q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69ZM160-240v-480 480Z" />
                          </svg>
                          <div class="flex flex-col">
                              <h3 class="font-medium text-[20px] group-hover:underline">Valid ID - Government Issued</h3>
                              <small class="font-normal text-gray-400 text-[14px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temr sit ametadip nt </small>
                          </div>
                      </a>
                  </div>
              </div>

              <!-- <div class="w-full flex max-w-[696px] flex-col gap-[50px]">
                    <div class="flex flex-col gap-[20px]">
                        <h1 class="font-semibold text-[40px]">Take a picture of your Valid ID</h1>
                        <p class="text-[18px] text-gray-400 font-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temr sit ametadip nt </p>
                    </div>
                    <form class="w-full flex flex-col gap-[30px]" action="">
                        <div class="rounded-[4px] border-dashed border-orange-400 border-[1px] py-[30px] flex gap-[25px] flex-col items-center justify-center">
                            <div class="bg-gray-100 rounded-[50%] p-[5px]">
                                <svg class="h-[50px] w-[50px] fill-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                    <path d="m440-446-36 35q-11 11-27.5 11T348-412q-11-11-11-28t11-28l104-104q12-12 28-12t28 12l104 104q11 11 11.5 27.5T612-412q-11 11-27.5 11.5T556-411l-36-35v206h220q42 0 71-29t29-71q0-42-29-71t-71-29h-60v-80q0-83-58.5-141.5T480-720q-83 0-141.5 58.5T280-520h-20q-58 0-99 41t-41 99q0 58 41 99t99 41h60q17 0 28.5 11.5T360-200q0 17-11.5 28.5T320-160h-60q-91 0-155.5-63T40-377q0-78 47-139t123-78q25-92 100-149t170-57q117 0 198.5 81.5T760-520q69 8 114.5 59.5T920-340q0 75-52.5 127.5T740-160H520q-33 0-56.5-23.5T440-240v-206Zm40 6Z" />
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-center text-[25px] font-medium text-orange-500">Tap to upload photo</h1>
                                <p class="text-[18px] text-gray-400 font-medium">PNG, JPG or JPEG (max. 800x400px)</p>
                            </div>
                            <div class="flex items-center justify-center gap-[10px] w-full max-w-[450px]">
                                <hr class="w-full h-[1px] bg-gray-300 border-0">
                                <p class="text-[18px] text-gray-400 font-medium">OR</p>
                                <hr class="w-full h-[1px] bg-gray-300 border-0">
                            </div>
                            <label class="px-[20px] py-[10px] text-white font-medium text-[20px] rounded-[4px] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer bg-orange-500" for="cameraInput">Open Camera</label>
                            <input id="cameraInput" type="file" capture="environment" accept="image/*" class="hidden" />
                        </div>
                        <div class="flex items-center justify-center gap-[20px]">
                            <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</button>
                            <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Verify</button>
                        </div>
                    </form>
                </div> -->

              <!-- <div class=" max-w-[792px] flex flex-col gap-[20px] rounded-[4px] border-solid border-[1px] border-gray-300 p-[30px]">
                    <h1 class="text-[40px] font-bold">Verification Pending</h1>
                    <p class="text-[20px] text-gray-500 font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore </p>
                    <div class="w-full max-w-[481px] h-fit overflow-hidden rounded-[4px]">
                        <img class="w-full h-full object-center onbject-cover" src="assets/Screenshot 2025-10-01 204358.png" alt="">
                    </div>
                    <a class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer" href="notifications.php">View Notifications</a>
                </div> -->
          </section>
      </main>

  </body>

  </html>