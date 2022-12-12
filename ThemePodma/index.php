<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="">
    <?php wp_head(); ?>
    
</head>
<body>

<header>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
    $x=0;
    while(have_posts()){the_post();
      $x++;
    ?>
    <div class="carousel-item <?=($x==1)? 'active' : ''?>">
      <?php the_post_thumbnail();?>
      <img src="./assect/image/slide12 (1).jpg" class="d-block w-100" alt="...">
    </div>
    <?php }?>
   
  </div>
</div>
</header>
    
<!--  -->

<?php wp_footer(); ?>

</body>
</html>