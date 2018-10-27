<?php 
	include_once 'conn.php';
 ?>

<?php
	
session_start();
$username = $_SESSION['uname'];

if(isset($_POST["submit"])){

	$pname = $_POST["pname"];
	$desc = $_POST["desc"];

	$sql = 'INSERT INTO grp (username,name,descp)
	VALUES( " '.$username.' ","'.$pname.'","'.$desc.'")';

	if (mysqli_query($conn, $sql)) {
	    header("Location: user.php");
	    exit();

	} else {
	    //header("Location: index.php?signup=error");
	}
	}else{

	//header("Location: index.php?signup=error");

}




?>