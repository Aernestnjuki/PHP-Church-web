<?php 
    include("path.php");
    include(ROOT_PATH . "/app/controllers/members.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/css/index.css" ?>">
    <title>AwesomeChurch Login</title>
</head>
<body>
    <section class="login">
        <div class="login-content py-3 px-2">
            <h1 class="font-roboto font-30 c-grape text-center mb-3">Login to AwesomeChurch</h1>
            <img src="<?php echo BASE_URL . "/assets/images/login.png" ?>" style="height: 150px;" alt="login" class="img-fluid">
            <form action="login.php" method="post">
                <!-- error messages -->
                <?php include(ROOT_PATH . "/app/helpers/errorMessages.php") ?>
                <!-- error messages -->
                <label for="username" class="form-label">Enter UserName:</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $username ?>" placeholder="Input your userName">
                <br>
                <label for="username" class="form-label">Enter Password:</label>
                <input type="password" class="form-control" name="password" value="<?php echo $password ?>" id="password" placeholder="Input your Password">
                <br>
                <button class="btn btn-info" name="btnLogIn" type="submit">Login</button>
                <br>
                <span><a href="#">Forgotten password??</a></span> &nbsp;&nbsp;&nbsp;
                <span>Don't have account?<a href="signUp.php">Sign up!!</a></span>
            </form>
        </div>
    </section>
</body>
</html>