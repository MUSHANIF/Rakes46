<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <meta
         name="description"
         content="Rakes 46 is an independent organization managed for SMKN 46 Jakarta. They are dedicated to helping puskesmas and schools to get reports on student health easily, without wasting a lot of paper and in less time"
      />
      <title>Kesehatan</title>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
      <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
      <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}" />
   </head>
   <body>
      <section>
         <div class="container">@include('partials.navbar')</div>
      </section>

      <section class="relative pt-16 pb-10 bg-[#f1f6ff]" id="home">
         <div id="space" class="absolute z-[99] bottom-0"></div>
         <div class="container">
            <div class="relative justify-center w-full mt-20 md:flex md:gap-x-5">
               <div class="md:flex md:!w-1/3 mx-auto mb-5 md:mb-0 md:mx-0 md:order-2 z-[100] sm:scale-90">@include('svg.svg1')</div>
               <div class="flex flex-col md:!w-1/2 w-full gap-y-4 md:gap-y-3 justify-center header z-[100]">
                  <div class="inline-flex -mb-4">
                     <div class="font-semibold teks-diam text-[40px] lg:text-[60px] md:text-[45px]">Kesehatan</div>
                     <ul class="teks-gerak md:ml-2 lg:ml-[15px] ml-[10px] md:h-[80px] lg:h-[90px] h-[50px] overflow-hidden md:leading-[90px] lg:leading-[115px] leading-[50px]">
                        <li><span>Siswa</span></li>
                        <li><span>Siswi</span></li>
                        <li><span>Murid</span></li>
                     </ul>
                  </div>
                  <div class="collapse" id="collapseExample">
                     <p class="max-w-xl text-[13px] sm:text-sm md:-mt-1 font-poppins text-slate-700">
                        Rakes 46 adalah catatan kesehatan yang berisi lembar catatan kesehatan peserta didik di SMKN 46 JAKARTA dari hasil pelayanan kesehatan di sekolah, puskesmas/fasilitas kesehatan, yang diperlukan dalam memantau tumbuh kembang dan kesehatan peserta didik
                     </p>
                  </div>
                  <button
                     id="getStarted"
                     class="z-[100] w-full sm:w-1/3 md:w-1/2 lg:w-1/4 py-2 flex justify-center bg-indigo-500 rounded-3xl text-white hover:bg-indigo-600 focus:outline-none transition-all hover:scale-105 duration-[300ms]"
                     type="button"
                     data-bs-toggle="collapse"
                     data-bs-target="#collapseExample"
                     aria-expanded="false"
                     aria-controls="collapseExample"
                  >
                     More
                  </button>
               </div>
            </div>
         </div>
      </section>

      <section id="about">
         <div class="container my-16">
            <div class="items-center justify-center md:flex gap-x-16">
               <div class="flex flex-col max-w-lg md:w-1/2 text-start gap-y-2 md:order-2">
                  <h2 class="text-base lg:text-lg font-bold text-blue-700/90">About Us</h2>
                  <h1 class="text-xl font-bold text-indigo-800 lg:text-2xl">What, Why, and Who?</h1>
                  <p class="text-sm lg:text-base text-justify">
                     Rakes 46 merupakan sebuah website inovasi siswa siswa SMKN 46 Jakarta, yang mana website ini merupakan sebuah inovasi terbaru "paperless" dari Rapor Kesehatan. Di dalam bidang pendidikan, kesehatan tubuh merupakan salah satu hal yang sangat penting, terutama bagi para pelajar dalam menunjang pendidikan di sekolah. Dengan dibuatnya Rakes 46 ini, kami ingin menerapkan gaya hidup ramah lingkungan dengan memodernisasikan rapot kesehatan ini menjadi media elektronik yang mana tidak lagi menggunakan kertas yang nantinya akan dibukukan. Yang dimana nantinya kmai pihak sekolah dan juga orang tua dari siswa/i dapat memantau kesehatan murid/anaknya dengan mudah.
                  </p>
               </div>
               <div class="max-w-lg md:w-1/2 scale-125 lg:scale-100 text-end mt-14 sm:scale-110 sm:mt-0">@include('svg.svg2')</div>
            </div>
         </div>
      </section>

      <section id="faq">
         <div class="container my-20">
            <h1 class="text-xl font-bold text-center text-blue-700/80">FAQ</h1>

            <div class="mt-7 accordion" id="accordionExample">
               <div class="bg-white border border-gray-200 accordion-item">
                  <h2 class="mb-0 accordion-header" id="heading1">
                     <button
                        class="relative flex items-center w-full px-5 py-4 text-sm sm:text-base text-left text-gray-800 transition bg-white border-0 rounded-none accordion-button collapsed focus:outline-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse1"
                        aria-expanded="false"
                        aria-controls="collapse1"
                     >
                        Apa itu Rakes 46?
                     </button>
                  </h2>
                  <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                     <div class="p-7 accordion-body text-sm sm:text-base">
                        <strong>Rakes46</strong> adalah sebuah website kesehatan yang menyediakan layanan untuk rekam medis yang bisa digunakan bagi siswa/i di SMKN 46 Jakarta yang digunakan untuk laporan kepada Puskesmas setiap tahunnya.
                     </div>
                  </div>
               </div>

               <div class="bg-white border border-gray-200 accordion-item">
                  <h2 class="mb-0 accordion-header" id="heading2">
                     <button
                        class="relative flex items-center w-full px-5 py-4 text-sm sm:text-base text-left text-gray-800 transition bg-white border-0 rounded-none accordion-button collapsed focus:outline-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse2"
                        aria-expanded="false"
                        aria-controls="collapse2"
                     >
                        Bagaimana cara kerjanya website ini?
                     </button>
                  </h2>
                  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                     <div class="p-7 accordion-body text-sm sm:text-base">Siswa/i dapat mengisi form untuk merekam medis diri mereka sendiri yang nantinya akan dilaporkan kesehatannya kepada pihak sekolah maupun puskesmas.</div>
                  </div>
               </div>

               <div class="bg-white border border-gray-200 accordion-item">
                  <h2 class="mb-0 accordion-header" id="heading3">
                     <button
                        class="relative flex items-center w-full px-5 py-4 text-sm sm:text-base text-left text-gray-800 transition bg-white border-0 rounded-none accordion-button collapsed focus:outline-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse3"
                        aria-expanded="false"
                        aria-controls="collapse3"
                     >
                        Apakah siswa/i perlu registrasi akun atau akun sudah disediakan oleh pihak sekolah?
                     </button>
                  </h2>
                  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                     <div class="p-7 accordion-body text-sm sm:text-base">
                        Siswa/i wajib melakukan registrasi akun mereka sendiri pada waktu yang sudah ditentukan oleh pihak sekolah, sehingga tidak bisa sembarangan orang mendaftar di luar waktu yang sudah ditentukan
                     </div>
                  </div>
               </div>

               <div class="bg-white border border-gray-200 accordion-item">
                  <h2 class="mb-0 accordion-header" id="heading4">
                     <button
                        class="relative flex items-center w-full px-5 py-4 text-sm sm:text-base text-left text-gray-800 transition bg-white border-0 rounded-none accordion-button collapsed focus:outline-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse4"
                        aria-expanded="false"
                        aria-controls="collapse4"
                     >
                        Bagaimana kami bisa menggunakan website ini?
                     </button>
                  </h2>
                  <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                     <div class="p-7 accordion-body text-sm sm:text-base">
                        Pertama kamu melakukan register akun yang nantinya akan digunakan untuk merekam medis dirimu, lalu setelah selesai register kamu bisa langsung login ke akun yang telah kamu buat. Setelah masuk, kamu bisa mengisi biodata dirimu
                        sendiri beserta orang tuamu terlebih dahulu sebelum melakukan perekaman medis. Setelah selesai mengisi biodata kamu bisa langsung mengisi form rekam medis yang telah disediakan dalam halaman yang telah ditentukan, dan setelah
                        selesai mengisi form rekam medis tersebut kamu bisa langsung mendownload hasil yang telah terdata dan mengeprintnya untuk tanda bukti bahwa kamu telah selesai mengisinya.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <footer id="footer">
         <div class="w-full py-5 bg-neutral-800">
            <div class="flex items-center justify-center mb-4 gap-x-1.5">
               <a
                  href="https://www.instagram.com/smknegeri46jakarta/"
                  target="_blank"
                  class="w-8 h-8 sm:w-9 sm:h-9 rounded-full flex items-center justify-center border border-slate-200 hover:border-violet-700 hover:bg-gradient-to-tr from-yellow-300 via-rose-600 to-indigo-500 text-white"
               >
                  <svg role="img" class="fill-current w-4 sm:w-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <title>Instagram</title>
                     <path
                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                     />
                  </svg>
               </a>
               <a
                  href="https://smksedkijakarta.wordpress.com/kota/jakarta-timur/smk-negeri-46/"
                  target="_blank"
                  class="w-8 h-8 sm:w-9 sm:h-9 rounded-full flex items-center justify-center border border-slate-200 hover:border-sky-800 hover:bg-sky-800 text-white"
               >
                  <svg role="img" class="fill-current w-4 sm:w-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <title>WordPress</title>
                     <path
                        d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"
                     />
                  </svg>
               </a>
               <a href="https://smkn46jaktim.sch.id/sekolah/" target="_blank" class="w-8 h-8 sm:w-9 sm:h-9 rounded-full flex items-center justify-center border border-slate-200 hover:border-violet-300 hover:bg-violet-300 text-white">
                  <svg role="img" class="fill-current w-4 sm:w-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <title>Website</title>
                     <path
                        d="M12 0c-1.326 0-2.597.22-3.787.613 4.94-1.243 8.575 1.72 11.096 5.606 1.725 2.695 2.813 2.83 4.207 2.412A11.956 11.956 0 0012 0zM7.658 2.156c-1.644.019-3.295.775-4.931 2.207A11.967 11.967 0 000 12c.184-2.823 2.163-5.128 4.87-5.07 2.104.044 4.648 1.518 7.13 5.289 4.87 7.468 10.917 5.483 11.863 1.51.081-.566.137-1.14.137-1.729 0-.176-.02-.347-.027-.521-1.645 1.725-4.899 2.35-8.264-2.97-2.59-4.363-5.31-6.383-8.05-6.353zM3.33 13.236c-1.675.13-2.657 1.804-2.242 3.756A11.955 11.955 0 0012 24c4.215 0 7.898-2.149 10.037-5.412v-.043c-2.836 3.49-8.946 4.255-13.855-2.182-1.814-2.386-3.544-3.228-4.852-3.127Z"
                     />
                  </svg>
               </a>
            </div>
            <div class="flex items-center justify-center">
               <p class="text-slate-200 text-sm">Copyright &copy; 2022 <span class="text-blue-400">Rakes46</span>. All Right Reserved</p>
            </div>
         </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
      <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
      <script src="{{ asset('js/app.js') }}"></script>
   </body>
</html>
