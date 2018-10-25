<?php

  date_default_timezone_set('Asia/Calcutta');
  include '../php/bollycmnt.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>

	<link rel="stylesheet" type="text/css" href="../css/time.css">
  	<link rel="stylesheet" type="text/css" href="../css/cmntstyle.css">
  	<style type="text/css">
  		body{
  			background-color: #ddd;
  		}
  		textarea{
  			background-color: #fff;
  			margin-top: 10px;
  			margin-left: 10px;
  		}
  		button{
  			margin-left: 10px;	
  		}
  	</style>
</head>
<body>
<div>
    <?php
    	$cid = $_POST['cid'];
        $uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

        echo "<form method='POST' action='".editBollyComments($conn)."'>
           <input type='hidden' name='cid' value='".$cid."'>
           <input type='hidden' name='uid' value='".$uid."'>
           <input type='hidden' name='date' value='".$date."'>
           <textarea name='message'>".$message."</textarea><br>
           <button name='commentSubmit' type='submit' id='btn2'>Edit</button>
         </form>";
    ?>
</div>
</body>
</html>