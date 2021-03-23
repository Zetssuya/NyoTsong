@extends('navbar')
@section('Navbar')
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>NexusPlus - Classified Ads and Listing Template</title>
</head>
<body>



<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Forgot Password</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Forgot Password</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="forgot login-area">
<h3>
Forgot Password
</h3>
<form role="form" class="login-form">
<form method="POST" class="login-form" action="{{ route('password.email') }}">
                        @csrf
<div class="form-group">
<div class="input-icon">
<i class="icon lni-user"></i>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
</div>
<div class="text-center">
<button type="submit" class="btn btn-common log-btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
</div>
<div class="form-group mt-4">
<ul class="form-links">
<li class="float-left"><a href="newregister">Don't have an account?</a></li>
<li class="float-right"><a href="newlogin">Back to Login</a></li>
</ul>
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