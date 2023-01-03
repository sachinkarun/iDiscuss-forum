<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>iDiscuss-Forum</title>
      <style>
          #ques{
              min-height: 433px; 
          }
      </style>
  </head>
  <body>
      <?php require'partials/header.php'; ?>
      <?php require'partials/database.php'; ?>
      
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="1.jpg">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="2.jpg">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="3.jpg">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
      <div class="container my-3" id="ques">
          <h3 class="text-center">iDiscuss-Categories</h3>

<div class="row my-3">
<?php
$sql = 'SELECT * FROM `categorie`';
$result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
    $id = $row['category_id'];
    $cat = $row['category_name'];
    $desc = $row['category_desc'];
    echo'<div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
        <img src="cards'.$id.'.jpg" class="card-img-top" alt="loading image">
          <div class="card-body">
            <h5 class="card-title"><a href="threadlist.php?catid='. $id .'">'. $cat .'</a></h5>
            <p class="card-text">'.substr($desc, 0, 90).'...</p>
            <a href="threadlist.php?catid='. $id .'" class="btn btn-success">View threads</a>
          </div>
        </div>
    </div>';
    }
?>
          </div>
        </div>
    <?php require'partials/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
