<?php include "header.php" ?>
<!-- make admin dashboard side with sidebar as users table button, category table button, city table button,
bookings table button, event table button, event_details table button -->
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="admindashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="users.php" class="list-group-item list-group-item-action active">Users</a>
                <a href="category.php" class="list-group-item list-group-item-action">Category</a>
                <a href="city.php" class="list-group-item list-group-item-action">City</a>
                <a href="bookings.php" class="list-group-item list-group-item-action">Bookings</a>
                <a href="eventadmin.php" class="list-group-item list-group-item-action">Events</a>
                <a href="event_details.php" class="list-group-item list-group-item-action">Event Details</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dashboard</h5>
                    <p class="card-text">Welcome to the admin dashboard</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php include "footer.php" ?>
