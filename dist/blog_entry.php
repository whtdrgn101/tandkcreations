<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        $PAGE_TITLE = 'Blog Entry - T&K Creations';
        $BLOG_ID = $_GET['id'];
        require_once('common/html_header.inc.php');
    ?>

</head>

<body>

    <?php require_once('common/header.inc.php') ?>
    
    <div class="container">

        <div class="row">
            <div class="box">
                <?php
                    require_once('common/bloglib.inc.php');
                    try {
                        $entry = bloglib::getBlogEntry($BLOG_ID);
                        ?>
                            <div class="col-lg-12 text-center">
                                <h2><?php echo $entry["title"]; ?>
                                    <br>
                                    <small><?php echo $entry["postDate"]; ?> by <?php echo $entry["author"]; ?></small>
                                </h2>
                                <?php echo $entry["article"]; ?>                    
                            </div>
                        <?php
                    } catch (Exception $ex) {
                        echo "<p>" . $ex->getMessage() . "</p>";
                    }
                ?>
            </div>
        </div>
        
    </div>
    
    <?php require_once('common/footer.inc.php'); ?>
    
    <?php require_once('common/scripts.inc.php'); ?>

</body>

</html>
