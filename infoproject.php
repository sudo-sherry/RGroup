<?php
	
	$event = $_GET['gname'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Info-Project</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/overlay.css">
	<link rel="stylesheet" type="text/css" href="css/todo.css">
	<script type="text/javascript" src="js/pg3.js">
</script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700'>
<link rel="stylesheet" href="todo/css/style.css">
<link rel="stylesheet" href="todo/css/style1.css">
<link rel="stylesheet" href="todo/css/style2.css">
<link rel="stylesheet" href="pie/css/style.css">
 <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
</head>
<body>

     <div class="ijk">
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="#">Katsura</a>
	  <a href="#">Sherry</a>
	  <a href="#">Add Client</a>
	</div>
     </div>


<div class="abc">
	<ul>
	  <a style="font-size:30px; float:left " href="#home"><?php echo $event;?></a>
	  <a href="#about"><span style="float:right;font-size:30px;cursor:pointer" onclick="openNav()"> &#9776; Members</span></a>
	</ul>
</div>
 <div class="parlax" >
			<div class="description">
				<h2 class="header1">Description</h2>
				<p>A Websites that can help students to manage their ideas for hackathon or projects.
				manage your ideas here or add bugs or set to-dos. you can also see the statistics of your idea and add further progress to it..</p>
			</div>
  </div>
 </div>

<!--todo-->

	<div class="phone">
	  <div class="header">
	    <h2>Add TODO</h2>
	    <p>Add your future programs</p>
	  
	    <div class="removeText">&#128465; Clean Checked Tasks</div>
	  </div>
	  <div class="todo-body">
	    <ul class="todo-list">
	      	<li class="todo-item"><input type="checkbox"/>Add synchronous storage using ajax</li>
	      	<li class="todo-item"><input type="checkbox"/>Add member to your group</li>
	      	<li class="todo-item"><input type="checkbox"/>Add login/signup form</li>
	      	<li class="todo-item"><input type="checkbox"/>Add/Open your group</li>
	      	<li class="todo-item"><input type="checkbox"/>Choose pics</li>
	    </ul>
	  </div>
	  <input type="text" class="todoInput" placeholder="Enter a task and press enter"/>
	</div>


	<div class="phone">
	  <div class="header">
	    <h2>Add BUGS</h2>
	    <p>Destroy your Bugs</p>
	  
	    <div class="removeText1">&#128465; Clean Checked Tasks</div>
	  </div>
	  <div class="todo-body1">
	    <ul class="todo-list1">
	    
	    </ul>
	  </div>
	  <input type="text" class="todoInput1" placeholder="Enter a task and press enter"/>
	</div>


	<div class="phone">
	  <div class="header">
	    <h2>Add Future Enhancement</h2>
	    <p>What you plan to do next</p>
	  
	    <div class="removeText2">&#128465; Clean Checked Tasks</div>
	  </div>
	  <div class="todo-body2">
	    <ul class="todo-list2">
	      <li class="todo-item"><input type="checkbox"/>Add github links</li>
	      <li class="todo-item"><input type="checkbox"/>Assign tasks automatically according to skills</li>
	    </ul>
	  </div>
	  <input type="text" class="todoInput2" placeholder="Enter a task and press enter"/>
	</div>

	<div class="wrapper">
  <h1>Stats About YR Group</h1>
  <div class="pie-charts">
    <div class="pieID--micro-skills pie-chart--wrapper">
      <h2>Completion</h2>
      <div class="pie-chart">
        <div class="pie-chart__pie"></div>
        <ul class="pie-chart__legend">
          <li><em>Done</em><span>642</span></li>
          <li><em>Not Done</em><span>358</span></li>
        </ul>
      </div>
    </div>
    <div class="pieID--categories pie-chart--wrapper">
      <h2>Sub-Tasks</h2>
      <div class="pie-chart">
        <div class="pie-chart__pie"></div>
        <ul class="pie-chart__legend">
          <li><em>To-Dos</em><span>768</span></li>
          <li><em>Bugs</em><span>232</span></li>
        </ul>
      </div>
    </div>

  </div>
</div>

</body>

 <script  src="todo/js/todo.js"></script>

<script  src="todo/js/bugs.js"></script>

<script  src="todo/js/feature.js"></script>

<script  src="pie/js/index.js"></script>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";

}

function todo() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "demo_post2.asp", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname=Henry&lname=Ford");
}

function features() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "demo_post2.asp", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname=Henry&lname=Ford");
}

function bugs() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "demo_post2.asp", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname=Henry&lname=Ford");
}


function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
}
</script>

</html>