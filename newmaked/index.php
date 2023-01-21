
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="/logo.png" sizes="32x32" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"</script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    *{
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
    /*.part1{*/
    /*  display: flex;*/
    /*  justify-content: center;*/
    /*  background-color: #3d834a;*/
    /*}*/
    /*.part1_a{*/
    /*  width: 50%;*/
    /*  margin: 40px 0px 0px 180px;*/
    /*  color: white;*/
    /*}*/
    /*.part1_b{*/
    /*  width: 50%;*/
    /*  margin: 10px 0px 0px 00px;*/
    /*}*/
    /*.part1_b img{*/
    /*   width: 300px; */
    /*   height: 300px;*/
    /*}*/
    /*@media (max-width: 1400px){*/
    /*  .part1{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part1_a{*/
    /*    margin: 0px;*/
    /*    padding: 30px 0px 0px 400px;*/
    /*    width: 100%;*/
    /*  }*/
    /*  .part1_b{*/
    /*    width: 100%;*/
    /*    padding-left: 400px; */
    /*  }*/
    /*}*/
    /*@media (max-width: 1200px){*/
    /*  .part1{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part1_a{*/
    /*    margin: 0px;*/
    /*    padding: 30px 0px 0px 200px;*/
    /*    width: 100%;*/
    /*  }*/
    /*  .part1_b{*/
    /*    width: 100%;*/
    /*    padding-left: 200px; */
    /*  }*/
    /*}*/
    /*@media (max-width: 800px){*/
    /*  .part1{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part1_a{*/
    /*    margin: 0px;*/
    /*    padding: 30px 0px 0px 100px;*/
    /*    width: 100%;*/
    /*  }*/
    /*  .part1_b{*/
    /*    width: 100%;*/
    /*    padding-left: 100px; */
    /*  }*/
    /*}*/
    /*@media (max-width: 600px){*/
    /*  .part1{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part1_a{*/
    /*    margin: 0px;*/
    /*    padding: 30px 0px 0px 0px;*/
    /*    width: 100%;*/
    /*  }*/
    /*  .part1_b{*/
    /*    width: 100%;*/
    /*    padding-left: 100px; */
    /*  }*/
    /*}*/
    /*.part2{*/
    /*  display: flex;*/
    /*  margin-top: 30px;*/
    /*  justify-content: center;*/
    /*}*/
    /*.news{
      width: 30%;
    }
    .sponsors{
      margin-left: 10px;
      border: 1px solid black;
      width: 30%;
    }*/
    /*.part2_a{*/
    /*  margin: 10px;*/
    /*}*/
    /*.part2_b{*/
    /*  margin: 10px;*/
    /*}*/
    /*.part2_c{*/
    /*  margin: 10px;*/
    /*}*/
    /*@media (max-width: 1400px)*/
    /*{*/
    /*  .part2{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part2_a{*/
    /*    margin-left: 400px; */
    /*  }*/
    /*  .part2_b{*/
    /*    margin-left: 400px; */
    /*  }*/
    /*  .part2_c{*/
    /*    margin-left: 400px; */
    /*  }*/
    /*}*/
    /*@media (max-width: 1200px)*/
    /*{*/
    /*  .part2{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part2_a{*/
    /*    margin-left: 300px; */
    /*  }*/
    /*  .part2_b{*/
    /*    margin-left: 300px; */
    /*  }*/
    /*  .part2_c{*/
    /*    margin-left: 300px; */
    /*  }*/
    /*}*/
    /*@media (max-width: 1000px)*/
    /*{*/
    /*  .part2{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part2_a{*/
    /*    margin-left: 200px; */
    /*  }*/
    /*  .part2_b{*/
    /*    margin-left: 200px; */
    /*  }*/
    /*  .part2_c{*/
    /*    margin-left: 200px; */
    /*  }*/
    /*}*/
    /*@media (max-width: 800px)*/
    /*{*/
    /*  .part2{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part2_a{*/
    /*    margin-left: 150px; */
    /*  }*/
    /*  .part2_b{*/
    /*    margin-left: 150px; */
    /*  }*/
    /*  .part2_c{*/
    /*    margin-left: 150px; */
    /*  }*/
    /*}*/
    /*@media (max-width: 600px)*/
    /*{*/
    /*  .part2{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part2_a{*/
    /*    margin-left: 100px; */
    /*  }*/
    /*  .part2_b{*/
    /*    margin-left: 100px; */
    /*  }*/
    /*  .part2_c{*/
    /*    margin-left: 100px; */
    /*  }*/
    /*}*/
    /*.part3{*/
    /*  display: flex;*/
    /*  justify-content: center;*/
    /*  background-color: #3d834a;*/
    /*  color: black;*/
    /*  width: 100%;*/
      
    /*  margin-top: 20px;*/
    /*}*/
    /*.part3_a{*/
    /*  color: white;*/
    /*  width: 50%;*/
    /*  padding: 40px;*/
    /*}*/
    /*.part3_b{*/
    /*  width: 40%;*/
    /*  padding: 40px 0px 40px 0px;*/
    /*}*/
    /*.part3_b img{*/
    /*  width: 500px; */
    /*  height: 250px;*/
    /*}*/
    /*@media (max-width: 1400px){*/
    /*  .part3_b img{*/
    /*    width: 450px;*/
    /*    height: 200px;*/
    /*  }*/
    /*}*/
    /*@media (max-width: 1200px){*/
    /*  .part3_b img{*/
    /*    width: 400px;*/
    /*    height: 200px;*/
    /*  }*/
    /*}*/
    /*@media (max-width: 1000px){*/
    /*  .part3_b{*/
    /*    padding: 40px 0px 40px 0px;*/
    /*  }*/
    /*  .part3_b img{*/
    /*    width: 350px; */
    /*    height: 180px;*/
    /*  }*/
    /*}*/
    /*@media (max-width: 800px){*/
    /*  .part3{*/
    /*    display: flex;*/
    /*    width: 100%;*/
    /*    flex-direction: column;*/
    /*  }*/
    /*  .part3_a{*/
    /*    width: 100%;*/
    /*    border: 1px solid black;*/
    /*  }*/
    /*  .part3_b{*/
    /*    width: 100%;*/
    /*    padding: 40px 0px 40px 100px;*/
    /*  }*/
    /*  .part3_b img{*/
    /*    width: 500px;*/
    /*    height: 250px;*/
    /*  }*/
    /*}*/
    /*@media (max-width: 600px){*/
    /*  .part3_b{*/
    /*    padding: 40px 0px 0px 50px;*/
    /*  }*/
    /*  .part3_b img{*/
    /*    width: 450px;*/
    /*    height: 200px;*/
    /*  }*/
    /*}*/
    /*@media (max-width: 500px){*/
    /*  .part3_b img{*/
    /*    width: 350px;*/
    /*    height: 180px;*/
    /*  }*/
    /*}*/
    /*.part4{*/
    /*  display: flex;*/
    /*  justify-content: center;*/
    /*  width: 100%;*/
    /*  margin: 20px;*/
    /*}*/
    /*.part4_a{*/
    /*  width: 38%;*/
    /*  border-right: 1px solid black;*/
    /*  padding: 50px 0px 0px 10px;*/
    /*  border-radius: 20px;*/
    /*}*/
    /*.part4_b{*/
    /*  width: 40%;*/
    /*  border-left: 1px solid black;*/
    /*  padding: 50px 0px 50px 100px;*/
    /*  border-radius: 20px;*/
    /*}*/
    /*@media (max-width: 1200px){*/
    /*  .part4{*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*    width: 100%;*/
    /*  }*/
    /*  .part4_a{*/
    /*    width: 80%;*/
    /*    border-right: none;*/
    /*    border-bottom: 1px solid black;*/
    /*    padding: 50px 0px 50px 100px;*/
    /*  }*/
    /*  .part4_b{*/
    /*    width: 80%;*/
    /*    border-left: none;*/
    /*    border-top: 1px solid black;*/
    /*    padding: 50px 0px 20px 100px;*/
    /*  }*/
    /*}*/
    .part6{
      display: flex;
      justify-content: center;
      margin-top: 10px;
      margin-bottom: 10px;
      width: 100%;
      background-color: #cccdd3;
    }
    .part6_a{
      width: 50%;
      padding: 50px 30px 50px 10px;
      /*border-right: 1px solid black;*/
      border-radius: 20px;
    }
    .part6_b{
      width: 40%;
      padding: 90px 0px 50px 150px;
      /*border-left: 1px solid black;*/
      border-radius: 20px;
    }
    @media (max-width: 1200px){
      .part6{
        display: flex;
        flex-direction: column;
        width: 100%;
        
      }
      .part6_a{
        width: 90%;
        border-right: none;
        /*border: 1px solid black;*/
        padding: 10px;
        margin-left: 10px;
      }
      .part6_b{
        width: 100%;
        border-left: none;
        /*border: 1px solid black;*/
        padding: 50px 0px 20px 50px;
      }
    }
    .part7{
      margin-top: 10px;
      justify-content: center;
      background-color: #cccdd3;
    }
    .news{
      width: 50%;
      /*border-top: 1px solid black;
      border-right: 1px solid black;*/
      border-radius: 20px;
      max-height: 40vh;
      
    }
    .sponsors{
      
      width: 100%;
      max-height: 40vh;
      /*border-bottom: 1px solid black;
      border-left: 1px solid black;*/
      border-radius: 20px;
      padding-right: 0px;
    }
    .spons{
      animation-name: top12;
      animation-duration: 9s;
      display: inline-block;
      animation-iteration-count: infinite;
      
    }
    @keyframes top12{
      0%{
        
        color: black;
        margin-left: 0px;
        background-color: #b5e61d;
        margin-left: 20px;

      }
      40%{
        border-radius: 5px;
        color: white;
        background-color: #b5e61d;
        
      }
      50%{
            border-radius: 10px;
        color: red;
        background-color: #99d9ea;
        
      }
      100%{
         border-radius: 10px;
        color: red; 
}
}

    .top3{
      width: 600px;
      height:250px;
      line-height: 15px;
      /*animation-name: top10;
      animation-duration: 4s;
      animation-iteration-count: infinite;
      animation-direction: reverse;
      border: 2px solid black;*/
      font-size: 20px;
      padding-top: 0px;
    }
    @keyframes top10{
      0%{
        border-radius: 20px;
        color: white;
        margin-left: 0px;
        background-color: #3d834a;

      }
      40%{
        border-radius: 20px;
        color: white;
        background-color: #3d834a;
      }
      50%{
        border-radius: 20px;
        color: white;
        margin-left: 0px;
        background-color: #3d834a;
      }
      60%{

      }
      100%{
        border-radius: 20px;
        color: white;
        margin-left: 50px;
        background-color: #3d834a;
      }
    }

	@media screen and (max-width: 600px) {
  .part7 {
      display: grid !important;
  }
  .top3 {
      width: 181%;
      height: 153%;
  }
  .sponsors {
      margin-top: 30%;
      margin-bottom: 30%;
  }
  .news {
      margin-left: 0px;
  }
  marquee {
      width: 195%;
    border-radius: 10px;
  }
  .footer_a {
      display: block !important;
  }
  .part6_a {
      padding: 0px !important;
  }
  .spnsr {
      width: 100% !important;
  }
  .news {
      width: 100% !important;
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
<body style="background-color: #cccdd3;">
  <?php include 'top.php'; ?>
  <?php include 'standard.html'; ?>
  
    <!-- <div class="part1">
        <div class="part1_a">
            <h2>Pakistan Agricultural Scientists Forum(PAS)</h2><br>
            <p><i class="fa fa-arrow-circle-right" style="font-size:20px"></i>To groom the agricultural experts professionally. </p><br>
            <p><i class="fa fa-arrow-circle-right" style="font-size:20px"></i>To bridge the widening gap between agro-based industry and impact-oriented research. </p><br>
            <p><i class="fa fa-arrow-circle-right" style="font-size:20px"></i>To play our professional role to uplift the agro-based industry.</p><br>
            <p><i class="fa fa-arrow-circle-right" style="font-size:20px"></i>To promote agricultural education, research and extension prioritizing the national interests.</p>
        </div>
        <div class="part1_b">
            <img src="agripics/veb1.jpg" alt="not found">
        </div>

    </div>
    <div class="part2">
      
        <div class="part2_a">
            <img src="agripics/veb2.jpg" alt="not found" style="width: 300px; height: 300px;">
        </div>
        <div class="part2_b">
            <img src="agripics/veb3.jpg" alt="not found" style="width: 300px; height: 300px;">
        </div>
        <div class="part2_c">
            <img src="agripics/veb4.jpg" alt="not found" style="width: 300px; height: 300px;">
        </div>
    </div> -->
    <!--<div class="part3">-->
    <!--  <div class="part3_a" style="font-size: 21px; text-align: justify; line-height: 25px;">-->
    <!--    <p>Pakistan Agricultural Scientists Forum (PAS Forum) was founded in 1980 aiming to provide a vibrant and active platform for agricultural professionals in academia and research, and practically working in field to join their hands, efforts and skills so that policies could be devised for the uplift and betterment of the nation and agrarian community in particular. It fosters the generation and transfer of knowledge, a professional house of hundreds of scientists, field officers, academia and agribusiness personals from all sectors (crop, livestock, forest and natural resources) of agriculture.The forum is dedicated to nation building through securing food, conserving natural resources, alleviating.... <a href="aboutus.php"><button>Read More...</button></a></p>-->
    <!--  </div>-->
    <!--  <div class="part3_b">-->
    <!--    <img src="lands.jpg">-->
    <!--  </div>-->

    <!--</div>-->
    <!--<div class="part4">-->
    <!--    <div class="part4_a" style="font-size: 21px;">-->
    <!--        <h1 id="h1"><b>What We Aim</b></h1>-->
    <!--        <ul style="list-style-type: none;">-->
    <!--          <li>-->
    <!--            <p id="p2" style="text-align: justify; line-height: 25px; padding-right: 20px;">To attain the happiness of Almighty ALLAH through working for the establishment of Islamic rule of law in general human life and, especially, in the field of agriculture</p>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--    <div class="part4_b" style="font-size: 21px;">-->
    <!--        <h1 id="h2"><b>Our Goals</b></h1>-->
    <!--        <ul style="list-style-type: none;">-->
    <!--          <li>            -->
    <!--              To provide platform for agricultural experts, who are agreed with the aim of PAS Forum, to furnish their lives with Islamic commandments.-->
    <!--          </li>-->
    <!--          <li>            -->
    <!--              Moral and professional grooming of the members of this forum-->
    <!--          </li>-->
    <!--          <li>            -->
    <!--              Taking care of Islamic commandments while development of national agricultural policy... <a href="./aboutus.php">Read more</a>-->
    <!--          </li>-->
              
    <!--        </ul>-->
            <!-- <i class="fa fa-star "></i>
    <!--         <i class="fa fa-star"></i>-->
    <!--        <i class="fa fa-folder"></i>-->
    <!--        <i class="fa fa-folder"></i>-->
    <!--         <i class="fa fa-folder"></i> -->
    <!--    </div>-->
    <!--</div>-->
    <hr>
    <!-- <div class="part5" id="div5">
        <h1 id="h3"><b>Our Team</b></h1>
    </div> -->
    <div class="part6">
        <div class="part6_a" style="font-size: 21px;">
            <h2 style="text-align: center;" >
                Chairman/President Message
            </h2>
            <p style="text-align: justify;font-size: 19px;">
                Agriculture is backbone of national economy as it contributes 18.5% in GDP. Agriculture provides 59.5% livelihood to rural population and a significant share of export that is 58% is great asset. Furthermore 38.5% of labor relates to agriculture. It reflects a stronger engagement of agriculture to economy of Pakistani Agriculture. Agriculture includes crop production as well as animal/ livestock production. Being a 5th largest population (~220 million) of the world with high population growth rate (~2.0%), agriculture has also great responsibility food security. Nevertheless, the   v ction of Pakistani agricultural commodities is far less than that of developed countries. Having observed the widening abyss between agro-based industry and declining current situation of agriculture in Pakistan, Pakistan Agricultural Scientists Forum (PAS Forum) aims to groom the agricultural experts professionally bridging the widening gap between agro-based industry and impact-oriented research. PAS Forum look forward to play its professional role to uplift the agro-based industry promoting agricultural education, research and extension prioritizing the national interests considering to promote problem-based scientific research in Pakistan particularly in agricultural and agro based sectors. We welcome the agricultural scientists, extension workers and industrialists to join our hands for national cause in specific, and world food security in general.
            </p>
            <!--<br>-->
            
        </div>
        <div class="part6_b">
            <img src="wp-content/uploads/2021/04/DW.jpg" style="height: 300px;">
            <br><br>
            <h4 style="font-size: 25px;">
              Dr. Abdul Wakeel
            </h4>
            <p>
                Chairman/President
              <!--Associate Professor-->
            </p>
            
            <!--<p>-->
            <!--  ASSOCIATE EDITOR<br>-->
            <!--  Journal of Plant Nutrition and Soil Science<br>-->
            <!--  German Society of Plant Nutrition-->
            <!--</p>-->
            <p>
                Pakistan Agricultural Scientists Forum
              <!--Institute of Soil and Environmental Sciences-->
            </p>
            <!--<p>-->
            <!--  University of Agriculture Faisalabad-->
            <!--</p>-->
            <p>
              <a href="" style="text-decoration: none;">abdul.wakeel@uaf.edu.pk</a>
            </p>
        </div>
    </div>
    <hr>
    <div class="part7">
        <center>
      <div class="news">
        <h1 style="margin-left: 20px;background-color: #3d834a;color: white;">
          News Feed
          
        </h1>
   <!--      <marquee direction="up" scrollamount="2" scrolldelay="" height="220"> -->
          <div  class="top3 Quries_Ticker">
              <div style="overflow: hidden;height: 151px;">
              <ul class="newslist" style="position: relative !important;" >
                  <li>The JAPS  (20 Nov Islamabad Hotel Islamabad) <a href="conference.php" style="text-decoration: none; color: violet;"> Read More</a></li>
                  <li>The JAPS  (20 Nov Islamabad Hotel Islamabad) <a href="conference.php" style="text-decoration: none; color: violet;"> Read More</a></li>
                  <li>The JAPS  (20 Nov Islamabad Hotel Islamabad) <a href="conference.php" style="text-decoration: none; color: violet;"> Read More</a></li>
                  <li>Upcoming News <a href="conference.php" style="text-decoration: none; color: violet;"> Read More</a></li>
                  <li>Upcoming Conferencs <a href="conference.php" style="text-decoration: none; color: violet;"> Read More</a></li>
                  <li>news2 <a href="conference.php" style="text-decoration: none; color: violet;"> Read More</a></li>
                  
              </ul>
           </div>
          </div>
          <script>
              function down(){
      div = document.createElement('div');
      cc = document.getElementsByClassName('newslist')[0].children;
      div.appendChild(cc[5]);
      document.getElementsByClassName('newslist')[0].insertBefore(div.children[0] ,cc[0]);
     document.getElementsByClassName('newslist')[0].style.top='-30px'; 
     
     $(".newslist").animate({top: '0px'},1000);
    }
       function up(){
           $(".newslist").animate({top: '-30px'});
           setTimeout(function(){
      div = document.createElement('div');
      cc = document.getElementsByClassName('newslist')[0].children;
      div.appendChild(cc[0]);
      document.getElementsByClassName('newslist')[0].appendChild(div.children[0]);
     document.getElementsByClassName('newslist')[0].style.top='0px'; 
           },500);
     
    }
    setInterval(function(){ down(); },2500);
          </script>
     <!--    </marquee> -->
      </div>
      </center>
      <center>
      <div class="sponsors" >
        <h1 style="margin-left: 20px;background-color: #3d834a;color: white;">
          Our Sponsors
        </h1>
        <center>
        <div class="spnsr" style="display: flex;width: 50%">
            <img src="https://pasforum.org/logo.png" style="width: 150px;height: 150px;border-radius: 80px;margin-left: 8%;" >
            <img src="https://pasforum.org/logo.png" style="width: 150px;height: 150px;border-radius: 80px;margin-left: 8%;">
            <img src="https://pasforum.org/logo.png" style="width: 150px;height: 150px;border-radius: 80px;margin-left: 8%;">          
      </div>
      </center>
      </div>
      </center>
    </div>
    <br><br>
    <?php include 'footer.php' ?>
</body>
</html>