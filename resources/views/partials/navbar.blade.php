<nav id="navbar" class="bg-transparent px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-[101] top-0 left-0 border-b md:border-none border-gray-200 dark:border-gray-600 transition-all duration-700">
   <div class="container flex flex-wrap justify-between mx-auto">
       <a href="/" class="flex items-center">
           {{-- <img
               src="https://flowbite.com/docs/images/logo.svg"
               class="h-6 mr-3 sm:h-9"
               alt="Flowbite Logo"
           /> --}}
           <span
               class="self-center text-xl font-semibold md:text-2xl font-poppins whitespace-nowrap dark:text-white"
               >Rakes46</span
           >
       </a>

       <div class="hidden w-full md:block md:w-auto">
           <ul class="flex flex-row items-center p-4 mt-0 space-x-5 text-base font-medium bg-transparent border-none rounded-lg dark:bg-gray-900 dark:border-gray-700">
               <li>
                 <a href="#home" id="navHome" class="block py-2 pl-3 pr-4 active navscroll" aria-current="page">Home</a>
               </li>
               <li>
                 <a href="#about" id="navAbout" class="block py-2 pl-3 pr-4 not-active navscroll">About</a>
               </li>
               <li>
                   <a href="/login" class="bg-blue-600 text-white flex justify-center items-center rounded-full hover:bg-blue-700 border-0 py-1 px-2.5 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-transparent">Login</a>
               </li>
           </ul>
       </div>

       <div class="flex justify-center md:hidden">
           <div class="relative">
               <button
                   class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                   type="button"
                   id="dropdownMenuButton1"
                   data-bs-toggle="dropdown"
                   aria-expanded="false"
                   aria-label="hamburgerNavbar"
               >
                   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                   </svg>
               </button>
           
               <ul class="dropdown-menu min-w-max absolute w-40 bg-white border-2 text-base z-50 float-left py-2 px-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                <li>
                   <a class="block w-full px-4 py-2 text-base font-normal text-gray-700 bg-transparent hover:bg-gray-100 navscroll" href="#home">Home</a>
                </li>
                <li>
                   <a class="block w-full px-4 py-2 text-base font-normal text-gray-700 bg-transparent hover:bg-gray-100 navscroll" href="#about">About</a>
                </li>
                <hr class="h-0 my-2 border border-t-0 border-gray-700 border-solid opacity-25" />
                <li>
                   <a href="/login" class="py-0.5 bg-blue-600 text-white flex justify-center items-center rounded-2xl hover:bg-blue-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Login</a>
                </li>
             </ul>             
           </div>
        </div>
   </div>
</nav>