04<!DOCTYPE html>
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
  .main{
    display: flex;
    justify-content: center;
    width: 100%;
    margin: 100px 0px 100px 0px;
  }
  .main_a{
    width: 30%;
    margin-left: 10px;
    background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
 background-blend-mode: multiply,multiply;
    justify-content: center;
  }
  .img{
    padding: 110px 0px 0px 20px;
    width: 250px;
    height: 250px;
    border: 1px solid black;
    background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);
    font-family: arial;
    margin: 5em 1em 1em 7em;
    border-radius: 20px;
  }
  .color{
    color:blue ;
    text-decoration: none;
  }
  .main_a_b{
    margin-top: 0px;
    padding: 0px 10px 56px 10px;
    font-size: 18px;
    color: white;
    /*background-color: #ccc;*/
  }
  .main_b{
    width: 30%;
    margin-left: 10px;
    background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
 background-blend-mode: multiply,multiply;
  }
  /*.main_b_a img{
    padding: 50px 0px 0px 100px;
    width: 365px;
    height: 315px;
  }*/
  .main_b_b{
    margin-top: 20px;
    padding: 0px 10px 2px 10px;
    font-size: 18px;
    color: white;
    /*background-color: #ccc;*/
  }
  .main_c{
    width: 30%;
    margin-left: 10px;
    background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
 background-blend-mode: multiply,multiply;
  }
  /*.main_c_a img{
    padding: 50px 0px 0px 100px;
    width: 365px;
    height: 315px;
  }*/
  .main_c_b{
    margin-top: 20px;
    padding: 0px 10px 20px 10px;
    font-size: 18px;
    color: white;
    /*background-color: #ccc;*/
  }
  .img:hover{
    opacity: 70%;
  }
  .container{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 20px;
    margin: 40px 150px;
    padding: 30px; 
 /*   background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;*/
 /*background-blend-mode: multiply,multiply;*/
 color: black;
    font-size: 21px;
  }
  .font{
    font-size: 21px; 
    text-align: justify;
  }
  @media screen and (max-width: 600px) {
  .container {
     margin: 0px;
  }
  .main {
      display: grid;
  }
  .main_a {
      width: 93%;
  }
  .main_b {
      width: 93%;
  }
  .main_c {
      width: 93%;
  }
  .img {
      margin: 2px;
    width: 99%;
    padding: 22%;
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
      <a href="#">
        Rules & Regulations
      </a>
    </div>
    <div class="container">
      <center>
        <h1> 
          Membership
        </h1>
      </center>
      <br>
      <p style="text-align: justify;">
        The membership of <b></b>PAS Forum</b> is relevant to agricultural graduates working in agricultural research, teaching and industry. Agricultural businessmen and progressive farmers may also apply for membership of this forum. Membership will be approved by the president of PAS Forum if it is endorsed by provincial president/coordinator. President has right not to approve any membership without any explanation, nevertheless, dues will be returned to the applicant if has been paid. Following are the membership categories and dues:
      </p>
    </div>
    <div class="container">
        <ul>
            <li>
                <a href="membership_form.php" class="color">
                    <h2>
                        Lifetime Membership
                    </h2>
                </a>
                <p style="text-align: justify;">
                  Lifetime membership is offered to well committed and active PAS Forum members with the approval of executive council who have been regular member of PAS Forum at least for 3 years. However, one-time payment of 10,000 PKR fee is required.
                 </p>
            </li>
            <br>
            <li>
                <a href="membership_form.php" class="color">
                    <h2>
                        Regular Membership
                    </h2>
                </a>
                <p style="text-align: justify;">
                    Annual membership is offered to all agrarians working in the field of agriculture, who are agreed with the objectives of PAS Forum, on the endorsement of provincial coordinator/president and approval of president PAS Forum. Annual fee is 1000 PKR and must be paid in the first month of every calendar year. Late fee charges are 200 PKR per month.
                 </p>
            </li>
            <br>
            <li>
                <a href="membership_form.php" class="color">
                    <h2>
                        Associate Membership
                    </h2>
                </a>
                <p style="text-align: justify;">
                    Associated membership is special offer for all agricultural research students (Master & PhD), who are agreed with the objectives of PAS Forum, with annual fee of 500 PKR and must be paid in the first month of every calendar year. Late fee charges are 100 PKR per month.
                 </p>
            </li>
        </ul>
    </div>
    <!--<div class="main">-->
    <!--    <div class="main_a">-->
    <!--        <div class="main_a_a">-->
    <!--            <a href="membership_form.php" class="color">-->
    <!--              <div class="img">-->
    <!--                <h3>-->
    <!--                    Lifetime Membership-->
    <!--                </h3>-->
    <!--              </div>-->
    <!--            </a>-->
    <!--        </div>-->
    <!--        <div class="main_a_b font">-->
    <!--            <p>Lifetime membership is offered to well committed and active PAS Forum members with the approval of executive council. However, one-time payment of 10,000 PKR fee is required.</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="main_b">-->
    <!--        <div class="main_b_a">-->
    <!--          <a href="membership_form.php" class="color">-->
    <!--            <div class="img">-->
    <!--              <h3>-->
    <!--                    Regular Membership-->
    <!--              </h3>-->
    <!--            </div>-->
    <!--          </a>-->
    <!--        </div>-->
    <!--        <div class="main_b_b font">-->
    <!--            <p>Annual membership is offered to all agrarians working in the field of agriculture, who are agreed with the objectives of PAS Forum, on the endorsement of provincial coordinator/president and approval of president PAS Forum. Annual fee is 1000 PKR and must be paid in the first month of every calendar year. Late fee charges are 200 PKR per month..</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="main_c">-->
    <!--        <div class="main_c_a">-->
    <!--          <a href="membership_form.php" class="color">-->
    <!--              <div class="img">-->
    <!--                <h3>-->
    <!--                    Associate Membership-->
    <!--                </h3>-->
    <!--              </div>-->
    <!--            </a>-->
    <!--        </div>-->
    <!--        <div class="main_c_b font">-->
    <!--            <p>Associated membership is special offer for all agricultural research students (Master & PhD), who are agreed with the objectives of PAS Forum, with annual fee of 500 PKR and must be paid in the first month of every calendar year. Late fee charges are 100 PKR per month.</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="container">
      <h2> 
        How to become a PAS Forum member?
      </h2>
      <br>
      <p style="line-height: 30px;">
        Fill the online membership form available at the website and send an email to joint secretary through contacting our message box. You can deposit the dues in the given bank account number and send the receipt/confirmation of deposit to the joint secretary. The account details are:
      </p>
      <table style="text-align: justify; margin-top: 20px; margin-bottom: 20px; line-height: 30px;">
        <tr>
          <th>
            Account Title:
          </th>
          <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pakistan Agricultural Scientists Forum
          </td>
        </tr>
      
        <tr>
          <th>
            Account #
          </th>
          <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0414-0105880294
          </td>
        </tr>
          <tr>
          <th>
            IBAN Number:
          </th>
          <td>
            &nbsp;&nbsp;&nbsp;&nbsp; PK47MEZN0004140105880294
          </td>
        </tr>
         <tr>
          <th>
            Bank Name:
          </th>
          <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meezan Bank Account
          </td>
        </tr>
         <tr>
          <th>
        Branche Name:
          </th>
          <td>
            &nbsp;&nbsp;&nbsp;&nbsp; Civil Lines Branch - Commercial Area Faisalabad, Pakistan
          </td>
        </tr>
         <tr>
          <th>
            Swift Code:
          </th>
          <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEZNPKKA
          </td>
        </tr>
      </table>
      <p style="line-height: 30px;">
        The provincial <b>president/coordinator</b> will endorse you for approval from president <b>PAS Forum</b>. However provincial coordinators may ask you for further information if required. After approval you will be able to find your name at PAS Forum website and certificate will be emailed.
      </p>
    </div>
    <div class="container">
      <h2> 
        Why become a PAS Forum member?
      </h2>
      <br>
      <p style="line-height: 30px;">
        PAS Forum members are well organized, honest, hardworking and up to date scientific community of Pakistan. Being a PAS Forum member can enjoy the following benefits as well:
      </p>
      <br>
      <ul style="margin-left: 20px; line-height: 30px;">
        <li>
          Concession in JAPS publication charges. JAPS is an impact factored peer-review scientific journal for plant and animal sciences, and article processing charges are 20,000 PKR.
        </li>
        <li>
          Half registration fee of any event organized by PAS Forum including biennial scientific conference
        </li>
        <li>
          PAS Forum members will be prioritized for scholarship and awards
        </li>
        <li>
          Free counseling for career development and further research opportunities throughout the world
        </li>
        <li>
          PAS Forum members will be invited, occasionally, to participate in professional workshops and social activities for personality development and professional grooming
        </li>
        <li>
          AS Forum members will have opportunities to collaborate in multinational research projects, participates in workshops as a resource person and communicate with extension workers and farmers.
        </li>
      </ul>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>