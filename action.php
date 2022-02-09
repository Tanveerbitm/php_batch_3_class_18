<?php

require_once 'vendor/autoload.php';
use App\classes\Blog;
use App\classes\Prime;

if(isset($_GET['pages'])) {
    if ($_GET['pages'] == 'home') {
        include 'pages/prime.php';
    }elseif ($_GET['pages']=='all-blogs'){
        $blog = new Blog();
        $allBlogs = $blog->getAllBlogs();
        include 'pages/blog.php';
    }elseif ($_GET['pages']== 'search'){
        $blog = new Blog();
        $students = $blog->getAllBlogs();
        include 'pages/search.php';
    }
    elseif ($_GET['pages']== 'prime'){
        include 'pages/prime.php';
    }
    elseif ($_GET['pages']== 'series'){
        include 'pages/series.php';
    }
    elseif ($_GET['pages']== 'register'){
        include 'pages/registration.php';
    }
}

elseif (isset($_POST['prm_btn'])){
        $prime = new Prime($_POST);
        $result = $prime->index();
        include 'pages/prime.php';
}
elseif (isset($_POST['srs_btn'])){

        $series = new \App\classes\Series($_POST);
        $results = $series->index();
        include 'pages/series.php';
}elseif (isset($_POST['reg_btn'])){

    $registration = new \App\classes\Registration($_POST);

}
else{
    include 'pages/prime.php';
}

