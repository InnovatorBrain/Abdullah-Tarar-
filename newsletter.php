<?php

require 'db.php' ;



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
    <link rel="icon" href="/logo.png" sizes="32x32" />
	<title>
		PAS | Pakistan Agricultural Scientists Forum
	</title>
	<style type="text/css">
		.part1{
			border: 1px solid black;
			border-radius: 20px;
			background-color: #3d834a;
			width: 70%;
			/*height: 40vh;*/
			margin: 100px 200px 100px 250px;
		}
		.part1 p{
			padding: 20px 0px 20px 40px;
    color: white;
    font-size: 29px;
    background-color: #006a08;
    margin: 19px;
    border-radius: 14px;
		}
		.part1 a{
			color: white;
		}
		.part1 a:hover{
			color: #5DADE2;
		}
		.part1 i:hover{
			color: #5DADE2;
		}
	</style>
</head>
<body>
	<?php include 'top.php' ?>
	<div class="div" style="margin: 10px 0px 0px 100px;">
	    <a href="index.php">
	      Home
	    </a>
        >>
        <a href="">
          News Letter
        </a>
	  </div>




	<div class="part1">
	
		     <?php
                $m = sql_query('news','','');
                
                foreach($m as $r){
                    if ($r['status'] == 1){
                  ?>
                   <p>
                       <?= $r['name'] ?>
                      <a href="conference.php" style="text-decoration: none; color: violet;"> Read More</a></p>
                  
                  <?php
                  
                    }
                }
                
                ?>
	
	</div>
	<?php include 'footer.php' ?>
</body>
</html>