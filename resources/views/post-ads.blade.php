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
<h2 class="product-title">Post your Ads</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Post your Ads</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a href="#"><img src="assets/img/author/img1.jpg" alt=""></a>
</figure>
<div class="usercontent">
<h3>Bir Bdr Rai</h3>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a href="#">
<i class="lni-dashboard"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-cog"></i>
<span>Profile Settings</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-layers"></i>
<span>My Ads</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-enter"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img class="img-fluid" src="assets/img/img1.jpg" alt="">
</div>
</div>
</aside>
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Ads Detail</h2>
</div>

<form action="submit" method="POST">

    <div class="dashboard-wrapper">
    <div class="form-group mb-3">
    <label class="control-label">Product Detail</label>
    <input class="form-control input-md" name="Title" placeholder="Enter product name" type="text">
    </div>
    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">Categories</label>
    <div class="tg-select form-control">
    <select>
    @foreach($data as $row)
        <option value="{{$row->id}}">{{$row->name}}</option>
    @endforeach
    <!-- <option value="none">Select Categories</option>
    <option value="none">Electronics</option>
    <option value="none">Land</option>
    <option value="none">Vehicles</option> -->
    </select>
    </div>
    </div>
    <div class="form-group mb-3">
    <label class="control-label">Product Price</label>
    <input class="form-control input-md" name="price" placeholder="Enter product price" type="text">
    <div class="tg-checkbox mt-3">
    </div>
    </div>

    <div class="form-group-lg md-3">
    <label class="control-label">Product Detail</label>
    <input class="form-control input-md" name="product-detail" placeholder="Enter product Details" type="text">
    <div class="tg-checkbox mt-3">
    </div>

    </div>
    <div class="form-group md-3">
    <section id="editor">
    <div id="summernote">
    </div>
    </section>
    </div>
    <label class="tg-fileuploadlabel" for="tg-photogallery">
    <span>Drop files anywhere to upload</span>
    <span>Or</span>
    <span class="btn btn-common">Select Files</span>
    <span>Maximum upload file size: 5 MB</span>
    <input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
    </label>
    </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
    <div class="inner-box">
    <div class="tg-contactdetail">
    <div class="dashboard-box">
    <h2 class="dashbord-title">Location Detail</h2>
    </div>
    <div class="dashboard-wrapper">
    <div class="form-group mb-3">

    </div>
    </div>
    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">Select your Product Location</label>
    <div class="tg-select form-control">
    <select>
        @foreach($data as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    <!-- <option value="none">Select Dzongkhag</option>
    <option value="none">Paro</option>
    <option value="none">Bumthang</option>
    <option value="none">Chukha</option> -->
    </select>
    </div>
    </div>
    </div>
    </div>
    
    <div class="tg-checkbox">
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
    <label class="custom-control-label" for="tg-agreetermsandrules">I agree to all NyoTsong <a href="javascript:void(0);">Privacy Terms &amp; Conditions</a></label>
    </div>
    </div>
    <button class="btn btn-common" type="submit">Post Ad</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</form>




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