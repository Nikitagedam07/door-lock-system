
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
    <a>Hey! verify otp</a>  
	</div>
<!-- intro and nav section start -->
<div class="form">
	<form method="post" action="">
		<label for="email">Enter your Email:</label><br>
		<input type="email" id="email" name="email" required><br>
		<label for="uotp">Enter OTP:</label><br>
		<input type="text" id="uotp" name="uotp" required><br>
		<button type="submit" name="verify_otp" value="Verify OTP">Verify OTP</button>
	</form>
</div>
<div class="echo">
    <?php
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

    if (isset($_POST['verify_otp'])) {
        $email = $_POST['email'];
        $uotp = $_POST['uotp'];
    // fetch data from the database
    $sql_check = "SELECT * FROM original_records WHERE email='$email'";
    $result_check = mysqli_query($conn, $sql_check);
   if(mysqli_num_rows($result_check) > 0)
   {
    $sql = "SELECT * FROM tempt WHERE email ='$email' AND otp='$uotp'";
    $result = mysqli_query($conn, $sql);

        // display data in table format
        if (mysqli_num_rows($result) > 0) {
            $current_time = date('Y-m-d H:i:s');
            $sql_check_exp = "SELECT * FROM tempt WHERE email ='$email' AND otp='$uotp' AND time > '$current_time'";
            if (mysqli_num_rows(mysqli_query($conn, $sql_check_exp)) > 0) {
                echo "verified.";
                $sql_check2="UPDATE tempt SET status = 'active' WHERE otp = '$uotp';";
                if (mysqli_query($conn, $sql_check2)) {
                    
                echo header('Location: success.html');
                }
                else{
                    echo "status not updated."; 
                }
            } else {
                echo "time expire.";
            }
            echo "records found.";
        }
         else {
            echo "wrong otp.";
        }
   }
   else{
    echo "email is not found";
   }
}
    // close connection
    mysqli_close($conn);
    ?>
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
