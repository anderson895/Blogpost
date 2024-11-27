<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }

    public function Login($email, $password)
    {
        
        // Prepare query
        $query = $this->conn->prepare("SELECT * FROM `user` WHERE `user_email` = ? AND `user_password` = ?");
    
        // Bind the parameters
        $query->bind_param("ss", $email, $password);
        
        // Execute query
        if ($query->execute()) {
            $result = $query->get_result();
            
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                
                // Start session and store user_id
                session_start();
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['user_name'];
                
                return $user;
            } else {
                return false;  // Invalid credentials
            }
        } else {
            return false;  // Query execution error
        }
    }
    




    public function Signup($user_name, $user_email, $password)
{
    // Prepare the SQL query for inserting a new user
    $query = $this->conn->prepare("INSERT INTO `user` (`user_name`, `user_email`, `user_password`) VALUES (?, ?, ?)");

    // Bind the parameters (name, email, and password)
    $query->bind_param("sss", $user_name, $user_email, $password);

    // Execute the query and check the result
    if ($query->execute()) {
        // Return the inserted user ID or success message
        return $this->conn->insert_id; // Return the new user's ID
    } else {
        // Return false if the query fails
        return false;
    }
}


    

    
}

?>