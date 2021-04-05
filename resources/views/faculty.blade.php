@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculties - Department of Computer Science</title>
    <style>
        p{
            font-family:calibri;
            color:gray;
            font-size:22px;
        }
        h3,h6{
          font-family:calibri;
        }
    </style>
</head>
<body>
@section('content')
<div class="container">
  <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <br>
        <h3><b>FACULTY PROFILE</b></h3>
        </div>
  </div>
  <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <br>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Faculties</li>
  </ol>
</nav>
        </div>
  </div>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <table class="table table-borderless">
        <tr>
            <th><h3>Dr.Bindiya M Varghese</h3></th>
        </tr>
            <tr>
                <td><img src="https://rajagiri.edu/uploads/faculty-profile/21/image.jpg" height="200px" alt=""></td>
            </tr>
            
        </table>
        </div>
        <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
        <br>
        <br>
        <br>
        <table class="table table-borderless">
        <tr>
          <td><h6><p><b>Designation: Dean</b></p></h6>
        <h6><p><b>Qualification: Ph.D</b></p></h6>
        <h6><p><b>Email: bindiya@rajagiri.edu</b></p></h6><br>
        Bindiya holds a doctorate in Computer Science from Faculty of Technology, 
        Cochin University of Science and Technology. She has more than 16 years of Post Graduate 
        Teaching Experience and has published many research papers in Journals and Proceedings of 
        International repute. She acts as a resource person in Data Mining and as a consultant for 
        various live projects and has initiated RLabZ, a conceptualization of Live Lab for Department 
        of Computer Science. She is now part of the UKIERI Project as Director (Systems).</td>
        </tr>
        </table>
        <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <ul>
          <li>Ph.D. Faculty of Technology, Cochin University of Science and Technology, 2014.</li>
          <li>MCA from MG University , 2002 (University First Rank).</li>
          <li>BCA from MG University , 1999 (College Topper, University 5th Rank).</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <ul>
          <li>Rajagiri School of Computer Science, from June 2003- till date.</li>
          <li>Guest Lecturer, M A College Kothamangalam.</li>
          <li>Guest Lecturer, Vidya Bharati, Kalamassery.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
    <table class="table table-borderless">
          <tr>
            <th><h3>George Joseph</h3></th>
          </tr>
          <tr>
            <td><img src="https://rajagiri.edu/uploads/faculty-profile/22/image.jpg" alt=""></td>
          </tr>
        </table>
    </div>
    <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
    <br>
    <br>
    <table class="table table-borderless">
    <tr>
      <td><h6><p><b>Designation: Co-ordinator, School of Computer Science</b></p></h6>
      <h6><p><b>Qualification: M.Phil</b></p></h6>
      <h6><p><b>Email: georgejoseph@rajagiri.edu</b></p></h6><br>
      He is a first rank holder in MCA from Ravenshaw (Autonomous) College, Cuttack, Orissa and has M.Phil 
      in computer science from Bharatidasan University, Tiruchirappalli. He is PhD research scholar at 
      Christ University and has qualified  UGC-NET in Computer Science. He started his career in IT industry 
      as Analyst Programmer with Yuko Systems and worked as a Technical Analyst with Transversal e Networks. 
      He joined Rajagiri College of Social Sciences in 2003. He has a post graduate diploma in computer and 
      management information system from Regional College of Management, Bhubaneswar and has completed a six 
      month International Programme on Development of Management Perspectives from Indian Institute of 
      Management, Calcutta. He has been a visiting international scholar at Vives University College, 
      Kortrijk, Belgium.</td>
    </tr>
    </table>
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <ul>
          <li>Pursuing Ph.D. in Computer Science, CHRIST (Deemed to be University), Bengaluru.</li>
          <li>M. Phil (Computer Science), Bharathidasn University.</li>
          <li>MCA, First Rank, Ravenshaw (Autonoums) College, Utkal University.</li>
          <li>IPDMP, IIM Calcutta.</li>
          <li>PGDCMIS, Regional College of Management, Utkal University.</li>
          <li>Qualified UGC NET in Computer Science and Applications.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <ul>
          <li>Assistant Professor, Rajagiri since June 2003.</li>
          <li>Technical Analyst, Transversal e Networks, Techno Park, Trivandrum.</li>
          <li>Analyst Programmer, Yuko Systems, Yuko Towers, Pettah, Trivandrum.</li>
        </ul>
      </div>
    </div>
  </div>

