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
                    <li><a href="ManageUsers.php" title="">Manage Users</a></li>
                      <li><a href="userlog.php" title="">Userslog</a></li>
                      <li><a href="devices.php" title="">Device</a></li>
                      
                        <li><a href="login.php">Log In</a></li>    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
          <i class="fa fa-bars"></i></a>
                </ul>
            </nav>

        </div>

    <!-- ng acharya clooege header end -->
    <div class="logo">
        <a href="index.php">RFID door lock system</a>
            
      </div>

    <!-- intro and nav section start -->
    <div class="aling:center">
    <h1>update user </h1>
    <a href="adduser.php"><button type="submit" name="submit" id="submit">Add User</button></a>
      <a href="updateuser.php"><button type="submit" name="submit" id="submit">Update User</button></a>
      <a href="deleteuser.php"><button type="submit" name="submit" id="submit">Delete User</button></a>
   
    <div class="aling:center">
      <div class="form">
        <form method="post" action="">
            <label for="email">Email Number:</label>
            <input type="text" name="email" id="email"><br>
            <label for="rfid">Enter RFID Number:</label>
            <input type="text" name="rfid" id="rfid"><br>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name"><br>
            <button type="submit" name="submit" id="submit">Submit</button>
        </form>
      </div>
       </div>    

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

    $email=$_REQUEST['email'];
    $rfid=$_REQUEST['rfid'];
    $name=$_REQUEST['name'];
    

    // update data in the database
    $sql = "UPDATE original_records SET rfid='$rfid', name='$name' WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    // display success message
    if ($result) {
        echo "Record updated successfully.";
            
    } else {
        echo "Error updating record: " . mysqli_error($conn);

    } // fetch data from the database
    $sql = "SELECT * FROM original_records";
    $result = mysqli_query($conn, $sql);
    
    // display data in table format
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>email</th><th>RFID</th><th>Name</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["email"] . "</td><td>" . $row["rfid"] . "</td><td>". $row["name"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }


    // close connection
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
