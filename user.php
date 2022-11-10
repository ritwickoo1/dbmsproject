<?php
    class user{
        private $db;
        function __construct($conn)
        {
            $this->db = $conn;
        }
        public function getAllCities(){
            $sql = "SELECT * FROM city";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        public function getUser($username, $password)
        {
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        // Insert into bookings table $user, $eventName,$eventTime,$eventCity,$totalPaid,$image
        public function insertBooking($user, $eventName,$eventTime,$eventCity,$totalPaid,$image){
            $sql = "INSERT INTO bookings (username, event_name, event_time, event_city, total_paid,event_image) 
                VALUES ('$user','$eventName','$eventTime','$eventCity','$totalPaid','$image')";
            $result = mysqli_query($this->db, $sql);
            return $result;
            
        }
        // get bookings from bookings table
        public function getBooking($user){
            $sql = "SELECT * FROM bookings where username = '$user'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        // insert user into users table
        public function insertUser($username, $password, $email){
            $sql = "INSERT INTO users (username, password, email) 
                VALUES ('$username','$password','$email')";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
    }
?>