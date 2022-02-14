<?php
    session_start();
    if(!$_SESSION['token']){
        echo '세션 없음';
        return;
    }
    // echo '세션 있음';
    session_destroy();
    echo "<script>alert('로그아웃 됨');location.href='/';</script>"
?>