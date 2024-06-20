


<?php

 

require_once('function.php');
$a = new barber_shop();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit-btn'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $l_pass = $a->ad_pass($name );

        if ($l_pass === false) {
            echo "User not found";
        } else {
            if ($pass === $l_pass) {
                header("location: index.php");
                exit; // Make sure to exit after redirection
            } else {
                echo "Wrong password";
            }
        }
    }
}



        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="report.css">
    <title>user report</title>
</head>
<body>


       
<div class="container" id="form">
       <div class="form-box">
                  <h1>Admin Login</h1>
           <form action="report1.php" method="POST">
               <div class="input-group">
                   <div class="input-field">
                    <input type="text" placeholder="Admin Name" name="name">
                   </div>
   
                   <div class="input-field">
                    <input type="password" placeholder="Password" name="pass">
                   </div>
                   <div id="btn">
                   <button type="submit" name="submit-btn">Login</button>
                   </div>
               </div>
   
           </form>
       </div>
   </div>
    




   <script src="report.js"></script>
</body>
</html>