<?php
    require('_conn.php');

    $_SESSION['id'] = $id;
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $pwc = $_POST['pwc'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    //아이디 중복된 경우의 처리
    $sql ="SELECT * FROM `user` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = $result->num_rows;

    if($row > 0){
        //중복된 아이디가 있음
        echo "<script>window.alert('중복된 아이디가 있슴니다');location.href='join.php'</script>";
    }

    // 잘못 입력한 경우의 처리
    if($pw != $pwc){
        echo "<script>alert('패스워드를 확인해주세요.');location.href='join.php';</script>";
    }

    $sql = "INSERT INTO `user`(`id`,`pw`,`name`,`email`) VALUE ('$id','$pw','$name','$email')";
    $result = mysqli_query($conn, $sql);

    if($result){
        //로그인처리
        require('_loginok.php');
        echo "<script>window.alert('회원가입 완료 !');location.href='index.php'</script>";

    }else{
        echo "<script>window.alert('회원가입 실패!');location.href='join.php'</script>";
    }
?>