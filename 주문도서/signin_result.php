<?php
header('Content-Type: text/html; charset=UTF-8');
    $user_pw = $_POST['user_pw'];
    $user_email = $_POST['user_email'];

    if(empty($_POST['user_email'])|| empty($_POST['user_pw'])){
        echo "<script>alert('아이디, 비번없음');history.back();</script>";
        return;
    }

    // 로그인 프로세스
    $db = mysqli_connect("localhost","root", "", "bookstore");
    $query= "SELECT * FROM t_user WHERE user_email='{$user_email}' AND user_pw='{$user_pw}'";
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result)){
        echo "Rows: ".mysqli_num_rows($result);
    }
    else{
        echo "<script>alert('아이디, 비번 틀림');history.back();</script>";
        return;
    }
    $row = mysqli_fetch_array($result);

    session_start();

    $_SESSION['token'] = time();
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_nm'] = $row["user_num"];
    echo "<script>alert('로그인 되었습니다!');location.href='/';</script>";

    // echo $user_id;
?>