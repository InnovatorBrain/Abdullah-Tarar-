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
        .div a{
            text-decoration: none;
            color: black;
        }
        .container{
            border: 2px solid black;
            margin: 40px 150px;
            padding: 30px;
        }
        .main1{
            display: flex;
            width: 100%;
            padding: 20px;
        }
        .main1_a{
            padding: 10px 20px 20px 20px;
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
            width: 500px;
            /*height: 450px;*/
        }
        .main2 h2{
            margin: 30px 0px;
            color: white;
        }
        .main2_a{
            background-color: white;
            width: 80%;
            height: 5vh;
            font-size: 25px;
            margin-left: 100px;
            margin-bottom: 30px;
        }
        .main3 h2{
            margin: 30px 0px;
            color: white;
        }
        .main3_a{
            margin-top: 30px;
            color: white;
        }
        .main3_a p{
            margin-top: 10px;
            background-color: #A6ACAF;
            height: 3vh;
            opacity: 90%;
        }
        .main3_a b{
            color: #C0392B;
        }
        .main3_a b:hover{
            color: black;
        }
        .container{
            border: 1px solid black;
            border-radius: 20px;
            margin: 40px 150px;
            padding: 30px; 
            background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
            background-blend-mode: multiply,multiply;
            color: white;
            font-size: 21px;
            line-height: 35px;
            text-align: justify;
          }
          .font{
            font-size: 21px; 
            text-align: justify;
          }
           @media screen and (max-width: 600px) {
      .container {
         margin: 5px; 
      }
           }
    </style>
</head>
<body>
    <!-- Start -->
    <?php include 'top.php' ?>
    <div class="div">
    <a href="index.php">
      Home
    </a>
    >>
    <a href="">
      Expert Certification Program
    </a>
  </div>
    <!-- End -->
    <div class="container">
        <div class="main1">
            <div class="main1_a">
                <h2 style="font-size: 30px;">
                    <center>
                        Our Certification
                    </center>
                </h2>
                <br>
                <p style="font-size: 21px; text-align: justify;"><b style="">PAS Forum</b> is starting an experts’ certification program from 2020, to prepare the passing out Agri-graduates to work in different agricultural fields effectively. In this program, Agri-graduates will have to pass an examination related to their field of expertise, local job market requirements, ethical values and general knowledge about the socio-economic system of Pakistan. The eligibility for this certification program is B.Sc. (Hons) agriculture and following experts’ certification will be started as a pilot project in 2020.</p>
            </div>
            <div class="main1_b">
                <br>
                <img src="agripics/df.jpg" alt="not found" id="img1">
            </div>
        </div>
    </div>
    <div class="container">
          <center>
            <h2> 
              Expert Certification Program
            </h2>
          </center>
          <br>
          <p style="text-align: justify;">
            PAS Forum is starting an experts’ certification program from 2020, to prepare the passing out Agri-graduates to work in different agricultural fields effectively. In this program, Agri-graduates will have to pass an examination related to their field of expertise, local job market requirements, ethical values and general knowledge about the socio-economic system of Pakistan. The eligibility for this certification program is B.Sc. (Hons) agriculture and following experts’ certification will be started as a pilot project in 2020.
          </p>
          <ul style="margin-left: 50px;">
              <li>
                  Soil Expert
              </li>
              <li>
                  Crop Expert
              </li>
              <li>
                  Plant Protection Expert
              </li>
              <li>
                  Livestock Expert
              </li>
              <li>
                  Fruit & Vegetable Expert
              </li>
          </ul>
          <p style="text-align: justify;">
            When some click on soil experts (same for all others but registration should be emailed), it should go registration form to apply this test. Form should contain Name, CNIC number, Educational qualification, Last education institute attended, postal address, Permanent address, Expert program, possible date for examination, Cell number, email, and Fee (5000 PKR; which should be transferred to account and details should be added)
          </p>
        </div>
    <?php include 'footer.php' ?>
</body>
</html>