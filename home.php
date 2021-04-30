<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goalgetter</title>
   
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
   -webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
-ms-transition: all 500ms ease;
-o-transition: all 500ms ease;
transition: all 500ms ease;
  }

/* ----------navbar close---*/

/*------------sidebar------------*/
#mySidenav a {
  position: fixed; /* Position them relative to the browser window */
  left: -15px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 10px; /* 15px padding */
  width: 150px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 17px; /* Increase font size */
  color: black; /* White text color */
  border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
  text-align: right;
   font-family: 'Quattrocento Sans', sans-serif;
}

#mySidenav a:hover {
  left: 0; /* On mouse-over, make the elements appear as they should */
}
/* The about link: 20px from the top with a green background */
#Dashboard {
  top: 140px;
  background-color: white;
}

#To-do-List {
  top: 205px;
  background-color: white; /* Blue */
}

#Journal {
  top: 270px;
  background-color: white; /* Red */
}

#Goals {
  top: 335px;
  background-color: white; /* Light Black */
}
#Dreams {
  top: 400px;
  background-color: white; /* Light Black */
}
#Profile {
  top: 465px;
  background-color: white; /* Light Black */
}
#Logout {
  top: 530px;
  background-color: white;/* Light Black */
}
    </style>


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
                        Welcome <?php echo $fetch_info['name'] ?>
                    </a>

            </ul>
        </div>
    </nav>

<!------------sidebar open-------->
    <div id="mySidenav" class="sidenav">
  <a href="#" id="Dashboard">Dashboard</a>
  <a href="todo1.php" id="To-do-List">To-do-List</a>
  <a href="#" id="Journal">Journal</a>
  <a href="#" id="Goals">Goals</a>
  <a href="#" id="Dreams">Dreams</a>
  <a href="#" id="Profile">Profile</a>
  <a href="logout-user.php" id="Logout">Logout</a>
</div>
    
    
</body>
</html>