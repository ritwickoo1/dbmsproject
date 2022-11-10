<?php
    require_once 'dbconn.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        // check if password and confirm password are same
        // check if email already exists
        // check if username already exists
        // if all are good then insert into database
        // else show error
        // if any value is empty then redirect to signup.php
        if($username == "" || $email == "" || $password == "" || $cpassword == ""){
            header("Location: signup.php");
        }
        else if($password!= $cpassword){
            echo "<script>alert('Password and Confirm Password are not same');</script>";
        }else{
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                echo "<script>alert('Email already exists');</script>";
            }else{
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    echo "<script>alert('Username already exists');</script>";
                }else{
                    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        echo "<script>alert('User registered successfully');</script>";
                        // redirect to login page
                        echo "<script>window.open('index.php', '_self');</script>";
                    }else{
                        echo "<script>alert('Error');</script>";
                    }
                }
            } 
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" name="email" value="">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm Password" name="cpassword" value="">
            </div>
            <input class="btn" type="submit" name="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>