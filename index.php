

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<body>
<div id="home" class="centerbg">
<!-- Navigation -->
<nav  class="w3-bar w3-black w3-large" style="position:fixed;z-index: 110">
  <a href="#home" class="w3-button w3-bar-item">Home</a>
  <a href="#about" class="w3-button w3-bar-item">About</a>
  <a href="#contact" class="w3-button w3-bar-item">Developers</a>
  <div id="chutiya"><a href="#tour" style=margin-left:55% data-toggle="modal" data-target="#signup" class="w3-button w3-bar-item">Signup</a>
  <a href="#tour"  data-toggle="modal" data-target="#login" class="w3-button w3-bar-item">Login</a>
   </div>
</nav>
<!--signup/modal-->

  <div class="modal fade" id="signup">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="msg">Sign-Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <form action="signup.php" method="POST" class="myform">
  
          <input class="form_element" type="text" name="firstname" placeholder="firstname" required><br>
          <input class="form_element" type="text" name="lastname" placeholder="lastname" required><br>
          <input type="text" class="form_element" name="username" placeholder="Username" required><br>
          <input type="email" class="form_element" name="emailid" placeholder="email" required><br>
          <input type="password" class="form_element" name="password" placeholder="password" required><br>
          <input type="password" class="form_element" name="password" placeholder="confirm password" required><br>
          <button type="submit" style="margin-top:5%;margin-bottom:5%;" class="w3-btn w3-round-xxlarge" name="submit">Sign-Up</button>
        </form>
        
      </div>
    </div>
  </div>


<!--login/modal-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <form action="login.php" method="POST" class="myform">

          <input type="text" class="form_element" name="username" placeholder="username"><br>
          <input type="password" class="form_element" name="password" placeholder="password"><br>
          <button type="submit" style="margin-top:5%;margin-bottom:5%;" class="w3-btn w3-round-xxlarge" name="submit">Login</button>
        </form>
        
      </div>
    </div>
  </div>


<!-- Slide Show -->
<section >
  <div class="mySlides paralax" style="width:100%;background-image: url('img/420.png');"> </div>
  <DIV class="mySlides paralax" style="width:100%;background-image: url('img/b.jpg');"> </DIV>
  <div class="mySlides paralax" style="width:100%;background-image: url('img/c.jpg');"> </div>

</section>

<!-- Band Description -->
<div class="about_div paralax" >
  <div class="tranfix">
    <section id="about" class="w3-container w3-content w3-center " style="max-width:600px">
      <h2 class="w3-wide header">About</h2>
      <p class="w3-justify">A Websites that can help students to manage their ideas for hackathon or projects.
        manage your ideas here or add bugs or set to-dos. you can also see the statistics of your idea and add further progress to it..</p>
    </section>
  </div>
</div>
<!-- Dev Members -->
<section id="contact" class="w3-row-padding w3-center ">
  <article class="w3-third">
    <p>Aryant Shukla</p>
    <img onmouseover="changeshadow(this)" onmouseout="removeshadow(this)" class="devimg" src="img/dwn.jpg" alt="Random Name" style="width:90%">

  </article>
  <article class="w3-third">
    <p>Ankur Srivastav</p>
    <img onmouseover="changeshadow(this)" onmouseout="removeshadow(this)" class="devimg" src="img/dwn.jpg" alt="Random Name" style="width:90%">
  </article>

  <article class="w3-third">
    <p>Syed Shaharyar Ali</p>
    <img onmouseover="changeshadow(this)" onmouseout="removeshadow(this)" class="devimg" src="img/dwn.jpg" alt="Random Name" style="width:90%">
 
  </article>

  <article class="w3-third">
    <p>Dilip Suthar</p>
    <img onmouseover="changeshadow(this)" onmouseout="removeshadow(this)" class="devimg" src="img/dwn.jpg" alt="Random Name" style="width:90%;">
 
  </article>

  <article class="w3-third">
    <p>Neelansha Maheshwari</p>
    <img onmouseover="changeshadow(this)" onmouseout="removeshadow(this)" class="devimg" src="img/dwn.jpg" alt="Random Name" style="width:90%">
    
  </article>
</section>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center w3-black w3-large">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  
</footer>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>

<?php
  if(isset($_GET['signup'])){

    $login = $_GET['signup'];
    //echo "<script>console.log('Enter Here')</script>";
    if(!strcmp($login,"taken"))
          {
            echo "<script type='text/javascript' >
            alert('username is taken!!!')
                         </script>";}
    else if(!strcmp($login,"error"))
          {echo "<script type='text/javascript' >
        alert('Sorry:( Error in signup)!!!')
                         </script>";}
    else if(!strcmp($login,"correct"))
          {echo "<script type='text/javascript' >document.getElementById('msg').innerHTML='Success In Login';console.log('ccc');
                       document.getElementById('msg').style.color='green';
                         </script>";}
  }
?>

<?php
  if(isset($_GET['login'])){

    $login = $_GET['login'];

    if(!strcmp($login,"error"))
            {echo "<script type='text/javascript' >
          alert('Sorry:(     Error in Login!!!')
                           </script>";
                       }
     if(!strcmp($login,"error2"))
          {echo "<script type='text/javascript' >
        alert('Sorry:(     Password do not match!!!')
                         </script>";}
  }
?>

</body>
</html>

