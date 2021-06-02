@extends("theme")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajagiri College of Social Sciences - Department of Computer Science</title>
    <style>
      p{
        font-family:calibri;
        color:gray;
        font-size:17px;
      }
    </style>
</head>
<body>
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4 aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://rajagiri.edu/uploads/home-banner/18/18.jpg" height="600px" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <font color="black"><h5><b>CGPA 3.83 (A++)</b></h5></font>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://rajagiri.edu/uploads/home-banner/12/12.jpg" height="600px" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <font color="#ffbf00"><h5><b>GHRDC RANKING</b></h5></font>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://rajagiri.edu/uploads/home-banner/11/11.jpg" height="600px" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <font color="#000066"><h5><b>INDIA TODAY</b></h5></font>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://rajagiri.edu/uploads/home-banner/9/9.jpg" height="600px" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><b>NIRF RANKING</b></h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://rajagiri.edu/uploads/home-banner/10/10.jpg" height="600px" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <font color="green"><h5><b>FOOT PRINTS</b></h5></font>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
    <div class="container">
        <br>
        <div class="row">
          <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
          <h3><b>&nbsp;Welcome to Rajagiri</b></h3>
            <table class="table table-borderless">
              <tr>
                <th><p>HILL CAMPUS</p></th>
              </tr>
              <tr>
                <td>
                  <p>Drawing inspiration from the founder, St. Kuriakose Elias Chavara, a great visionary,
                    reformer and religious leader of the 19th century, the Carmelites of Mary Immaculate (CMI),
                    the first indigenous religious congregation for men in India, dedicated themselves to education at
                    all levels
                  </p>
                </td>
              </tr>
              <tr>
                <td><a href="aboutus.blade.php"><button class="btn btn-outline-success">Know More</button></a></td>
              </tr>
            </table>
          </div>
          <div class="col col-sm-6 col-md-6 col-lg-6">
          <h3><b>&nbsp;Department of Computer Science</b></h3>
            <table class="table table-borderless">
              <tr>
                <th><p>OUR COMPUTER SCIENCE PROGRAMS</p></th>
              </tr>
              <tr>
                <td>
                <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
         MCA Addmission 2021
        </button>
      </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <table class="table table-borderless">
              <tr>
                <td><h3>MCA</h3></td>
              </tr>
              <tr>
                <td><p>For Queries Contact Us: mca@rajagiri.edu, 9400700485</p></td>
              </tr>
              <tr>
                <th><h5>Eligibility Criteria :-</h5></th>
              </tr>
              <tr>
                <td><p>A candidate seeking admission to MCA course must have a pass with not less than 50%
                      marks in any recognized regular bachelor's Degree course of minimum three years duration
                      in any discipline with Mathematics at 10+2 level.
                    </p>
                  </td>
              </tr>
              <tr>
                <td><p>OR</p></td>
              </tr>
              <tr>
                <td><p>A pass with not less than 50% marks in any recognized Regular Bachelors Degree course of
                      minimum three years duration in any discipline with Mathematics/Statistics/Business Mathematics/
                      Business Statistics as one of the Subjects.
                    </p></td>
              </tr>
              <tr>
                <td><a href="mca.blade.php"><button class="btn btn-outline-success">More Details</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mca_reg.blade.php"><button class="btn btn-outline-warning">Apply Now</button></a>
                </td>
              </tr>
            </table>
          </div>
          </div>
          </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  MSC CS-DA Addmission 2021
                </button>
              </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <table class="table table-borderless">
                      <tr>
                        <td><h3>MSC CS-DA</h3></td>
                      </tr>
                      <tr>
                        <td><p>For Queries Contact Us: 9400700485</p></td>
                      </tr>
                      <tr>
                        <td><h5>Eligibility Criteria :-</h5></td>
                      </tr>
                      <tr>
                        <td><p>The eligibility for admission to M Sc Computer Science (Data Analytics) programme
                              is a B Sc Degree with Mathematics/Computer Science /Electronics as one of the subjects
                              (Main or Subsidiary) or BCA/B.Tech degree with not less than 55% marks in optional subjects.
                              Note: Candidates having degree in computer science/Computer Application/IT/Electronics shall be given a weightage of 20% in
                              their qualifying degree examination marks considered for ranking for admission to M Sc. Computer Science (Data Analytics). Reservation policy will be as
                              regulated by parent University. </p></td>
                      </tr>
                      <tr>
                        <td><a href="msccsda.blade.php"><button class="btn btn-outline-success">More Details</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="msccsda_reg.blade.php"><button class="btn btn-outline-warning">Apply Now</button></a></td>
                      </tr>
                    </table>
                  </div>
                  </div>
                </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <hr>
        <br>
        <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <h3><b>&nbsp;Virtual Tour</b></h3>
          <table class="table table-borderless">
            <tr>
              <th><p>RAJAGIRI 360 VIEW</p></th>
            </tr>
            <tr>
              <td><div class="card" style="width: 18rem;">
  <img src="https://www.joonsquare.com/usermanage/image/business/rajagiri-college-of-social-sciences-ernakulam-14557/rajagiri-college-of-social-sciences-ernakulam-rajagiri-college-of-social-sciences-2.jpg" height="181px" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title"><p>Click here to see the 360 view of our Hill Campus</p></h4>
    <h5 class="card-title"><a href="https://rajagiri.edu/virtual-tour/hill-campus/"><button class="btn btn-outline-success">Hill Campus</button></a></h5>
  </div>

