<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-grow border-r border-gray-200 pt-5 bg-gradient-to-b from-green-500 to-green-600 overflow-y-auto">
      <div class="flex items-center justify-center space-x-2 flex-shrink-0 px-4 bg-white mx-2 py-4 rounded-lg shadow-md">
        <img class="h-8 w-auto" src="{{asset('images/school.png')}}" alt="Workflow">
        <h1 class="font-bold text-gray-700 text-2xl">MADNAHS</h1>
      </div>
      <div class="mt-8 flex-grow flex flex-col">
          
          <nav class="flex-1 px-2 space-y-3  " aria-label="Sidebar">
              <h1 class="pl-1 text-sm border-b font-bold text-gray-50 uppercase">Admin</h1>
              <div>
                <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                <a href="#" class=" hover:bg-white hover:text-gray-700 text-white border-b-2 uppercase font-bold group w-full flex items-end pl-2 py-2  rounded-md">
                  <!--
                    Heroicon name: outline/home
        
                    Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                  -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home mr-3 flex-shrink-0"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard
                </a>
              </div>
        
              <div class="space-y-1" x-data="{account: false}">
                  <h1 class="pl-1 text-xs border-b text-gray-50">Manage</h1>
                  
                <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                <button  :class="account == true ? 'bg-white text-gray-700 border-green-900' : 'text-white'" @click="account = !account" type="button" class=" hover:bg-white   hover:text-gray-700 border-b-2 group w-full flex items-end uppercase pl-2 pr-1 py-2 text-left  font-bold rounded-md focus:outline-none" aria-controls="sub-menu-1" aria-expanded="false">
                  <!-- Heroicon name: outline/users -->
               
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users mr-3 flex-shrink-0 h-6 w-6 "><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  <span class="flex-1">
                    ACCOUNTS
                  </span>
                  <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24"  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" :class="account == true ? 'rotate-90 transform transition ease-in-out' : '' " class=" feather feather-chevrons-right ml-3 flex-shrink-0 h-5 w-5 "><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                </button>
                <!-- Expandable link section, show/hide based on state. -->
                <div  x-show="account" x-cloak x-collapse>
                <div class="divide-y bg-white shadow rounded-b-md " id="sub-menu-1">
                  <a href="#" class="text-gray-600  hover:bg-green-50 group flex items-center px-2 py-3 text-sm font-medium">
                      <!-- Heroicon name: outline/users -->
                      
                      <span class="flex-1 font-bold uppercase pl-10 ">
                        Admin
                      </span>
              
                      <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                      <span class="bg-gray-400 text-white  ml-3 inline-block py-0.5 px-3 text-xs font-medium rounded-full">
                        3
                      </span>
                    </a>
                  <a href="{{ route('admin-parents') }}" class="text-gray-600  hover:bg-green-50 group flex items-center px-2 py-3 text-sm font-medium">
                      <!-- Heroicon name: outline/users -->
                      
                      <span class="flex-1 font-bold uppercase pl-10 ">
                        Teachers
                      </span>
              
                      <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                      <span class="bg-gray-400 text-white  ml-3 inline-block py-0.5 px-3 text-xs font-medium rounded-full">
                        3
                      </span>
                    </a>
                  <a href="{{ route('admin-parents') }}" class="text-gray-600  hover:bg-green-50 group flex items-center px-2 py-3 text-sm font-medium">
                      <!-- Heroicon name: outline/users -->
                      
                      <span class="flex-1 font-bold uppercase pl-10 ">
                        Parents
                      </span>
              
                      <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                      <span class="bg-gray-400 text-white  ml-3 inline-block py-0.5 px-3 text-xs font-medium rounded-full">
                        3
                      </span>
                    </a>
                  <a href="{{ route('admin-students') }}" class="text-gray-600  rounded-b-md hover:bg-green-50 group flex items-center px-2 py-3 text-sm font-medium">
                      <!-- Heroicon name: outline/users -->
                      
                      <span class="flex-1 font-bold uppercase pl-10 ">
                       Students
                      </span>
              
                      <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                      <span class="bg-gray-400 text-white  ml-3 inline-block py-0.5 px-3 text-xs font-medium rounded-full">
                        3
                      </span>
                    </a>
        
                 
                </div>
                </div>
              </div>
              <div class="space-y-1" x-data="{chart: false}">
                 
                <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                <button :class="chart == true ? 'bg-white text-gray-700 border-green-900' : 'text-white'" @click="chart = !chart" type="button" class="hover:bg-white  hover:text-gray-700 border-b-2 group w-full flex items-end uppercase pl-2 pr-1 py-2 text-left  font-bold rounded-md focus:outline-none" aria-controls="sub-menu-1" aria-expanded="false">
                  <!-- Heroicon name: outline/users -->
               
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart mr-3 flex-shrink-0 h-6 w-6"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                  <span class="flex-1">
                    CHARTS
                  </span>
                  <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24"  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" :class="chart == true ? 'rotate-90 transform transition ease-in-out' : '' " class=" feather feather-chevrons-right ml-3 flex-shrink-0 h-5 w-5 "><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                </button>
                <!-- Expandable link section, show/hide based on state. -->
                <div x-show="chart" x-cloak x-collapse class="divide-y bg-white shadow rounded-b-md " id="sub-menu-1">
                  <a href="#" class="text-gray-600  hover:bg-green-50 group flex items-center px-2 py-3 text-sm font-medium">
                      <!-- Heroicon name: outline/users -->
                      
                      <span class="flex-1 font-bold uppercase pl-10 ">
                          Nutritional Status
                      </span>
              
                      <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                      
                    </a>
                  <a href="#" class="text-gray-600  hover:bg-green-50 group flex items-center px-2 py-3 text-sm font-medium">
                      <!-- Heroicon name: outline/users -->
                      
                      <span class="flex-1 font-bold uppercase pl-10 ">
                          Height-for-Age
                      </span>
              
                      <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                      
                    </a>
                </div>
              </div>
              <div class="space-y-1">
                 
                <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                <button   class="hover:bg-white text-white  hover:text-gray-700 border-b-2 group w-full flex items-end uppercase pl-2 pr-1 py-2 text-left  font-bold rounded-md focus:outline-none" aria-controls="sub-menu-1" aria-expanded="false">
                  <!-- Heroicon name: outline/users -->
               
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text mr-3 flex-shrink-0 h-6 w-6"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                 <span class="flex-1">
                    REPORTS
                  </span>
                  <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                </button>
                <!-- Expandable link section, show/hide based on state. -->
                
              </div>
            </nav>
      </div>
    </div>
  </div>