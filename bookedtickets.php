
<?php include "header.php" ?>
<!-- using php get booking details from bookings table  -->
<?php
    require_once 'dbconn.php';
    $user = $_SESSION['username'];
    $booking = $userObj->getBooking($user);

?>
<br>
<?php if($booking->num_rows == 0){ ?>
<!-- create a card to display if no bookings are found -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">No Bookings Found</h5>
        <p class="card-text">You have not booked any tickets yet.</p>
        <a href="index.php" class="btn btn-primary">Book Tickets</a>
    </div>
</div>

<?php } ?>
    <div class="container">
    <!-- use while loop to show event ticket details -->
        <?php if($booking->num_rows > 0){ ?>
        <?php while($result = $booking->fetch_assoc()){?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card"  style="width: 40rem; margin: auto;">
                        <div class="card-header">
                            <h3>Event Ticket Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo $result['event_image']?>" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <h3>Event Name: <?php echo $result['event_name'] ?></h3>
                                    <p>Event Location: <?php echo $result['event_city'] ?></p>
                                    <p>Event Time: <?php echo $result['event_time'] ?></p>
                                    <p>Total Paid Amount: <?php echo $result['total_paid'] ?></p>
                                    <a href="receipt.php" class="btn btn-primary">Print Receipt</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div> 
                <?php  }} ?>
        </div> 
</body>
</html>