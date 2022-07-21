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
    <title>Sign up to AwesomeChurch account</title>
</head>
<body>
    <section class="sign-up">
        <div class="sign-up-content py-3 px-2">
            <h1 class="font-roboto font-30 c-grape text-center mb-3">Sign-up to AwesomeChurch</h1>
            <form action="signUp.php" method="post">
                <!-- error messages -->
                <?php include(ROOT_PATH . "/app/helpers/errorMessages.php") ?>
                <!-- error messages -->
                <div class="mb-2">
                    <label for="username" class="form-label">Enter UserName:</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username ?>" id="username" placeholder="Input your userName">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Enter Email:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email ?>" id="email" placeholder="Input your Email">
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">Enter Phone:</label>
                    <input type="number" class="form-control" name="phone" value="<?php echo $phone ?>" id="pnone" placeholder="Input your Phone Number">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Enter Password:</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $password ?>" id="password" placeholder="Input your Password">
                </div>
                <div class="mb-2">
                    <label for="conf-password" class="form-label">Conform Password:</label>
                    <input type="password" class="form-control" name="conf-password" value="<?php echo $confPassword ?>" id="conf-password" placeholder="Confirm your Password">
                </div>
                <div class="mb-2">
                    <button class="btn btn-info" name="btnSignUp" type="submit">Sign-up</button>
                </div>
                <span>Already have account?<a href="<?php echo BASE_URL . "/login.php" ?>">Login!!</a></span>
            </form>
        </div>
    </section>
</body>
</html>