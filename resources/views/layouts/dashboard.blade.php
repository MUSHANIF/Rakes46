<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin dahsboard</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="icon" href="{{ asset('img/favicon.svg')}}">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/css/tailwind.output.css" rel="stylesheet">
     <link href="/assets/modules/boxicons/css/boxicons.min.css" rel="stylesheet">
     <link href="/assets/modules/bootstrap-5.1.3/css/bootstrap.css" rel="stylesheet">
     <link href="/assets/modules/fontawesome6.1.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://cdn.statically.io/gh/devanka761/notipin/v1.24.49/all.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style>
        a {
	text-decoration: none;
	color: #3B82F6;
}
    </style>
    {{-- <style>
        * {
            box-sizing: border-box;
         
        }
       body{
        background-color: #2B4865;
       }
      
       
      </style>  --}}
      <style>
          .table {
            width: 100%;
            border-collapse: collapse;
            
        }
  
        .table td,
        .table th {
            text-align: center;
            background-color: #F1F6FF;
            color: black;
        }
  
        .table th {
            background-color: #256D85;
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
                background-color:white;
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
            background-color: #256D85;
            color: white
        }

        .dropdown > .collapse > li > .dropdown-item {
            color: black !important;
        }

        .dropdown > .collapse > li > .dropdown-item:hover {
            background-color: #277994;
        }


        .form-group label{
            color: black;
        }
      </style>
      <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body id="page-top" >
    

    <div class="topbar transition">
       
    
        <div class="bars">
           
            <button type="button" class="btn1 transition" id="sidebar-toggle">
                <i class="fa fa-bars"></i>
            </button>
           
        </div>
        <div class="search">
            @yield('search')
        </div>
            <div class="menu">
               
                <ul>
                    
                 
                      <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="assets/images/avatar-1.png" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="/"><i class="bi bi-arrow-90deg-left"></i> <span>Kembali ke Home</span></a>
                            <hr class="dropdown-divider">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                              </form>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-in-left"></i> <span>Keluar</span></a>
                        </ul>
                      </li>
                </ul>
            </div>
        </div>
    
        @include('partials.dashboard-nav')
        <div class="sidebar-overlay"></div>
    
      
    
    
        <!--Content Start-->
        <div class="content-start transition">
            <div class="container-fluid dashboard">
                
    @yield('isi')
                    
               </div>
            </div>
        </div>
    
    
        <!-- Footer -->				
        <footer>
            <div class="footer">
                <div class="float-start">
                    <p>2022 &copy; Rakes46</p>
                </div>
                    <div class="float-end">
                        <p>Crafted with 
                            <span class="text-danger">
                                <i class="fa fa-heart"></i> by 
                                <a href="" class="author-footer">Rakes46</a>
                            </span> 
                        </p>
                </div>
            </div>
        </footer>
    
   

   
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    <script src="{{ asset('/assets/js/script.js')}}"></script>
   
    
  
    <script>
        @foreach($errors->all() as $error)
            Notipin.Alert({msg: " {{ $error }} "});
        @endforeach
    </script>
</body>

</html>