<?php include "header.php" ?>
<?php
    require_once "dbconn.php";
    $id = $_GET['id'];
    
    $eventDetail = $crud->getEventDetails($id);
    $event = $eventDetail->fetch_assoc();
    // get user id
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // link user and and their booking using table bookings
        $user = $_SESSION['username'];
        $eventName = $event['Title'];
        $eventTime = $event['event_time'];
        $eventCity = $event['City_name'];
        $ticket = $_POST['ticket'];
        $totalPaid = $ticket * $event['ticket_price'];
        $image = $event['Image'];
        
        $result = $userObj->insertBooking($user, $eventName,$eventTime,$eventCity,$totalPaid,$image);
        if($result){
            echo "<script>alert('Ticket booked successfully!')</script>";
            echo "<script>window.location = 'bookedTickets.php'</script>";
        }else{
            echo "<script>alert('Ticket booking failed!')</script>";
            // echo "<script>window.location = 'booking.php'</script>";
        }

    }
?>
<!-- Include header.php -->

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
                        <!-- Make + or - to book number of tickets user want to buy -->
                        <form action="" method="POST">
                            <!-- using javascript made two buttons that add or subtract tickets from total ticket -->
                            <div class="form-group">
                                <label for="ticket">Number of Tickets</label>
                                <input type="number" name="ticket" id="ticket" class="form-control" value="1" min="1" max="<?php echo $event['total_seats'] ?>">
                            </div>
                            <br>
                            <p class="card-text"><?php echo $event['ticket_price'] ?></p>
                            <button type="submit" class="btn btn-primary">Book Ticket</button>
                        </form>    

                        
                    </div>
                </div>
            </div>
        </div>

<br><br>
<!-- Include footer.php -->
<?php include "footer.php" ?>