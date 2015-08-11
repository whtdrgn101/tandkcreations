<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        $PAGE_TITLE = 'Our Shop - T&K Creations';
        require_once('common/html_header.inc.php');
    ?>

</head>

<body>

    <?php require_once('common/header.inc.php') ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h1 class="brand-name">Inside our shop</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Tim and Kat DeWees</strong>
                        </small>
                    </h2>
                    <div id="carousel-shop" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-shop" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-shop" data-slide-to="1"></li>
                            <li data-target="#carousel-shop" data-slide-to="2"></li>
                            <li data-target="#carousel-shop" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/shopslide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/shopslide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/shopslide-3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/shopslide-4.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-shop" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-shop" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        
    <!-- /.container -->

    <?php require_once('common/footer.inc.php'); ?>

    <?php require_once('common/scripts.inc.php'); ?>
   
    <script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
    </script>

</body>

</html>
