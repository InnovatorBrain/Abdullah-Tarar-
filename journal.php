<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="icon" href="/logo.png" sizes="32x32" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      .div{
      	margin: 10px 0px 0px 100px;
      }
      .centerdiv{
		width: 80%;
		box-shadow: 2px 3px 7px 0px black;
		border-radius: 25px;
		background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
		display: flex;
		margin: 5% 10%;
	}
	.centerdiv1{
		width: 60%;
		padding: 5%;
	}
	a{
		color: white;
	}

	.centerdiv2{
		width:40%;
	}
	h1{		
		text-align: center;
		margin-bottom: 20px;
	}
	@media (max-width: 600px){
		.centerdiv{
			display: flex;
			flex-direction: column;
			width: 100%
			margin: none;
		}
		.centerdiv1{
			width: 90%;
		}
		.centerdiv2{
			width: 100%;
		}
	}
      
  </style>
</head>
<?php include 'top.php' ?>
<body style="background: #E1FFB1;
 background-image: linear-gradient(-180deg, rgba(255,100,100,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten;">
    <div style="margin: 20px 0px 0px 50px;">
        <a href="index.php" style="color: black; text-decoration: none;">
            Home
        </a>
        <a style="color: black;">
            &nbsp;&nbsp;Journal
        </a>
    </div>

<div class="maindiv">
	<div class="centerdiv">
		<div class="centerdiv1">
			<h1 style="border-bottom: 2px dashed white;">The Journal of Animal and Plant Sciences</h1>
			<p style="text-align: justify; font-size: 19px; line-height: 23px;">
				The Journal of Animal and Plant Sciences (JAPS) is a bi-monthly publication and is being published regularly since 1991 by the Pakistan Agricultural Scientists Forum (PAS FORUM). It publishes original research papers, review, extension/clinical articles on all aspects of animal (including fisheries/wildlife) and plant sciences, agricultural economics, rural sociology and other related subjects. The journal is read, abstracted and indexed by the abstracting/indexing agencies of international repute.
			</p>
			<br>
			<h4 style="text-align: center"> 
				Impact Factor 0.481
			</h4>
			<h4 style="text-align: center">
				JCR 2019
			</h4>
			<br>
			<p>
				<br>
				<b>
					Prof. Dr. S. Abrar Hussain Gilani
				</b>
				<br>
					Chief Editor, University, of Agriculture,
					Faisalabad. 
				<br>
				<br>
				<br>
				<a style="color: blue; font-size: 18px; text-decoration: none;" href="http://www.thejaps.org.pk/">
					For More Information...
				</a>
			</p>
		</div>
		<div class="centerdiv2">
		    
			<img src="agripics/unnamed.jpg" style="border-radius:20px; margin: 20%; height: 350px; width: 250px;">
		</div>
	</div>
</div>

</body>
<?php include 'footer.php'; ?>
</html>