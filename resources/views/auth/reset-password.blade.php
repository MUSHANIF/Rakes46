{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="c" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset password | Rakes46</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.statically.io/gh/devanka761/notipin/v1.24.49/all.js"></script>
  </head>
  <style>
    .card{
        margin-top: 100px;
    }
  </style>
  <body>
    <div class="container">
        <div class="row d-flex justify-content-center align-middle ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset password anda') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Berhasil mereset password anda') }}
                        </div>
                    @endif
    
                        
                    
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
            
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
            
                            <!-- Email Address -->
                            <div class="form-group mt-4">

                                <input type="hidden" class="form-control" id="email" name="email" value="{{ old('email', $request->email) }}"   />
                            </div>
                            <div class="form-group mt-4">
                                <label for="password">Password Baru</label>
                                 <input type="password" class="form-control" id="password" name="password" required autofocus />
                             </div>
                             <div class="form-group mt-4">
                                <label for="password_confirmation">Konfirmasi Password Baru</label>
                                 <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  required  />
                             </div>
                            <button style="background-color: #3b82f6; border: unset" type="submit" class="btn btn-primary mt-4">Kirim </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
         @foreach($errors->all() as $error)
             Notipin.Alert({msg: " {{ $error }} "});
         @endforeach
         feather.replace({ "aria-hidden": "true" });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
