<?php
    session_start();
    require_once "dbconn.php";
    $id = $_GET['id'];
    
    $eventDetail = $crud->getEventDetails($id);
    $event = $eventDetail->fetch_assoc();
?>
<!-- Include header.php -->
<?php include "header.php" ?>
    <br>
    <!-- use card side by side image with equal size to Display event detail event name event city event date and time, total seats and no. of available seats, ticket price 
        and show book ticket button outside card with beautiful html and css -->
        <div class="card border-0" style="width: 60rem; margin: auto;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <!-- use bootstrap and style css to change image accoriding to event details -->
                    <img src="<?php echo $event['Image']; ?>" class="card-img " alt="...">
                    
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $event['Title'] ?></h5>
                        <!-- Disply event description -->
                        <p class="card-text"><?php echo $event['Description'] ?></p>
                        <p class="card-text"><?php echo $event['City_name'] ?></p>
                        <p class="card-text"><?php echo $event['event_date'] ?></p>
                        <p class="card-text"><?php echo $event['event_time'] ?></p>
                        <p class="card-text"><?php echo $event['total_seats'] ?></p>
                        <p class="card-text"><?php echo $event['available_seats'] ?></p>
                        <p class="card-text"><?php echo $event['ticket_price'] ?></p>
                        <a href="bookedticket.php?id=<?php echo $event['id'] ?>" class="btn btn-primary">Book Ticket</a>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>