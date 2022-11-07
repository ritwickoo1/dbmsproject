<?php include "header.php" ?>
<?php
    require_once 'dbconn.php';
    $user = $_SESSION['username'];
    $users = $crud->getAllCities();
?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="admindashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="users.php" class="list-group-item list-group-item-action ">Users</a>
                <a href="category.php" class="list-group-item list-group-item-action ">Category</a>
                <a href="city.php" class="list-group-item list-group-item-action active">City</a>
                <a href="bookings.php" class="list-group-item list-group-item-action">Bookings</a>
                <a href="events.php" class="list-group-item list-group-item-action">Events</a>
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">City ID</th>
                        <th scope="col">City Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) { ?>
                    <tr>
                        <th scope="row"><?php echo $user['id'] ?></th>
                        <td><?php echo $user['city_name'] ?></td>
                        <td>
                            <a href="editcity.php?id=<?php echo $user['id'] ?>" class="btn btn-primary">Edit</a>
                            <a href="deletecity.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
