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
        public function insertAttendees($fname,$lname,$dob,$email,$contact,$speciality,$avatar_path){
            try{
                $sql = "INSERT INTO attendee (firstname, lastname, dateofbirth, emailaddress, contactnumber, speciality_id, avatar_path) 
                    VALUES (:fname,:lname,:dob,:email,:contact,:speciality,:avatar_path)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":fname",$fname);
                $stmt->bindparam(":lname",$lname);
                $stmt->bindparam(":dob",$dob);
                $stmt->bindparam(":email",$email);
                $stmt->bindparam(":contact",$contact);
                $stmt->bindparam(":speciality",$speciality);
                $stmt->bindparam(":avatar_path",$avatar_path);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }
        public function getAttendees(){
            try{
                $sql = "Select * from attendee a inner join specialities s on a.speciality_id=s.speciality_id";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }
        public function getAttendeeDetails($id)
        {
            # code...
            try{
                $sql = "SELECT * FROM ATTENDEE a inner join specialities s on a.speciality_id=s.speciality_id WHERE ATTENDENCE_ID = :ID  ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":ID",$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;

            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }

        public function editAttendee($id,$fname,$lname,$dob,$email,$contact,$speciality){
            try {
                //code...
                $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,
                `dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,
                `speciality_id`=:speciality WHERE  ATTENDENCE_ID = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":id",$id);
                $stmt->bindparam(":fname",$fname);
                $stmt->bindparam(":lname",$lname);
                $stmt->bindparam(":dob",$dob);
                $stmt->bindparam(":email",$email);
                $stmt->bindparam(":contact",$contact);
                $stmt->bindparam(":speciality",$speciality);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }

        public function deleteAttendee($id){
            try {
                //code...
                $sql = "DELETE FROM `attendee` WHERE ATTENDENCE_ID = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":id",$id);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getSpecialties(){
            try {
                //code...
                $sql = "Select * from specialities";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }
    }
?>