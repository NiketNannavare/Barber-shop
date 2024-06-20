  <?php
error_reporting(0);
require_once('function.php');
$a= new barber_shop();



if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if (isset($_POST['submit-btn1'])){
        
        $full_name=$_POST['name'];
        $gmail=$_POST['email'];
        $var_phone='91'.$_POST['phone'];
        $var_cateogry=$_POST['cateogry'];
        $var_date=$_POST['date'];
        $var_message=$_POST['message'];

        if($a->appoin($full_name,$gmail,$var_phone,$var_cateogry,$var_date,$var_message))
        {
            echo "khckznn";
            $params=array(
            'token' => '79yawey5xf6rqbih',
            'to' => '9579621609',
            'body' => 'Your Appointment Conformed......

            //     Dear sir,
                
            //     We are delighted to inform you that your appointment with Hair Studio has been successfully booked!
            //      We can\'t wait to welcome you at our store and provide you with the exceptional service you deserve.'
            );
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.ultramsg.com/instance57001/messages/chat",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_SSL_VERIFYHOST => 0,
              CURLOPT_SSL_VERIFYPEER => 0,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => http_build_query($params),
              CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
              ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              echo $response;
            }
        }

        
    //     $servername="localhost";
    //     $username="root";
    //     $password="";
    //     $database="barber_shop";
    //     $conn = mysqli_connect($servername,$username,$password,$database);
     
        
    //     if(!$conn){
    //         die("sorry:".mysqli_connect_error());
            
    //     }
    //     else{
    //         $sql= "INSERT INTO `appointment_section` (`id`, `full_name`, `email`, `phone`, `category`, `app_date`, `message`, `date`, `time`) VALUES ('', '$full_name', '$gmail', '$var_phone', '$var_cateogry', '$var_date', '$var_message', '', current_timestamp())";
    //         $result= mysqli_query($conn, $sql);
            
    //         $sql="INSERT INTO `user_reviews` (`id`, `name`, `email_id`, `comment`, `date`, `time`) VALUES ('', '$var_name', '$var_email', '$var_comment', '', current_timestamp());";
    //         $result= mysqli_query($conn, $sql);
            
            
    //     }
    // }
}

if (isset($_POST['submit-btn'])){
        
    $var_name=$_POST['name1'];
    $var_email=$_POST['re_email'];
    $var_comment=$_POST['comment'];

    $a->review($var_name,$var_email,$var_comment);
    
}
}

    



if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if (isset($_POST['submit-btn'])){
        
       $var_name=$_POST['name'];
       $var_email=$_POST['email'];
       $var_pass=$_POST['pass'];
      
       $a->sign_up($var_name,$var_email,$var_pass);

    }
}




// $arr=json_encode(array(
//     "phone"=>"919325609409",
//     "body"=>" Your Appointment Conformed......

//     Dear sir,
    
//     We are delighted to inform you that your appointment with Hair Studio has been successfully booked!
//      We can't wait to welcome you at our store and provide you with the exceptional service you deserve."
// ));

// $url="https://api.ultramsg.com/instance57001/message?token=79yawey5xf6rqbih";
// $ch=curl_init();

// curl_setopt($ch,CURLOPT_URL,$url);
// curl_setopt($ch,CURLOPT_POST,true);
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
// curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
// curl_setopt($ch,CURLOPT_HTTPHEADRE,array(

//     'content-type:application/json',
//     'content-length:'.strlen($arr)
// ));
// $result=curl_exec($ch);
// curl_close($ch);
// echo ($result);

?>  










<!DOCTYPE html>
<html lang="en">

