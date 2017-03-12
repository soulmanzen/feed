<?php
require_once '../lib/flash_messages.php';

?>
<html>
<head>
    <title>Форма входа</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="styles.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="user_auth.php">
            <h2>Форма входа</h2>
            <?php //echo md5('password')?> <!--   шифрование пароля в md5         -->
            <?php if (flash_exists('message')) : ?>
            <div class="alert alert-danger"><?php echo show_flash_message('message')?></div>
            <?php endif ?> <!-- альтернатива обдасти видиомости ( : endif ) = ( {} ) -->
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Логин</label>
                <div class="col-sm-10">
                    <input type="text" name="login" class="form-control" id="input1" placeholder="Ваш Логин..."/>
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="input1" placeholder="Пароль ваш"/>
                </div>
            </div>

            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Отправить"/>
        </form>
    </div>
</div>
</body>
</html>