</div>
    </div>
    </div>
    <hr>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
          <table class="table table-borderless">
          <tr>
            <th><h3>Dr. Jaya Vijayan</h3></th>
          </tr>
          <tr>
            <td><img src="https://rajagiri.edu/uploads/faculty-profile/23/image.jpg" alt=""></td>
          </tr>
          </table>
          </div>
          <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
          <br>
          <br>
            <table class="table table-borderless">
            <tr>
              <td><h6><p><b>Designation: Dean, Student Affairs</b></p></h6>
            <h6><p><b>Qualification: Ph.D</b></p></h6>
            <h6><p><b>Email: jaya@rajagiri.edu</b></p></h6><br>
            She holds a PhD degree in Software Engineering from Bharathiar University. 
            She has done her MCA degree from M.S. University Tirunelveli . She has more than 20 years of 
            teaching experience in Post Graduate Level. She has to her credit several research papers 
            published in reputed National and International journals. She has undergone an internship 
            program with US Technology Resources, Trivandrum. Her areas of research and interest are 
            Software Engineering/Agile computing. She is presently working as a faculty in the department 
            of computer Science, Rajagiri College of Social sciences. She is a Member of IAENG 
            (International Association of Engineers).</td>
            </tr>
            </table>
            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <ul>
          <li>Ph.D from Bharathiar University.</li>
          <li>Master of Computer Applications (MCA) from Manonmaniam Sundaranar University, Tirunelveli.</li>
          <li>Bachelor of Science (B.Sc. Physics) from Kerala   University, Thiruvananthapuram.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <ul>
          <li>Faculty, VidyaBharathi Institute of Management & Technology, Cochin.</li>
          <li>Guest Lecturer, Cochin University of Science And Technology (MCA Department).</li>
          <li>Lecturer, School of Communication & Management Studies(SCMS), Cochin.</li>
          <li>Faculty / Programmer, ET & T Kollam.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<hr>
<div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
          <table class="table table-borderless">
            <tr>
              <th><h3>Sunu Mary Abraham</h3></th>
            </tr>
            <tr>
              <td><img src="https://rajagiri.edu/uploads/faculty-profile/24/image.jpg" alt=""></td>
            </tr>
          </table>
        </div>
        <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
          <br>
          <br>
          <table class="table-borderless">
          <tr>
            <td><h6><p><b>Designation: Assistant Professor</b></p></h6>
            <h6><p><b>Qualification: M.Phil</b></p></h6>
            <h6><p><b>Email: sunumary@rajagiri.edu</b></p></h6><br>
            She has more than 18 years of teaching experience in Post Graduate and Undergraduate level 
            and has to her credits several publications in National and International Journals. 
            Her areas of interest include Data Mining, Design and  Analysis of Algorithms, Operating 
            Systems, and Microprocessors. Her research focus is on Data Analytics and Data Visualization 
            Tools and Techniques.</td>
          </tr>
          </table>
            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
        <li>Pursuing Ph.D. in Computer Science, Avinashilingam Institute for Home Science and Higher Education for Women (Deemed to be University).</li>
        <li>M.Phil Computer Science, Bharathiar University,2009.</li>
        <li>MSc Computer Science,Bharathiar University,2000.</li>
        <li>Bsc Computer Science, M G University, 1998.</li>
      </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
        <li>Department of Computer Science,  Rajagiri College of Social Sciences since October 2007.</li>
        <li>Lecturer, School of Communication and Management Studies, Cochin(2003-2007).</li>
        <li>Guest Lecturer, College of Applied Sciences, IHRD, Mallapally(2001-2003).</li>
      </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<hr>
<div class="row">
        <div class="col col-4 col-sm-4 col-md-4 col-lg-4">
          <table class="table table-borderless">
            <tr>
              <th><h3>Dr. Ann Baby</h3></th>
            </tr>
            <tr>
              <td><img src="https://rajagiri.edu/uploads/faculty-profile/26/image.jpg" alt=""></td>
            </tr>
          </table>
        </div>
        <div class="col col-8 col-sm-8 col-md-8 col-lg-8">
          <br>
          <br>
          <table class="table table-borderless">
            <tr>
              <td> <h6><p><b>Designation: Assistant Professor</b></p></h6>
          <h6><p><b>Qualification: Ph.D</b></p></h6>
          <h6><p><b>Email: ann@rajagiri.edu</b></p></h6><br>
          A PhD in Computer Science from Bharathiar University, she is a University rank holder in her 
          post-graduation from Bharathiar University and aslo holds an M.Phil degree. With more than 16 
          years of teaching experience in the Postgraduate level, she has to her credit several research 
          papers, published in reputed National and International journals. Mrs. Ann Baby was the 
          conference coordinator of the UGC sponsored National Conference on "Information Systems: 
          Emerging Trends and Technologies" held at Rajagiri College of Social Sciences. She was the  
          Coordinator of State Level Seminar on "Disaster Risk Management: Technology Recipes for Kerala", 
          and the Coordinator of the National Two-Days Workshop on "Angular 6"  She has also successfully 
          completed a UGC funded Minor Research Project.  She has attended several workshops and seminars 
          across the country and has conducted training programmes for NEC Communications, Japan and the 
          Dubai Port World. She is a lifetime member of CSI (Computer Society of India).</td>
            </tr>
          </table>
          <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
          <li>PhD in Computer Science.</li>
          <li>M.Phil (Computer Science).MCA (University Rank Holder - Bharathiar University-2003).</li>
          <li>BCA.</li>
      </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
            <li>Working in Rajagiri School of Computer Science from June 2008.</li>
            <li>Lecturer, MCA Department, PBM Mahajana PG College, Mysore from June 2006 to May 2008.</li>
            <li>Lecturer, MCA Department, Marian College, Kuttikanam from June 2003 to May 2006.</li>
      </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<hr>
