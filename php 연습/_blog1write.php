<?php

    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];

    $img_file = $_FILES['img_file'];
    $img_size = $_FILES['img_file']['size'];

    require('_file_upload.php');

    if($result){

        $sql= "INSERT INTO `blog1` (`name`,`title`, `category`, `content`, `id`, `img_file`, `img_size`) VALUES ('$name','$title','$category','$content','$id','$file_name','$img_size')";
    }
    else{
        $sql= "INSERT INTO `blog1` (`name`,`title`, `category`, `content`, `id`) VALUES ('$name','$title','$category','$content','$id')";
    }

    require('_conn.php');
    $result = mysqli_query($conn,$sql);

    if($result) {
        echo "<script>alert('글 작성완료되었습니다.');location.href='blog.php';</script>";
    }
?>