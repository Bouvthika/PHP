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
    .a{
      border:collapse;
      width:50%;
      height:20%;
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
  <center><img src="http://www.kmchcop.ac.in/images/kmchcop_new.png"width="60%"s></center>

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
        <img src="https://dlsii.com/blog/wp-content/uploads/2014/08/hospital.jpg" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="http://www.kmchcop.ac.in/images/banner/home/3.jpg" alt="Image">
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
  <h1 style="color:green">STAFF DETAILS</h1><br>

</div>
<h3>DOCTORS</h3>
   <table width="85%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table class="table table-responsive table-striped table-bordered">
                    <tr>
                      <td colspan="2">01.  Professor</td>
                    </tr>
                    <tr>
                      <td width="26%" align="center"><img src="http://www.kmchcop.ac.in/faculty/Rajasekaran.jpg" class="img-responsive img-rounded"/></td>
                      <td width="74%"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="30%" height="33">Name:</td>
                            <td width="70%" height="33">Dr.A.Rajasekaran</td>
                          </tr>
                          <tr>
                            <td height="33">Qualification:</td>
                            <td height="33">M.Pharm., Ph.D.</td>
                          </tr>
                          <tr>
                            <td height="33">Specialization:</td>
                            <td height="33">Pharmaceutical Chemistry</td>
                          </tr>
                          <tr>
                            <td height="33">Email:</td>
                            <td height="33">principal@gmail.com</td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                 <td><table class="table table-responsive table-striped table-bordered">
                    <tr>
                      <td colspan="2">02. Professor </td>
                    </tr>
                    <tr>
                      <td width="26%" align="center"><img src="http://www.kmchcop.ac.in/faculty/Arulkumaran.jpg" class="img-responsive img-rounded"/></td>
                      <td width="74%"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="30%" height="33">Name:</td>
                            <td width="70%" height="33">Dr.K.S.G Arulkumaran</td>
                          </tr>
                          <tr>
                            <td height="33">Qualification:</td>
                            <td height="33">M.Pharm., Ph.D.</td>
                          </tr>
                          <tr>
                            <td height="33">Specialization:</td>
                            <td height="33">Pharmaceutics</td>
                          </tr>
                          <tr>
                            <td height="33">Email:</td>
                            <td height="33">drarulkumaran@gmail.com</td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table class="table table-responsive table-striped table-bordered">
                    <tr>
                      <td colspan="2">03. Professor</td>
                    </tr>
                    <tr>
                      <td width="26%" align="center"><img src="http://www.kmchcop.ac.in/faculty/Adhirajan.jpg" class="img-responsive img-rounded"/></td>
                      <td width="74%"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="30%" height="33">Name:</td>
                            <td width="70%" height="33">Dr.N.Adhirajan</td>
                          </tr>
                          <tr>
                            <td height="33">Qualification:</td>
                            <td height="33">M.Pharm., Ph.D.</td>
                          </tr>
                          <tr>
                            <td height="33">Specialization:</td>
                            <td height="33">Pharmacognosy</td>
                          </tr>
                          <tr>
                            <td height="33">Email:</td>
                            <td height="33">dradhirajan@gmail.com</td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table class="table table-responsive table-striped table-bordered">
                    <tr>
                      <h3>NURSE</h3>
                      <td colspan="2">04. Nurse</td>
                    </tr>
                    <tr>
                      <td width="26%" align="center"><img src="http://www.kmchcop.ac.in/faculty/Shalini.jpg" class="img-responsive img-rounded"/></td>
                      <td width="74%"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="30%" height="33">Name:</td>
                            <td width="70%" height="33">Dr.C.Sankari</td>
                          </tr>
                          <tr>
                            <td height="33">Qualification:</td>
                            <td height="33">B.s.c Nursing</td>
                          </tr>
                          <tr>
                            <td height="33">Specialization:</td>
                            <td height="33">Pharmaceutics</td>
                          </tr>
                          <tr>
                            <td height="33">Email:</td>
                            <td height="33">sankari34@gmail.com</td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table class="table table-responsive table-striped table-bordered">
                    </tr>
                    <tr>
                      <td colspan="2">05. Nurse</td>
                    </tr>
                    <tr>
                      <td width="26%" align="center"><img src="http://www.kmchcop.ac.in/faculty/Dithu.jpg" class="img-responsive img-rounded"/></td>
                      <td width="74%"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="30%" height="33">Name:</td>
                            <td width="70%" height="33">Dr.C.Sujatha</td>
                          </tr>
                          <tr>
                            <td height="33">Qualification:</td>
                            <td height="33">B.s.c Nursing</td>
                          </tr>
                          <tr>
                            <td height="33">Specialization:</td>
                            <td height="33">Pharmaceutics</td>
                          </tr>
                          <tr>
                            <td height="33">Email:</td>
                            <td height="33">suji@gmail.com</td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table class="table table-responsive table-striped table-bordered">
                    </tr>
                    <h3>WORKERS</h3>
                    <table width="85%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table class="table table-responsive table-striped table-bordered">
                      <tr>
                        <td><img src="https://media.glassdoor.com/lst/e5/4a/84/6f/team.jpg"></td>
                      </tr>
                       <tr>
                            <td width="30%" height="33">Number of employee:</td>
                            <td width="70%" height="33">20</td>
                          </tr>
                          <tr>
                            <td height="33">Employee list:</td>
                            <td height="33">priya<br>
                              Gowsalya<br>
                              Kasthuri<br>
                              divya<br>
                              monika<br>
                              Oviya<br>
                              Sumathi<br>
                              Reshma<br>
                              sabitha<br>
                            </td>
                          </tr>
                         
</body>
</html>