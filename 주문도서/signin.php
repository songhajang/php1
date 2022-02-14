<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <?php
        include('./common/lib.php');
    ?>
</head>
<body>
    <div id="wrapper">
        <?php
            include('./common/header.php');
        ?>

        <div id="content">
            <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                <form 
                    action="/signin_result.php"
                    method="post"
                class="w-50 h-50 d-flex flex-column justify-content-center align-items-center border">
                    <div class="mb-1 form-group">
                        <div>
                            <input type="text" class="form-contol" name="user_email" placeholder="아이디"/>
                        </div>
                        <div class="mb-1">
                            <input type="password"  name="user_pw" placeholder="비밀번호"/>
                        </div class="mb-1">
                            <input type="submit" class="btn btn-primary" value="로그인">
                        <div>
                    </div>
                </form>
            </div>  
        </div>

        <?php
            include('./common/footer.php');
        ?>
    </div>

</body>
</html>