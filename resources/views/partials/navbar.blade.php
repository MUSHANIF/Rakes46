<nav id="navbar"
    class="fixed top-0 left-0 z-[101] w-full border-b border-gray-200 bg-transparent px-2 py-2.5 transition-all duration-700 sm:px-4 md:border-none">
    <div class="container mx-auto flex flex-wrap justify-between">
        <a href="/" class="flex items-center">
            {{-- <img
               src="https://flowbite.com/docs/images/logo.svg"
               class="h-6 mr-3 sm:h-9"
               alt="Flowbite Logo"
           /> --}}
            <span class="self-center whitespace-nowrap font-poppins text-xl font-semibold md:text-2xl"><img
                    src="{{ asset('assets/images/logo.png') }}" alt="" style="width: 50px"></span>
        </a>

        <div class="hidden w-full md:block md:w-auto">
            <ul
                class="mt-0 flex flex-row items-center space-x-5 rounded-lg border-none bg-transparent p-4 text-base font-medium">
                <li>
                    <a href="#home" id="navHome" class="active navscroll block py-2 pl-3 pr-4"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#about" id="navAbout" class="not-active navscroll block py-2 pl-3 pr-4">About</a>
                </li>

                @can('superadmin')
                    <div class="relative">
                        <div>
                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-md font-medium focus:outline-none"
                                id="dropdownDefault" data-dropdown-toggle="dropdown">
                                Selamat Datang, <span class="ml-1 font-semibold">{{ Auth::user()->name }}</span>
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 hidden w-56 divide-y divide-gray-300 rounded-md border border-slate-500/30 bg-white shadow-lg focus:outline-none"
                            role="menu" id="dropdown">
                            <ul class="py-1" role="none" aria-labelledby="dropdownDefault">
                                <li><a href="/dashboard"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <form method="POST" action="/logout" role="none">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elsecan('puskesmas')
                    <div class="relative">
                        <div>
                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-md font-medium focus:outline-none"
                                id="dropdownDefault" data-dropdown-toggle="dropdown">
                                Selamat Datang, <span class="ml-1 font-semibold">{{ Auth::user()->name }}</span>
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 hidden w-56 divide-y divide-gray-300 rounded-md border border-slate-500/30 bg-white shadow-lg focus:outline-none"
                            role="menu" id="dropdown">
                            <ul class="py-1" role="none" aria-labelledby="dropdownDefault">
                                <li><a href="/dashboardpuskesmas"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <form method="POST" action="/logout" role="none">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elsecan('kepala_sekolah')
                    <div class="relative">
                        <div>
                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-md font-medium focus:outline-none"
                                id="dropdownDefault" data-dropdown-toggle="dropdown">
                                Selamat Datang, <span class="ml-1 font-semibold">{{ Auth::user()->name }}</span>
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 hidden w-56 divide-y divide-gray-300 rounded-md border border-slate-500/30 bg-white shadow-lg focus:outline-none"
                            role="menu" id="dropdown">
                            <ul class="py-1" role="none" aria-labelledby="dropdownDefault">
                                <li><a href="/dashboardkepala"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <form method="POST" action="/logout" role="none">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elsecan('wali_kelas')
                    <div class="relative">
                        <div>
                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-md font-medium focus:outline-none"
                                id="dropdownDefault" data-dropdown-toggle="dropdown">
                                Selamat Datang, <span class="ml-1 font-semibold">{{ Auth::user()->name }}</span>
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 hidden w-56 divide-y divide-gray-300 rounded-md border border-slate-500/30 bg-white shadow-lg focus:outline-none"
                            role="menu" id="dropdown">
                            <ul class="py-1" role="none" aria-labelledby="dropdownDefault">
                                <li><a href="/dashboardwali"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <form method="POST" action="/logout" role="none">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elsecan('siswa')
                    <div class="relative">
                        <div>
                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-md font-medium focus:outline-none"
                                id="dropdownDefault" data-dropdown-toggle="dropdown">
                                Selamat Datang, <span class="ml-1 font-semibold">{{ Auth::user()->name }}</span>
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 hidden w-56 divide-y divide-gray-300 rounded-md border border-slate-500/30 bg-white shadow-lg focus:outline-none"
                            role="menu" id="dropdown">
                            <ul class="py-1" role="none" aria-labelledby="dropdownDefault">
                                <li><a href="/siswaid"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Form</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <form method="POST" action="/logout" role="none">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <li>
                        <a href="/login"
                            class="flex items-center justify-center rounded-full border-0 bg-blue-600 py-1 px-2.5 text-white hover:bg-blue-700">Login</a>
                    </li>
                @endcan
            </ul>
        </div>

        <div class="flex justify-center md:hidden">
            <div class="relative">
                <button
                    class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                    aria-label="hamburgerNavbar">
                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <ul class="dropdown-menu absolute z-50 float-left m-0 mt-1 hidden w-40 min-w-max list-none rounded-lg border-2 bg-white bg-clip-padding py-2 px-2 text-left text-base shadow-lg"
                    aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="navscroll block w-full bg-transparent px-4 py-2 text-base font-normal text-gray-700 hover:bg-gray-100"
                            href="#home">Home</a>
                    </li>
                    <li>
                        <a class="navscroll block w-full bg-transparent px-4 py-2 text-base font-normal text-gray-700 hover:bg-gray-100"
                            href="#about">About</a>
                    </li>
                    <hr class="my-2 h-0 border border-t-0 border-solid border-gray-700 opacity-25" />
                    <li>
                        <a href="/login"
                            class="flex items-center justify-center rounded-2xl bg-blue-600 py-0.5 text-white hover:bg-blue-700">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
