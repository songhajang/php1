<?php

    require('_conn.php');
    $no =$_GET['no'];

    $sql = "DELETE FROM `blog1` WHERE `no`=$no";

    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('글 삭제가 완료되었슴니다.');location.href='blog.php';</script>";
    }
?>