<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .footer{
      width: 100%;
      display: flex;
      background-color: #1A4D2E;
      padding-bottom: 20px;
    }
    .footer_a{
        font-size: 13px;
      width: 33%;
      display: flex;
      padding: 60px 0px 0px 50px;
    }
    .footer_a h4{
      padding-left: 0px;
      /*font-size: 10px;*/
    }
    .footer_a a{
      color: white;
    }
    .footer_b{
      width: 33%;
      display: flex;
      /*padding: 30px;*/
      /*border: 1px solid black;*/
    }
    .footer_b li{
      margin: 65px 0px 0px 50px;
      text-decoration: none;
    }
    .footer_b i{
      margin-left: 40px;
      border-radius: 50%;
      /*padding: 5px;*/
      box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    /*.icon{
      padding-top: 50px;
    }*/
    .footer_a a:hover{
      color: black;
      /*font-size: 15px;*/
    }
    .footer_b a{
      color: white;
    }
    .footer_b a:hover{
      color: black;
      /*font-size: 20px;*/
    }
    .footer_c{
      width: 34%;
      display: flex;
      flex-direction: column;
      padding: 20px;
    }
    .footer_c ul{
      list-style-type: none;
    }
    .footer_c li{
      margin-top: 10px;
    }
    @media (max-width: 1200px)
    {
        .footer_a{
            width: 33%;
            padding: 50px 0px 0px 70px;
        }
        .footer_b{
            width: 33%;
            padding: 50px 0px 0px 70px;
        }
        .footer_c{
            width: 33%;
            padding: 50px 0px 0px 70px;
        }
    }
    @media (max-width: 800px)
    {
        .footer_a{
            width: 33%;
            padding: 50px 0px 0px 30px;
        }
        .footer_b{
            width: 33%;
            padding: 80px 0px 0px 30px;
        }
        .footer_c{
            width: 33%;
            padding: 50px 0px 0px 30px;
        }
    }
    @media (max-width: 600px)
    {
        .footer{
            display: flex;
            flex-direction: column;
        }
        .footer_a{
            width: 100%;
            /*border: 1px solid black;*/
            padding: 20px 0px 0px 10px;
        }
        .footer_b{
            width: 100%;
            /*border: 1px solid black;*/
            padding: 0px 0px 0px 20px;
        }
        .footer_b li{
          margin: 0px 0px 0px 0px;
        }
        .footer_b i{
          margin-top: 20px;
        }
        .footer_c{
            width: 100%;
            padding: 20px 0px 0px 10px;
        }
    }
    </style>
</head>
<body>
<footer class="footer">
        <div class="footer_a">
            <h4>
              <a href="aboutus.php" style="text-decoration: none;">
                <i class="fa fa-address-card" style="padding: 10px;"></i>About US
              </a>
            </h4>
            <h4>
              <a href="contactus.php" style="text-decoration: none;">
                <i class="fa fa-address-book" style="padding: 10px;"></i>Contact Us
              </a>
            </h4>
            <h4>
              <a  href="executive1.php" style="text-decoration: none;">
               <i class="fa fa-users" style="padding: 10px;"></i> Our Team
              </a>
            </h4>
        </div>
        <div class="footer_b">
          <ul>
            <li style="list-style-type: none;">
              <a href="https://www.facebook.com/PASForumPk" style="text-decoration: none;" target="blank">
                <i class="fa fa-facebook fa-2x icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%); padding: 8px 15px;"></i>
              </a>
              <a href="" style="text-decoration: none;">
                <i class="fa fa-twitter fa-2x icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%); padding: 8px 10px;"></i>
              </a>
              <a href="" style="text-decoration: none;">
                <i class="fa fa-instagram fa-2x icon" style="background:linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d); padding: 8px 12px;"></i>
              </a>
              <a href="" style="text-decoration: none;">
                <i class="fa fa-linkedin fa-2x icon" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%); padding: 8px 12px;"></i>
              </a>
            </li>
          </ul>
            
            
            
            
            
        </div>
        <div class="footer_c">
            <!-- <img src="logo.png" style="width: 150px; height: 150px;"> -->
            <ul style="color: white; font-size: 20px;">
              <li>
                <ul style="display: flex;">
                  <!-- <li>
                    <img src="agripics/address.png" width="50" height="50">
                  </li> -->
                  <li style="margin-top: 20px;">
                    House NO. 157,  University Town, Millat Road Faisalabad, Pakistan
                  </li>
                </ul>
              </li>
              <!--<li>-->
              <!--  <i class="fa fa-phone"></i> &nbsp;&nbsp;+92-345-8731777-->
              <!--</li>-->
              <li>
                <i class="fa fa-at"></i>&nbsp;&nbsp;info@pasforum.org
              </li>
            </ul>
            <!-- <p style="color: white; width: 70%;"> </p>
            <br>
            <br>
            <p style="color: white;">
              
            </p>
            <br>
            <br>
            <p style="color: white;">
              
            </p> -->
        </div>
    </footer>
     <!-- <hr>  -->
    <footer style="background-color: #000000; opacity: 100%; font-size: 20px; color: white; padding: 10px;">
      <div>
        <center>
          &copy; &nbsp;Developed By<a href="http://microstarx.net/" style="color: white; text-decoration: none;" target="blank" > MicroStarX</a>
        </center>
      </div>
    </footer>
</body>
</html>