<?php
  // check if username in session is not set then redirect to index.php
  session_start();
  if(!isset($_SESSION['username'])){
      header("Location: index.php");
  }

?>
<!-- session destroy after clicking logout button -->
<?php if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["username"] ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>       
</head>
<body>
    <!-- create beautiful header and navbar alog with home ticket booked and logout details using css and html -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Event Management</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bookedtickets.php">Ticket Booked</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="login.php"><?php echo $_SESSION['username']; ?></a>
                  </li>
                  <li class="nav-item">
                    <form action="" method="post">
                        <button type="submit" name="logout" class="nav-link active border=0">Logout</button>
                    </form>
                    <!-- <a class="nav-link active" href="index.php">Logout</a> -->
                  </li>
                </ul>
                </div>
            </div>
            </nav>
    </header>