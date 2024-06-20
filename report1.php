 <?php



$servername="localhost";
$username="root";
$password="";
$database="barber_shop";


$conn = mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("sorry:".mysqli_connect_error());

}
else{
    
   
}

$sql="SELECT * FROM `appointment_section`";
$sql1="SELECT * FROM `user_reviews`";
$sql2="SELECT * FROM `singin` ";

$result= mysqli_query($conn, $sql);
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);

$num =  mysqli_num_rows($result);
$num1 = mysqli_num_rows($result1);
$num2 = mysqli_num_rows($result2);


// while($row= mysqli_fetch_assoc($result)){
//     // echo var_dump($row);
//     echo $row['id'].$row['full_name'].$row['email'].$row['phone'].$row['category'].$row['app_date'].$row['message'].$row['date'].$row['time'];
//     echo "<br>";
// }


?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    
   <div id="main">
    <center>
    <h1>User Report</h1>
    </center>
  
<center>
       <h2>Appointment section</h2>
       </center>

       <table border="1" cellspacing="0" cellpadding="15">
    
       <thead>
             <th>sr no</th>
             <th>name</th>
             <th>email</th>
             <th>phone</th>
             <th>category</th>
             <th>date</th>       
             <th>message</th>
             <th>date</th>
             <th>time</th>
       </thead>
    
    <tbody> 
           <tr>
                  <?php
    
    while($row= mysqli_fetch_assoc($result)){
    
          
           ?>
    
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['full_name']?></td>
           <td><?php echo $row['email']?></td>
           <td><?php echo $row['phone']?></td>
           <td><?php echo $row['category']?></td>
           <td><?php echo $row['app_date']?></td>
           <td><?php echo $row['message']?></td>
           <td><?php echo $row['date']?></td>
           <td><?php echo $row['time']?></td>
    
           </tr>
     <?php
               
    
    
            }
    
    ?>
           </tr>
        
    </tbody>
       </table>
    
       </div>


  
<center>
       <h2>User Review</h2>
       </center>

       <table border="1" cellspacing="0" cellpadding="15">
    
       <thead>
             <th>sr no</th>
             <th>name</th>
             <th>email</th>
             <th>comment</th>
             <th>date</th>
             <th>time</th>
       </thead>
    
    <tbody> 
           <tr>
                  <?php
    
    while($row= mysqli_fetch_assoc($result1)){
    
          
           ?>
    
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['name']?></td>
           <td><?php echo $row['email_id']?></td>
           <td><?php echo $row['comment']?></td>
           <td><?php echo $row['date']?></td>
           <td><?php echo $row['time']?></td>
    
           </tr>
     <?php
               
    
    
            }
    
    ?>
           </tr>
        
    </tbody>
       </table>
    
       </div>

       
<center>
       <h2>Sign Up</h2>
       </center>

       <table border="1" cellspacing="0" cellpadding="15">
    
       <thead>
             <th>sr no</th>
             <th>name</th>
             <th>email</th>
             <th>password</th>
             <th>date</th>
             <th>time</th>
       </thead>
    
    <tbody> 
           <tr>
                  <?php
    
    while($row= mysqli_fetch_assoc($result2)){
    
          
           ?>
    
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['si_name']?></td>
           <td><?php echo $row['si_email']?></td>
           <td><?php echo $row['si_pass']?></td>
           <td><?php echo $row['date']?></td>
           <td><?php echo $row['time']?></td>
    
           </tr>
     <?php
               
    
    
            }
    
    ?>
           </tr>
        
    </tbody>
       </table>
    
       </div>

</body>
</html>