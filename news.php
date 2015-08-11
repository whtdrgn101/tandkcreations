<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        $PAGE_TITLE = 'News - T&K Creations';
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
                    <h2 class="intro-text text-center">Company
                        <strong>news</strong>
                    </h2>
                    <hr>
                </div>
                <?php
                    require_once('common/bloglib.inc.php');
                    $query = array('active' => true);
                    
                    try
                    {
                        $blogentries = bloglib::getBlogEntries($query);
                    
                        // iterate through the results
                        foreach ($blogentries as $document) { ?>
                <div class="col-lg-12 text-center">
                    <h2><?php echo $document["title"]; ?>
                        <br>
                        <small><?php echo $document["postDate"]; ?> by <?php echo $document["author"]; ?></small>
                    </h2>
                    <?php echo $document["summary"]; ?>                    
                    <a href="blog_entry.php?id=<?php echo $document["_id"]; ?>" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <?php
                        }
                    } catch(Exception $ex) {
                        ?><p>Blog temporarily unavailable.</p><?php
                    }
                ?>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php require_once('common/footer.inc.php'); ?>
    
    <?php require_once('common/scripts.inc.php'); ?>

</body>

</html>
