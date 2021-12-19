<?php
    class crud{
            //private database object
            private $db;

            //constructor to initialize private variable to the database connection
            function __construct($conn){
            $this->db = $conn;
            }
            //function to insert a new record into the attendee database
            public function insertMembers($fname, $lname,  $email, $gender, $address, $avatar_path){
            try {
            //define squl statement to be executed
            $sql = "INSERT INTO members (firstname,lastname,emailaddress,gender,address,avatar_path)VALUES (:fname,:lname,:email,:gender,:address,:avatar_path)";
            //prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            //bind all placeholders to the actual values
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':gender', $gender);
            $stmt->bindparam(':address', $address);
            $stmt->bindparam(':avatar_path', $avatar_path);

            $stmt->execute();
            return true;


            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editMember($id, $fname, $lname, $gender, $email, $address, $avatar_path){
                $sql = "UPDATE `members` SET `firstname`=:fname,`lastname`=:lname,`gender`=:gender,`emailaddress`=:email,`address`=:address, `avatar_path`=:avatar_path WHERE members_id = :id";

            try{
                    $stmt = $this->db->prepare($sql);
                    //bind all placeholders to the actual values
                    $stmt->bindparam(':id', $id);
                    $stmt->bindparam(':fname', $fname);
                    $stmt->bindparam(':lname', $lname);
                    $stmt->bindparam(':gender', $gender);
                    $stmt->bindparam(':email', $email);
                    $stmt->bindparam(':address', $address);
                    $stmt->bindparam(':avatar_path', $avatar_path);
        

                    $stmt->execute();
                    return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
               

        }

        public function getMembers(){
            try{
            $sql = "SELECT * FROM `members`";
            $result = $this->db->query($sql);
            return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
               
        }

        public function getMember($id){
        try{
            $sql ="SELECT * FROM `members` where members_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $result = $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }



        }
       
       
        public function deleteMember($id){
            try{
            $sql = "delete from members where members_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
            }
            catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }

            
        }
        
        

}   
    
?>