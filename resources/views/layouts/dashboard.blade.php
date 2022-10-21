<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

      @can('superadmin')
      <title>Superadmin Dashboard</title>
      @elsecan('kepala_sekolah')
      <title>Kepala Sekolah Dashboard</title>
      @elsecan('puskesmas')  
      <title>Puskesmas Dashboard</title>
      @elsecan('siswa')
      <title>Siswa Dashboard</title>
      @elsecan('wali_kelas')
      <title>Wali Dashboard</title>
      @endcan

      @yield('head')
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
      <link rel="icon" href="{{ asset('img/favicon.svg')}}" />
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
      
      {{-- <link href="/css/tailwind.output.css" rel="stylesheet" /> --}}
     
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
      <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link href="/assets/modules/bootstrap-5.1.3/css/bootstrap.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
      <style>
         a {
            text-decoration: none;
            color: #3b82f6;
         }
      
         .form-group label {
            color: black;
         }
      
         input::-webkit-outer-spin-button,
         input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
         }
      
         input[type="number"] {
            -moz-appearance: textfield;
         }
      
         .table {
            width: 100%;
            border-collapse: collapse;
         }
      
         .table td,
         .table th {
            text-align: center;
            background-color: #f1f6ff;
            color: black;
         }
      
         .table th {
            background-color: #256d85;
            color: black;
         }
      
         .table tbody:nth-child(even) {
            background-color: white;
            color: black;
         }
      
         /* Ini Responsivenya */
         @media (max-width: 768px) {
            .table thead {
               display: none;
            }
      
            .table,
            .table tbody,
            .table tr,
            .table td {
               display: block;
               width: 100%;
               background-color: white;
            }
      
            .table tr {
               margin-bottom: 15px;
            }
      
            .table td {
               text-align: right;
               position: relative;
            }
      
            .table td::before {
               position: absolute;
               left: 0;
               width: 50%;
               padding-left: 15px;
               font-size: 15px;
               font-weight: bold;
               text-align: left;
            }
         }
      
         /* End Responsive */
      
         .title {
            color: #adadad;
            text-align: center;
         }
      
         .subtitle a {
            color: white;
            text-decoration: none;
            float: left;
            padding-top: 1px;
         }
      
         .subtitle a:hover {
            color: #dbd7e6;
            text-decoration: none;
         }
      
         @media (max-width: 500px) {
            .subtitle a {
               font-size: 15px;
               padding-top: 3px;
            }
         }
      
         @media (max-width: 768px) {
            .subtitle a {
               padding-top: 1px;
            }
         }
      
         .btn {
            background-color: #256d85;
            color: white;
         }
      
         .dropdown > .collapse > li > .dropdown-item {
            color: black !important;
         }
      
         .dropdown > .collapse > li > .dropdown-item:hover {
            background-color: #277994;
         }
      
         label {
            color: black;
            margin-top: 10px;
         }
         .form-label {
            color: black;
            margin-top: 10px;
         }
      
         input[type="radio"]:checked {
            background-color: #3b82f6;
            border-color: #3b82f6;
         }
      
         .btn-detail:hover {
            opacity: 0.9;
            color: white;
         }
      </style>      
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://cdn.statically.io/gh/devanka761/notipin/v1.24.49/all.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   </head>

   <body id="page-top">
      @include('sweetalert::alert')

      <div class="h-[75px] ml-8 sm:ml-16 md2:ml-[310px] z-[999] flex mt-6 justify-between">

         <div class="flex items-center">
            <div class="flex items-center h-[80px] md2:hidden">
               <button type="button" class="transition text-[#5a5c69] block shadow-none" id="sidebar-toggle">
                  <i class="fa fa-bars text-[28px]"></i>
               </button>
            </div>

            <div class="flex items-center h-[75px] ml-5 md2:ml-0">@yield('search')</div>
         </div>

         <div class="flex items-center h-[75px] py-0 px-10 float-left">
            <div class="p-0 m-0">
               <button type="button" class="inline-flex justify-center w-full items-center font-medium focus:outline-none text-slate-700 md:text-base text-sm" id="dropdownDefault" data-dropdown-toggle="dropdownDivider">
                  <span class="hidden md:flex items-center font-semibold">Selamat Datang, {{ Auth::user()->name }}</span>
                  <img src="{{ asset('assets/images/avatar-1.png') }}" class="w-[50px] rounded-full shadow-none border-2 border-[#d9dadb] ml-1" alt="Profil" />
               </button>
               
               <div id="dropdownDivider" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-300/80 shadow dark:bg-gray-700 dark:divide-gray-600">
                  <div class="py-3 px-4 text-sm font-semibold text-gray-900 dark:text-white md:hidden">
                     <div class="flex items-center gap-x-4"><i class='bi bi-person-circle'></i> Selamat Datang, {{ Auth::user()->name }}</div>
                  </div>
                  <div class="py-1">
                    <a href="/" class="flex gap-x-4 items-center py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><i class="bi bi-arrow-90deg-left"></i> Kembali ke Home</a>
                  </div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
                  <div class="py-1">
                    <a onclick="event.preventDefault(); $('#logout-form').submit();" href="#" class="flex gap-x-4 items-center py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><i class="bi bi-box-arrow-in-left"></i>  Keluar</a>
                  </div>
              </div>
               
            </div>
         </div>
      </div>

      @include('partials.dashboard-nav')
      <div class="sidebar-overlay"></div>

      <div class="min-h-screen pt-12 mx-0 md2:pl-[310px] md2:pr-16">
         @if (Auth::user()->level == '5')
         <div class="text-right container">
            @yield('button')
         </div> 
         @endif
              
         <div class="container">@yield('isi')</div>
      </div>

      <footer>
         <div class="footer">
            <div class="float-start">
               <p>2022 &copy; Rakes46</p>
            </div>
            <div class="float-end">
               <p>
                  Created with
                  <span class="text-danger">
                     <i class="fa fa-heart"></i> <span style="margin-right: 3px">by</span>
                     <a href="" class="author-footer">Rakes46</a>
                  </span>
               </p>
            </div>
         </div>
      </footer>

      <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>  
      <script src="{{ asset('/assets/js/script.js')}}"></script>

      <script>
         @foreach($errors->all() as $error)
             Notipin.Alert({msg: " {{ $error }} "});
         @endforeach
         feather.replace({ "aria-hidden": "true" });

         function showbutton(){
            Swal.fire({
            title: 'Info!',
            text: "Fitur ini sedang dalam update kami!",
            icon: 'info',
            
            confirmButtonColor: '#3085d6',
         
            confirmButtonText: 'Dimengerti'
            })
         }
      </script>
   </body>
</html>
