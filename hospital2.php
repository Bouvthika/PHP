<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital management.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
  <center><img src="http://www.kmchcop.ac.in/images/kmchcop_new.png"width="60%"></center>

<nav class="navbar navbar-inverse"style="fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="hospital.php">Home</a></li>
        <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">About us</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="hospital1.php">Trust</a></li>
                  <li><a href="hospital2.php">About institute</a></li>
                  <li><a href="hospital3.php">Rules and regulation</a></li>
                </ul>
              </li>

              <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">admin</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="hospital5.php">Patient detail</a></li>
                  <li><a href="hospital6.php">Staff detail</a></li>
                </ul>
              </li>

        <li><a href="hospital4.php">Achievements</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://www.kmchcop.ac.in/images/banner/institute.jpg" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="http://www.kmchcop.ac.in/images/banner/institutions/it.jpg" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3><marquee><b>HOSPITAL MANAGEMENT SYSTEM</b></marquee></h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://www.kmchcop.ac.in/images/chairman.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Chairman</p>
    </div>
    <div class="col-sm-4"> 
      <img src="http://www.kmchcop.ac.in/images/madam.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Trustee</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
        <h4>ABOUT INSTITUTE</h4><br>
       <p>The KMCH College of Pharmacy was established in the year 1995 under the auspices of Kovai Medical Center Research and Educational Trust, Coimbatore. The College is recognized by The Government of Tamil Nadu and affiliated to The Tamil Nadu Dr. MGR Medical University, Chennai, approved by the Pharmacy Council of India (PCI) and The All India Council of Technical Education (AICTE), New Delhi. It is located at Kalapatti in a sprawling pollution free campus which is 3 KM away from Avinashi Road on national Highway and close to several prominent educational institutions. The College is housed in a campus with an imposing building and most conducive atmosphere for academic preference.</p>
      </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <img src="http://www.kmchcop.ac.in/images/women_cell.jpg">
  <img src="http://www.kmchcop.ac.in/images/drug_info_center.jpg">
</footer>

</body>
</html>
