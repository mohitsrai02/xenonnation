<?php 
include 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Xenon Nation</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">


      <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>

  
  <script>
    $(document).ready(function() {

$('.lnk').on( "click", function() {
var upd=$(this).attr("id");
    var a1 = upd.split("_");
    var edit = a1[1];
 //  alert(edit);
 $("#h44").empty();
 $("#desc_p").empty();
$.ajax({
    type: "POST",
    url: 'portf.php',
     data : { id : edit},
    success: function(data){
       var obj = JSON.parse(data);        
        var p_nam=obj[0]["nam"];
        var p_id=obj[0]["id"];
        var p_andr=obj[0]["andr"];
        var p_ios=obj[0]["ios"];
        var p_web=obj[0]["web"];
        var p_type=obj[0]["type"];
        var p_desc=obj[0]["desc"];
        var p_icon=obj[0]["icon"];
        var p_img=obj[0]["img"];

  //for android
  if(p_andr.length != 0){
    $('#and').css('display', 'inline-block');
  }
  else{
    $('#and').css('display', 'none');
  }
  //for ios
  if(p_ios.length != 0){
    $('#ioss').css('display', 'inline-block');
  }
  else{
    $('#ioss').css('display', 'none');
  }
  //for ios
  if(p_web.length != 0){
    $('#webb').css('display', 'inline-block');
  }
  else{
    $('#webb').css('display', 'none');
  }
    $("#idd").val(p_id);
    $("#name").val(p_nam);
    $("#platform").val(p_type);
    $("#androidd").val(p_andr);
    $("#ioss").val(p_ios);
    $("#webb").val(p_web);

    $("#h44").text(p_nam);
    $("#desc_p").text(p_desc);
    
    $("#lnk_and").attr('href',p_andr);
    $("#lnk_ios").attr('href',p_ios);
    $("#lnk_web").attr('href',p_web);

    $("#p_img").attr('src',p_img );

 }
  });
});
});
    </script>
</head>
<body data-spy="scroll" data-target="#navbar-example">
  <div id="preloader"></div>
  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><img src='img/logo.png'></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index.php#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index.php#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index.php#team">Team</a>
                  </li>
                  <li class="active">
                    <a class="page-scroll" href="portfolio.php">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index.php#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->


  
  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Portfolio</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu row">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                
                <?php
                            $type=mysqli_query($conn,"SELECT cat_name FROM portfolio_catg");
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                        <li>
                    <a href="#" data-filter=".<?php echo $row["cat_name"];?>"><?php echo $row["cat_name"];?></a>
                  </li>
                            <?php
                            }?>
              </ul>
            </div>
          </div>
        </div>
      
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
      <?php
$pi = 0;
$portf=mysqli_query($conn,"SELECT * FROM portfolio");
while ($ro=mysqli_fetch_assoc($portf))
{
    $types = explode(",",$ro["proj_type"]);
    $defin = implode(" ",$types);
    ?>
          <div class="col-md-3 col-sm-3 col-xl-3 <?php echo $defin;?>">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img style='height:250px; width:300px;' src="<?php echo $ro["proj_icon"];?>"></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class='lnk' id='pr_<?php echo $ro["proj_id"];?>' type="button" data-toggle="modal" data-target="#myModal">
                      <h4><?php echo $ro["proj_name"];?></h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }
          ?>
        </div>
        </div>
        </div>
        </div>
          <!-- single-awesome-project end -->
  <!-- awesome-portfolio end -->

<div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style='background-color: rgba(0,0,0,0.05);'>
          <h4 id='h44' class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body"  style='background-color: rgba(0,0,0,0.2);'>
<div class='row'>
<div class='col-sm-12'><img src='' id='p_img'></div>

<div class='col-sm-12'><strong>Description:</strong></div>
<div class='col-sm-12' id='desc_p'>Desc</div>
<div class='col-sm-12'><center>
<a href='' id='lnk_and'><img width='200px' height='22px' src='img/android.png' id='and'></a>
<a href='' id='lnk_web'><img width='200px' height='22px' src='img/www.png' id='ioss'></a>
<a href=''id='lnk_ios'><img width='200px' height='22px' src='img/appstore.png' id='webb'></a>
</div>
</center>
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><img src='img/xenon.png'></h2>
                </div>

                <p>At Xenon, we believe that our clients deserve the best &best is the only thing that we deliver to our clients. Our talent pool ensures that whatever be the reason and whichever be the cause the quality of the product is never compromised. This is what makes us a company whose main motive has always been “Client First”.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Information</h4>
                <p>
                  XENON NATION, a Registered Software Development Company founded in the year 2012 by an array of amatory technologists living a common intent, which was generating & creating unique & great thoughts with a potential of driving progress for the clients & enhance its usability through enterprise solution.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +91 731- 4033784</p>
                  <p><span>Email:</span> info@ladder4u.com</p>
                  <p><span>Working Hours:</span> 9:30am-6:30pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Xenon Nation</strong>. All Rights Reserved 2018
              </p>
            </div>
            <div class="credits">
              Designed by <a href="https://xenonnation.com/">Xenon Nation</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</body>

</html>