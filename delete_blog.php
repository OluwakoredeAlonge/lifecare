<?php
    require_once "classes/Blog.php";
    $id = $_GET['id'];
    $blo = new Blog;
    $blo->delete_blog($id);
    header('location: blog_history.php');
?>