<?php
    // error_reporting(1);
    session_start();
    var_dump($_SESSION);
    // echo $_SESSION['bookstore'];
    $session = $_SESSION['token'];
?>

<div id="header">
    <div class="w-100 
    h-100 d-flex 
    justify-content-around align-items-center 
    border-bottom">
        <a href="/">홈</a>
        <a href="/book.php">도서</a>
        <?php
            if($session){
        ?>
            <a href="/mypage.php">마이페이지</a>
            <a href="/logout.php">로그아웃</a>
        <?php
            }else{
        ?>
        <a href="/signin.php">로그인</a>
        <?php
            }
        ?>
    </div>
</div>