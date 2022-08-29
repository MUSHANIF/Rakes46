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
      
      <div class="w-full md:w-1/2 lg:w-1/3 p-10 md:h-[75vh] bg-black bg-opacity-[0.45] relative shadow-2xl md:rounded-lg md:rounded-r-none flex flex-col gap-y-3 text-slate-100 overflow-hidden items-center justify-center text-center">
         <h1 class="text-3xl lg:text-[34px] font-semibold font-poppins" style="text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.35)">Welcome To Register</h1>
         <h3 class="text-base drop-shadow-2xl shadow-black">Already Have an account?</h3>
         <a class="px-5 py-1.5 bg-transparent lg:px-7 border rounded-full hover:bg-white/20 transition group text-[17px]" href="{{ route('login') }}">
            <div class="w-full h-full bg-[url('/assets/images/bg-register.jpg')] -z-10 left-0 top-0 absolute bg-cover bg-center group-hover:scale-100 scale-110 transition duration-500"></div>
            Login
         </a>
      </div>

      <div class="w-full md:w-1/2 lg:w-1/3 p-5 bg-white shadow-2xl border md:rounded-lg md:rounded-l-none md:h-[75vh] md:flex md:flex-col md:justify-center">
         <h1 class="text-2xl font-poppins mb-2 font-light">Register</h1>
         <hr class="border mb-4 border-slate-200 border-t-0">
         <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
               <label for="name" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Name</label>
               <input type="text" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login @error('name') form-invalid @enderror" placeholder="Input Your Username" id="name" name="name" value="{{ old('name') }}">
               @error('name')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                     {{ $message }}
                  </p>
                  @enderror
            </div>
            <div class="mb-4">
               <label for="email" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Email</label>
               <input type="email" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login @error('email') form-invalid @enderror" placeholder="Input Your Email" id="email" name="email" value="{{ old('email') }}">
               @error('email')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                     {{ $message }}
                  </p>
                  @enderror
            </div>
            <div class="md:mb-2 mb-4 ">
               <label for="password" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Password</label>
               <input type="password" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login @error('password') form-invalid @enderror" placeholder="Input Your Password" id="password" name="password">
               @error('password')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                  {{ $message }}
                  </p>
               @enderror
            </div>
            <div class="md:mb-2 mb-4 ">
               <label for="confirm_password" class="block mb-2 font-poppins text-sm text-slate-700 font-semibold">Password</label>
               <input type="password" class="w-full px-4 py-2 rounded-lg focus:outline-none placeholder:text-slate-600/50 placeholder:text-sm text-slate-800 focus:ring form-normal-login @error('password_confirmation') form-invalid @enderror" placeholder="Input Your Confirm Password" id="confirm_password" name="password_confirmation">
               @error('password_confirmation')
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