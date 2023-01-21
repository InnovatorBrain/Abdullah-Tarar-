<?php
// require 'db.php';
// require 'top.php';


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
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="/logo.png" sizes="32x32" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        .div
        {
        margin: 10px 0px 0px 100px;
        }
        .container{
            border-radius: 20px;
            margin: 40px 150px;
            padding: 30px; 
            background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
           
            background-blend-mode: multiply,multiply;
            color: white;
        }
        .main1{
            display: flex;
            width: 100%;
            padding: 20px;
        }
        .main1_a{
            padding: 30px 20px 20px 20px;
            border-right: 1px solid white;
            border-radius: 15px;
        }
        /*.main1_a p{
            width: 90%;
        }*/
        .main1_b{
            padding: 20px;
            border-left: 1px solid white;
            border-radius: 15px;
        }
        .main1_b img{
            width: 350px;
            height: 400px;
        }
        .main2 h2{
            margin: 30px 0px;
        }
        .main2_a{
            background-color: white;
            color: black;
            width: 80%;
            height: 20vh;
            font-size: 25px;
            margin-left: 100px;
            margin-bottom: 30px;
            border-radius: 5px;
        }
        .main3 h2{
            margin: 30px 0px;
        }
        .main3_a{
            margin-top: 30px;
        }
        .main3_a p{
            margin-top: 10px;
            font-size: 21px;
            background: #C9CCD3;background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
            background-blend-mode: lighten;
            border-radius: 3px;
            padding: 5px 5px;
            color: black;
        }
        .main3_a b{
            color: #C0392B;
        }
        .main3_a b:hover{
            color: black;
        }
        @media screen and (max-width: 600px) {
      .container {
         margin: 5px; 
      }
      .main1 {
          display: flex;
          flex-direction: column;
      }
      .main2_a {
          margin-left: 0px;
          width: 100%;
      }
      .main1_a {
          width: 100%;
          border: none;
      }
      .main1_b{
          width: 100%;
          border: none;
      }
      .main2_b {
          width: 100%;
      }
      #img1 {
          width: 100%;
      }
      }
      /*#p1{*/
      /*    border: 1px solid black;*/
      /*}*/
       b{
           color: white;
       }
    </style>
