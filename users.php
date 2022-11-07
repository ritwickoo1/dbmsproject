<?php include "header.php" ?>
<?php
    require_once 'dbconn.php';
    $user = $_SESSION['username'];
    $users = $crud->getUsers();
?>
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
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['password'] ?></td>
                        <td>
                            <a href="edituser.php?id=<?php echo $user['id'] ?>" class="btn btn-primary">Edit</a>
                            <a href="deleteuser.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- Using bootstrap css display table of users with details username, email, password along with Add, update and delete button for each row-->


<br>
<br>
<?php include "footer.php" ?>