<head>
      <meta name="keywords" content="Hair Studio Barber Shop"/>
      <meta name="description" content="Style Your Hair Style Your dream .here we provide the amazing sevices at low cost .."/>
      <meta name="robots" content="index">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barber shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Kaushan+Script&family=Poppins&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="banner">
        <img src="image/logo.png" alt="" class="logo">
        <div class="banner-text">
            <h1>Hair studio</h1>
            <p>Style Your Hair Is Style Your Life</p>
            <div class="banner-btn">
                <a href="#appointment"><span></span>Add Appointment<i class=" fa fa-solid fa-arrow-right"></i></a>
                <a href="#footer"><span></span>Become Member<i class=" fa fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <div id="sidenav">
        <nav>
            <ul>
                <li><i class=" fa fa-solid fa-house"></i><a href="#banner">Home</a></li>
                <li><i class=" fa fa-sharp fa-solid fa-shield-halved"></i><a href="#feature">Features</a></li>
                <li><i class=" fa fa-solid fa-square-check"></i><a href="#Service">Services</a></li>
                <li><i class=" fa fa-sharp fa-solid fa-indian-rupee-sign"></i><a href="#Pricing">Pricing</a></li>
                <li><i class=" fa fa-solid fa-star"></i><a href="#Reviews">Reviews</a></li>
                <li><i class=" fa fa-sharp fa-solid fa-user"></i><a href="login.php">Login</a></li>
                <li><i class=" fa fa-regular fa-address-card"></i><a href="#footer">Contact Us </a></li>
                
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="image/menu.png" alt="" id="menu">
    </div>




    <!-- Features -->

    <section id="feature">
        <div class="title-text">
            <p>FEATURES</p>
            <h1>Why Choose Us</h1>
        </div>


        <div class="feature-box">
            <div class="features">
                <h1> Experinced Staff</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class=" fa fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="feature-text">
                        <p> Exceptional team of talented and skilled barbers, ready to give you the perfect haircut and grooming experience. Our team has 10 year+ working Experience
                        </p>
                    </div>
                </div>


                <h1> Pre Booking online </h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class=" fa fa-solid fa-square-check"></i>
                    </div>
                    <div class="feature-text">
                        <p>Say goodbye to waiting in line and secure your spot with just a few clicks. Here's how our online pre-booking process works
                        </p>
                    </div>
                </div>


                <h1> Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class=" fa fa-sharp fa-solid fa-indian-rupee-sign"></i>
                    </div>
                    <div class="feature-text">
                        <p>We are committed to providing high-quality grooming services at affordable costs, so you can always maintain a sharp and stylish appearance without overspending. Here's how we ensure affordability without compromising on the quality of our services
                        </p>
                    </div>
                </div>

            </div>
            <div class="features-img">
                <img src="image/barber-man.jpg" alt="">
            </div>
        </div>
    </section>



    <!-- Services -->


    <section id="Service">

        <div class="title-text">
            <p>SERVICES</p>
            <h1>We Can Provide Better</h1>
        </div>
        <div class="service-box">
            <div class="single-service">
                <img src="image/pic-1.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Hair Styling</h3>
                    <hr>
                    <p>There are so many hair styles but our barber advice you which style soot your face. </p>
                </div>
            </div>
            <div class="single-service">
                <img src="image/pic-2.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Beard Trim</h3>
                    <hr>
                    <p>There are so many Beard styles but our barber advice you which style soot your face. </p>
                </div>
            </div>
            <div class="single-service">
                <img src="image/pic-3.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Hair Cut</h3>
                    <hr>
                    <p>Our barber gives the best hair cut for you and affortable cost </p>
                </div>
            </div>
            <div class="single-service">
                <img src="image/pic-4.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Dry Shapoo</h3>
                    <hr>
                    <p> Here we clean your Hair in 20 to 30 min and low in cost</p>
                </div>
            </div>
            <a href="styling.html"><span></span>Find More.. <i class=" fa fa-solid fa-arrow-right" ></i></button></a>
        </div>
       
      
        
    </section>




    <!-- pricing -->

    <section id="Pricing">
        <div class="title-text">
            <p>PRICING</p>
            <h1>Awesome Pricing Plan</h1>
        </div>

        <div class="pricing-tab-container">

            <ul class="tab-filter">

                <li>
                    <button class="filter-btn active" data-filter-btn="all">
                        <div class="btn-icon">
                           <img src="image/comb.png" alt="">
                        </div>
                        <p class="btn-text">All Pricing
                        </p>
                    </button>
                </li>

                <li>
                    <button class="filter-btn" data-filter-btn="beauty-spa">
                        <div class="btn-icon">
                           <img src="image/spa.png" alt="">
                        </div>
                        <p class="btn-text">Beauty & Spa </p>
                    </button>
                </li>

                <li>
                    <button class="filter-btn " data-filter-btn=" face-washing">
                        <div class="btn-icon">
                            <img src="image/wash.png" alt="">
                        </div>
                        <p class="btn-text">Face Washing </p>
                    </button>
                </li>
                <li>
                    <button class="filter-btn " data-filter-btn="body-treatments">
                        <div class="btn-icon">
                            <img src="image/003-relax.png" alt="">
                        </div>
                        <p class="btn-text">Body Treatments </p>
                    </button>
                </li>

                <li>
                    <button class="filter-btn " data-filter-btn="meditations">
                        <div class="btn-icon">
                           <img src="image/006-exercise.png" alt="">
                        </div>
                        <p class="btn-text">Meditations</p>
                    </button>
                </li>

                <li>
                    <button class="filter-btn " data-filter-btn="shaving">
                        <div class="btn-icon">
                           <img src="image/002-shave.png" alt="">
                        </div>
                        <p class="btn-text">Shaving</p>
                    </button>
                </li>

            </ul>
        </div>




        <ul class="grid-list">
            <li data-filter="shaving">
                <div class="pricing-card">
                    <figure class="card-banner img-holder">
                        <img src="image/pricing-1.jpg" alt="Hair Cutting & Fitting" class="img-cover">
                    </figure>

                    <div class="wrapper">
                        <h3 class="h3 card-title">Hair Cutting & Fitting</h3>
                        <p class="card-title">Clean & simple 20 - 30 minutes</p>
                    </div>
                    <data class="card-price" value="100">100</data>


                </div>
            </li>

            <li data-filter="shaving">
                <div class="pricing-card">
                    <figure class="card-banner img-holder" style="--width: 90; --higth:90 ;">
                        <img src="image/pricing-2.jpg" alt="Shaving & Facial" class="img-holder">
                    </figure>

                    <div class="wrapper">
                        <h3 class="h3 card-title">Shaving & Facial</h3>
                        <p class="card-title">Clean & simple 20-30 minutes</p>
                    </div>
                    <data class="card-price" value="45">90</data>


                </div>
            </li>

            <li data-filter=" face-washing">
                <div class="pricing-card">
                    <figure class="card-banner img-holder" style="--width: 90; --higth:90 ;">
                        <img src="image/pricing-3.jpg" alt="Hair Color & Wash" class="img-holder">
                    </figure>

                    <div class="wrapper">
                        <h3 class="h3 card-title">Hair Color & Wash</h3>
                        <p class="card-title">Clean & simple 15 - 25 minutes</p>
                    </div>
                    <data class="card-price" value="35">150</data>


                </div>
            </li>


            <li data-filter="body-treatments">
                <div class="pricing-card">
                    <figure class="card-banner img-holder" style="--width: 90; --higth:90 ;">
                        <img src="image/pricing-4.jpg" alt="Body Massage" class="img-holder">
                    </figure>

                    <div class="wrapper">
                        <h3 class="h3 card-title">Body Massage</h3>
                        <p class="card-title">Clean & simple 1 -2 Hours</p>
                    </div>
                    <data class="card-price" value="56">300</data>


                </div>
            </li>

            <li data-filter="beauty-spa">
                <div class="pricing-card">
                    <figure class="card-banner img-holder" style="--width: 90; --higth:90 ;">
                        <img src="image/pricing-5.jpg" alt="Beauty & Spa" class="img-holder">
                    </figure>

                    <div class="wrapper">
                        <h3 class="h3 card-title">Beauty & Spa</h3>
                        <p class="card-title">Clean & simple 30-40 minutes</p>
                    </div>
                    <data class="card-price" value="27">200</data>


                </div>
            </li>

            <li data-filter=" face-washing">
                <div class="pricing-card">
                    <figure class="card-banner img-holder" style="--width: 90; --higth:90 ;">
                        <img src="image/pricing-6.jpg" alt="Facial & Face Wash" class="img-holder">
                    </figure>

                    <div class="wrapper">
                        <h3 class="h3 card-title">Facial & Face Wash</h3>
                        <p class="card-title">Clean & simple 20 - 30 minutes</p>
                    </div>
                    <data class="card-price" value="63">200</data>


                </div>
            </li>

            <li data-filter="body-treatments">
                <div class="pricing-card">
                    <figure class="card-banner img-holder" style="--width: 90; --higth:90 ;">
                        <img src="image/pricing-7.jpg" alt="Backbone Massage" class="img-holder">
                    </figure>

                    <div class="wrapper">
                        <h3 class="h3 card-title">Backbone Massage</h3>
                        <p class="card-title">Clean & simple 1- 2 Hours</p>
                    </div>
                    <data class="card-price" value="43">500</data>


                </div>
            </li>

            <li data-filter="meditations">
                <div class="pricing-card">
                    <figure class="card-banner img-holder" style="--width: 90; --higth:90 ;">
                        <img src="image/pricing-8.jpg" alt="Meditation & Massage" class="img-holder">
                    </figure>

                    <div class="wrapper">
                        <h3 class="h3 card-title">Meditation & Massage</h3>
                        <p class="card-title">Clean & simple 30-40 minutes</p>
                    </div>
                    <data class="card-price" value="74">700</data>
                </div>
            </li>
        </ul>



        <!-------- appointment -------->


        <section id="appointment">
            <div class="text">
                    <div class="title-text " style="color: white;">
                        <p>APPOINTMENT</p>
                        <h1>Make Appointment</h1>
                    </div>
            
    <div class="container">
        <form action="demo.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" class="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="phone">Cateogry:</label>
            <select name="cateogry" id="">
                <option value="Select Cateogry">Selet Cateogry</option>
                <option value="Shaving">Shaving</option>
                <option value="hair Cutting">Hair Cutting</option>
                <option value="Hair Color">Hair Color</option>
                <option value="Beauty Spa">Beauty Spa</option>
                <option value="Face Washing">Face Washing</option>
            </select>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>
