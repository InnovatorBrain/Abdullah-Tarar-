<?php
// require './db.php';
include './top.php';
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




global $mysqli;

$rr = scandir("./admin/cert");
$x=1;
                    foreach ($rr as $key ) {
                      $tt = explode('-',$key);
                        if(sizeof($tt) > 2){
                         $p = explode(".",$tt[sizeof($tt) - 1])[0];
                        //  echo $key;
                         echo $tt[0]." ".$p."<br>";
                         
                         $sql = "UPDATE member SET member_number='$p' WHERE id=$tt[0] ";
                         $mysqli->query($sql);
                        }
                     }