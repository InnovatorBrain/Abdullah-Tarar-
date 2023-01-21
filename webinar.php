<?php

// require './db.php';
include './top.php';
$sc=0;
function sql_query($table,$name,$value){
 global $mysqli;
 
 $result = array();
 if (!empty($name) && !empty($value)) {
$sql = "SELECT * FROM $table WHERE $name=$value";
 } else {
$sql = "SELECT * FROM $table ";
}
$r = $mysqli->query($sql);
if ($r->num_rows > 0) {
  while($row = $r->fetch_assoc()) {
 array_push($result, $row);
   }
} 
  return $result; 
}


if (!empty($_POST)) {
  $rr=1;
  
  
    
    if (empty($_POST['country'])){
        $_POST['country']='NO';
    }
  
  $tt = $_POST;
  foreach ($_POST as $key ) {
    if (0 && $key == '') {
      ?>
      <script type="text/javascript"> alert('Please Provide <?php print_r(key($tt)); ?>'); </script>
      <?php
      $rr=0;
      break;
    }
    next($tt);
  }
 
  
  

if($rr) {
$data = json_encode($_POST);  
 $sql = "INSERT INTO webinar (id, data) VALUES (NULL, '$data')";
$mysqli->query($sql);
$sc=1;

$name=$_POST['name'];
$email = $_POST['email'];
$user = ecom_get_setting('smtpuser')['value'];
$pass = ecom_get_setting('smtppass')['value'];
$subject = 'Hello '.$name;
$body = '<p>Thank you very much for your interest in an International Webinar on “Sustainable Nitrogen Management and Food Security” on Wednesday 08th December 2021 at 2:00 pm (Pakistan Standard Time). We look forward to seeing you in this great upcoming event.
<br>
University of Agriculture Faisalabad, FFC and PAS Forum invite you to join Zoom Meeting at below link:
 <br>
https://us02web.zoom.us/j/85985437660?pwd=TURjSmVSL0VONXdQMmNvZVREZXJNUT09<br>
Meeting ID: 859 8543 7660<br>
Passcode: 194227<br>
Thanks<br>
University of Agriculture Faisalabad, Pakistan<br>

Fauji Fertilizer Company (FFC) Limited, Pakistan<br>

Pakistan Agricultural Scientists Forum (PAS Forum)<br>

SAWIE UK</p>';
require './phpmailer/run.php';


}

}
$m = sql_query('webinar','','');
$formid =0;
foreach ($m as $key ) {
  
    $formid++;
  
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="/logo.png" sizes="32x32" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
    input[type=number], select, textarea{
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      resize: vertical;
    }
    input[type=date], select, textarea{
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
      background-color: #4CAF50;
      color: white;
      margin-top: 40px;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    /* Style the container */
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      margin: 100px;
    }
    .col-20{
      float: left;
      padding-left: 50px;
      width: 20%;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #ccc;
    }
    .col-30{
      float: left;
      width: 30%;
      margin-top: 6px;
    }

    /* Floating column for labels: 25% width */
    .col-25 {
      float: left;
      padding-left: 50px;
      width: 20%;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #ccc;
    }
    .col-50 {
      float: left;
      padding-left: 50px;
      width: 50%;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #ccc;
    }
    .row1 div{
      float: left;
      padding-left: 50px;
      width: 50%;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    /* Floating column for inputs: 75% width */
    .col-75 {
      float: left;
      width: 80%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    .row1:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25, .col-75, .col-20, .col-30 {
        width: 100%;
        margin-top: 0;
      }
      .container{
        margin: 0px;
      }
    }
    @media screen and (max-width: 600px) {
  
  .col-25 {
      margin-left: 0px !important;
  }
    }
    .required {
  color: red;
}
  </style>
</head>
<body style="font-family: Arial; font-size: 15px; background: #C9CCD3;background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten;">
  <?php include 'top.php' ?>
  <div class="div">
    <a href="index.php">
      Home
    </a>
    >>
    <a href="regulation.php">
      programs
    </a>
    >>
    <a href="">
      Webinar
    </a>
  </div>
    <?php if ($sc) { ?>
  <div style="text-align: center;padding: 30px;background-color: #b7f7b7;color: black;margin-right: 20%;margin-left: 20%;margin-top: 2%;border: 1px solid #00e200;border-radius: 11px;">
      <p>
        Thank you very much for your interest International webinar on sustainable N management and Food Security. 8th December 2021, 1:30 pm.<br>
<!--Topic: Food QC  Zoom Meeting<br><br><br>-->

<!--Time: International webinar on sustainable N management and Food Security. 8th December 2021, 1:30 pm.<br><br>-->

 

<!--<strong>Join Zoom Meeting</strong><br>-->



 
<!--<a href="https://us02web.zoom.us/j/81161456697?pwd=cFhuNHpoWTRpTm9uVjBxOWdGcXFFQT09" >https://us02web.zoom.us/j/81161456697?pwd=cFhuNHpoWTRpTm9uVjBxOWdGcXFFQT09</a><br><br><br>-->
<!--Meeting ID: 811 6145 6697<br>-->

<!--Passcode: 551129<br><br>-->



<!--Pakistan Agricultural Scientists Forum, FPCCI and COMSTECH  -->
</p></div>
  

 
  <script type="text/javascript">
  
    setTimeout(function () { //window.location='/'; 
    },3000);
  </script>
<?php } ?>
<!--<img src='/flyer-01-01.jpg' style="width: 98%;margin: 1%;" >-->
<h2 style="text-align: center;
    max-width: 65%;
    margin: auto;
    margin-top: 36px;" >International webinar on sustainable N management and Food Security.<br> 8th December 2021, 1:30 pm.</h2>
  <div class="container">
    <form  method="post" enctype="multipart/form-data">
      <center>
        <h1 style="color: #3d834a;">
          International Webinar
        </h1>
      </center>
      
      <div class="row">
        <div>
        <div class="col-25">
          <label for="fname">PAS Form No.</label>
        </div>
        <div class="col-30">
          <input type="number" name="number" value="<?php echo $formid; ?>" placeholder="Form No..." readonly="true">
        </div></div>

       
      <div>
        
        <div class="col-25">
          <label for="fname">Date:<span class="required">*</span></label>
        </div>
        <div class="col-30">
          <input type="text" class="datee" name="date" placeholder="Date..." required>
        </div>

      </div>

      </div>
      <div class="row">
        <div class="col-25">
          <label for="fname"> Full Name<span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="name" placeholder="Enter Your Name Here" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="fname">Qualification <span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="qualification" placeholder="Enter Your qualification " required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="fname">Email</label>
        </div>
        <div class="col-75">
          <input type="text" name="email" placeholder="Enter Your email">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Affiliation/address<span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="affiliation" placeholder="Enter Your Affiliation/address" required>
        </div>
      </div>
      <div class="row">
        <div class="col-20">
          <label for="lname">Phone No<span class="required">*</span></label>
        </div>
        <div class="col-30">
          <input type="text" name="Phone No" placeholder="Phone No" required>
        </div>
        <div class="col-20">
          <label for="lname">Country</label>
        </div>
        <div class="col-30">
          <input type="text" name="country" placeholder="Country" >
        </div>
      </div>
     <div class="row">
        <center>
          <input type="submit" value="Submit">
        </center>
      </div>
    </form>
  </div>
  <?php include 'footer.php' ?>
</body>
<script>
var uu = Date();
uu = uu.split("GMT")[0];
    document.getElementsByClassName('datee')[0].value=uu;
</script>
</html>