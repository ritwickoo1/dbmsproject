<!-- Once the user selects the category, the portal should display the upcoming event details i.e. , date,
available shows and their timings, availability of tickets and ticket price.
 Users should be able to select the show & book the tickets.
 Once user clicks on book ticket, status field in “event ticket booked details” will change to booked
and available seats will be decremented by 1 (or no. of tickets that user books). -->
<?php include "header.php" ?>
<!-- Get the event details from get request of city and category from db -->
<?php
  require_once "dbconn.php";
  $city = $_GET['city'];
  $category = $_GET['category'];
  $event = $crud->getEventsByCityAndCategory($city,$category);
  // print_r($event);
?>
<br><br>
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
    <br>  
    <?php include "footer.php" ?>