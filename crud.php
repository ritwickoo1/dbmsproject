<?php 
    class crud {   
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
        public function getAllCategories(){
            $sql = "SELECT * FROM category";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        public function getAllEvents(){
            $sql = "SELECT * FROM event";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        public function getEventDetails($id){
            // inner join event_details and event table 
            $sql = "SELECT * FROM event_details ed inner join event e on ed.id = e.Show_id where ed.id = $id";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        public function getBookings($id){
            $sql = "SELECT * FROM bookings where user_id = '$id'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        public function getAllBookings(){
            $sql = "SELECT * FROM bookings group by username";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        
        public function getUsers(){
            $sql = "SELECT * FROM users";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        // get events by city and category
        public function getEventsByCityAndCategory($city, $category){
            $sql = "SELECT * FROM event where city = '$city' and category = '$category'";
            $result = mysqli_query($this->db, $sql);
            return $result;    
        }
        // decrease available seats in event_details table and also total seats in event table
        public function decreaseAvailableSeats($id, $seats){
            $sql = "UPDATE event_details SET available_seats = available_seats - $seats where id = $id";
            $result = mysqli_query($this->db, $sql);
            $sql = "UPDATE event_details SET total_seats = total_seats - $seats where id = $id";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
    }
?>