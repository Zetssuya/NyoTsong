@extends('navbar')
@section('Navbar')
<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>NyoTsong-Market of Possibilities</title>


</head>
<body>

    <section class="login section-padding">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-5 col-md-12 col-xs-12">
    <div class="login-form login-area">
    <h3>
    Login Now
    </h3>
                            <form method="POST" class="login-form" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-user"></i>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-lock"></i>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="checkedall" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="checkedall">Remember me</label>
                                    </div>
                                        <a class="forgetpassword" href="newforgot-password">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn btn-common log-btn">
                                                                    {{ __('Login') }}
                                                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <footer class="fixed-bottom">
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p><a target="_blank" href="#">&copy; NyoTsong 2021</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </footer>


    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
@endsection
</body>


</html>