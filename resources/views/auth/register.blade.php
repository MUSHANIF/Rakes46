<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                            {{-- <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1n">Last name</label>
                                </div>
                            </div> --}}
                        </div>

                        {{-- <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1m1">Mother's name</label>
                            </div>
                            </div>
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1n1">Father's name</label>
                            </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example8" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example8">Address</label>
                        </div>

                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                            <h6 class="mb-0 me-4">Gender: </h6>

                            <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                value="option1" />
                            <label class="form-check-label" for="femaleGender">Female</label>
                            </div>

                            <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                value="option2" />
                            <label class="form-check-label" for="maleGender">Male</label>
                            </div>

                            <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                value="option3" />
                            <label class="form-check-label" for="otherGender">Other</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">

                            <select class="select">
                                <option value="1">State</option>
                                <option value="2">Option 1</option>
                                <option value="3">Option 2</option>
                                <option value="4">Option 3</option>
                            </select>

                            </div>
                            <div class="col-md-6 mb-4">

                            <select class="select">
                                <option value="1">City</option>
                                <option value="2">Option 1</option>
                                <option value="3">Option 2</option>
                                <option value="4">Option 3</option>
                            </select>

                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example9" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example9">DOB</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example90" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example90">Pincode</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example99" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example99">Course</label>
                        </div> --}}

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
