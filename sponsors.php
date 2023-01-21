<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.slider{
			width: 100%;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<div class="w3-content w3-section slider">
			  <img class="mySlides" src="sponsor1.jpg" style="width:100%; border: 1px solid black;">
			  <img class="mySlides" src="sponsor2.jpg" style="width:100%; border: 1px solid black;">
			  <img class="mySlides" src="sponsor3.jpg" style="width:100%; border: 1px solid black;">
			  <!-- <div class="mySlides" style="width: 50%; padding: 100px 200px 100px 200px; border: 1px solid black;">
			  	<h1>
			  		UpComing Sponsors
			  	</h1>
			  </div>
			  <div class="mySlides" style="width: 50%; padding: 100px 200px 100px 200px; border: 1px solid black;">
			  	<h1>
			  		UpComing Sponsors
			  	</h1>
			  </div>
			  <div class="mySlides" style="width: 50%; padding: 100px 200px 100px 200px; border: 1px solid black;">
			  	<h1>
			  		UpComing Sponsors
			  	</h1>
			  </div> -->
			<script>
				var myIndex = 0;
				carousel();

				function carousel() {
				  var i;
				  var x = document.getElementsByClassName("mySlides");
				  for (i = 0; i < x.length; i++) {
				    x[i].style.display = "none";  
				  }
				  myIndex++;
				  if (myIndex > x.length) {myIndex = 1}    
				  x[myIndex-1].style.display = "block";  
				  setTimeout(carousel, 2000); // Change image every 2 seconds
				  }
			</script>
			</div>
			<!-- Slider End -->
</body>
</html>