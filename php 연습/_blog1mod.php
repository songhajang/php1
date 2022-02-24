<?php

    require('_conn.php');

    $name = $_SESSION['name'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $no = $_POST['no'];

    $sql = "UPDATE `blog1` SET `name`='$name', `category`='$category', `title`='$title', `content`='$content', `mod_date`=CURRENT_TIMESTAMP() WHERE `no`='$no'";
    $reqult = mysqli_query($conn,$sql);
    if($reqult){
        echo "<script>alert('글 수정이 완료되었습니다.');location.href='blog.php';</script>";
    }
?>