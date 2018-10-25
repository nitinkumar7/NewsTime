<?php

$conn = mysqli_connect('localhost','root', '', 'commentsection');

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

function setBollyComments($conn){
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO bollycmnt (uid,date,message) VALUES ('$uid', '$date', '$message')";
		$result = mysqli_query($conn,$sql);
	}
}

function getBollyComments($conn){
	$sql = "SELECT * FROM bollycmnt";
	$result = mysqli_query($conn,$sql);
	while ( $row = $result->fetch_assoc()) {
		echo "<div class='comment-box'><p>";
		echo $row['uid']."<br>";
		echo $row['date']."<br>";
		echo nl2br($row['message']);
		echo "</p>
			<form class='delete-form' method='POST' action='".deleteBollycmnt($conn)."'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<button name='commentDelete' type='submit'>Delete</button>
			</form>
			<form class='edit-form' method='POST' action='../php/editBollycmnt.php'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<input type='hidden' name='uid' value='".$row['uid']."'>
				<input type='hidden' name='date' value='".$row['date']."'>
				<input type='hidden' name='message' value='".$row['message']."'>
				<button>Edit</button>
			</form>	
		</div>";
	}
		
}

function editBollyComments($conn){
	if (isset($_POST['commentSubmit'])) {
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "UPDATE bollycmnt SET message='$message' WHERE cid='$cid'";
		$result = mysqli_query($conn,$sql);
		header("Location: ../pages/bollywood.php");
	}
}

function deleteBollycmnt($conn){
		if (isset($_POST['commentDelete'])) {
		$cid = $_POST['cid'];

		$sql = "DELETE FROM bollycmnt WHERE cid='$cid'";
		$result = mysqli_query($conn,$sql);
		header("Location: ../pages/bollywood.php");
	}	
}