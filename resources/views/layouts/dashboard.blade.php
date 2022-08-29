<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <!-- line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />

    {{-- <style>
      * {
          box-sizing: border-box;
       
      }
     /* body{
      background-color: #f1f5f9;;
     } */
      .table {
          width: 100%;
          border-collapse: collapse;
          
      }

      .table td,
      .table th {
          text-align: center;
          background-color: #2B4865;
          color: white;
      }

      .table th {
          background-color: #256D85;
          color: black;
      }

      .table tbody:nth-child(even) {
          background-color: #2B4865;
          color: white;
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
              background-color: #2B4865;
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
          color: white !important;
      }

      .dropdown > .collapse > li > .dropdown-item:hover {
          background-color: #277994;
      }

      body{ margin:0;} canvas{ display: block; vertical-align: bottom; } 
    </style> --}}
    <title>Hello, world!</title>

  </head>
  <body>
    @include('partials.dashboard-nav')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        {{-- @yield('search') --}}
        @yield('button')
    </div>
    <div class="table-responsive">
        @yield('isi')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
   <!-- Bootstrap core JavaScript-->
   <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
   {{-- <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
   {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
   {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
  </body>
</html>