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
<?php 
    // initialize errors variable
  $errors = "";

  // connect to database
  $con = mysqli_connect("localhost", "root", "", "goalgetter");

  // insert a quote if submit button is clicked
  if (isset($_POST['submit'])) {
    if (empty($_POST['task'])) {
      $errors = "You must fill in the task";
   else {
      // $task_id = $_SESSION['task_id'];
       $user_id = $_POST['user_id'];
       $task = $_POST['task'];
       $query = "SELECT * FROM users WHERE user_id='$user_id'";
       $result = mysqli_query($con,$query);
       
       while($res = mysqli_fetch_array($result))
       {
         $task = $res['task'];
       }

      
      
       $sql ="INSERT INTO todolist(task_id,user_id,task) VALUES (NULL,'$user_id','$task')";
       $query = mysqli_query($con, $sql);
       header('location: todo1.php');
    }
  }
   
   // delete task
 if (isset($_GET['del_task'])) {
  $task_id = $_GET['del_task'];
  mysqli_query($con, "DELETE FROM tasks WHERE task_id=".$task_id);
  header('location: todo1.php');
}
?>


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
     <link rel="stylesheet" type="text/css" href="css/stylegg.css">
     
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
  /*-----navbar open-------*/
  .navbar-brand {
            display: flex;
            width: 150px;
            height: 100%;
            justify-content: center;
            margin-left: 250px;
            margin-top: 10px;
            
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


.heading{
  width: 300px;
  margin: 30px auto;
  text-align: center;
  color:  black;
  background: #FBDAC7;
  padding-bottom: 3px;
  padding-top: 6px;
  border-radius: 15px;
  font-family: 'Quattrocento Sans', sans-serif;
}
form {
  width: 85%; 
  margin: 30px auto; 
  border-radius: 5px; 
  padding: 10px;
  background: #FBDAC7;
  

}
form p {
  color: red;
  margin: 0px;
}
.task_input {
  width: 75%;
  height: 15px; 
  padding: 10px;
  font-family: 'Quattrocento Sans', sans-serif;
}
.add_btn {
   height: 39px;
   background: #FBDAC7;
   color: black;
   border-radius: 5px; 
   padding: 5px 20px;
   font-family: 'Quattrocento Sans', sans-serif;
}
.add_btn:hover{
  box-shadow: 0 0 7px 0 rgba(0,0,0,0.3);
  transform: translateY(-2px);
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

table {
    width: 85%;
    margin: 30px auto;
    border-collapse: collapse;
    font-family: 'Quattrocento Sans', sans-serif;
}

tr {
  
}

th {
    font-size: 19px;
    color: black;
}

th, td{
    border: none;
    height: 40px;
    padding: 2px;
}

tr:hover {
  background: #E9E9E9;
  
}

.task {
  text-align: left;
}

.delete{
  text-align: center;
}

.delete a{
  color: white;
  background: #a52a2a;
  padding: 1px 6px;
  border-radius: 7px;
  text-decoration: none;
}

.container{
  border-radius: 4px;
  max-width: 1000px;
  margin-top: 30px;
  background: white;
  font-size: 18px;
  padding: 5px;
}
</style>
<!----Navbar start----------->
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
                <li class="nav-item">
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
                    <a class="nav-link" href="#">
                        Welcome, <?php echo $fetch_info['name'] ?>
                    </a>

            </ul>
        </div>
    </nav>
<!------------sidebar open-------->
    <div id="mySidenav" class="sidenav">
  <a href="#" id="Dashboard">Dashboard</a>
  <a href="#" id="To-do-List">To-do-List</a>
  <a href="#" id="Journal">Journal</a>
  <a href="#" id="Goals">Goals</a>
  <a href="#" id="Dreams">Dreams</a>
  <a href="#" id="Profile">Profile</a>
  <a href="logout-user.php" id="Logout">Logout</a>
</div>

<div class="container">
<div class="heading">
    <h2> To-Do List </h2>
  </div>
  <form method="post" action="todo1.php" class="input_form">
    <?php if (isset($errors)) { ?>
  <p><?php echo $errors; ?></p>
     <?php } ?>
    <input type="text" name="task" class="task_input">
    <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
  </form>
  <table>
  <thead>
    <tr>
      <th>No.</th>
      <th>Tasks</th>
      <th style="width: 60px;">Action</th>
    </tr>
  </thead>

  <tbody>
  <?php 
    // select all tasks if page is visited or refreshed
    $tasks = mysqli_query($con, "SELECT * FROM todolist");

    $i = 1; 
    while ($res = mysqli_fetch_array($tasks)) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td class="task"> <?php echo $res['task']; ?> </td>
        <td class="delete"> 
          <a href="todo1.php?del_task=<?php echo $res['task_id'] ?>">x</a> 
        </td>
      </tr>
    <?php $i++; } ?>  
  </tbody>
</table>
</div>
</body>
</html>