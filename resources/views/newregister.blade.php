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




<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Join Us</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Register</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="register section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="register-form login-area">
<h3>
Register
</h3>
<form method="POST" class="login-form" action="{{ route('register') }}">
                        @csrf
<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-envelope"></i>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
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
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

</div>
</div>
<div class="form-group mb-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="checkedall">
<label class="custom-control-label" for="checkedall">By registering, you accept our Terms & Conditions</label>
</div>
</div>
<div class="text-center">
<button type="submit" class="btn btn-common log-btn">
    {{ __('Register') }}
</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<footer>

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

</body>


</html>
@endsection