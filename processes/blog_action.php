<?php
session_start();
require_once "../classes/Blog.php";
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";die;
if (isset($_POST['add_post'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $image = $_FILES['con_img'];
    $content = $_POST['content'];
    if($image['error'] == 0){
        $ext = pathinfo($_FILES['con_img']['name'], PATHINFO_EXTENSION);
        $allowed = ["jpg", "png", "jpeg"];
        if(!in_array(strtolower($ext), $allowed)){
            $_SESSION['errormsg'] = 'This type of file is not allowed';
            header('location: ../blog_update.php');exit();
        }
    }elseif(empty($title) || empty($author) || empty($date) || empty($time) || empty($content)) {
        $_SESSION['errormsg'] = "Please complete the form";
        header('location:../blog_update.php');
    } 
    else {
        $blo = new Blog;
        $blo->insert_blog($title, $author, $date, $time, $image, $content);
        $_SESSION['feedback'] = "Blog updated successfully";
        header('location:../blog_update.php');
    }
} else {
    $_SESSION['errormsg'] = "Please fill the blog form";
    header('location:../blog_update.php');
}
