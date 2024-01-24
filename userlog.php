<!DOCTYPE html>
<html>
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
		
    <title>Display Data in Table Format</title>
    <style>
  
  </style>


</head>
<body>


    <!-- upper header of social media icons start -->

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
        <p><b>DOORA</b></p>
      </div>
      <div class="ngdivpart" id="ngdivpart3">
        <img src="img/SAKEC.png" alt="doora logo 2">
      </div>

    </div>


      </div>
    <div id="ngnav">
          
            <nav>
                <ul>
                    <li><a href="index.php" title="">Users</a></li>
                    <li><a href="manage_user.php" title="">Manage Users</a></li>
                      <li><a href="userlog.php" title="">Userslog</a></li>
                    
                      
                        <li><a href="logout.php">Logout

                        </a></li>    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
          <i class="fa fa-bars"></i></a>
                </ul>
            </nav>

        </div>

    <!-- ng acharya clooege header end -->
    <div class="logo">
        <a href="index.php">RFID door lock system</a>
        <h1><a>userlogs</a></h1>  
</div>


<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "miniprj";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Connect to database

// Execute SQL query
$sql = "SELECT original_records.rfid, original_records.name, tempt.email, tempt.status, tempt.time
FROM original_records
JOIN tempt ON original_records.email = tempt.email;
";
$result = mysqli_query($conn, $sql);
if(!$result) {
  die('Error: ' . mysqli_error($conn));

}
// Display records in a table
echo "<table>";
echo "<tr><th>RFID</th><th>Name</th><th>Email</th><th>Status</th><th>Time</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['rfid']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td>".$row['time']."</td>";
    echo "</tr>";
}
echo "</table>";

// Close database connection
mysqli_close($conn);
?>

<div class="brand-logo mt-3">
        <div class="text-right">
            <p class="brandname"><strong style="color: white;font-size:2.4rem;">Developed By</strong><br>
            </p><p class="brandname" id="name"> Nikita G. 12<br>Sunny C.9 <br>Nilesh G. 11<br>Srushti J.18</p>
            <p></p><br><br>&gt;</br<br>
        </div><br>
        <div class="text-left" style="width: max-content;">
            <img src="img/SAKEC.png" alt="">
        </div>
    </div>

</body>
</html>
