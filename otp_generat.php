
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&amp;family=Yellowtail&amp;display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Marck+Script&family=Yellowtail&display=swap" rel="stylesheet"> -->
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="styles.css" />
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>
<body>
<div id="tsocial">
			<div class="ghleft">
			<span>Project guide : Nibha desai</span>
		</div>
		<div class="ghright">
			<a id="contactlink" href="" target="blank">Contact Us</a>
			<a href="https://www.facebook.com/people/Shah-Anchor-Kutchhi-Engineering-College/100067225577284" target="blank" class="socialicon"><i class="fa fa-1x fa-facebook" id="ifacebook" aria-hidden="true"></i></a>
			<a href="https://twitter.com/twitter" target="blank" class="socialicon" id="itwitter"><i class="fa fa-1x fa-twitter" aria-hidden="true"></i></a>
			<a href="https://www.youtube.com" target="blank" class="socialicon" id="igoogle"><i class="fa fa-1x fa-google" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com " target="blank" class="socialicon" id="instagram"><i class="fa fa-1x fa-instagram" aria-hidden="true"></i></a>
		</div>
		</div>
		<div>
<!-- upper header of social media icons end			 -->

<!-- ng acharya clooege header start -->
			
<div id="ngdiv">
	<div id="ngdivparts">
		<div class="ngdivpart" id="ngdivpart1">
		<img src="img/logo_door.jpg" alt="doora logo 1">
	</div>
	<div class="ngdivpart" id="ngdivpart2">
		<p id="chembur"><i>Chembur Multi National Company</i></p>
		<p><b>RFID door lock system</b></p>
	</div>
	<div class="ngdivpart" id="ngdivpart3">
		<img src="img/SAKEC.png" alt="doora logo 2">
	</div>

</div>


	</div>
 <div id="ngnav">
           
  </div>

<!-- ng acharya clooege header end -->
<div class="logo">
    <a>Hey! admin assign RFID number to users</a>  
	</div>
<!-- intro and nav section start -->
<div class="form">
<div class="aling:center">
    <form method="POST" action="otp_generat.php">
        <label for="email" name="email">Enter your email number:</label>
        <input type="text" name="email" id="email">
       
        <button type="submit" name="Generate_OTP" value="Generate OTP">Generate OTP</button>
    
    </form>
</div>
<?php
    // start the session to generate otp
    session_start();
// Load PHPMailer library
require "vendor/autoload.php";

                
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
    // connect to the database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "miniprj";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // check if form is submitted
    if (isset($_POST['Generate_OTP'])) {
        // enter email number
        $email = $_REQUEST['email'];
        
        // check if email number exists in the original_records table
        $sql_check = "SELECT * FROM original_records WHERE email='$email'";
        $result = mysqli_query($conn, $sql_check);
        
        if (mysqli_num_rows($result) == 1) {
            // generate a 6-digit OTP
            $otp = rand(100000, 999999);
            $expiry_time = date('Y-m-d H:i:s', strtotime('+2 minutes'));
            // store the OTP in the database
            $sql_store = "INSERT INTO tempt (email, otp, time) VALUES ('$email', '$otp', '$expiry_time')";
            if(mysqli_query($conn, $sql_store)) {
                // send the OTP message
               
                // Retrieve form data
            
                $subject = "otp";
                $message = "your otp is - ".$otp;
                
                
                $mail = new PHPMailer(true);
                
                try {
                    // Set mailer to use SMTP
                    $mail->isSMTP();
                
                    // Enable debugging
                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                
                    // Set Gmail SMTP server
                    $mail->Host = 'smtp.gmail.com';
                
                    // Set SMTP authentication
                    $mail->SMTPAuth = true;
                
                    // Gmail account credentials
                    // Gmail account credentials
                    $mail->Username = 'nikitagedamxyz@gmail.com'; // Your Gmail address
                    $mail->Password = 'kiaennkisdlanjjr'; // Your Gmail password
                
                    
                    // Enable TLS encryption
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                
                    // Set TCP port to 587
                    $mail->Port = 587;
                
                    // Sender info
                    $mail->setFrom($mail->Username, 'door lock system');
                    
                    // Recipient email
                    $mail->addAddress($email);
                
                    // Email subject and body
                    $mail->Subject = $subject;
                    $mail->Body = $message;
                
                    // Send email
                    $mail->send();
                    
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
                if(mysqli_query($conn, $sql_store)) {
                    echo "<p>OTP successfully sent on your email.</p>";
                } else {
                    echo "<p>Failed to send OTP on your email.</p>";
                }

            } 
                
        else {
                echo "ERROR: Sorry $sql_store. " . mysqli_error($conn);
        }
        }
    else {
            echo "<h3>email id does not exist in the database.</h3>";
    }
       
    }
    
  
    // close connection
    mysqli_close($conn);
?><div class="form">
<form method="POST" action="otp_verify.php">
        <button type="submit" name="next" value="NEXT">NEXT</button>
        </div>
</form>
    </div>
<div class="brand-logo mt-3">
        <div class="text-right">
            <p class="brandname"><strong style="color: white;font-size:2.4rem;">Developed By</strong><br>
               </p><p class="brandname" id="name"> Nikita G. 12<br>Sunny C.9 <br>Nilesh G. 11<br>Srushti J.18</p>
  <p></p><br<br>&gt;
        </br<br></div><br>
        <div class="text-left" style="width: max-content;">
            <img src="img/SAKEC.png" alt="">
        </div>
    </div>

</body>
</html>