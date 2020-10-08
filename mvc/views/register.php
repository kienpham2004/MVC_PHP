<?php 
    error_reporting(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vietpro Mobile Shop - Administrator</title>
    <base href="http://localhost/mini_project/">
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <link href="./public/css/datepicker3.css" rel="stylesheet">
    <link href="./public/css/bootstrap-table.css" rel="stylesheet">
    <link href="./public/css/styles.css" rel="stylesheet">

</head>

<body>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Register User</div>
                <div class="panel-body">
                    <!-- <div class="alert alert-danger">Tài khoản không hợp lệ !</div> -->
                    <form action="./RegisterController/register" method="POST">
                        <fieldset> 
                            <?php 
                            if(isset($data["error"])){
                            ?>
                            <p style="color:red"><?php echo $data["error"]; ?></p>
                            <?php
                            }
                            ?>  
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter user id" name="user_id" type="text" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter username" name="username" type="text" autofocus >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter your password" name="password" type="password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter gmail" name="gmail" type="text" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter location" name="location" type="text" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter phone" name="phone" type="text" >
                            </div>             
                            <button name="register" type="submit" class="btn btn-primary">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

</html>
