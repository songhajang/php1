<?php

    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];

    require('_conn.php');
    $sql= "INSERT INTO `blog1` (`name`,`title`, `category`, `content`, `id`) VALUES ('$name','$title','$category','$content','$id')";
    $result = mysqli_query($conn,$sql);

    if($result) {
        echo "<script>alert('글 작성완료되었습니다.');location.href='blog.php';</script>";
    }
?>