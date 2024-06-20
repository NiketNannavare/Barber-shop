

<?php

 

require_once('function.php');
$a= new barber_shop();



if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if (isset($_POST['submit-btn'])){
        
        $name=$_POST['name'];
        $pass=$_POST['pass'];

        $_pass=$a->get_pass($name);

        if($l_pass==""){
            
       

        }
        else{

            if($pass==$l_pass){


                header("location:index.php");
                
            }
            else{
              
                $_SESSION['status']="wrong password";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="sign.css">
    <title>login</title>
</head>
<body>
    
<div class="container">
    <div class="form-box">
               <h1> Login </h1>
        <form action="index.php" method="POST">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                 <input type="text" placeholder="Name" name="name">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>  
                 <input type="password" placeholder="Password" name="pass">
                </div>
                <div id="id">
                <button type="submit" name="submit-btn"> Log in</button>
                </div>
             
                <div class="signup-link">
                    Not a member ?<a href="sign.php">sign up</a>
                </div>
                
            </div>

        </form>
    </div>
</div>
<script>
    document.getElementById("id").onclick=function(){
        alert("login completed")
    }
</script>

</body>
</html>