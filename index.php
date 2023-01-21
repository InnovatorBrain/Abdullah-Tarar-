<?php
// include 'db.php';
include 'top.php';
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
  <link rel="icon" href="/logo.png" sizes="32x32">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
  </script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    .news {
      width: 50%;
      /*border-top: 1px solid black;
      border-right: 1px solid black;*/
      border-radius: 20px;
      max-height: 40vh;
    }

    .sponsors {
      width: 100%;
      max-height: 40vh;
      /*border-bottom: 1px solid black;
      border-left: 1px solid black;*/
      border-radius: 20px;
      padding-right: 0px;
    }

    .spons {
      animation-name: top12;
      animation-duration: 9s;
      display: inline-block;
      animation-iteration-count: infinite;
    }

    @keyframes top12 {
      0% {
        color: black;
        margin-left: 0px;
        background-color: #b5e61d;
        margin-left: 20px;
      }

      40% {
        border-radius: 5px;
        color: white;
        background-color: #b5e61d;
      }

      50% {
        border-radius: 10px;
        color: red;
        background-color: #99d9ea;
      }

      100% {
        border-radius: 10px;
        color: red;
      }
    }

    .top3 {
      width: 600px;
      height: 250px;
      line-height: 15px;
      /*animation-name: top10;
      animation-duration: 4s;
      animation-iteration-count: infinite;
      animation-direction: reverse;
      border: 2px solid black;*/
      font-size: 20px;
      padding-top: 0px;
    }

    @keyframes top10 {
      0% {
        border-radius: 20px;
        color: white;
        margin-left: 0px;
        background-color: #3d834a;
      }

      40% {
        border-radius: 20px;
        color: white;
        background-color: #3d834a;
      }

      50% {
        border-radius: 20px;
        color: white;
        margin-left: 0px;
        background-color: #3d834a;
      }

      60% {}

      100% {
        border-radius: 20px;
        color: white;
        margin-left: 50px;
        background-color: #3d834a;
      }
    }

    .Quries_Ticker ul li {
      background: rgba(0, 0, 0, 0) url(./images/left-col-spriter.gif) no-repeat scroll 0 14px;
      border-bottom: 1px dashed #cececd;
      margin: 0;
      padding: 7px 0 7px 20px;
      max-width: 100%;
      margin-left: 5px;
      list-style-type: none;
    }
  </style>
</head>

<body style="background: #E1FFB1;">
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-8" style="font-size: 21px;">
        <h2 style="text-align: center;"> Chairman/President Message </h2>
        <p style="text-align: justify;font-size: 19px;"> Agriculture is backbone of national economy as it contributes 18.5% in GDP. Agriculture provides 59.5% livelihood to rural population and a significant share of export that is 58% is great asset. Furthermore 38.5% of labor relates to agriculture. It reflects a stronger engagement of agriculture to economy of Pakistani Agriculture. Agriculture includes crop production as well as animal/ livestock production. Being a 5th largest population (~220 million) of the world with high population growth rate (~2.0%), agriculture has also great responsibility food security. Nevertheless, the v ction of Pakistani agricultural commodities is far less than that of developed countries. Having observed the widening abyss between agro-based industry and declining current situation of agriculture in Pakistan, Pakistan Agricultural Scientists Forum (PAS Forum) aims to groom the agricultural experts professionally bridging the widening gap between agro-based industry and impact-oriented research. PAS Forum look forward to play its professional role to uplift the agro-based industry promoting agricultural education, research and extension prioritizing the national interests considering to promote problem-based scientific research in Pakistan particularly in agricultural and agro based sectors. We welcome the agricultural scientists, extension workers and industrialists to join our hands for national cause in specific, and world food security in general. </p>
      </div>
      <div class="col-lg-4 pl-5 pt-2">
        <img src="wp-content/uploads/2021/04/DW.jpg" style="height: 300px;">
        <br><br>
        <h4 style="font-size: 25px;"> Dr. Abdul Wakeel </h4>
        <p> Chairman/President </p>
        <p> Pakistan Agricultural Scientists Forum </p>
        <p>
          <a href="" style="text-decoration: none;">abdul.wakeel@uaf.edu.pk</a>
        </p>
      </div>
    </div>
  </div>
  <hr>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <center>
          <div class="news">
            <h1 style="background-color: #3d834a;color: white;background-image: linear-gradient(-180deg, rgb(34, 128, 26) 0%, rgb(16, 58, 6) 100%);"> News Feed </h1>
            <div class="col-lg-12 col-xm-12 w- mx-auto px-auto" style="height:150px">
              <a href="conference.php" style="text-decoration: none; color: rgb(93, 90, 228);"> Read More</a>
            </div>
            <script>
              function down() {
                div = document.createElement('div');
                cc = document.getElementsByClassName('newslist')[0].children;
                div.appendChild(cc[5]);
                document.getElementsByClassName('newslist')[0].insertBefore(div.children[0], cc[0]);
                document.getElementsByClassName('newslist')[0].style.top = '-30px';
                $(".newslist").animate({
                  top: '0px'
                }, 1000);
              }

              function up() {
                $(".newslist").animate({
                  top: '-30px'
                });
                setTimeout(function() {
                  div = document.createElement('div');
                  cc = document.getElementsByClassName('newslist')[0].children;
                  div.appendChild(cc[0]);
                  document.getElementsByClassName('newslist')[0].appendChild(div.children[0]);
                  document.getElementsByClassName('newslist')[0].style.top = '0px';
                }, 500);
              }
              setInterval(function() {
                down();
              }, 2500);
            </script>
          </div>
        </center>
        <center>
          <div class="sponsors col-lg-12">
            <h1 style="background-color: #3d834a;color: white;background-image: linear-gradient(-180deg, rgb(34, 128, 26) 0%, rgb(16, 58, 6) 100%);"> Our Sponsors </h1>
            <center>
              <div class="spnsr">
                <marquee scrollamount="9">
                <img src="https://pasforum.org/logo.png" style="height: 150px;border-radius: 80px;" width="12%">
                <img src="https://pasforum.org/logo.png" style="height: 150px;border-radius: 80px;" width="12%" class="ml-5">
                <img src="https://pasforum.org/logo.png" style="height: 150px;border-radius: 80px;" width="12%" class="ml-5">
              </marquee>
              </div>
            </center>
          </div>
        </center>
      </div>
    </div>
  </div>
  <br><br>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php 
include "footer.php"
?>