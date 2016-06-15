<!--php for session-->
<?php
	session_start();
  
	if(!ISSET($_SESSION['nip'])){
		header("location:RaporOnline.html");
	}
	else{
	
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Rapor Online | Beranda</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

				<div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+62822 7385 4857 </a> </li>
                            <li> <i class="fa fa-envelope"></i> <a href="mailto:">inayaturn@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
				</div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

					  </button>
					  
					  <a class="navbar-brand" href="index.html"><img src="assets/images/raporonline-logo.png" alt=""></a>
					  
					</div>

					<div id="navbar" class="navbar-collapse collapse pull-right">

					  <ul class="nav navbar-nav">

						<li><a class="is-active" href="index.html">BERANDA</a></li>
						<li class="has-child"><a href="#">PROFIL</a>
							<ul class="submenu">
								 <li class="submenu-item"><a href="#">Biodata</a></li>
								 <li class="submenu-item"><a href="#">Ubah Password</a></li>
							</ul>
						</li>
						
						<li class="has-child"><a href="#">NILAI</a>
							<ul class="submenu">
								 <li class="submenu-item"><a href="#">Isi Nilai</a></li>
								 <li class="submenu-item"><a href="#">Edit Nilai</a></li>
								 <li class="submenu-item"><a href="#">Cetak Rapor</a></li>
							</ul>
						</li>

						<li><a href="php/logout.php">KELUAR</a></li>	<!--logout-->

					  </ul>

					</div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->
	

    <div class="section-home our-sponsors animate-onscroll fadeIn">
    
        <div class="container">

            <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>

            <ul class="owl-carousel list-unstyled list-sponsors">

              <li> <img src="assets/images/sponsors/bus.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
              <li> <img src="assets/images/sponsors/one-world.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>
              <li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>

              <li> <img src="assets/images/sponsors/bus.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
              <li> <img src="assets/images/sponsors/one-world.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>
              <li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>

            </ul>

        </div>

    </div> <!-- /.our-sponsors -->


    

	<!--footer-->
    <footer class="main-footer">
        <div class="footer-top"></div>
        <div class="footer-main">
            <div class="container">                
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col">						
                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <p>
                                    <strong>Rapor Online</strong> merupakan sebuah situs web yang dibangun untuk mempermudah sekolah dalam pendataan nilai-nilai para murid.
                                </p> 
                                <p>
                                    Pada web ini guru dapat masuk pada menu <i>login</i> dengan cara memasukkan NIP serta password, selanjutnya guru dapat memasukkan dan mengedit nilai siswa-siswanya.
                                </p>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-col">							
                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <div class="footer-form">                                    
                                    <form action="php/mail.php" class="ajax-form">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">
                        
                                            <div class="alert alert-success" role="alert">
                                              
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                              
                                            </div>
                                            
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

        <div class="footer-bottom">

            <div class="container text-right">
                RaporOnline @ copyrights 2016 - by <a href="#" target="_blank">Antiformat14</a>
            </div>
        </div>
        
    </footer> <!-- main-footer -->




    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
<?php
	}
?>
<!--/.php for session-->