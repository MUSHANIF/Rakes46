<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-slate-200">
    <div class="relative mx-10 flex min-h-screen flex-col items-center justify-center sm:mx-20 md:flex-row">

        <div
            class="relative flex w-full flex-col items-center justify-center gap-y-3 overflow-hidden bg-black bg-opacity-[0.45] p-16 text-center text-slate-100 shadow-2xl md:order-2 md:h-[65vh] md:w-1/2 md:rounded-lg md:rounded-l-none lg:w-1/3">
            <h1 class="font-poppins text-3xl font-semibold lg:text-4xl"
                style="text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.35)">Welcome To Login</h1>
            <h3 class="text-base shadow-black drop-shadow-2xl">Don't Have an account?</h3>
            <a class="group rounded-full border bg-transparent px-5 py-1.5 transition hover:bg-white/20 lg:px-6"
                href="{{ route('register') }}">
                <div
                    class="absolute left-0 top-0 -z-10 h-full w-full bg-[url('/assets/images/bg-login.jpg')] bg-cover bg-center transition duration-500 group-hover:scale-110">
                </div>
                Register
            </a>
        </div>

        <div
            class="w-full border bg-white p-5 shadow-2xl md:flex md:h-[65vh] md:w-1/2 md:flex-col md:justify-center md:rounded-lg md:rounded-r-none lg:w-1/3">
            <h1 class="mb-2 font-poppins text-2xl font-light">Login</h1>
            <hr class="mb-4 border border-t-0 border-slate-200">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name"
                        class="mb-2 block font-poppins text-sm font-semibold text-slate-700">Email</label>
                    <input autofocus type="text"
                        class="form-normal-login @error('email') form-invalid @enderror w-full rounded-lg px-4 py-2 text-slate-800 placeholder:text-sm placeholder:text-slate-600/50 focus:outline-none focus:ring"
                        placeholder="Input Your Email" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password"
                        class="mb-2 block font-poppins text-sm font-semibold text-slate-700">Password</label>
                    <input type="password"
                        class="form-normal-login @error('password') form-invalid @enderror w-full rounded-lg px-4 py-2 text-slate-800 placeholder:text-sm placeholder:text-slate-600/50 focus:outline-none focus:ring"
                        placeholder="Input Your Password" id="password" name="password">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-4 flex items-center justify-between md:mb-2">
                    <div class="flex items-center gap-x-1.5">
                        <input type="checkbox" class="border-gray-300 text-emerald-600 focus:ring-0" name="remember"
                            id="remember">
                        <label for="remember" class="mb-0.5 select-none text-sm text-slate-700">Remember Me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-sm text-emerald-700 hover:text-emerald-800">
                        Forgot Password
                    </a>
                </div>
                <button type="submit"
                    class="w-1/4 place-self-end rounded bg-emerald-600/90 px-4 py-1.5 text-white transition duration-300 hover:bg-emerald-700/90 focus:outline-none md:mt-5">Login</button>
            </form>
            <a href="/" class="mt-6 flex items-center gap-x-1 text-[13px]"><span>&larr;</span> Back To Home</a>
        </div>
    </div>
</body>

</html>
