<?php
session_start();
error_reporting(0);
class barber_shop{
    private $con;
    
    function __construct(){
        $this->con = new mysqli("localhost", "root", "", "barber_shop");
    }

    function appoin($full_name, $email, $phone, $category, $date, $message){
        $date = date("Y-m-d");
        $time = date("H:i:s A");

        if ($stmt = $this->con->prepare("INSERT INTO `appointment_section` (`full_name`, `email`, `phone`, `category`, `app_date`, `message`, `date`, `time`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)")) {
            $stmt->bind_param("ssssssss", $full_name, $email, $phone, $category, $date, $message, $date, $time);
            if ($stmt->execute()){
                return true;
            } else {
                return false;
            }
        }
        return true;
    }

    function review($name, $email, $comment){
        $r_date = date("Y-m-d");
        $r_time = date("H:i:s A");

        if ($stmt = $this->con->prepare("INSERT INTO `user_reviews` (`name`, `email_id`, `comment`, `date`, `time`) VALUES (?, ?, ?, ?, ?)")) {
            $stmt->bind_param("sssss", $name, $email, $comment, $r_date, $r_time);
            if ($stmt->execute()){
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    

  

    function sign_up($s_name, $s_email, $s_pass){
        $s_date = date("Y-m-d");
        $s_time = date("H:i:s A");

        // Use password_hash() to securely hash the password
        $hashed_pass = password_hash($s_pass, PASSWORD_DEFAULT);

        // Use prepared statement
        if ($stmt = $this->con->prepare("INSERT INTO `singin` (`si_name`, `si_email`, `si_pass`, `date`, `time`) VALUES (?, ?, ?, ?, ?)")) {
            $stmt->bind_param("sssss", $s_name, $s_email, $s_pass, $s_date, $s_time);
            if ($stmt->execute()) {
                return true;
            } else {
                // Return error message or handle the error appropriately
                echo "Error: " . $stmt->error;
                return false;
            }
        }
        return false;
    }



   function get_pass($name){
          if($stmt=$this->con->prepare("SELECT  `si_pass` FROM `singin` WHERE `si_name`=?")){

            $stmt->bind_param("s",$name);


            $stmt->bind_result($res_pass);

            if($stmt->execute()){

                if($stmt->fetch()){
                    return $res_pass;
    
                }
                else
                {
                    return false;
                }
            }
          
    }

function ad_pass($name, $providedPassword) {
    if ($stmt = $this->con->prepare("SELECT `ad_pass` FROM `admin_login` WHERE `ad_name` = ?")) {
        $stmt->bind_param("s", $name);
        $stmt->bind_result($hashedPassword);

        if ($stmt->execute() && $stmt->fetch()) {
            if (password_verify($providedPassword, $hashedPassword)) {
                return true; // Passwords match
            }
        }
    }

    return false; // User not found or password doesn't match
}

}

   

      

}

?>