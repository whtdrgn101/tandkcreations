<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        $PAGE_TITLE = 'Products - T&K Creations';
        require_once('common/html_header.inc.php');
    ?>

</head>

<body>

    <?php require_once('common/header.inc.php') ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our Handcrafted Products 
                        <strong> by T&K Creations</strong>
                    </h2>
                    <hr>
                    <?php
                        
                        try
                        {
                            //setlocale(LC_MONETARY, 'en_US');
                            require_once('common/storelib.inc.php');
                            $items = storelib::getStoreItems();
                            foreach($items as $item) {
                                ?>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><small></small><a target="_NEW" href="<?php echo $item['LinkURL'] ?>"><?php echo $item['Name'] ?></a></small></div>
                                        <div class="panel-body">
                                            <a target="_NEW" href="<?php echo $item['LinkURL'] ?>">
                                                <img class="img-responsive img-full" src="<?php echo $item['ImageURL'] ?>" />
                                            </a>
                                        </div>
                                        <div class="panel-footer">
                                            <?php echo money_format('$%i', doubleval($item['Price'])) ?> + <small><?php echo money_format('$%i', doubleval($item['Shipping'])) ?></small> S&amp;H
                                        </div>
                                    </div>
                                </div>
                                <?php
                                
                            }
                        } catch(Exception $ex) {
                            echo $ex->getMessage();
                        }
                            
                    ?>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container -->

    <?php require_once('common/footer.inc.php'); ?>
    
    <?php require_once('common/scripts.inc.php'); ?>

</body>

</html>
