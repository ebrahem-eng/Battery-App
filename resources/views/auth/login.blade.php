<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets_login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets_login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets_login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets_login/css/style.css') }}">

    <title>تسجيل الدخول</title>
</head>

<body>

    <div class="content">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <img src="{{ asset('assets_login/images/undraw_remotely_2j6y.svg') }}" alt="Image"
                        class="img-fluid">

                </div>

                <div class="col-md-6 contents">

                    <div class="row justify-content-center">

                        <div class="col-md-8">

                            <div class="mb-4" style="display: flex; align-items: right;">
                                <div style="direction: rtl; text-align: right;">
                                    <h3>تسجيل الدخول</h3>
                                    <p class="mb-4">مرحبا بك مرة اخرى</p>


                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group first">
                                            <label for="email">البريد الالكتروني</label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                :value="old('email')" required autofocus>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group last mb-4">
                                            <label for="password">كلمة السر</label>
                                            <input class="form-control" type="password" name="password" id="password"
                                                required autocomplete="current-password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <div class="d-flex mb-5 align-items-center">
                                            <label class="control control--checkbox mb-0" for="remember_me"><span
                                                    class="caption">تذكرني مرة اخرى</span>
                                                <input id="remember_me" type="checkbox" checked="checked"
                                                    name="remember" />
                                                <div class="control__indicator"></div>
                                            </label>



                                        </div>
                                        <input type="submit" value="تسجيل الدخول" class="btn btn-block btn-primary">
                                        </a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>
    </div>
    </div>
    <script src="{{ asset('assets_login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets_login/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets_login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_login/js/main.js') }}"></script>
    </main>
</body>

</html>
