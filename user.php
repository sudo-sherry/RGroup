<?php
	 include_once 'conn.php';
?>


<?php 
  session_start();
  
  $name = $_SESSION['uname'];
  

?>

<!DOCTYPE html>
<html>
<head>
	<title>user</title>
	<link rel="stylesheet" href="css/user.css">
	<link rel="stylesheet" href="css/dropdown.css">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script type="text/javascript" src="js/index.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
	

  <div class="modal fade" id="addproj">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title" id="msg">Add-Project</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <form action="addproj.php" method="POST" class="myform">
    
            <input class="form_element" type="text" name="pname" placeholder="project name" required><br>
            <input type="text-area" style="height:100px;" class="form_element" name="desc" placeholder="Description" required><br>
            <input type="file" style="height:100px;" class="form_element" name="" placeholder="Description" required><br>
            <button type="submit" style="margin-top:5%;margin-bottom:5%;" class="w3-btn w3-round-xxlarge" name="submit">Add</button>
          </form>
          
        </div>
      </div>
    </div>

<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="#">Hi!, <?php echo $name;?></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Statistics</a>
      <div class="dropdown-menu">
      	
        <a class="dropdown-item" href="#">Js</a>
        <a class="dropdown-item" href="#">J-Query</a>
        <a class="dropdown-item" href="#">c++</a>
        
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log Out</a>
    </li>    
</ul>
  <div class="nav" style="display:inline;">
	<div class="card" style="width:400px"  style="display:inline;">
	    <a style="width:70%; margin-left: auto; margin-right: auto;cursor:pointer;"  data-toggle="modal" data-target="#addproj" ><img class="card-img-top" src="img/pb.jpg" alt="Card image" style="width:70%; margin-left: auto; margin-right: auto" ></a>
	    <div class="card-body">
	      <h4 class="card-title">Add projects</h4>
	      <p class="card-text">Add Your Projects Here</p>
	      <a href="#" data-toggle="modal" data-target="#addproj" class="btn btn-primary">ADD PROJECTS</a>
	    </div>
	</div>



	<div class="card" style="width:400px"  style="display:inline;">
	    <img class="card-img-top" src="img/abcd.jpg" alt="Card image" style="width:100%  margin-left: auto; margin-right: auto">
	    <div class="card-body">
	      <h4 class="card-title">Tulsi Care</h4>
	      <p class="card-text">Tulsi Care is about health care providing online solution for rular and urban health centre.</p>
	      <a href="infoprojct.php?gname=TulsiCare" class="btn btn-primary">View Project</a>
	    </div>
	</div>
  </div>

  <div class="card" style="width:400px"  style="display:inline;">
      <img class="card-img-top" src="img/419.jpg" alt="Card image" style="width:100%  margin-left: auto; margin-right: auto">
      <div class="card-body">
        <h4 class="card-title">Rgroup</h4>
        <p class="card-text">Rgroup project is about your group and stats about your ides of hackfest</p>
        <a href="infoproject.php?gname=Rgroup" class="btn btn-primary">View Project</a>
      </div>
  </div>
  </div>

  <?php

      $sql = "select * from grp where name='ARpic';";
      $result = mysqli_query($conn,$sql);
      //echo $sql."asdf";
      $resultcheck = mysqli_num_rows($result);   
      while($row = mysqli_fetch_assoc($result)){
      $alpha = $row['name'];
      $beta = $row['descp'];
      echo '<div class="card" style="width:400px"  style="display:inline;">
      <img class="card-img-top" src="img/ar.png" alt="Card image" style="width:100%  margin-left: auto; margin-right: auto">
      <div class="card-body">
        <h4 class="card-title">'.$alpha.'</h4>
        <p class="card-text">'.$beta.'</p>
        <a href="#" class="btn btn-primary">View Project</a>
      </div>
  </div>';
        
      }
      //header("Location: user.php");
      //exit();
  ?>

<script >
  console.log('asdmh');
  console.log('df');
</script>
</body>
</html>