<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KHC | Signup</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo/logo.png"/>
    <link rel="stylesheet" href="css/fontawesome-all.css">
</head>
<body class="bg-styles hide-scroll">
    <div class="container-fluid">
        <div class="form-container mx-auto">
        <h1 class="display-5 text-center color"><img src="images/logo/png600.png" width="300px"> </h1>
            <p class="lead text-center mt-3">CREATE YOUR ACCOUNT NOW</p>
            <div class="form-wrap">
                <form method="post" action="signup.php">
                <?php include('errors.php'); ?>
                    <div class="form-group has-form-label">
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="form-group has-form-label">
                            <input type="password" class="form-control" id="pwd" placeholder="Password" name="password_1">
                        </div>
                        <div class="form-group has-form-label">
                                <input type="password" class="form-control" id="pwd" placeholder="Confirm Password" name="password_2">
                            </div>
                        <button type="submit" class="btn btn-primary btn-block" name="reg_user">CREATE ACCOUNT</button>
                </form>

                <p class="lead mt-3 text-center">Already a member? <a href="index.php" class="color">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>