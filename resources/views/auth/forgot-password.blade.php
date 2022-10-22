
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset password | Rakes46</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                    <div class="card-header">{{ __('Kirim pembaruan password') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan pembaruan password baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif
    
                        {{ __('Tulis email anda ,kami akan mengirimkan form untuk mereset password anda') }}
                    
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                    
                            <!-- Email Address -->
                            <div class="form-group mt-4">
                               
                                <input type="email" class="form-control" id="LocID" name="email" required>
                            </div>
                            <button style="background-color: #3b82f6; border: unset" type="submit" class="btn btn-primary mt-4">Kirim </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>