</div></td>
            </tr>
            <tr>
              <td><div class="card" style="width: 18rem;">
  <img src="https://www.rajagiritech.ac.in/home/images/02.jpg" height="186px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><p>Click here to see the 360 view of our Valley Campus</p></h5>
    <h5 class="card-title"><a href="https://rajagiri.edu/virtual-tour/valley-campus/"><button class="btn btn-outline-success">Valley Campus</button></a></h5>
  </div>

</div></td>
            </tr>
          </table>
        </div>
          <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
            <h3><b>&nbsp;Gallery</b></h3>
            <table class="table table-borderless">
              <tr>
                <th><p>RECONNOITRE RAJAGIRI</p></th>
              </tr>
              <tr>
                <td>
                <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://rajagiri.edu/uploads/image-gallery/2/1.jpg" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><p>Visit Our Class Rooms</p></h5>
        <h4 class="card-title"><a href="class_rooms.blade.php"><button class="btn btn-outline-dark">Class Rooms</button></a></h4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://rajagiri.edu/uploads/image-gallery/3/6.jpg" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><p>Visit Our Labs</p></h5>
        <h4 class="card-title"><a href="labs.blade.php"><button class="btn btn-outline-dark">Labs</button></a></h4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://rajagiri.edu/uploads/image-gallery/5/LibKal1.jpg" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><p>Visit Our Library</p></h5>
        <h4 class="card-title"><a href="lib.blade.php"><button class="btn btn-outline-dark">Library</button></a></h4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://rajagiri.edu/uploads/image-gallery/6/sports2.jpg" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><p>Visit More On Our Facilities</p></h5>
        <h4 class="card-title"><a href="gallery.blade.php"><button class="btn btn-outline-primary">More</button></a></h4>
      </div>
    </div>
  </div>
</div>
                </td>
              </tr>
            </table>
          </div>
          <hr>
          <br>
          <div class="row">
          <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
          <h3><b>&nbsp;Faculties</b></h3>
          <table class="table table-borderless">
            <tr>
              <th><P>OUR COMPUTER SCIENCE FACULTY WING</P></th>
            </tr>
            <tr>
              <td><div class="card mb-3">
  <img src="https://www.cud.ac.ae/sites/default/files/general/2017/faculties-and-departments-1920x1080.jpg" height="310px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><p>Visit Our Faculty Members</p></h5>
    <a href="faculty.blade.php"><button class="btn btn-outline-primary">Faulties</button></a>
  </div>
</div></td>
            </tr>
          </table>
          </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <h3><b>&nbsp;Placements</b></h3>
              <table class="table table-borderless">
              <tr>
                <th><P>OUR TOP RECRUITERS</P></th>
              </tr>
                <tr>
                  <td><img src="https://lighthouse-sf.org/wp-content/uploads/2018/07/Colors-HP-Logo.jpg" height="200px" alt="..."></td>
                  <td><img src="https://res-1.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco/v1415386231/utypaslbyxwfuwhfdzxd.png" height="200px" alt="..."></td>
                </tr>
                <tr>
                  <td><img src="https://pbs.twimg.com/profile_images/1291884873821704192/gWjvyqNA.jpg" height="200px" alt="..."></td>
                  <td><img src="https://www.alphagroup.edu/engineering/images/placements-recruiters-banner.jpg" height="200px" alt="..."></td>
                </tr>
              </table>
            </div>
          </div>
          <hr>
    </div>
    <p> </p>
    @endsection
</body>
</html>