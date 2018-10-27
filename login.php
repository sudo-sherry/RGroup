<?php 
	include_once 'conn.php';
 ?>
<?php 

	session_start();
	
	
	if(isset($_POST["submit"])){
		$username = ($_POST['username']);
		$pwd = ($_POST['password']);
		$sql = "select * from users where username='".$username."';";
		$result = mysqli_query($conn,$sql);
		$numofrows = mysqli_num_rows($result);
		if($numofrows < 1){
			header("Location: index.php?login=error1");
			exit();
		} else{
			if($row = mysqli_fetch_assoc($result)){
				$pass = $row['pwd'];
				if(!strcmp($pwd,$pass)){
					echo "successfull login";
					session_start();
					$_SESSION['fname'] = $row['FirstName'];
					$_SESSION['lname'] = $row['LastName'];
					$_SESSION['mail'] = $row['addr'];
					$_SESSION['uname'] = $row['username'];
					header("Location: user.php");
					//header("Location: index.php?login=succ");
					exit();
				}
				else{
					header("Location: index.php?login=error2");
					exit();
				}
			}else{
				
				exit();
			}
		}
		}else{
			header("Location: index.php?login=error3");
			exit();
		}
?>