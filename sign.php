 <?php


// require_once('function.php');
// $a=new barber_shop();

// if($_SERVER['REQUEST_METHOD']=='POST'){
    
//     if (isset($_POST['submit-btn'])){
        
//        $var_name=$_POST['name'];
//        $var_email=$_POST['email'];
//        $var_pass=$_POST['pass'];
      
//        $a->sign_up($var_name,$var_email,$var_pass);

//     }
// }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <title>SignUp</title>
</head>
<body>

<div class="container">
    <div class="form-box">
               <h1>Sign Up</h1>
               <form action="index.php" method="POST">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                 <input type="text" placeholder="Name" name="name">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                 <input type="email" placeholder="Email" name="email">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                 <input type="password" placeholder="Password" name="pass">
                </div>
                <div id="id">
                <button type="submit" name="submit-btn">sign up</button>
                </div>
               
            </div>

        </form>
    </div>
</div>



<script>
    let a=document.getElementById("id").onclick=function(){
        alert("Account created!!!");
    }
</script>

</body>
</html>