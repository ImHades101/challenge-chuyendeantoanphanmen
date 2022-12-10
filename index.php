<?php
session_start();
if(isset($_GET["file"]) && !empty($_GET["file"])){
  include($_GET["file"]);

}else {


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Freelance Photographer PSD Website Template">
    <meta name="keywords" content="HTML,CSS,Bootstrap,JavaScript">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Freelance Photographer Website Template</title>

    <!-- Bootstrap CSS and font-awesome -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,500i,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<!-- Header Section Start -->
<header>
  <!-- Container Section Start -->
    <div class="container">
       <!-- Row Start -->
        <div class="row">
           <!-- First column Start -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="https://www.template.net/editable/websites" target="_blank"><p>www.osomtheme.com</p></a>
            </div>
           <!-- Second column Start -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a class="logo" href="index.html"><img src="images/logo/logo.jpg" alt="logo"></a>
            </div>
           <!-- Third column Start -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true" style="color:#0072bc;font-size: 20px;"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true" style="color:#00adef;font-size: 20px;"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" aria-hidden="true" style="color:#ed1c24;font-size: 20px;"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true" style="color:#f99d1c;font-size: 20px;"></i></a>
                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true" style="color:#a36109;font-size: 20px;"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true" style="color:#ed145a;font-size: 20px;"></i></a>
                </div>
            </div>
        </div>
      <!-- Row Ended -->
    </div>
  <!-- Container Section Ended -->
</header>
<!-- Header Section Ended -->

<!-- Navbar Section Start -->
<nav id="navbar">
   <!-- Container Section Start -->
    <div class="container">
       <!-- navbar-toggle -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
             <i class="fa fa-bars" aria-hidden="true" style="color:white;"></i>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav navbar-center">
             <li><a class="active" href="/cado/?file=home.php">Home Page</a></li>
             <li class="hidden-xs">-</li>
             <li><a href="/cado/?file=blog.php">Blog</a></li>
             <li class="hidden-xs">-</li>
             <li><a href="/cado/?file=blog-page.php">Blog Page</a></li>
             <li class="hidden-xs">-</li>
             <li><a href="#">Betting Tips</a></li>
             <li class="hidden-xs">-</li>
             <li><a href="#">How To Play</a></li>
             <li class="hidden-xs">-</li>
             <li><a href="#">Authorized Dealer</a></li>
             <li class="hidden-xs">-</li>
             <li><a href="#">Untilities</a></li>
             
             <?php if (isset($_SESSION['user'])){ ?>
              <li class="hidden-xs">-</li>
             <li><a href="/cado/?file=profile.php">Profile</a></li>
             <li class="hidden-xs">-</li>
             <li><a href="/cado/?file=logout.php">Logout</a></li>
             <?php }else{?>
              <li class="hidden-xs">-</li>
             <li><a href="/cado/?file=login.php">Login</a></li>
              <?php } ?>
         </ul>
        </div>
      </div>
   <!-- Container Section Ended -->
</nav>
<!-- Navbar Section Ended -->

<!-- Jumbotron Section Start -->
<section class="jumbotron">
<div class="container">
   <!-- Row Start -->
    <div class="row">
      <div class="col-md-12 inner-contant" data-aos="zoom-in" data-aos-duration="500">
         <h1>Hello! we are osom</h1>      
         <h3>a freelance photography agency</h3>
         <p>an experienced photography people to serve any peojects!</p>
      </div>
    </div>
   <!-- Row Ended -->
</div>
</section>
<!-- Jumbotron Section Ended -->

<!-- Portfolio Section Start -->

<section class="portfolio">
  <!-- Container-fluid Start -->
   <div class="container-fluid">
    <div class="row" style="z-index: 999; position: relative; margin-top: -107px;padding-bottom: 60px;">
            <button class="active btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="portarits">portarits</button>
            <button class="btn btn-default filter-button" data-filter="landscapes">landscapes</button>
            
            
   </div>

<!-- Row Start -->
  <div class="row">
   <!-- Main_portfolio_content Start -->
    <div class="main_portfolio_content">
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter portarits">
           <div>
            <img src="images/portfolio/b.jpg" class="img-responsive" alt="image-1" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i></a> (23)</span>
                </h6>
            </div>
           </div>					
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter landscapes">
           <div>
            <img src="images/portfolio/b5.jpg" class="img-responsive" alt="image-2" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span> - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i></a> (23)</span>
                </h6>
            </div>	
           </div>
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter fashion weddings">
           <div>
            <img src="images/portfolio/b.jpg" class="img-responsive" alt="image-3" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                    <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>	
           </div>							
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter portarits fashion">
           <div>
            <img src="images/portfolio/b6.jpg" class="img-responsive" alt="image-4" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  -<a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>	
           </div>							
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter landscapes portarits">
           <div>
            <img src="images/portfolio/b7.jpg" class="img-responsive" alt="image-5" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>	
           </div>							
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter weddings sprinkle">
           <div>
            <img src="images/portfolio/p2.jpg" class="img-responsive" alt="image-6" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>	
           </div>							
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter weddings">
           <div>
            <img src="images/portfolio/p1.jpg" class="img-responsive" alt="image-7" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>	
           </div>							
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter fashion">
           <div>
            <img src="images/portfolio/b1.jpg" class="img-responsive" alt="image-8" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>	
           </div>							
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter  portarits">
           <div>
            <img src="images/portfolio/b2.jpg" class="img-responsive" alt="image-9" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>
           </div>
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter landscapes">
           <div>
            <img src="images/portfolio/p3.jpg" class="img-responsive" alt="image-10" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>
           </div>
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter weddings">
           <div>
            <img src="images/portfolio/p4.jpg" class="img-responsive" alt="image-11" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>	
           </div>
        </div>
        <div class="gallery_product col-md-3 col-sm-4 col-xs-6 filter fashion">
           <div>
            <img src="images/portfolio/p5.jpg" class="img-responsive" alt="image-12" />
            <div class="portfolio_images_overlay text-center">
                <h6>people on tracks <br>
                <span>Food & Diet  - <a href="#"><i class="fa fa-comment" aria-hidden="true" style="color: white;"></i> </a> (23)</span>
                </h6>
            </div>
           </div>								
        </div>
    </div>
<!-- Main_portfolio_content Ended -->
  </div>
<!-- Row Ended -->
</div>
<!-- Container-fluid Ended -->
</section>
<!-- Portfolio Section Ended -->

<!-- Contact Section Start -->
<section id="services">
  <!-- Container Start -->
    <div class="container">
      
       <!-- First Row Start -->
        <div class="row service-1" data-aos="fade-up" data-aos-duration="500">
            <div class="col-xs-12 col-sm-12  col-md-9">
                <h2>Got a project in mind?</h2>
                <h3>We are here to serve you in photography, just call us!</h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                  <a href="Contact-us.html" class="btn btn-default">contact us</a>
            </div>
        </div>
       <!-- First Row Ended -->
       
       <!-- Second Row Start -->
        <div class="row service-2">
           <div class="col-md-12" data-aos="fade-up" data-aos-duration="500">
            <h2>What we serve you?</h2>
            <p>we have vaste range of photography services to serve</p>
           </div>
        </div>
       <!-- Second Row Ended -->
        
         <div class="service-3" data-aos="fade-right" data-aos-duration="500">
       <!-- First Row Start -->
        <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Studio Portraits</h5>
                 </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Landscapes</h5>
                 </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Food & Drinks</h5>
                 </div>
              </div>
        </div>
    <!-- First Row Ended -->
             
    <!-- Second Row Start -->
           <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Fashion</h5>
                 </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Pre Weddings</h5>
                 </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Drone Photo</h5>
                 </div>
              </div>
           </div>
    <!-- Second Row Ended -->  
          
    <!-- Third Row Start--> 
          <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Studio Portraits</h5>
                 </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Landscapes</h5>
                 </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <div class="col-1">
                  <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                  <h5>Food & Drinks</h5>
                 </div>
              </div>
           </div>
    <!-- Third Row Ended-->
        </div>
    </div>
  <!-- Container Ended -->
</section>
<!-- Contact Section Ended -->

<!-- Blog Section Start -->
<section id="blog">
     <div class="container">   
         <h3 class="margin" data-aos="fade-up" data-aos-duration="500">Read latest blot posts</h3><br>
         <div class="row" style="margin-bottom: 97px;">
           <div class="col-xs-12 col-sm-12 col-md-4">
               <div class="post1" data-aos="zoom-in-right" data-aos-duration="1000">
                 <a href="blog-page.html" class="btn btn-info pg2" role="button">California</a>
                 <a href="blog-page.html"><h2>Beautiful road like waterfall in the california of south most beautiful view.</h2></a>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4"> 
               <div class="post2" data-aos="zoom-in" data-aos-duration="1000">
                 <a href="blog-page.html" class="btn btn-info pg2" role="button">Everest</a>
                 <a href="blog-page.html"><h2>Wonderful Mount everest of india, beautiful scene.</h2></a>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4" data-aos="zoom-in-left" data-aos-duration="1000">
               <div class="post3">
                 <a href="blog-page.html" class="btn btn-info pg2" role="button">south whales</a>
                 <a href="blog-page.html"><h2>My first and good under water photo shoot of whales in south africa.</h2></a>
               </div>
           </div>
         </div>
     </div>
</section>
<!-- Blog Section Ended -->

<!-- Subscribe Section Start -->
<section id="Subscribe" data-aos="fade-up" data-aos-duration="500">
    <div class="container text-center" style="padding: 0 20px;">
       <div>
        <div class="row">
           <div class="col-md-12">
               <h2>Subscribe to newsletter</h2>
               <h3>we will send you worlds best photographs, monthly</h3>   
           </div>
        </div>
        <form class="form row">
           <div class="form-group">
               <input required type="text" class="form-control" id="name" placeholder="your name" name="name">
           </div>
           <div class="form-group">
               <input required type="email" class="form-control" id="email" placeholder="your email id" name="email">
           </div>
           <button type="submit" class="btn btn-default">Subscribe</button>
        </form>
       </div>
    </div>
</section>
<!-- Subscribe Section Ended -->

<!-- Footer Section Start -->

<footer>

    <!-- Footer Links -->
    <div class="container text-md-left">
        <div class="row">

            <!-- First column -->
            <div class="col-sm-6 col-md-3">
                <a href="index.html"><img src="images/logo/logo.png" alt="logo"></a>
                <p>(C) 2017 All Rights Reserved.<span><a href="https://www.template.net/editable/websites" target="_blank">OsomTheme</a></span>. Designed by <span><a href="https://www.template.net/editable/websites" target="_blank">template.net</a></span></p>
            </div>
            <!-- First column -->

            <!--Second column-->
            <div class="col-sm-6 col-md-3 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Our office address</h5>
                <address>
                Eat always fresh vegetables and fruits to keep your self active and energetic!<br/><br/>
                800 2345 5678<br/><a href="https://www.template.net/editable/websites" target="_blank">info@osomthee.com</a>.<br/> 
                </address>
            </div>
            <!-- Second column -->

            <!-- Third column -->
            <div class="col-sm-6 col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Site Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="Photography.html">Photography</a>
                    </li>
                    <li>
                        <a href="blog.html">blog</a>
                    </li>
                    <li>
                        <a href="careers.html">Careers</a>
                    </li>
                    <li>
                        <a href="Contact-us.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- Third column -->

            <!-- Fourth column -->
            <div class="col-sm-6 col-md-4">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Quick Contact</h5>
                   <form>
                       <ul class="list-unstyled">
                          <li class="row">
                             <div class="col-md-6">
                               <input required type="text" class="form-control" placeholder="Name">
                             </div>
                             <div class="col-md-6">
                               <input required type="text" class="form-control" placeholder="Email">
                             </div>
                          </li>
                          <li class="row">
                             <div class="col-md-12">
                               <textarea required class="form-control massage" placeholder="Your Message" rows="5" id="comment"></textarea>
                             </div>
                          </li>
                          <li class="row">
                             <div class="col-md-12">
                               <button type="submit" class="btn btn-default">Contact us</button>
                             </div>
                          </li>
                       </ul>
                   </form>
            </div>
            <!-- Fourth column -->
        </div>
    </div>
    <!-- Footer Links -->

</footer>                        
<!-- Footer Section Ended -->
  
    <!-- jQuery (plugins) -->
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/animate.js"></script>

  </body>
</html>

<?php }?>
