<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header>
        <section class="bennar">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
                <div class="carousel-inner">
                    <?php
                        $x=0;
                        while (have_posts()) {the_post();
                            $x++;
                    ?>
                    <div class="carousel-item active">
                        <?php the_post_thumbnail();?>
                    </div>
                    <?php }?>
                    <!-- <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- logo -->

        <section class="site_logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-start main-logo"><?php the_custom_logo();?></div>
                    <div class="col-lg-6 text-end bd-logo"><?php dynamic_sidebar('bdlogo'); ?></div>
                </div>
            </div>
        </section>


        <!-- navber -->

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">              
                <div class="collapse navbar-collapse" id="navbarNav">

                <?php wp_nav_menu([
                    'menu_location' => 'tm',
                    'menu_class' => 'navbar-nav'

                ]); ?>
                <!-- <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul> -->
                </div>
            </div>
        </nav>
    </header>

   <section class="container hero">
        <div class="row hero-title">
        <?php dynamic_sidebar('h_title');?>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">

                    <?php dynamic_sidebar('card');?>

                    <!-- <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div> -->
                 </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">

                    <?php dynamic_sidebar('card');?>

                    <!-- <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div> -->
                 </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">

                    <?php dynamic_sidebar('card');?>

                    <!-- <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div> -->
                 </div>
            </div>
        </div>
   </section>



<!--  -->
<?php wp_footer();?>
</body>
</html>