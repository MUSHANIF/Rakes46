<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    {{-- bootstrapcss --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     {{-- style css --}}
     <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

    <section class=" bg-dark">
        <div class="container ">
          <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0 ">
                  <div class="col-xl-5 col-sm-6 d-none d-xl-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6 ">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Student registration form</h3>

                      <form action="{{ route('register') }}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1m">Name</label>
                                    <input type="text" id="form3Example1m" value="{{ old('name') }}" name="name" class="form-control form-control-lg @error('name')
                                    is-invalid
                                    @enderror" autofocus/>
                                   
                                    @error('name')
                                        <div class="text-danger text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <input id="level" type="hidden" name="level" value="1" >
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example97">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="form3Example97" class="form-control form-control-lg @error('email')
                            is-invalid
                            @enderror" />
                            @error('email')
                                <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Password </label>
                            <input type="password" name="password"  class="form-control form-control-lg @error('password')
                                is-invalid
                            @enderror" />
                            @error('password')
                                <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">Confirmation Password</label>
                            <input type="password" name="password_confirmation"  class="form-control form-control-lg @error('password_confirmation')
                            is-invalid
                            @enderror" />
                            @error('password_confirmation')
                                <div class="text-danger text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <button type="submit" class="btn btn-success">Create Account</button> --}}

                        <p>You have an account <a href="{{ route('login') }}" class="justify-content-start ">Login</a></p>

                        <div class="d-flex justify-content-end pt-3 align-items-center">
                            <button type="button" class="btn btn-light btn-lg">Reset all</button>
                            <button type="submit" class="btn btn-warning btn-lg ms-2">Create Data</button>
                        </div>
                     </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- bootstrap js --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Halaman Register</title>
   <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-slate-300">
   <div class="flex flex-col md:flex-row mx-10 sm:mx-20 items-center justify-center min-h-screen">
      
      <div class="w-full md:w-1/2 lg:w-1/3 p-10 md:h-[60vh] bg-black bg-opacity-[0.45] relative shadow-2xl md:rounded-lg md:rounded-r-none flex flex-col gap-y-3 text-slate-100 overflow-hidden items-center justify-center text-center">
         <h1 class="text-3xl lg:text-[34px] font-semibold font-poppins" style="text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.35)">Welcome To Register</h1>
         <h3 class="text-base drop-shadow-2xl shadow-black">Already Have an account?</h3>
         <a class="px-5 py-1.5 bg-transparent lg:px-7 border rounded-full hover:bg-white/20 transition group text-[17px]" href="{{ route('login') }}">
            <div class="w-full h-full bg-[url('/img/bg-register.jpg')] -z-10 left-0 top-0 absolute bg-cover bg-center group-hover:scale-100 scale-110 transition duration-500"></div>
            Login
         </a>
      </div>

      <div class="w-full md:w-1/2 lg:w-1/3 p-5 bg-white shadow-2xl border md:rounded-lg md:rounded-l-none md:h-[60vh] md:flex md:flex-col md:justify-center">
         <h1 class="text-2xl font-poppins mb-2 font-light">Register</h1>
         <hr class="border mb-4 border-slate-200 border-t-0">
         <form action="/login" method="post">
            @csrf
            <div class="mb-4">
               <label for="name" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Name</label>
               <input type="text" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login @error('name') form-invalid @enderror" placeholder="Input Your Username" id="name" name="name">
               @error('name')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                     {{ $message }}
                  </p>
                  @enderror
            </div>
            <div class="mb-4">
               <label for="email" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Email</label>
               <input type="email" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login @error('name') form-invalid @enderror" placeholder="Input Your Email" id="email" name="email">
               @error('email')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                     {{ $message }}
                  </p>
                  @enderror
            </div>
            <div class="md:mb-2 mb-4 ">
               <label for="password" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Password</label>
               <input type="password" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login" placeholder="Input Your Password" id="password" name="password">
               @error('password')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                  {{ $message }}
                  </p>
               @enderror
            </div>
            <button type="submit" class="px-4 py-1.5 md:mt-5 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none rounded transition duration-300">Register</button>
         </form>
         <a href="/" class="text-[13px] mt-6 flex items-center gap-x-1"><span>&larr;</span> Back To Home</a>
      </div>
   </div>
</body>
</html>