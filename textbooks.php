<!DOCTYPE html>
<html>
<head>
	<title>
		PAS | Pakistan Agricultural Scientists Forum
	</title>
	<link rel="icon" href="/logo.png" sizes="32x32" />
	<style type="text/css">
		.container{
            border-radius: 20px;
            margin: 40px 40px;
            padding: 30px; 
        	font-size: 21px;
        }
        ul{
        	list-style-type: none;
        }
        a{
        	text-decoration: none;
        	color: black;
        }
        span{
        	color: black;
        }
        .main{
        	display: flex;
        	width: 100%;
        }
        @media (max-width: 600px){
        	.container{
        		margin: 40px 40px;
        	}
        	.main{
        		display: flex;
        		flex-direction: column;
        	}
        	.main1{
        		margin-top: 40px;
        	}
        }
        
	</style>
</head>
<body style="font-family: Arial; font-size: 15px; background: #E1FFB1;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten;">
	<?php include'top.php' ?>
	<div style="margin: 20px 0px 0px 100px;">
		<a href="index.php">
			Home
		</a>
		>>
		<a href="">
			Text Books
		</a>
	</div>
	<div class="container">
		<center>
			<h2 style="margin-bottom: 20px; font-size: 35px; color: white;"> 
				<span>Our Text Books</span>
			</h2>
		</center>
		<div class="main">
			<div class="main1"> 
				<img src="agripics/agronomy1.jpeg" style="width: 80%;">
				<p>
					Basic Agronomy-1 <span>(Coming Soon)</span>
				</p>
			</div>
			<div class="main1"> 
				<img src="agripics/agronomy2.jpeg" style="width: 80%;">
				<p>
					Basic Agronomy-2 <span>(Coming Soon)</span>
				</p>
			</div>
			<div class="main1"> 
				<img src="agripics/biology.jpeg" style="width: 80%;">
				<p>
					Biology for Agriculture <span>(Coming Soon)</span>
				</p>
			</div>
			<div class="main1"> 
				<img src="agripics/soil.jpeg" style="width: 80%;">
				<p>
					Basic Soil Science <span>(Coming Soon)</span>
				</p>
			</div>
		</div>
	</div>
	<?php include'footer.php' ?>
</body>
</html>