<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Halaman Login</title>
   <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-slate-200">
   <div class="flex flex-col md:flex-row mx-10 sm:mx-20 items-center relative justify-center min-h-screen">
      
      <div class="w-full md:w-1/2 lg:w-1/3 p-16 md:h-[65vh] bg-black bg-opacity-[0.45] relative md:order-2 shadow-2xl md:rounded-lg md:rounded-l-none flex flex-col gap-y-3 text-slate-100 overflow-hidden items-center justify-center text-center">
         <h1 class="text-3xl lg:text-4xl font-semibold font-poppins" style="text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.35)">Welcome To Login</h1>
         <h3 class="text-base drop-shadow-2xl shadow-black">Don't Have an account?</h3>
         <a class="px-5 py-1.5 bg-transparent lg:px-6 border rounded-full hover:bg-white/20 transition group" href="{{ route('register') }}">
            <div class="w-full h-full bg-[url('/assets/images/bg-login.jpg')] -z-10 left-0 top-0 absolute bg-cover bg-center group-hover:scale-110 transition duration-500"></div>
            Register
         </a>
      </div>

      <div class="w-full md:w-1/2 lg:w-1/3 p-5 bg-white shadow-2xl border md:rounded-lg md:rounded-r-none md:h-[65vh] md:flex md:flex-col md:justify-center">
         <h1 class="text-2xl font-poppins mb-2 font-light">Login</h1>
         <hr class="border mb-4 border-slate-200 border-t-0">
         <form action="{{ route('login') }}" method="post" >
            @csrf
            <div class="mb-4">
               <label for="name" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Email</label>
               <input type="text" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login @error('email') form-invalid @enderror" placeholder="Input Your Email" id="email" name="email" value="{{ old('email') }}">
               @error('email')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                     {{ $message }}
                  </p>
                  @enderror
               </div>
               <div class="mb-4">
                  <label for="password" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Password</label>
                  <input type="password" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login @error('password') form-invalid @enderror" placeholder="Input Your Password" id="password" name="password">
                  @error('password')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                     {{ $message }}
                     </p>
                  @enderror
            </div>
            <div class="md:mb-2 mb-4 flex justify-between items-center">
               <div class="flex items-center gap-x-1.5">
                  <input type="checkbox" class="border-gray-300 text-emerald-600 focus:ring-0" name="remember" id="remember">
                  <label for="remember" class="mb-0.5 text-sm text-slate-700 select-none">Remember Me</label>
               </div>
               <a href="{{ route('password.request') }}" class="hover:text-emerald-800 text-emerald-700 text-sm">
                  Forgot Password
               </a>
            </div>
            <button type="submit" class="w-1/4 place-self-end px-4 py-1.5 md:mt-5 bg-emerald-600/90  text-white hover:bg-emerald-700/90 focus:outline-none rounded transition duration-300">Login</button>
         </form>
         <a href="/" class="text-[13px] mt-6 flex items-center gap-x-1"><span>&larr;</span> Back To Home</a>
      </div>
   </div>
</body>
</html>