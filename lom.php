<?php
require './db.php';

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
    <link rel="icon" href="/logo.png"ad sizes="32x32" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.co.m/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- data table js -->
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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
    .container{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
  </style>
</head>
<body>
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
  <div class="container">
    
<style type="text/css">
  tr {
    height: 50px;
  }
  th {
    text-align: left;
  }
</style>

<div class="card">
                  <div class="card-body pb-0">
                  <center>
                    <h1 class="card-title mb-0" style="color: #3d834a;">Members</h1></center>
                  </div>
                  <div class="card-body p-0">
                    
                 








  
 
<style>
.container {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 15px;
    background: #299be4;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn:hover, .table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
} 
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.settings {
    color: #2196F3;
}
table.table td a.delete {
    color: #F44336;
}
table.table td i {
    font-size: 19px;
}
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #62c9e8;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
} 
.pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
</style>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            
            <table class="table table-striped table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th style="width: 300px !important;" >Name</th>           
                        <th>Qualificaton</th>
                        <th>Designation</th>
                        <th>Membership Type</th>
                        <th style="width: auto !important;" >Affiliation</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px !important;" >
                    <?php 
                    // $y = 2101;
                    // $rr = scandir("./admin/cert");
                    // foreach ($rr as $key ) {
                    //   $tt = explode('-',$key);
                    //     if(sizeof($tt) > 2){
                    //      $p = explode(".",$tt[sizeof($tt) - 1])[0];
                    //      if($p = $y){
                    //          $y++;
                    //      }
                    //     }
                    // }
                    
                //     $rrr = array();
                //     for ($i=0; $i < ($y + 5); $i++) { 
	               // foreach ($rr as $key ) {
                //       $tt = explode('-',$key);
                //         if(sizeof($tt) > 2){
                //          $p = explode(".",$tt[sizeof($tt) - 1])[0];
                //          if ($p == $i){ array_push($rrr,$key); }
                //         }
                //     }
	               // }
                    
                    // foreach ($rrr as $key ) {
                        
                    //     $tt = explode('-',$key);
                        
                    //     if(sizeof($tt) > 2){
                          
                        
                   
                    $me = sql_query('member','','');
                        foreach ($me as $key ) {
                         
                         
                              
                            if ($key['notif']=='0'){
                               
                           ?>
                          <tr>
                              <td><?php echo $key['member_number']; ?></td>
                              <td><a href="#"><img src="<?php if($key['img'] == '') { echo '/images/default-image.png'; } else { echo '/uploads/' . $key['img']; } ?>" class="avatar" height="50px" width="50px" > <?php echo $key['name']; ?> </a></td>
                        
                              
                              <td> <?php echo $key['qualification']; ?></td>
                              <td> <?php echo explode('&',$key['designation'])[0]; ?></td>
                            <td><?php 
                            if ($key['membertype'] == 'regular') {
                                echo 'Regular';
                            }
                            if ($key['membertype'] == 'Associate') {
                                echo 'Associate';
                            }
                            if ($key['membertype'] == 'lifetime') {
                                echo 'lifetime';
                            }
                            echo '<strong>/</strong>';
                            echo explode('-',$key['dat'])[0];
                            //print_r(explode('-',$key['dat']));
                            ?></td>
                            <td> <?php echo (isset(explode('&', $key['designation'])[1])) ? explode('&', $key['designation'])[1] : ''; ?> </td>
                            
                            
                          </tr>
                          <?php   } } ?>

                </tbody>
            </table>
            <!--<div class="clearfix">-->
            <!--    <div class="hint-text">Showing <b><?php echo $x-2101; ?></b> out of <b><?php echo $x-2101; ?></b> entries</div>-->
            <!--    <ul class="pagination">-->
            <!--        <li class="page-item disabled"><a href="#">Previous</a></li>-->
            <!--        <li class="page-item"><a href="#" class="page-link">1</a></li>-->
                    
            <!--        <li class="page-item"><a href="#" class="page-link">Next</a></li>-->
            <!--    </ul>-->
            <!--</div>-->
        </div>
    </div>
</div>























   
                  </div>
                </div>

  

  </div>
  
  
  
  
  <?php include 'footer.php' ?>
   <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    });
    </script>
</body>
</html>