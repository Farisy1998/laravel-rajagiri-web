@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="icon" type="image/png" href="icon.png">
</head>
<body>
@section('content')
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <h3><b>LIBRARY</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <br>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="gallery.blade.php">Gallery</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
            <img src="https://rajagiri.edu/uploads/image-gallery/5/LibKal1.jpg" height="600px" alt="">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
            <img src="https://rajagiri.edu/uploads/image-gallery/5/LibKal2.jpg" height="600px" alt="">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
            <img src="https://rajagiri.edu/uploads/image-gallery/5/LibKal3.jpg" height="600px" alt="..">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
            <img src="https://rajagiri.edu/uploads/image-gallery/5/LibKal4.jpg" height="600px" alt="..">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
            <img src="https://rajagiri.edu/uploads/image-gallery/5/LibKal5.jpg" height="600px" alt="..">
        </div>
    </div>
    <br>
</div>
<br>
    @endsection
</body>
</html>