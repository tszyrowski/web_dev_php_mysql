<?php
    class crud{
        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        public function insertAttendees($fname, $lname, $dob, $email, $contact, $specialty){
            try {
                //define sql statement to be executed
                $sql = "INSERT INTO attende (firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id) VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);
                //execute statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendees(){
            try {
                $sql = "SELECT * FROM `attende` a inner join specialties s on a.specialty_id = s.specialty_id";
                $result = $this->db->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>