<?php                                 
require './db.php';
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

class upload
  {
    
    public function now(){
      if (isset($_FILES['memberimg']['tmp_name']) && !empty($_FILES['memberimg']['tmp_name'])) {
   $target_dir = "./public/uploads/";
   $target_file = $target_dir .'memberimg'. basename($_FILES['memberimg']["name"]);
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
   return $this->up();
   }
 }
    }
    private function up(){
      $target_dir = "./public/uploads/";
   $target_file = $target_dir .'memberimg'. basename($_FILES['memberimg']["name"]);
      move_uploaded_file($_FILES['memberimg']["tmp_name"], $target_file);
   $r = 'memberimg'. basename($_FILES['memberimg']["name"]);
   return $r;
    }
  }

if (!empty($_POST)) {
  $rr=1;
  
  if (!isset($_POST['agree'])) {
      ?>
      <script type="text/javascript"> alert('Please Agree Term & Condition'); </script>
      <?php
      
      die();
    }
    
    if (empty($_POST['Passport'])){
        $_POST['Passport']='no';
    }
    if (empty($_POST['address'])){
        $_POST['address']='empty';
    }
  
  $tt = $_POST;
  foreach ($_POST as $key ) {
    if (empty($key)) {
      ?>
      <script type="text/javascript"> alert('Please Provide <?php print_r(key($tt)); ?>'); </script>
      <?php
      $rr=0;
      break;
    }
    next($tt);
  }
  $number = $_POST['number'];
  $date = $_POST['date'];
  $name = $_POST['name'];
  $Passport = $_POST['Passport'];
  $Cnic = $_POST['Cnic'];
  $qualification = $_POST['qualification'];
  $subject = $_POST['subject'];
  $specialization = $_POST['specialization'];
  $institute = $_POST['institute'];
  $Membership = $_POST['Membership'];
  $Gender = $_POST['Gender'];
  $designation = $_POST['designation'].'&'.$_POST['Organization'];
  $phone = $_POST['phone'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $address = $_POST['address'] . "&" . $_POST['referencename'];
  
  


  $r='';

if($rr) {
  $upload = new upload();
  $r = $upload->now();

 $sql = "INSERT INTO member (id, numbe, img, dat, name, cnic, passport, notif, qualification, subject, special, institute, membertype, gender, designation, phone, mobile, email, address) VALUES (NULL, '$number', '$r', '$date', '$name', '$Cnic', '$Passport', '1', '$qualification', '$subject', '$specialization', '$institute', '$Membership', '$Gender', '$designation', '$phone', '$mobile', '$email', '$address')";
$mysqli->query($sql);
// require './backup.php';
$sc=1;
$user = ecom_get_setting('smtpuser')['value'];
$pass = ecom_get_setting('smtppass')['value'];
$subject = 'Hello '.$name;
$body = 'Assalam o allaikum, Chairman of Pakistan Agricultural Scientists Forum is pleased and thanks<br> for your application for the membership of this distinguished organization. Soon you will receive<br> our response on your application. Best regards';
require './phpmailer/run.php';
}
}
$m = sql_query('member','','');
$formid =2101;
foreach ($m as $key ) {
  if ($key['numbe'] == $formid) {
    $formid++;
  }
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
      Rules & Regulations
    </a>
    >>
    <a href="">
      Membership Form
    </a>
  </div>
  <?php if ($sc) { ?>
 
  <div style="text-align: center;padding: 30px;background-color: #b7f7b7;color: #388c15;margin-right: 20%;margin-left: 20%;margin-top: 2%;border: 1px solid #00e200;border-radius: 11px;"><p>Assalam o allaikum, Chairman of Pakistan Agricultural Scientists Forum is pleased and thanks for your application for the membership of this distinguished organization. Soon you will receive our response on your application. Best regards</p></div>
  <script type="text/javascript">
    setTimeout(function () { 
        //window.location='/';
    },3000);
  </script>
<?php } ?>
  <div class="container">
    <form action="./membership_form.php" method="post" enctype="multipart/form-data">
      <center>
        <h1 style="color: #3d834a;">
          PAS Forum Membership Form
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

        <div style="float: right;" > <div style="width: 104px;
    height: 103px;
    border: 1px solid;
    border-radius: 7px;" ><img id="uploadPreview" style="width: 100px; height: 100px;" /></div>
      <input type="file" name="memberimg" onchange="PreviewImage(this);" ></div>
<script type="text/javascript">
  function PreviewImage(e) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(e.files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>
      <div>
        <div class="col-25" style="margin-left: 50px;">
          <label for="fname">Image:<span class="required">*</span></label>
        </div>
        <div class="col-25">
          <label for="fname">Date:<span class="required">*</span></label>
        </div>
        <div class="col-30">
          <input type="Date" name="date" placeholder="Date..." required>
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
          <label for="fname">CNIC No <span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="Cnic" placeholder="For Example:33100-12345677-8 " required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="fname">Passport No</label>
        </div>
        <div class="col-75">
          <input type="text" name="Passport" placeholder="Enter Your Passport No">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Qualification<span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="qualification" placeholder="Enter Your Qualification,(P.H.D, M.PHILL, BS)" required>
        </div>
      </div>
      <div class="row">
        <div class="col-20">
          <label for="lname">Subject<span class="required">*</span></label>
        </div>
        <div class="col-30">
          <input type="text" name="subject" placeholder="Subject..." required>
        </div>
        <div class="col-20">
          <label for="lname">Specialization<span class="required">*</span></label>
        </div>
        <div class="col-30">
          <input type="text" name="specialization" placeholder="Secialization..." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Degree Awarding Institute<span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="institute" placeholder="Institute..." required>
        </div>
      </div>
      <div class="row">
        <div class="col-50">
          <label for="country">
            Membership Type:<span class="required">*</span>
          </label>
        </div>
        <div class="col-50">
          <label>
            Gender:<span class="required">*</span>
          </label>
        </div>
      </div>
      <div class="row1">
        <div class="">
          <input type="radio" name="Membership" value="regular" required>&nbsp;&nbsp;<label>Regular Membership</label>
          <input type="radio" name="Membership" value="lifetime" required>&nbsp;&nbsp;<label>Lifetime Membership</label>
          <input type="radio" name="Membership" value="Associate" required>&nbsp;&nbsp;<label>Associate Membership</label>
        </div>
        <div class="">
          <input type="radio" name="Gender" value="male" required>&nbsp;&nbsp;<label>Male</label>
          <input type="radio" name="Gender" value="female" required>&nbsp;&nbsp;<label>Female</label>
          <input type="radio" name="Gender" value="others" required>&nbsp;&nbsp;<label>Others</label>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Current Designation <span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="designation" placeholder="Desig..." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname"> Organization<span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="Organization" placeholder="Organi..." required>
        </div>
      </div>
      <div class="row">
        <div class="col-20">
          <label for="lname">Phone No<span class="required">*</span></label>
        </div>
        <div class="col-30">
          <input type="number" name="phone" placeholder="Phone..." required>
        </div>
        <div class="col-20">
          <label for="lname">Mobile/Whatsapp<span class="required">*</span></label>
        </div>
        <div class="col-30">
          <input type="number" name="mobile" placeholder="Mobile..." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Email<span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="email" placeholder="Email@.com" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Reference Name<span class="required">*</span></label>
        </div>
        <div class="col-75">
          <input type="text" name="referencename" placeholder="Which PAS Forum member you personal know and he/she personally knows you" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Comment<span class="required">*</span></label>
        </div>
        <div class="col-75">
          <textarea type="text" name="address" placeholder="Comments here..."></textarea>
        </div>
      </div>
      <input type="checkbox" style="position: absolute;margin-top: 13px;" name="agree" required>
      <label for="vehicle3" style="margin-left: 17px;" ><span class="required">*</span> I agree with the aims and objectives of Pakistan Agricultural Scientists Forum <br>and will obey the rules and regulations mentioned in the constitution of the<br> forum.</label><br>
      <div class="row">
        <center>
          <input type="submit" value="Submit">
        </center>
      </div>
    </form>
  </div>
  <?php include 'footer.php' ?>
</body>
</html>