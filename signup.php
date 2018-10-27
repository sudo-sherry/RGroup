<?php 
	include_once 'conn.php';
 ?>

<?php
	
session_start();
if(isset($_POST["submit"])){

	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$username = $_POST["username"];
	$pwd = $_POST["password"];
	$mail = $_POST["emailid"];
	$sql = "select * from users where addr='".$mail."' or username = '".$username."';";
	$result = mysqli_query($conn,$sql);
	$numofrows = mysqli_num_rows($result);
	if($numofrows>0){
		header("Location: index.php?signup=taken");
	    exit();
	}

	$sql = 'INSERT INTO users (fname,lname,username,addr,pwd)
	VALUES("'.$fname.'","'.$lname.'","'.$username.'","'.$mail.'","'.$pwd.'")';

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	    $_SESSION['mail'] = $mail;
	    $_SESSION['fname'] = $fname;
	    $_SESSION['lname'] = $lname;
	    $_SESSION['uname'] = $username;
	    header("Location: user.php");
	    exit();

	} else {
	    header("Location: index.php?signup=error");
	}
	}else{

	header("Location: index.php?signup=error");

}




?>