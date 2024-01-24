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
	<link rel="stylesheet" href="">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		
    <title>Display Data in Table Format</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            align-items: center;
            color: #ffffff;
          align-items: center;
            align-content: center;
            margin: 15px 30px;
          }
        <style>
    .name h1 {
      color: #ffbb55;
      font-weight: bold;
      font-family: 'Oswald', sans-serif !important;
      font-size: 2.6rem !important;
    }

    .form-container {
      position: relative;
      top: 20px;
      left: 50px;
      width: max-content;
      height: max-content;
    }

    @media (max-width:576px) {
      .form-container {
        left: auto;
        width: 100%;
        top: 0;
      }

      .brand-logo {
        margin: 0 auto;
      }
    }

    .brand-logo {
      width: max-content;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: auto;
    }

    .brand-logo img {
      height: 130px;
      width: 130px;

    }
    
*{
        	margin: 0px;
        	padding: 0px;

        	
        }
	 	body{
	 		background-image: -webkit-linear-gradient(-45deg, #405de6, #e1306c 50%, #ffdc80) !important;
	 		min-height: 110vh;
	 	}
	 	header{
	          
	 	}
	 	#fixedsection{
	 		/* position: fixed; */
	 	}
	 	#tsocial{
	 		position: relative;
	 		height:47px;
            /* padding: 8px; */
	 	}
	 	.ghleft{
	 		     color: white;
                 position: absolute;
                top: 9px;
                left: 19px;
                font-size: 15px;
	 	}
	 	.ghright{
                 position: absolute;
                 color: white;
                 top: 6px;
                 right: 15px;
                 font-size: 15px;


	 	}
        #contactlink{
            text-decoration: none;
            font-family: sans-serif;
            color: white;
        }
	 	#ngdiv{
	 		background-color: white;
	 		color: black;
	 		display: flex;
	 		position: relative;
            height: 120px;
	 		  align-items: center;
	 		  justify-content: center;
	 	}
        #ngdivparts{
        	display: flex;
          

        }
         #ngdivparts img{
            height: 100px;
            width: 100px;
            /* padding: 8px 21px; */
            margin: 0px 21px;
         }
        #ngdivpart2{
        	text-align: center;
        	display: flex;
        	flex-direction: column;
        	justify-content: center;
            font-size: 28px;
        }
        #ngdivpart2 p{
            padding: 0px 0px;
            margin: 0px;
             font-family: merriweather,times new roman,Times,serif;
        }
        #chembur{
            font-family: merriweather,times new roman,Times,serif;
                color: #0d2d62;

        }
	 	.ngdivparts img{
                        height: 100px;
                        width: 100px;
	 	}
/*         #ngdipart1,#ngdivpart3{
            margin: 8px 21px;
        } */
	 	.logo a {
  text-decoration: none; 
  font-family: Luminari, fantasy;
  font-size: 40px;
  color: #000000;
  font-style: italic;
  text-align: center;
  vertical-align: middle;
  line-height: 100px;
  display: block;
}
            .ghright i{
     	height: 30px;
     	width: 30px;
       line-height: 34px;
     	border-radius: 50px;
     	color: white;
     	outline: none;
     	border: none;
     	text-align: center;
     }
   
     
     .fa-facebook{
     	  background-color: #395b98;
     }

     .fa-twitter{
     	background-color: #0097e6;

     }
     .fa-google{
     	background-color: #d95139;
     }
    .fa-instagram{
    	background-color: #e84393;
    }
   
    h1{
        margin: 0px 30px;
    }

    #ngnav{
        color: black;
        display: flex;
        text-align: center;
        justify-content: center;
        background-color: white;
        outline: none;
        border: none;
    }
    #ngnav ul{
        display: flex;
        list-style: none;
        margin-bottom: 0px;
        

    }
     #ngnav ul li{
        color: black;
        border-radius: 2px;
        margin-bottom: 8px;
        margin-top: 0px;
       

     }

      #ngnav ul li a{
         text-decoration: none;
         color: black;
         font-size: 18px;
         font-family: merriweather,times new roman,Times,serif;
        padding: 8px 10px 8px 12px;
         border-radius: 4px;
         font-weight: 700;
      }

       #ngnav ul li a:hover{
       
           color: #b80924;
       }
	 
       body{
        position: relative;
      }
    @media (max-width:576px){
      .brand-logo{
        margin: 0 auto;
      }
    }
    .brand-logo{
      position: absolute;
      bottom: 0px;
      right: 0px;
      width: max-content;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: auto;
    }
    .brand-logo img{
      height: 130px;
      width: 130px;
      
    }
    #name{
    /*  font-family: 'Dancing Script', cursive;
font-family: 'Yellowtail', cursive; */

/* font-family: 'Dancing Script', cursive; */
/* font-family: 'Marck Script', cursive; */
font-family: 'Yellowtail', cursive;
font-weight: 500;
font-size: 30px;
color: black;
      /* font-weight: -100; */
    }
    .brandname{
      margin: 0px;
      padding: 0px;
    }

  </style>
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


<!-- ng acharya clooege header end -->
<div class="logo">
		<a href="index.php">RFID door lock system</a>
        
	</div>
<!-- intro and nav section start -->
<div class="aling:center">
<h1>See the Records RFID assign </h1>

</div>

	<h1>OTP Verification</h1>
	<form method="post" action="">
		<label for="rfid">Enter your rfid:</label><br>
		<input type="rfid" id="rfid" name="rfid" required><br>
    <label for="email">Email id
    <input type="email" id="email" name="email">
		<input type="submit" name="verify" value="Verify">
	</form>
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
    
    
    // close connection
    mysqli_close($conn);
?>
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