</head>
<body style="background: #E1FFB1;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten;">
    <!-- Start -->
    <?php include 'top.php' ?>
    <div class="div">
    <a href="index.php">
      Home
    </a>
    >>
    <a href="">
      Confrences
    </a>
  </div>
    <!-- End -->
    <div class="container">
        <div class="main1">
            <div class="main1_a" style="font-size: 21px;">
                <center>
                    <h2 style="border-bottom: 3px solid white; display: inline-block; padding: 10px 20px;">Conferences
                    </h2>
                </center>
                <br><br>
                <p style="text-align: justify;">PAS Forum is regularly conducting biennial scientific conference in different areas of Pakistan. Since 1981, PAS Forum has conducted 15 scientific national or international conferences successfully in various organizations throughout the country. Furthermore, various workshops and seminars are arranged in collaboration with other organizations on specific issues.</p>
            </div>
            <div class="main1_b">
                <img src="gallery/conference.jpg" alt="not found" id="img1">
            </div>
        </div>
        <div class="main1">
            <div class="main1_a" style="font-size: 21px;">
                <center>
                    <h2 style="border-bottom: 3px solid white; display: inline-block; padding: 10px 20px;">The JAPS
                    </h2>
                </center>
                <br><br>
                <p style="text-align: justify;">PAS Forum is  conducting on The Science of Animal and Plant Scinces which will held on 20 November 2021 at Islamabad Hotel, Islamabad, Pakistan.</p>
            </div>
            <div class="main1_b">
                <img src="japs1.jpeg" alt="not found" id="img1">
            </div>
        </div>
        <div class="main1">
            <div class="main1_a" style="font-size: 21px;">
                <center>
                    <h2 style="border-bottom: 3px solid white; display: inline-block; padding: 10px 20px;">Webinar
                    </h2>
                </center>
                <br><br>
                <p style="text-align: justify;">International webinar on sustainable N management and Food Security. 8th December 2021, 1:30 pm.</p>
            </div>
            <div class="main1_b">
                <img src="nit.jpeg" alt="not found" id="img1">
            </div>
        </div>
        
        <div class="main1">
            <!--<div class="main1_a" style="font-size: 21px;">-->
            <!--    <center>-->
            <!--        <h2 style="border-bottom: 3px solid white; display: inline-block; padding: 10px 20px;">Webinar-->
            <!--        </h2>-->
            <!--    </center>-->
            <!--    <br><br>-->
            <!--    <p style="text-align: justify;">International webinar on sustainable N management and Food Security. 8th December 2021, 1:30 pm.</p>-->
            <!--</div>-->
            <div class="main1_b" style="width:100%" >
                <img style="width:100%;min-height: 600px;" src="5-8-2022.jpeg" alt="not found" id="img1">
            </div>
        </div>
        
        <div class="main2">
            <center>
                <h2 style="border-bottom: 3px solid white; display: inline-block; padding: 10px 20px;">Events
                </h2>
            </center>
            <div class="main2_a" style="font-size: 21px; background-image: url(images/nature.jpg); background-size: 800px 250px;">
                <marquee scrollamount="5" direction="up" behavior="alternate" style="border-left: 10px solid skyblue; height: 20vh; border-radius: 5px;">
                      <?php
                $m = sql_query('news','','');
                
                foreach($m as $r){
                    if ($r['status'] == 1){
                  ?>
                   <p style="font-size: 29px;">
                       <?= $r['name'] ?>
                      </p>
                  
                  <?php
                  break;
                    }
                }
                
                ?>
                <!--   <p style="font-size: 29px;">-->
                <!--    International webinar on sustainable N management and Food Security. 8th December 2021, 1:30 pm.-->
                <!--</p>-->
                </marquee>
            </div>
        </div>
        
        <div class="main3" style="font-size: 21px;">
            <center>
                <h2 style="border-bottom: 3px solid white; display: inline-block; padding: 10px 20px;">Past Scientific Conferences
                </h2>
            </center>
            <div class="main3_a">
               
                <p>
                    THE JAPS <a href="pdf/conference.pdf" style="text-decoration: none;"><b style="color: black;">The Science of Animal and Plant Scinces</b></a> will held on 20 November 2021 at Islamabad Hotel, Islamabad, Pakistan.
                </p>
                <p>
                    15th <a href="pdf/conference.pdf" style="text-decoration: none;"><b style="color: black;">PAS Forum National Conference</b></a> on ‘Innovations in Agriculture’ was held on 13 - 15 February 2019 at University of Agriculture, Faisalabad, Pakistan.
                </p>
                <p>
                    14th <b style="color: black;">PAS Forum National Conference</b> on ‘Sustainable Crop and Animal Production Systems’ was held on 08 - 10 December 2016 at University of Haripur, Khyber Pakhtunkhwa, Pakistan.
                </p>
                <p>
                    13th <b style="color: black;">PAS Forum International Conference</b> on ‘Innovations in Agriculture’ was held 13 - 15 February 2014 at University of Poonch, Rawalkot, Pakistan.
                </p>
                <p>
                    12th<b style="color: black;"> PAS Forum International Conference</b> on ‘Agricultural Challenges in Changing Climate’ was held 5-7 June 2011 at Peshawar agriculture University Campus
                </p>
                <p>
                    11th <b style="color: black;">PAS Forum National Conference</b> was held in 2009.
                </p>
                <p>
                    10th <b style="color: black;">PAS Forum National Conference </b>in 2007.
                </p>
                <p>
                    9th<b style="color: black;"> PAS Forum National Conference</b> in 2005.
                </p>
                <p>
                    8th <b style="color: black;">PAS Forum National Conference</b> in 2003.
                </p>
                <p>
                    7th <b style="color: black;">PAS Forum National Conference</b> in 2000.
                </p>
                <p>
                    6th <b style="color: black;">PAS Forum National Conference</b> in 1997.
                </p>
                <p>
                    5th <b style="color: black;">PAS Forum National Conference</b> in 1994.
                </p>
                <p>
                    4th <b style="color: black;">PAS Forum National Conference</b> in 1992.
                </p>
                <p>
                    3rd <b style="color: black;">PAS Forum National Conference</b> in 1989.
                </p>
                <p>
                    2nd <b style="color: black;">PAS Forum National Conference</b> in 1986.
                </p>
                <p>
                    1st <b style="color: black;">PAS Forum National Conference</b> in 1983.
                </p>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php 
include 'footer.php' 
?>