<!-- 
            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required> -->
            <label for="">Write Message:</label>
            <textarea name="message" class="textarea" cols="70" rows="3" style="border-radius: 5px;"></textarea>
              <div class="submit-btn">
            <!-- <input type="submit" value="Book Appointment"> -->
             <button class="submit"  id="submit" name="submit-btn1"><span></span>Book Appointment<i class=" fa fa-solid fa-arrow-right" ></i></button></button></div> 
        

          <!-- <input type="submit" name="submit-btn1" value="book appoint"> -->
        </form>
    </div>
    </div>




        </section>





        <!-- Reviews -->


        <section id="Reviews">
            <div class="title-text">
                <p>REVIEWS</p>
                <h1>What Client Says</h1>
            </div>
            <div class="review-row">
                <div class="review-col">
                    <div class="user">
                        <img src="image/img-2.jpg" alt="">
                        <div class="user-info">
                            <h4>MAULI MORE</h4>
                            <small><i class=" fa fa-brands fa-twitter"></i>@mauli_more</small>
                        </div>
                    </div>
                    <p>I recently visited the local barber shop, and I must say, it was an outstanding experience. The barbers were not only skilled but also attentive to my haircut preferences. They took the time to understand what I wanted and offered valuable suggestions. The end result was a precise and stylish haircut that exceeded my expectations. Moreover, the shop had a welcoming atmosphere, and the staff made me feel at ease throughout the entire visit. I highly recommend this barber shop to anyone looking for top-notch haircuts and a friendly environment.
                    </p>
                </div>
                <div class="review-col">
                    <div class="user">
                        <img src="image/img-1.jpg" alt="">
                        <div class="user-info">
                            <h4>M S Dhoni</h4>
                            <small><i class=" fa fa-brands fa-twitter"></i>@Ms_Dhoni</small>
                        </div>
                    </div>
                    <p>I recently had the pleasure of visiting a truly remarkable establishment - a barber shop that surpassed all my expectations. From the moment I stepped through the door, I knew I was in for a treat. The shop's ambiance was inviting, with a tasteful blend of modern aesthetics and a classic touch that exuded charm..</p>
                </div>
                <div class="review-col">
                    <div class="user">
                        <img src="image/img-3.jpg" alt="">
                        <div class="user-info">
                            <h4>Virat Kholi</h4>
                            <small><i class=" fa fa-brands fa-twitter"></i>@virat_kholi</small>
                        </div>
                    </div>
                    <p>I visited the barber shop based on positive reviews I had seen online, but my experience left much to be desired. The service was disappointing, as the barbers seemed rushed and didn't pay much attention to what I wanted</p>
                </div>
            </div>
            <div class="add-review">
                <button id="add-review" > <span></span>Add Reviews<i class=" fa fa-solid fa-arrow-right"></i></button>
            </div>



            <div id="review-form">
                <h2>Add a Review</h2>
                <form action="" method ="POST">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name1" required>
                  </div>
                  <div class="form-group">
                    <label for="id">Email ID:</label>
                    <input type="text" id="rating" name="re_email" min="1" max="5" required>
                  </div>
                  <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment" required></textarea>
                  </div>
                  <button class="sub-btn"   name="submit-btn"  >Submit Review<i class=" fa fa-solid fa-arrow-right" ></i></button>
                  <!-- <button type="button" id="cancel-button">Cancel</button> -->
                </form>
              </div>
              
        </section>


        <!-- footer -->


        <section id="footer">
            <img src="image/footer-img.png" alt="" class="footer-img">
            <div class="title-text">

                <p>CONTACT</p>
                <h1>Visit Shop Today</h1>
            </div>


             <form action="" method="POST">
            <div class="footer-brand">

                <div class="logo1">
                    <img src="image/logo.png" alt="">
                </div>

                <div class="input1">
                    <input type="email" name="email_address" placeholder="Enter Your Email" class="text1">

                    <!-- <div class="btn-footer"> -->
                    <button  class="btn" id="become"  >
                        <span></span>Become Member<i class=" fa fa-solid fa-arrow-right"></i>
                    </button>

                </div>


            </div>
            </form>


            <div class="footer-row">
                <div class="footer-left">
                    <h1>Opening Hours</h1>
                    <p><i class="fa fa-sharp fa-solid fa-clock"></i>Monday to Friday - 10am to 9pm</p>
                    <p><i class="fa fa-sharp fa-solid fa-clock"></i>Saturday - 8am to 11am</p>
                    <p><i class="fa fa-sharp fa-solid fa-clock"></i>Sunday - 8am to 11pm</p>
                </div>
                <div class="footer-Rigth">
                    <h1>Get In Touch</h1>
                    <p><i class="fa fa-sharp fa-solid fa-location-dot"></i>At solapur,shivaji maharaj chock </p>
                    <p><i class="fa fa-solid fa-paper-plane"></i>hairstudio887@gmail.com</p>
                    <p><i class="fa fa-solid fa-phone"></i>+91 9999999999</p>
                </div>
            </div>

            <div class="social-links">
                <i class=" fa fa-brands fa-facebook"></i>
                <i class=" fa fa-brands fa-instagram"></i>
                <i class=" fa fa-brands fa-twitter"></i>
                <i class=" fa fa-brands fa-youtube"></i>
            </div>
            <div class="repot">
                <center>
            <a href="report.php" >User Report</a>
            </center>
            </div>
        </section>




















        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://smtpjs.com/v3/smtp.js">
        </script>
        <script src="script.js"></script>




</body>

</html>