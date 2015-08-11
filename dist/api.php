<?php

    $action = $_GET['action'];
    $result = array('result' => 'failure', 'message' => 'Unrecognized action');
    header('Content-Type: application/json');
    
    if($action == 'saveBlog') {
        require_once('common/bloglib.inc.php');
        $article = $_POST;
        $article["postDate"] = date('d-m-Y');
        $article["active"] = true;
        $blogobj = (object)$article;
        try
        {
            bloglib::addBlogEntry($blogobj);
            $result['result'] = "success";
            $result['message'] = "OK";
            
        } catch(Exception $ex) {
            $result['result'] = "failure";
            $result['message'] = $ex->getMessage();
        }
    }
    if($action == 'deleteBlog') {
        if($_POST['id'] != null) {
            require_once('common/bloglib.inc.php');
            bloglib::deleteBlogEntry($_POST['id']);  
            $result['result'] = "success";
            $result['message'] = "OK";
        } else {
            $result['message'] = 'Must pass an ID to deleteBlog';
        } 
    }
    
    echo json_encode($result);
?>