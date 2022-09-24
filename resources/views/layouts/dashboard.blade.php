<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
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

      <!-- Custom fonts for this template-->
      @yield('head')
      <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
      <link rel="icon" href="{{ asset('img/favicon.svg')}}" />
      <link href="/assets/css/style.css" rel="stylesheet" />
      
      {{-- <link href="/css/tailwind.output.css" rel="stylesheet" /> --}}
     
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
      <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
      <link href="/assets/modules/boxicons/css/boxicons.min.css" rel="stylesheet" />
      <link href="/assets/modules/bootstrap-5.1.3/css/bootstrap.css" rel="stylesheet" />
      <link href="/assets/modules/fontawesome6.1.1/css/all.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
      <script src="https://cdn.statically.io/gh/devanka761/notipin/v1.24.49/all.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
               content: attr(data-label);
               position: absolute;
               left: 0;
               width: 50%;
               padding-left: 15px;
               font-size: 15px;
               font-weight: bold;
               text-align: left;
            }
         }

         @media (max-width: 500px) {
            .table thead {
               display: none;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
               display: block;
               width: 100%;
            }

            .table tr {
               margin-bottom: 15px;
            }

            .table td {
               text-align: right;
               position: relative;
            }

            .table td::before {
               content: attr(data-label);
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

         .form-control {
         }

         @media (max-width: 500px) {
            .subtitle a {
               font-size: 15px;
               padding-top: 3px;
            }

            .form-control {
            }
         }

         @media (max-width: 768px) {
            .subtitle a {
               padding-top: 1px;
            }

            .form-control {
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

         label{
            color: black;
            margin-top: 10px;
        }
        .form-label{
            color: black;
            margin-top: 10px;
        }

         input[type="radio"]:checked {
            background-color: #3b82f6;
            border-color: #3b82f6;
         }

         .btn-detail:hover {
            opacity: .9;
            color: white;
         }

         .next-jawaban:hover {
            color: #035edd !important;
         }
      </style>
      <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
   </head>

   <body id="page-top">
      @include('sweetalert::alert')
      <div class="topbar transition">
         <div class="bars">
            <button type="button" class="btn1 transition" id="sidebar-toggle">
               
               <i class="fa fa-bars"></i>
            </button>
         </div>
         <div class="search">@yield('search')</div>
         <div class="menu">
            <ul>
               <li class="nav-item dropdown">
                  <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <h5 class="name ">Selamat Datang, {{ auth()->user()->name }}</h5>
                     <img src="{{ asset('assets/images/avatar-1.png') }}" class="foto" alt="Profil" />
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item hover:!text-[#081A51] text-white" href="/"><i class="bi bi-arrow-90deg-left"></i> <span>Kembali ke Home</span></a>
                     <hr class="dropdown-divider bg-white" />
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                     <a
                        class="dropdown-item hover:!text-[#081A51] text-white"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"
                        ><i class="bi bi-box-arrow-in-left"></i> <span>Keluar</span></a
                     >
                  </ul>
               </li>
            </ul>
         </div>
      </div>

      @include('partials.dashboard-nav')
      <div class="sidebar-overlay"></div>
      <div class="content-start transition">
         @if (Auth::user()->level == '5')
         <div class="button">
            @yield('button')
         </div> 
         @endif
              
         <div class="container-fluid dashboard">@yield('isi')</div>
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
                     <i class="fa fa-heart"></i> by
                     <a href="" class="author-footer">Rakes46</a>
                  </span>
               </p>
            </div>
         </div>
      </footer>

      <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
      <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="{{ asset('/assets/js/script.js')}}"></script>

      <script>
         @foreach($errors->all() as $error)
             Notipin.Alert({msg: " {{ $error }} "});
         @endforeach
         feather.replace({ "aria-hidden": "true" });
      </script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
         function showbutton(){
         Swal.fire({
         title: 'Info!',
         text: "Fitur ini sedang dalam update kami!",
         icon: 'info',
         
         confirmButtonColor: '#3085d6',
      
         confirmButtonText: 'Dimengerti'
         })
      }
      
      $('.reset_data').click(function() {
         var form =  $(this).closest("form");
         Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, reset it!'
            }).then((result) => {
            if (result.isConfirmed) {
               Swal.fire(
                  'Deleted!',
                  'The data has been deleted.',
                  'success'
               )
               setTimeout(() => {
                  form.submit()
               }, 1000);
            }
            })
      });

      </script>
   </body>
</html>
