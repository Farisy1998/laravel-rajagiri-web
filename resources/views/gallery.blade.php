@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
@section('content')
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <h3><b>GALLERY</b></h3>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
  </ol>
</nav>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 18rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/2/1.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Class Rooms</p>
    <h5 class="card-title"><a href="class_rooms.blade.php"><button class="btn btn-outline-dark">Class Rooms</button></a></h5>
  </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 18rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/3/6.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Labs</p>
    <h5 class="card-title"><a href="labs.blade.php"><button class="btn btn-outline-dark">Labs</button></a></h5>
  </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
            <div class="card" style="width: 18rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/5/LibKal1.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Library</p>
    <h5 class="card-title"><a href="lib.blade.php"><button class="btn btn-outline-dark">Library</button></a></h5>
  </div>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 18rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/6/sports.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Sports Faculty</p>
    <h5 class="card-title"><a href="spfaculty.blade.php"><button class="btn btn-outline-dark">Sports Faculty</button></a></h5>
  </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
            <div class="card" style="width: 18rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/8/recreated%20facility2.jpg" height="180px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Visit Our Recreational Faculty</p>
    <h5 class="card-title"><a href="rfaculty.blade.php"><button class="btn btn-outline-dark">Recreational Faculty</button></a></h5>
  </div>
</div>
        </div>
    </div>
    <hr>
</div>
@endsection
</body>
</html>