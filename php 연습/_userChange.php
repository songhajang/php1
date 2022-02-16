<?php
    require('_conn.php');

    $no = $_SESSION['no'];
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $pwc = $_POST['pwc'];
    $pw = $_POST['pw'];
    $email = $_POST['email'];

    if($pw != $pwc){
        echo "<script>alert('패스워드를 확인해주세요.');location.href='user.php'</script>";
    }
    
    $sql = "UPDATE `user` SET `name`='$name', `email`='$email',`pw`='$pw' WHERE `no`=$no";
    $result = mysqli_query($conn, $sql);

    if($result){
        $sql = "SELECT * FROM `user` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        
        foreach($result as $user){
            $_SESSION['no'] = $user['no'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
        }
    }
    echo "<script>alert('변경이 완료되었습니다.');location.href='user.php'</script>";
?>