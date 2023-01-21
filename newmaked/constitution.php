<!DOCTYPE html>
<html>
<head>
	<title>
		PAS | Pakistan Agriculture Scientists Forum
	</title>
	<link rel="icon" href="/logo.png" sizes="32x32" />
	<style type="text/css">
		.part1{
			border: 1px solid black;
			border-radius: 20px;
			background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
            background-blend-mode: multiply,multiply;
			width: 70%;
			height: 40vh;
			margin: 100px 200px 100px 250px;
		}
		.part1 p{
			margin: 120px 0px 0px 100px;
			color: white;
			font-size: 50px;
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
		@media (max-width: 500px) {
        .part1 {
          height: 58vh !important;
         }
        }

	</style>
</head>
<body style="background: #C9CCD3;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten;">
	<?php include 'top.php' ?>
	    <div class="div" style="margin: 10px 0px 0px 100px;">
	    <a href="index.php">
	      Home
	    </a>
        >>
        <a href="">
          Constitution
        </a>
	  </div>




	<div class="part1" style="height: 151vh;">
	    <object data="./pdf/constitution.pdf" type="application/pdf" width="900" height="900" style="border-radius: 33px;
    width: 99%;
    height: 100%;
    padding: 19px;">
       <!-- <embed src="./pdf/constitution.pdf" type="application/pdf" /> -->
    </object>
    
		<a href="pdf/constitution.pdf" target="blank" style="text-decoration: none;">
			
				 <a href="" style="text-decoration: none; color: white;"><i class="fa fa-download"></i></a>
			
		</a>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>