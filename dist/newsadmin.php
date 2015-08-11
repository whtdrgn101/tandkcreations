<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        $PAGE_TITLE = 'Create New News Entry - T&K Creations';
        require_once('common/html_header.inc.php');
    ?>

    <link href="css/jquery.dataTables.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>

    <?php require_once('common/header.inc.php') ?>
    
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Add News Entry</h2>
                    <hr>
                
                    <form id="newBlog" >
                        <fieldset class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" />
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="Author" />
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="summary">Summary</label>
                            <input type="text" class="form-control" id="summary" name="summary" placeholder="Summary" />
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="title">Article</label>
                            <textarea type="textarea" class="form-control" id="article" row="10" name="article"></textarea> 
                        </fieldset>
                        <button id="saveEntry">Save</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Current Entries</h2>
                    <hr>
                </div>
                <table id="blogEntries">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once('common/bloglib.inc.php');
                            
                            try
                            {
                                $blogentries = bloglib::getBlogEntries(null);
                            
                                // iterate through the results
                                foreach ($blogentries as $entry) { ?>
                        <tr>
                            <td><button class="fa fa-trash" onClick="delEntry('<?php echo $entry['_id'] ?>')"></button></td>
                            <td><?php echo $entry['postDate'] ?></td>
                            <td><?php echo $entry['author'] ?></td>
                            <td><?php echo $entry['title'] ?></td>
                            <td><?php echo $entry['summary'] ?></td>
                        </tr>
                        <?php
                                }
                            } catch(Exception $ex) {
                                
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <?php require_once('common/footer.inc.php'); ?>
    
    <?php require_once('common/scripts.inc.php'); ?>

    <script src="js/jquery.dataTables.js"></script>
    <script>
    $(document).ready( function() {
        $("#saveEntry").click(function() {
            $.ajax({
                type: "POST"
                ,url: 'api.php?action=saveBlog'
                ,data: $('#newBlog').serialize()
                ,success: function(data)
                {
                    if(data.result == "success") {
                        location.reload();
                    } else {
                        alert(data.message); // show response from the php script.
                    }
                }
            }
            );
            return false;
        });
         $('#blogEntries').DataTable();
    });
    
    function delEntry(_id) {
        if(confirm('Are you sure you want to delete this BLOG entry?')) {
            $.ajax({
                type: "POST"
                ,url: 'api.php?action=deleteBlog'
                ,data: {id:_id}
                ,success: function(data)
                {
                   if(data.result == "success") {
                        location.reload();
                    } else {
                        alert(data.message); // show response from the php script.
                    }
                }
            }
            );
        }
    }
    </script>

</body>

</html>
