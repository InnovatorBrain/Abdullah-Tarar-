<?php
chdir("../");
error_reporting(0);


$mysqli = new mysqli("localhost","microsta_pasforu","zO2zvl9{P}7e","microsta_pasforum_new");

$data = array($_SERVER,$_POST,$_GET,date("d-m-Y"));

$data = json_encode($data);

$mysqli->query("INSERT INTO log (id,  data) VALUES (NULL, '$data')");

// chdir("./admin");




// include "index.php";



$pages = array(
   ["aboutus.php","About Us"],
   ["constitution.php","Constitution"],
   ["journal.php","Journal"],
   ["directors.php","Board of Directors"],
   ["executive1.php","Executives"],
   ["regulation.php","Rules & Regulations"],
   ["membership_form.php","Membership Form"],
   ["lom.php","List of Members"],
   ["apsi.php","APSI"],
   ["textbooks.php","Text Books"],
   ["magzine.php","Magazines"],
   ["proceedings.php","Proceedings"],
   ["newsletter.php","Newsletter"],
   ["conference.php","Conference/Events"],
   ["expert.php","Expert Certificate Program"],
   ["training.php","Education & Training"],
   ["index.php","Webinar"],
   ["gallery.php","Gallery"],
   ["contactus.php","Contact Us"],
);


    
    
   $request = str_replace('/','',$_SERVER['REQUEST_URI']);
   
   
   foreach ($pages as $r){
      if ($r[0] == $request && file_exists($r[0])){
          
          require $r[0];
          die;
      } 
   }




require 'index.php';