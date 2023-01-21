<?php 
include "top.php"
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <link rel="icon" href="/logo.png" sizes="32x32">
  <script src="js/lightbox-plus-jquery.min.js"></script>
  <style>
    .gallery img {
      transition: 2s;
      padding: 20px;
      width: 370px;
      height: 300px;
    }

    .gallery img:hover {
      filter: grayscale(100%);
      transform: scale(1.1);
    }
  </style>
</head>

<body style="background: #E1FFB1;">
  <div style="margin: 20px 50px;">
    <a href="index.php"> Home </a> &gt;&gt; <a href="" style="text-decoration: none;"> Gallery </a>
  </div>
  <div class="container-fluid px-0">
    <div class="row mx-0 px-0">
      <div class="col-lg-12 mx-0 mb-3 p-0">
        <img src="gallery/1.jpg" width="100%" height="600px">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 px-0">
        <h1 style="font-size: 50px; border-left: 5px solid #3498DB; font-family: times-new-roman; background-color:#A6ACAF; width: 80%; text-align: center;" class="mx-auto"> Conference (2020-2021) Session </h1>
        <div class="gallery py-2">
          <a href="gallery/1.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"><img src="gallery/1.jpg" class="mx-auto shadow"></a>
          <a href="gallery/7.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"><img class="shadow" src="gallery/7.jpg"></a>
          <a href="gallery/8.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"><img src="gallery/8.jpg" class="shadow"></a>
          <a href="gallery/9.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/9.jpg" class="shadow"></a>
          <a href="gallery/10.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/10.jpg" class="shadow"></a>
        </div>
        <h1 style="font-size: 50px; border-left: 5px solid #3498DB; font-family: times-new-roman; background-color:#A6ACAF; width: 80%; text-align: center;" class="mx-auto"> Conference (2019-2020) Session </h1>
        <div class="gallery py-2">
          <a href="gallery/11.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/11.jpg" class="shadow"></a>
          <a href="gallery/12.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/12.jpg" class="shadow"></a>
          <a href="gallery/13.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/13.jpg" class="shadow"></a>
          <a href="gallery/14.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/14.jpg" class="shadow"></a>
          <a href="gallery/15.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/15.jpg" class="shadow"></a>
          <a href="gallery/16.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/16.jpg" class="shadow"></a>
          <a href="gallery/17.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/17.jpg" class="shadow"></a>
          <a href="gallery/18.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/18.jpg" class="shadow"></a>
          <a href="gallery/19.jpg" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img src="gallery/19.jpg" class="shadow"></a>
        </div>
        <h1 style="font-size: 50px; margin-left: 5%; padding-left: 1%; border-left: 5px solid #3498DB; font-family: times-new-roman; background-color:#A6ACAF; width: 80%; text-align: center;"> Gallery </h1>
        <br><br>
        <div class="gallery py-2" >
          <a href="gallery/&lt;?= $value ?&gt;" data-lightbox="mygallery" data-title="Pakistan Agriculture Scientists Forum"> <img class="shadow" src="gallery/22.jpg"></a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style=""></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php 
include "footer.php"
?>