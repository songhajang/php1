<?php
    if(isset($img_file)){
        $dir = "blog_img/";
        $file_name = basename($img_file['name']);
        $tmp_name = $img_file['tmp_name'];

        $addName = strtotime(date("Y-m-d H:i:s"));
        $milliseconds = round(microtime(true) * 1000);
        $addName . = $milliseconds;
        $file_name = $addName."_".$file_name;

        $result = move_uploaded_file($tmp_name,$dir.$file_name);
    }
?>