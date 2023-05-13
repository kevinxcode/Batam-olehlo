
<!DOCTYPE html>
<html>
<head>
<style>
.alert {
    padding: 20px;
    background-color: #e0e0e0;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}



</style>


<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #e0e0e0;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>

</head>
<body>
<div Align="center">
<h2>Alert Messages</h2>


<div Align="center" class="alert danger">
  <strong>
   
<?php
include_once '../config/config.php';
if(isset($_GET['id_berita']))
{
	$res=mysql_query("SELECT userPic FROM berita WHERE id_berita=".$_GET['id_berita']);
	$data=mysql_fetch_array($res);
	mysql_query("DELETE FROM berita WHERE id_berita=".$_GET['id_berita']);
	unlink("../user_images/".$data['userPic']);
		echo "";
		
}	
?>
<a class="btn btn-danger btn-icon btn-circle" href="../session.php?p=post&error=4"> KEMBALI<i class="glyphicon glyphicon-trash"></i></a>




	 