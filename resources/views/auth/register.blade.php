<html lang="en">

<head>
    <title>Register-Pustik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('login-form') }}/css/style.css">

</head>

<body>
    <section class="ftco-section" :status="session('status')">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Selamat Datang Di Pustik</h2>
                                <p>Sudah Mempunyai Akun ?</p>
                                <a href="{{ route('login') }}" class="btn btn-white btn-outline-white">Sign In</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('register') }}" class="signin-form">
                                @csrf

                                {{-- NAME --}}
                                <div class="form-group mb-3">
                                    <label class="label" :value="__('Name')" for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        :value="old('name')" required autofocus autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                {{-- EMAIL --}}
                                <div class="form-group mb-3">
                                    <label class="label" :value="__('Email')" for="email">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        :value="old('email')" required autofocus autocomplete="email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                {{-- PASSWORD --}}
                                <div class="form-group mb-3">
                                    <label class="label" for="password" :value="__('Password')">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                {{--  CONFIRM PASSWORD --}}
                                <div class="form-group mb-3">
                                    <label class="label" for="password_confirmation"
                                        :value="__('Confirm Password')">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="password_confirmation" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">
                                        {{ __('Sign Up') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('login-form') }}/js/jquery.min.js"></script>
    <script src="{{ asset('login-form') }}/js/popper.js"></script>
    <script src="{{ asset('login-form') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('login-form') }}/js/main.js"></script>

</body>

</html>
