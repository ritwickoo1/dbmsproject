<!-- use php to validate sign in information of user and head start to login.php -->
<?php
    include 'dbconn.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $userObj->getUser($username,$password);
        if($result->num_rows > 0){
            // if user exists
            // start session
            session_start();
            $_SESSION['username'] = $username;
            if($username!='admin'){
                
                header('location: login.php');
            }else
                header("Location: admindashboard.php");
        }else{
            // if user does not exist
            echo '<div class = "alert alert-danger">Username or Password is Incorrect! Please try again. </div>';
            // header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>       
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Create login form using html and css -->
    <div class="login-box">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <input class="btn" type="submit" name="submit" value="Sign in">
        </form>
        <!-- create form with button sign up which action to signup.php-->
        <form action="signup.php">
            <input class="btn" type="submit" value="Sign up">
        </form>
    </div>
</body>
</html>