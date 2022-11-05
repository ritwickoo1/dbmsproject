<!-- create session for user Once the user selects the city it should display the category of events in that particular city to the
user.
 Once the user selects the category, the portal should display the upcoming event details i.e. , date,
available shows and their timings, availability of tickets and ticket price.
 Users should be able to select the show & book the tickets.
 Once user clicks on book ticket, status field in “event ticket booked details” will change to booked
and available seats will be decremented by 1 (or no. of tickets that user books).
-->
<?php
    session_start();
    require_once "dbconn.php";
    $city = $crud->getAllCities();
    $category = $crud->getAllCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bookedtickets.php">Ticket Booked</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                  </li>
                </ul>
                </div>
            </div>
            </nav>
    </header>
    <!-- Create carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/c1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/cook.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/counter.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<main>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="images/otw.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Book Tickets</a>
                        </div>
                        </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="images/cherry.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Book Tickets</a>
                        </div>
                        </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="images/zsjl.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Book Tickets</a>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="images/gvkpster.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Book Tickets</a>
                        </div>
                        </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="images/tim.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Book Tickets</a>
                        </div>
                        </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="images/blackwidow.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Book Tickets</a>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <br>
    </main>    
    <br>
    <!-- create form for user to select city from four options and once the user select the city show the category of
    events in the selected city -->
    <div class="container">
        <form action="events.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select City</label>
                <select class="form-control" id="exampleFormControlSelect1" name="city">
                    <option value=0>Select City</option>
                    <?php
                        // $sql = "SELECT * FROM city";
                        // $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($city) > 0){
                            while($row = mysqli_fetch_assoc($city)){
                                echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
                            }
                        }
                        
                    ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                    <option value=0>Select Category</option>
                    <?php
                        if(mysqli_num_rows($category) > 0){
                            while($row = mysqli_fetch_assoc($category)){
                                echo '<option value="'.$row['id'].'">'.$row['cat_name'].'</option>';
                            }
                        }
                        ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br>
    <!-- create beautiful footer using html and css -->
    <footer class="page-footer font-small blue pt-4 bg-dark text-center text-white">
        <!-- Made two row footer with Register now sign up and made by  -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <p class="mb-0">Register now and get 10% off on your first booking</p>
                    <hr>
                    <button type="button" class="btn btn-primary">Sign Up</button>
                    <hr>
                    <p class="mb-0">Made by <a href="#">Ritwick Verma</a></p>
                </div>
                
        </div>
        
    </footer>
</body>
</html>