<?php 
// require './db.php';
require './top.php';
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style> .div{
        margin: 10px 0px 0px 100px;
      }
  input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }

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
  .col-25 {
    float: left;
    width: 40%;
    margin-top: 6px;
  }
  .col-75 {
    float: left;
    width: 60%;
    margin-top: 6px;
  }
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
  .container_a{
    border-radius: 4px;
    background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
 background-blend-mode: multiply,multiply;
    margin-right: 0px;
  }
  .footer_3{
    display: flex;
    width: 100%;
  }
  .footer_3 i{
    font-size: 20px;
    padding: 10px 10px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .footer_3 a{
      color: white;
  }
  .footer_3 a:hover{
    color: black;
  }
  .footer_c li{
    margin-bottom: 10px;
  }
  
 </style>
</head>

<body style="font-family: Arial; font-size: 15px; background: #E1FFB1;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten;">
  <div class="div">
    <a href="index.php"> Home </a> &gt;&gt; <a href=""> Contact Us </a>
  </div>
  <div class="container py-3">
    <div class="row">
      <div class="col-lg-4 container_a p-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <center>
          <i class="fa fa-envelope-square fa-4x" style="color: white;"></i>
          <br>
          <h1 style="color: white;"> Contact Us </h1>
          <h3 style="color: white;"> We would love to hear from you! </h3>
        </center>
        <div class="footer_c" style="width: 100%;">
          <ul style="color: white; font-size: 17px;list-style-type: none;">
            <li>
              <i class="fa fa-at"></i>&nbsp;info@pasforum.org </li>
            <li> House NO. 157, University Town, Millat Road Faisalabad, Pakistan </li>
          </ul>
        </div>
        <div class="footer_3">
          <a href="" target="blank" class="mx-auto" style="text-decoration: none;">
            <i class="fa fa-facebook icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);"></i>
          </a>
          <a href="" style="text-decoration: none;" target="blank" class="mx-auto">
            <i class="fa fa-youtube icon" style="background-color: red;"></i>
          </a>
          <a href="" style="text-decoration: none;" target="blank" class="mx-auto">
            <i class="fa fa-twitter icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);"></i>
          </a>
          <a href="" style="text-decoration: none;" target="blank" class="mx-auto">
            <i class="fa fa-instagram icon" style="background:linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);" target="blank"></i>
          </a>
          <a href="" style="text-decoration: none;" target="blank" class="mx-auto">
            <i class="fa fa-linkedin icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-8 px-4 py-2 bg-light" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>


<?php 
include "footer.php"
?>