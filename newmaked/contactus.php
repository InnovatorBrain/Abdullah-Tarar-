<?php 
require './db.php';
if (!empty($_GET)) {
  $rr=1;
  
  $tt = $_GET;
  foreach ($_GET as $key ) {
    if (empty($key)) {
      ?>
      <script type="text/javascript"> alert('Please Provide <?php print_r(key($tt)); ?>'); </script>
      <?php
      $rr=0;
      break;
    }
    next($tt);
  }
  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];
  $email = $_GET['email'];
  $subject = $_GET['subject'];
  
  

if($rr) {
 $sql = "INSERT INTO contact (id, name, notif, lname, subject, email) VALUES (NULL, '$firstname', '1', '$lastname', '$subject', '$email')";
$mysqli->query($sql);
?>
      <script type="text/javascript"> alert('Form Submitted'); </script>
      <?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="/logo.png" sizes="32x32" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 <style>
  .div{
        margin: 10px 0px 0px 100px;
      }
     /* Style inputs, select elements and textareas */
  input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }

  /* Style the label to display next to the inputs */
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }

  /* Style the submit button */
  input[type=submit] {
    background-color: #3d834a;
    margin-top: 20px;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 450px;
    color: white;
  }

  /* Style the container */
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  /* Floating column for labels: 25% width */
  .col-25 {
    float: left;
    width: 40%;
    margin-top: 6px;
  }

  /* Floating column for inputs: 75% width */
  .col-75 {
    float: left;
    width: 60%;
    margin-top: 6px;
  }
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .main{
    display: flex;
    justify-content: center;
    padding: 50px;
  }
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 50%;
  }
  .container_a{
    width: 25%;
    padding: 40px 0px 0px 20px;
    border-radius: 4px;
    /*background-color: #5D6D7E;*/
    background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
 background-blend-mode: multiply,multiply;
    margin-right: 0px;
  }
  .container_a a{
    text-decoration: none;
    margin-left: 6%;
  }
  .footer_3{
    display: flex;
    /*border: 1px solid black;*/
    width: 100%;
  }
  .footer_3 i{
    font-size: 20px;
    padding: 10px 10px;
    /*margin: 20px 0px 0px 0px;*/
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .footer_3 a{
      color: white;
      /*border: 1px solid black;*/
  }
  .footer_3 a:hover{
    color: black;
  }
  .footer_c li{
    margin-bottom: 10px;
  }
  @media (max-width: 900px)
  {
    .main{
      display: flex;
      flex-direction: column;
    }
    .container_a{
      width: 100%;
      margin-bottom: 40px;
    }
  }

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  } 
   @media screen and (max-width: 600px) {
      .container_a {
        min-height: 250px;
      }
      .container {
          width: 100%;
      }
      input {
          margin-left: 0px !important;
      }
   }
 </style>
</head>
<body style="font-family: Arial; font-size: 15px; background: #C9CCD3;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten;">
  <?php include 'top.php' ?>
  <div class="div">
    <a href="index.php">
      Home
    </a>
    >>
    <a href="">
      Contact Us
    </a>
  </div>
  <div class="main">
    <div class="container_a" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <center>
        <i class="fa fa-envelope-square fa-4x" style="color: white;"></i>
        <br>
        <h1 style="color: white;">
          Contact Us
        </h1>
        <h3 style="color: white;">
          We would love to hear from you!
        </h3>
      </center>
      <div class="footer_c"style="width: 100%;">
            <!-- <img src="logo.png" style="width: 150px; height: 150px;"> -->
            <ul style="color: white; font-size: 17px;list-style-type: none;">
              <!--<li>-->
              <!--  <i class="fa fa-phone"></i>&nbsp;+92-345-8731777-->
              <!--</li>-->
              <li>
                <i class="fa fa-at"></i>&nbsp;info@pasforum.org
              </li>
              <li>
                  House NO. 157,  University Town, Millat Road Faisalabad, Pakistan
              </li>
            </ul>
        </div>
      <div class="footer_3">
              <a href="" style="text-decoration: none;" target="blank">
                <i class="fa fa-facebook icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);"></i>
              </a>
              <a href="" style="text-decoration: none;" target="blank">
                <i class="fa fa-youtube icon" style="background-color: red;"></i>
              </a>
              <a href="" style="text-decoration: none;" target="blank">
                <i class="fa fa-twitter icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);"></i>
              </a>
              <a href="" style="text-decoration: none;" target="blank">
                <i class="fa fa-instagram icon" style="background:linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);" target="blank"></i>
              </a>
              <a href="" style="text-decoration: none;" target="blank">
                <i class="fa fa-linkedin icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);"></i>
              </a>
        </div>
    </div>
    <div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <!-- <h3 style="text-align: center; font-size: xx-large; padding: 20px;">ContactUs</h3> -->
    <form action="">
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="Enter Your name here..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Last Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Your last name here..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Email@</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="email" placeholder="email@.com">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Subject</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Enter Your Message here..." style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit"> 
        </div>
      </form>
    </div> 
  </div>
  <?php include 'footer.php' ?>
</body>
</html>