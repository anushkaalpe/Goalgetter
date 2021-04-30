<!DOCTYPE html>
<html>
<head>
	<title>Goal-getter</title>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="/assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="./CSS/style1.css">
     
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans&display=swap" rel="stylesheet">
  
</head>
<body>
<style>
body {
  height: 5000px;
  background: linear-gradient(to bottom right, #FBDAC7, #F8C3A5, #FABF9E, #FACBC1  );
  }

.navbar-brand {
            display: flex;
            width: 150px;
            height: 100%;
            justify-content: center;
            margin-left: 250px;
            margin-top: 10px;
            animation: transitionIn 1s;
           
        }
 .nav-item a{
    color: black;
    text-align: center;
    padding-right: -15px;
    text-decoration: none;
    font-size: 17px;
    font-family: 'Julius Sans One', sans-serif;
    margin-top: 29px;
    font-weight: bold;
    margin-right: 25px;
    animation: transitionIn 1s;

 }
 .nav-item a:hover {
  
  color: black;
  box-shadow: 0 0 5px 0 rgba(0,0,0,0.3);
  transform: translateY(-4px);
  
}
@keyframes transitionIn {
  from{
    opacity: 0;
    transform: translateY(-25px);
  }

  to{
        opacity: 1;
        transform: translateY(0);
  }
}

 .parallax {
    min-height: 700px;
    background: transparent;

}
.container{
  border-radius: 4px;
  max-width: 1400px;
  margin-top: 30px;
  background: white;
  font-size: 24px;
  padding: 50px;
}
.container .first h2{
  font-size: 2.4rem;
  text-align: left;
  margin-left: 150px;
  font-family: 'Quattrocento Sans', sans-serif;
  margin-top: 130px;
}
.container .first p{
  font-size: 1.2rem;
  text-align: left;
  margin-left: 150px;
  margin-right: 500px;
  font-family: 'Quattrocento Sans', sans-serif;
  
}
.container .second p {
  text-align: left;
    font-size: 1.2rem;
  margin-left: 550px;
  margin-right: 100px;
  font-family: 'Quattrocento Sans', sans-serif;
  
}
.container .second h2 {
  text-align: left;
  margin-left: 550px;
  margin-right: 100px;
  font-size: 2.4rem;
  margin-top: 100px;
  font-family: 'Quattrocento Sans', sans-serif;
}

.container .third p {
  font-size: 1.2rem;
  text-align: left;
  margin-left: 100px;
  margin-right: 550px;
  font-family: 'Quattrocento Sans', sans-serif;
  
}
.container .third h2 {
  font-size: 2.4rem;
  text-align: left;
  margin-left: 100px;
  margin-top: 120px;
  font-family: 'Quattrocento Sans', sans-serif;
}
.button2{
  border-radius: 15px;
  background-color: #FBDAC7;
  border: 5px;
  border-color: black;
  color: black;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 145px;
  transition: all 0.5s;
  cursor: pointer;
  margin-right: 500px;
  margin-top: 50px;
  position: relative;
  margin-bottom: 120px;
  box-shadow: 5px 8px 17px #888888;
}
.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  font-family: 'Quattrocento Sans', sans-serif;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}

.button {
  border-radius: 15px;
  background-color: #FBDAC7;
  border: 5px;
  border-color: black;
  color: black;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 145px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 150px;
  margin-top: 50px;
  position: relative;
  margin-bottom: 120px;
  box-shadow: 5px 8px 17px #888888;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  font-family: 'Quattrocento Sans', sans-serif;

}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.imgfirst {
    width: 300px;
    margin-left: 900px;
    margin-top: -550px;
}
.imgsecond {
    width: 450px;
    margin-left: 10px;
    margin-top: -620px;
    box-shadow: 0 0 6px 0 rgba(0,0,0,0.3);
}
.imgthird {
  width: 450px;
  margin-left: 750px;
  margin-top: -500px;
}
.container .second{
  text-align: right;
}
 
</style>

<!----Navbar start----------->

<!-- <div class="headerlogo" id="topheader">
    <div class="container">
        <a href="index.php"><img src="./IMAGES/logo3.png" class="float-left"></a>  
    </div>
</div>

  <div class="topnav" id="topnavi">
  <div class="container">
      <a href="index.php">Home</a>
      <a href="#news">Blog</a>
      <a href="#contact">Contact Us</a>
      <a href="#about">Register</a>
      <a href="#">Login</a>
    </div> -->

  
        <!-- Brand and toggle get grouped 
            for better mobile display -->
             <nav class="navbar navbar-expand-lg 
                    navbar-light">
        <a class="navbar-brand" href="#">
            <img src="./IMAGES/logo5.png"

                width="300" height="100" alt="Goal-getter" />
        </a>
  
        <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target=
            "#bs-example-navbar-collapse-1"
            aria-controls="bs-example-navbar-collapse-1"
            aria-expanded="false" 
            aria-label="Toggle navigation">
              
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Anything inside of collapse 
            navbar-collapse goes into the "hamburger" -->
        <div class="collapse navbar-collapse" 
            id="bs-example-navbar-collapse-1">
              
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        Home
                        <span class="sr-only">
                            (current)
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="blog.php">
                        Features
                    </a>
                </li>
  
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">
                        Blog
                    </a>
                </li>
  
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Contact Us
                    </a>
                </li>
  
                <li class="nav-item">
                    <a class="nav-link" href="signup-user.php">
                        Register
                    </a>

                 <li class="nav-item">
                    <a class="nav-link" href="login-user.php">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>
  
  <!-----main content--------->
 <div class="container">
   <div class="first">
  	 <h2>Start achieving your goals today.</h2>
  	 <p>Goal getter is online goal setting software that helps you create and manage your goals so you can be successful sooner. It has an intuitive process that makes the process of setting goals simple and easy. It’s so much fun, you’ll wonder why you didn’t start sooner.</p>

  	  <button class="button"><span> Start now </span></button>
  </div>
 
 	<img class="imgfirst" src="IMAGES/goals.png" data-z-index="2" alt="goals">
 
 
  	<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="IMAGES/bg2.png"></div>
  	
   <div class="container">
   	<div class="second">
  	<h2>How can Goal-getter help me?</h2>
  	<p>Whether it be your education, health, spirituality, finances or family, Goal-getter can help you.</p>
  	<p>Utilise key features such as reminders, due dates, journaling, reporting and more. Goal-getter guides you towards achieving your next goal.</p>

  	<button class="button2"><span> Start now </span></button>
 </div>
 <img class="imgsecond" src="IMAGES/img2.jpg" data-z-index="2" alt="help">

  	<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="IMAGES/bg4.png"></div>
    </div>

<div class="container">
   <div class="third">
  	 <h2>Set your goals in the S.M.A.R.T. way</h2>
  	 <p>Are your goals specific, measurable, achievable, realistic and time specific? Goal-getter is more than just software, it ensures your goals have the highest chance of success.</p>

  	  <button class="button"><span> Start now </span></button>
  </div>
 
 	<img class="imgthird" src="IMAGES/imgn1.jpg" data-z-index="2" alt="goals">
 
 
  	<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="IMAGES/bg1.png"></div>

</div>
 



   






<script src="https://code.jquery.com/jquery-3.4.1.js" integrity=
        "sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" 
        crossorigin="anonymous">
    </script>
      
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
  
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js">
    </script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="parallax.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>