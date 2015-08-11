<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        $PAGE_TITLE = 'T&K Creations';
        require_once('common/html_header.inc.php');
    ?>

</head>

<body>

    <?php require_once('common/header.inc.php') ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">T&K Creations</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Tim and Kat DeWees</strong>
                        </small>
                    </h2>
                    <div id="carousel-example-generic" class="carousel slide center-block col-md-6">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-border-left" src="img/slide-0.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-8.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-border-left" src="img/slide-9.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <p>A family run business dedicated to the quality of hand-crafted good and attention to detail.  We stand behind our products and services and love to go the extra mile.</p>
                        <p>We respond to special requests and custom orders.  If you have something you want special, just contact us via our contact page and we would be more than happy to discuss your idea with you!</p>
                    </div>
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
