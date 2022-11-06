<!-- use php to validate sign in information of user and head start to login.php -->
<?php
    session_start();
    include 'db.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['city'] = $row['city'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['image'] = $row['image'];
                header('location: index.php');
            }
        }else{
            echo '<script>alert("Invalid Email or Password")</script>';
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
        <form action="login.php" method="post">
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
    </div>
</body>
</html>