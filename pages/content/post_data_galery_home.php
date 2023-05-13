
        <!-- Page title -->
        <section id="page-title" style="background-image: url(homepages/galery.jpg)">
            <div class="container">
                <div class="page-title">
                    
                </div>
             
            </div>
        </section>
        <!-- end: Page title -->

<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'config/dbconfig.php';
	
	if(isset($_POST['btnsave']))
	{
		
		$username = str_replace(" ", "-",$_POST['user_name']); // post with str reflace
		$tanggal = $_POST['tanggal'];// user name
		$kategori = $_POST['kategori'];// user name
		$harga = $_POST['harga'];// user name
		$ukuran = $_POST['ukuran'];// user name
		$warna = $_POST['warna'];// user name
		$berat = $_POST['berat'];// user name
		$kualitas = $_POST['kualitas'];// user name
		$userjob = $_POST['user_job'];// user email
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($username)){
			$errMSG = "Please Enter Username.";
		}
		else if(empty($userjob)){
			$errMSG = "Please Enter Your Job Work.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 950000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large. MAX 950 KB";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO foto(userName,tanggal,kategori,userProfession,userPic) VALUES(:uname, :tanggal, :kategori,  :ujob, :upic)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':tanggal',$tanggal);
			$stmt->bindParam(':kategori',$kategori);
			
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);
			
			if($stmt->execute())
			{
				$successMSG = "Data Tersimpan";
				
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>


<div class="container">


	<div class="page-header">
    	<a class="btn btn-danger" href="session.php?p=post_galery_home"> <span class="glyphicon glyphicon-eye-open"></span> Back </a>    Batamolehlo 
		<a class="btn btn-success" href="session.php?p=post_data_galery_home"> <span class="glyphicon glyphicon-eye-open"></span> Tambah Lagi </a>
    </div>
    

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">size Image 20x6.5</label></td>
        <td><input class="form-control" type="hidden" name="user_name" placeholder=" " value="home" required /></td>
    </tr>
	
	   <tr>
    	<td><label class="control-label">tanggal</label></td>
        <td><input class="form-control" type="text" name="tanggal" placeholder="tanggal" value="<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("Y-m-d", $tanggal);
echo $tglsekarang;
?>"" /></td>
    </tr>
	
	
	
<input class="form-control" type="hidden" name="kategori" placeholder=" " value="home" required />
<input class="form-control" type="hidden"  name="user_job" value="." placeholder="Enter text ..." />
		

  
    
    <tr>
    	<td><label class="control-label">Foto </label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-success">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>


</div>




<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>

<link rel="stylesheet" type="text/css" href="bootstrap-wysihtml5-master/lib/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="bootstrap-wysihtml5-master/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="bootstrap-wysihtml5-master/src/bootstrap-wysihtml5.css"></link>




</head>
<body>


<script src="bootstrap-wysihtml5-master/lib/js/wysihtml5-0.3.0.js"></script>
<script src="bootstrap-wysihtml5-master/lib/js/jquery-1.7.2.min.js"></script>
<script src="bootstrap-wysihtml5-master/lib/js/prettify.js"></script>
<script src="bootstrap-wysihtml5-master/lib/js/bootstrap.min.js"></script>
<script src="bootstrap-wysihtml5-master/src/bootstrap-wysihtml5.js"></script>

<script>
	$('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>

</body>
</html>

    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

 <!--Plugins-->

 <script src="js/plugins.js"></script>

<!--Template functions-->
 <script src="js/functions.js"></script> 

</body>

</html>
