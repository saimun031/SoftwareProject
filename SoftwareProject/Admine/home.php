/*<?php
    session_start();

    if(!isset($_SESSION['is_loggedin']))
    {
        echo"<script>
                location.assign('login.php');
            </script>" ;
    }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Home</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--JQUERY FILE-->

    <!--Theme CSS FILE-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Header Section-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-light ">
                <a class="navbar-brand logo" href="#">CareGiver System Managment</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ml-auto menu">
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                        </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="#about"><i class="fa fa-address-card"></i> About Us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="loginfo.php"><i class="fa fa-sign-in-alt"></i> Admin Account Information <span class="sr-only">(current)</span></a>
                        </li>
                        
                         <li class="nav-item active">
                            <a class="nav-link" href="user.php"><i class="fa fa-sign-in-alt"></i> User Information <span class="sr-only">(current)</span></a>
                        </li>
                        
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="userjob.php"><i class="fa fa-sign-in-alt"></i> UserJob Information <span class="sr-only">(current)</span></a>
                        </li>
                        
                        
                        
                        <!--PHP ADMIN ROLE CONDITION START-->
                        <!--<?php if($_SESSION['ROLE'] == 1 ) { ?>-->

                        <!--<?php } ?>-->
                        
                        <!--PHP ADMIN ROLE CONDITION END-->
                        
         
                        <li class="nav-item active">
                            <a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i> Logout <span class="sr-only">(current)</span></a>
                        </li> 
                    </ul>
                </div>
            </nav>

        </div>
    </header>

    <!--Section/Middle Body-->

    <!--About Poultry Section-->
    <section class="about-poultry" id="about-poultry">

        <div class="container">
            <div class="move">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/6.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


            <div class="about-poultry">
                <h2>About CareGiver System</h2><br>
                <h3>A system which will provide help to the family having working members who need to go out for work every morning. The purpose of making this paper is to elaborate our target of what help we can provide using a simple internet website. The site will be super simple to use so that people having a digital device find it easy to use. People can select by the characteristic details & qualification through the site so that they can hire someone for couple of time to take proper care to their loved ones when they are not around. </h3>
            </div>

        </div>

    </section>
    <!--About Us Section-->
    <section class="about" id="about">

        <div class="container">
            <div class="about-us">
                <div class="about-title">
                    <h2>About Us</h2>
                </div>

                <div class="row">
                                        
                    <div class="col-md-4">
                    <div class="card">
                        <img src="img/saimun.png" class="card-img-top" alt="Saimun">
                        <div class="card-body">
                            <h5 class="card-title">Sayed Musfiquer Rahman</h5>
                            <p class="card-text">CEO & FOUNDER<br>saimunrahman29@gmail.com</p>
                            <a href="https://www.facebook.com/saimunrahman031/" target="_blank" class="btn btn-primary">Facebook</a>
                        </div>
                    </div>
                </div>
                    
                    
                    <div class="col-md-4">
                    <div class="card">
                        <img src="img/kaushik.png" class="card-img-top" alt="KAUSHIK DEBDAS">
                        <div class="card-body">
                            <h5 class="card-title">KAUSHIK DEBDAS</h5>
                            <p class="card-text">CEO & FOUNDER<br>kaushikdebdas27@gmail.com</p>
                            <a href="https://www.facebook.com/kaushik.debdas/" target="_blank" class="btn btn-primary">Facebook</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tanzeen.png" class="card-img-top" alt="TANZEEN">
                        <div class="card-body">
                            <h5 class="card-title">KHURSHIDA JAHAN TANZEEN</h5>
                            <p class="card-text">CEO & FOUNDER<br>mayaboty123@gmail.com</p>
                            <a href="https://www.facebook.com/tanzeen.jahan" target="_blank" class="btn btn-primary">Facebook</a>
                        </div>
                    </div>
                </div>
                    
                    <div class="col-md-4">
                    <div class="card">
                        <img src="img/rafsan.png" class="card-img-top" alt="RAFSAN">
                        <div class="card-body">
                            <h5 class="card-title">IFFAT HAQUE RAFSAN</h5>
                            <p class="card-text">CEO & FOUNDER<br>rafsan69@gmail.com</p>
                            <a href="https://www.facebook.com/rafsan.haq.9" target="_blank" class="btn btn-primary">Facebook</a>
                        </div>
                    </div>
                </div>
                    
                    <div class="col-md-4">
                    <div class="card">
                        <img src="img/shejuty.png" class="card-img-top" alt="Shejuty">
                        <div class="card-body">
                            <h5 class="card-title">Tunajjina Islam Shejuty</h5>
                            <p class="card-text">CEO & FOUNDER<br>tunajjinashejuty@gmail.com</p>
                            <a href="https://www.facebook.com/Tunaj.Shejuty" target="_blank" class="btn btn-primary">Facebook</a>
                        </div>
                    </div>
                </div>
                    
                    
                    <div class="col-md-4">
                    <div class="card">
                        <img src="img/prodip.png" class="card-img-top" alt="Prodip Saha">
                        <div class="card-body">
                            <h5 class="card-title">Prodip Saha</h5>
                            <p class="card-text">CEO & FOUNDER<br>prodipsaha@gmail.com</p>
                            <a href="https://www.facebook.com/media/set/?set=a.1374249806170568&type=3" target="_blank" class="btn btn-primary">Facebook</a>
                        </div>
                    </div>
                </div>
                
                
                    
                </div>
            </div>
        </div>
    </section>
    <!--Footer Section-->
    
    <footer>
<p class="p-3 bg-dark text-white text-center">CareGiver Management System</p>        
</footer>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>*/