<div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
              <table class="table table-borderless">
                <tr>
                  <th><h3>Shiju Thomas M.Y</h3></th>
                </tr>
                <tr>
                  <td><img src="https://rajagiri.edu/uploads/faculty-profile/27/image.jpg" alt=""></td>
                </tr>
              </table>
            </div>
            <div class="col col-8 col-sm-8 col-md-8 col-lg-8">
              <br>
              <br>
              <table class="table table-borderless">
              <tr>
                <td><h6><p><b>Designation: Assistant Professor</b></p></h6>
              <h6><p><b>Qualification: M.Tech, MCA</b></p></h6>
              <h6><p><b>Email: shijuthomas@rajagiri.edu</b></p></h6><br>
              He completed MTech and MCA from Cochin University of Science and Technology, Cochin, Kerala. 
              Before joining Rajagiri in 2013 he was working in IT industry with Plus Point Solutions as 
              Project Coordinator. He is well known trainer and taken training in various companies.</td>
              </tr>
              </table>
              <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
            <ul>
              <li>Pursuing Ph.D in Computer science and Engineering  at Christ (Deemed to be University) Banglore.</li>
              <li>M.Tech from Cochin University of Science and Technology.</li>
              <li>MCA from Cochin University of Science and Technology.</li>
            </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <b>Teaching:</b>
      <ul>
            <li>Worked in KVM College of Engineering and Information Technology, Cherthala for the academic year 2004.</li>
            <li>Worked as a visiting faculty in Bharath Mata College, Thrikkakara.</li>
            <li>Worked as a visting faculty in Institutution of Engineers, Ernakulam.</li>
      </ul>
      <b>Industry:</b>
      <ul>
            <li>Was the Project Coordinator and Trainer in Plus Point Solutions</li>
      </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<hr>
<div class="row">
            <div class="col col-12 col-s,-4 col-md-4 col-lg-4">
              <table class="table table-borderless">
              <tr>
                <th><h3>Sabeen Govind</h3></th>
              </tr>
              <tr>
                <td><img src="https://rajagiri.edu/uploads/faculty-profile/28/image.jpg" alt=""></td>
              </tr>
              </table>
            </div>
            <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
            <br>
            <br>
            <table class="table table-borderless">
            <tr>
              <td><h6><p><b>Designation: Assistant Professor</b></p></h6>
            <h6><p><b>Qualification: M.Tech</b></p></h6>
            <h6><p><b>Email: sabeengovind@rajagiri.edu</b></p></h6><br>
            He holds M Tech degree in Computer Science with specialization in Digital image computing and 
            B.Tech in Computer Science and Engineering. He has 9 years of teaching experience. His 
            teaching and research interests include Image Processing, Data hiding, Data Base Management 
            systems and Computer Graphics.</td>
            </tr>
            </table>
            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
            <li>Pursuing Ph.D in Computer science at Cochin University of Science and Technology.</li>
            <li>M.Tech – Computer Science with specialization in Digital image computing(Department of Computer Science, University of Kerala).</li>
            <li>B Tech –Computer science and Engineering (Govt. Engineering College, Mananthavady).</li>
            <li>Qualified UGC NET in Computer Science and Applications.</li>
      </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
            <li>Working in Rajagiri School of Computer Science since June 2015.</li>
            <li>Assistant Professor, Department of Computer Application, Don Bosco College, Angadikadavu, Kannur.</li>
      </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<hr>
