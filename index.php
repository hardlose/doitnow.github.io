 <?php
			  /*CODED BY : BMCODER */
			  /*    Kolayca.xyz    */
              /*        THT        */

			  $key= 'APİKEYBURAYA'; // API Key - APINIZI http://api.kolayca.xyz Sitesinden Alabilirsiniz.

error_reporting(0);
			   if (isset($_POST['begeni'])){
				   
 $gonderilen = $_POST['link'];
 if($gonderilen==""){
$error = 2;
$sonuc =  '<strong><div class="alert alert-danger">Lütfen bir link giriniz.</div></strong>';
 }else{
$insta   = 'instagram.com';
$varmi = strpos($gonderilen, $insta);

if ($varmi === false) {
$error = 1;
$sonuc = '<strong><div class="alert alert-danger">Lütfen bir instagram linki giriniz.</div></strong>
<script>
location.href="#basarisiz";
</script>';
} else {
$error= 0;
$sonuc ='<strong> <div class="col-md-12 col-xl-6">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted"><h1><p><img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" width="40">Basarılı</p></h2>'.$gonderilen.' <br>Linkine İzlenme Gönderimi Başladı Sayfadan Ayrılmayınız.

<form action="index.php">
<button class="btn btn-outline-info ml-1 waves-effect waves-light">Gönderimi Durdur</button></form></div></div></div></div></strong><div style="display:none">
<script>
location.href="#basarili";
</script>';
			   }}}
				  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <title>BMCODER - Instagram Sifresiz İzlenme</title>
   
        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo $siteadres?>/favicon.png" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="./assets/plugins/morris/morris.css" />

        <!-- App css -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                <div class="topbar-main">
                    <div class="container-fluid">

                        <!-- Logo container-->
                        <div class="logo">
                            <!-- Text Logo -->
                            <a href="./index.php" class="logo">
                                BMCODER
                            </a>
                            <!-- Image Logo -->
                            <!-- <a href="index.html" class="logo">
                                <img src="assets/images/logo-sm.png" alt="" height="22" class="logo-small">
                                <img src="assets/images/logo.png" alt="" height="24" class="logo-large">
                            </a> -->

                        </div>
                        <!-- End Logo container-->


                        <div class="menu-extras topbar-custom">

                            <ul class="list-inline float-right mb-0">
                                
                               

                                   
                               
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>

                            </ul>
                        </div>
                        <!-- end menu-extras -->

                        <div class="clearfix"></div>

                    </div> <!-- end container -->
                </div>
                <!-- end topbar-main -->

            
            </header>
            <!-- End Navigation Bar-->

                <div class="row">
                    <div class="col-12 mb-4"><center><i class="mdi mdi-video" style="font-size:150px;color:white;"></i>
<br><br><br><br> <div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-info">153,852</h3>
                                Yıllık İzlenme Gönderimi
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple">13,514</h3>
                                Aylık İzlenme Gönderimi
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-primary">3689</h3>
                                Haftalık İzlenme Gönderimi
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger">520</h3>
                                Günlük İzlenme Gönderimi
                            </div>
                        </div>
                    </div>
                </div>
				<?php echo $sonuc; ?>

                        <div class="mt-4 text-center">
<form method="post" >
                  <input type="url" name="link" class="form-control"  placeholder="Medya Urlsi." >      <br>              
				  <button type="sumbit" class="btn btn-outline-info ml-1 waves-effect waves-light" type="sumbit" name="begeni">Gönderimi Başlat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   <center> <div class="col-md-12 col-xl-6">
                        <div class="card text-center m-b-50">
                            <div class="mb-6 card-body text-muted"><?php if (isset($_POST['begeni'])){
							   if($error== 0){
							   echo'<center><img src="https://i.gifer.com/XwHw.gif" width="300"><br><p>Api <a href="http://kolayca.xyz">Kolayca.xyz</a> Sitesinden Çekilmektedir.</p><div style="display:none">
			   ';
			   							   include"beratmhtr.php";
}
			   else{
				   echo'<center><h2><p>HATA</p></h2><div style="display:none">';
			   }
				  }
?>
                  <h3>Reklam Alanı</h3>
				  <p>Reklam Vermek İçin İnstagram : @beratmuhtar_</p>
				  <p>Coded By : <a href="http://www.kolayca.xyz">Kolayca.xyz</a>
				 </div></div>
				 		  
               </div>
            </div>

      
                <!-- end row -->

         
        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2018 BMCODER - İnstagram Şifresiz İzlenme <i class="mdi mdi-video text-danger"></i> by Turkhackteam.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/modernizr.min.js"></script>
        <script src="./assets/js/waves.js"></script>
        <script src="./assets/js/jquery.nicescroll.js"></script>
        <script src="./assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="./assets/plugins/morris/morris.min.js"></script>
        <script src="./assets/plugins/raphael/raphael-min.js"></script>

        <script src="./assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="./assets/js/app.js"></script>

    </body>
</html>