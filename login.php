<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
<title>Batam Olelo | Oleh Oleh Kekinian Batam</title>
    <!-- Stylesheets & Fonts -->
   
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet"> </head>

<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Section -->
        <section class="fullscreen" style="background-image: url(homepages/login_bg.jpg)">
            <div class="container container-fullscreen">
                <div class="text-middle">
                   
                    <div class="row">
                        <div class="col-md-3 center p-30 background-white b-r-6">

<div align="center">	<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '  Anda Telah Keluar';
	} else if ($_GET['error'] == 2) {
		echo ' <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>LOGIN GAGAL CEK USERNAME & PASSWORD</strong> ...!
</div>';
	} else if ($_GET['error'] == 3) {
		echo '<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Data Gagal Tersimpan</strong> Cek Input Data!
</div>';
	} else if ($_GET['error'] == 4) {
		echo '  <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Data Dihapus</strong> ....!
</div>';
	} else if ($_GET['error'] == 5) {
		echo 'Login gagal';
	} else if ($_GET['error'] == 6) {
		echo '  gagal login';
	}
	
}
?></div>

                            <h3>Batam Olelo   | <a href="index.php">Home</a> </h3>Oleh Oleh Kekinian Batam
                           
								 <form action="model/aksi_login.php" method="POST" class="form-transparent-grey">
                                <div class="form-group">
                                    <label class="sr-only">Username or Email</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username or Email">
                                </div>
                                <div class="form-group m-b-5">
                                    <label class="sr-only">Password</label>
                                    <input type="password"  name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group form-inline text-left ">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"><small> Remember me</small>
                                        </label>
                                    </div>
                                    <a href="#" class="right"><small>Lost your Password?</small></a>
                                </div>
                                <div class="text-left form-group">
                                    <button type="submit" class="btn btn-default">Login</button>

                                </div>
                            </form>
                            <p class="small">Don't have an account yet? <a href="#">Register New Account</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

    <!--Plugins-->
     <script src="js/jquery.js"></script>
     <script src="js/plugins.js"></script>

    <!--Template functions-->
     <script src="js/functions.js"></script>
</body>

</html>
