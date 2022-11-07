<!-- create session for user Once the user selects the city it should display the category of events in that particular city to the
user.
 Once the user selects the category, the portal should display the upcoming event details i.e. , date,
available shows and their timings, availability of tickets and ticket price.
 Users should be able to select the show & book the tickets.
 Once user clicks on book ticket, status field in “event ticket booked details” will change to booked
and available seats will be decremented by 1 (or no. of tickets that user books).
-->
<?php
    // session_start();
    require_once "dbconn.php";
    $city = $crud->getAllCities();
    $category = $crud->getAllCategories();
    $event = $crud->getAllEvents();
?>
<!-- Include header using php -->

<?php include "header.php" ?>
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
            <!-- using while print row contain image card title and card description using event-->
            <div class="row">
              <?php
                //   again add class container and row when 3 event printed break the row
                  $count = 0;
                  while($row = $event->fetch_assoc() ){
                      $count++;
                      if($count == 4){
                          echo "</div><br>";
                          echo "<div class='container'>";
                          echo "<div class='row'>";
                          $count = 1;
                      }
              ?>
              
              <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['Title']; ?></h5>
                            <p class="card-text"><?php echo $row['Description']; ?></p>
                            <a href="booking.php?id=<?php echo $row['Show_id']; ?>" class="btn btn-primary">View Event</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
          <br> 
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
    <?php include "footer.php" ?>