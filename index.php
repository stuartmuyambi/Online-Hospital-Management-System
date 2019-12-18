<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KHC | Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo/logo.png"/>
    <link rel="stylesheet" href="css/fontawesome-all.css">
</head>
<body class="bg-styles hide-scroll">
    <div class="container-fluid">
        <div class="form-container mx-auto">
            <h1 class="display-5 text-center color"><img src="images/logo/png600.png" width="300px"> </h1>
            <p class="lead text-center mt-3">PLEASE LOGIN TO CONTINUE</p>
            <div class="form-wrap">
                <form method="post" action="index.php">
                <?php include('errors.php'); ?>
                    <div class="form-group has-form-label">
                        <input type="text" class="form-control" id="email" placeholder="Username" name="username">
                    </div>
                    <div class="form-group has-form-label">
                            <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="login_user">LOGIN</button>
                    <p class="lead text-center mt-5">Dont have an account? <a href="signup.php" class="color">SIGN UP</a></p>                        
                </form>
            </div>
        </div>
    </div>
</body>
</html>