<div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
              <table class="table table-borderless">
              <tr>
                <th><h3>Dr. Anoop V. S.</h3></th>
              </tr>
              <tr>
                <td><img src="https://rajagiri.edu/uploads/faculty-profile/149/image.jpg" alt=""></td>
              </tr>
              </table>
            </div>
            <div class="col col-12 col-s,-8 col-md-8 col-lg-8">
            <br>
            <br>
            <table class="table table-borderless">
            <tr>
              <td><h6><p><b>Designation: Assistant Professor</b></p></h6>
            <h6><p><b>Qualification: Ph.D</b></p></h6>
            <h6><p><b>Email: anoop@rajagiri.edu</b></p></h6><br>
            Dr. Anoop has received his Doctor of Philosophy (Ph. D.) and Master of Philosophy (M. Phil.) 
            from the Faculty of Technology, Cochin University of Science and Technology. His thesis was 
            on Inferring Conceptual Graphs and Relationships from Large Unstructured Datasets and he has 
            worked in the areas of Applied Natural Language Processing, Text Mining, and Information 
            Retrieval. Previously, he was working as a Senior Scientist and Head (Training) at Kerala 
            Blockchain Academy under the Indian Institute of Information Technology and Management - 
            Kerala (IIITM-K). He has also worked as AI Data Scientist, AI Research Engineer, Research 
            Associate, and Software Engineer in India and United Arab Emirates and holds a decade of 
            overall experience in Industry, Research and Academia. Dr. Anoop has several research 
            publications to his credit including international and national journals, book chapters, and 
            conference proceedings.</td>
            </tr>
            </table>
            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
            <li>Ph.D., Faculty of Technology, Cochin University of Science and Technology, 2020.</li>
            <li>M.Phil., Faculty of Technology, Cochin University of Science and Technology, 2014.</li>
            <li>MCA, School of Computer and Information Sciences, IGNOU, 2011.</li>
            <li>Post Graduate Diploma in Higher Education (PGDHE), School of Education, IGNOU, 2015.</li>
            <li>Advanced Diploma in Computer Applications (A Level), National Institute of Electronics and Information Technology, Government of India, 2007.</li>
            <li>Diploma in Software Engineering, National Institute of Information Technology, 2007.</li>
            <li>    Professional Business Programmer Certificate (O Level), National Institute of Electronics and Information Technology, Government of India, 2006.</li>
      </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
            <li>Working in Rajagiri School of Computer Science since September 2020.</li>
            <li>Senior Scientist and Head (Training), Kerala Blockchain Academy, Indian Institute of Information Technology and Management - Kerala (IIITM-K), Thiruvananthapuram.</li>
            <li>Senior AI Data Scientist, CogTalk, Dubai, United Arab Emirates.</li>
            <li>Data Scientist (Natural Language Processing), Cogknit Semantics, Bangalore.</li>
            <li>Academic Counsellor in Computer Applications, IGNOU.</li>
            <li>Research Associate and Graduate Teaching Assistant, Indian Institute of Information Technology and Management - Kerala (IIITM-K), Thiruvananthapuram.</li>
            <li>Software Engineer, M2 Software and Services, Technopark, Thiruvananthapuram.</li>
      </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<hr>
<div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
              <table class="table table-borderless">
              <tr>
                <th><h3>Dr. Keerthy A. S</h3></th>
              </tr>
              <tr>
                <td><img src="https://rajagiri.edu/uploads/faculty-profile/150/image.jpg" alt=""></td>
              </tr>
              </table>
            </div>
            <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
            <br>
            <br>
            <table class="table table-borderless">
            <tr>
              <td><h6><p><b>Designation: Assistant Professor</b></p></h6>
            <h6><p><b>Qualification: Ph.D</b></p></h6>
            <h6><p><b>Email: keerthy@rajagiri.edu</b></p></h6><br>
            Keerthy has secured her Ph. D from Department of Computer Science, Karpagam Academy of Higher Education, 
            Coimbatore.She has qualified UGC NET in Computer Science and Applications and has more than 10 years 
            of Post Graduate Teaching experience. She has secured MPhil in Bioinformatics from Department of 
            Computational Biology and Bioinformatics, Kerala University. Her areas of interest includes 
            Statistical Analysis of Data, Data Compression, Bioinformatics, Artificial Intelligence and Graph 
            Theory.</td>
            </tr>
            </table>
            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      <h5>Educational Qualification</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul>
        <li>Ph.D. in Computer Science, Karpagam Academy of Higher Education (Deemed to be University).</li>
        <li>Qualified UGC NET in Computer Science and Applications.</li>
        <li>MPhil in Bioinformatics, Kerala University, 2009.</li>
        <li>MCA from University of Calicut, 2004.</li>
        <li>BSc in Mathematics from Mar Ivanios College, University of Kerala, 2000.</li>
      </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <h5>Work Experience (Research / Teaching)</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
            <ul>
              <li>Joined Rajagiri School of Computer Science in August 2020.</li>
              <li>Guest Lecturer, Bharath Matha College, Thrikkakara.</li>
              <li>Guest Lecturer, National Centre for Aquatic Animal Health, CUSAT.</li>
              <li>Guest Lecturer in Biostatistics, All India Institute of Local Self Government, Kochi.</li>
              <li>Faculty of Mathematics, Growing Stars Infotech Pvt Ltd, Kochi.</li>
            </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<hr>
<br>
</div>
@endsection
</body>
</html>