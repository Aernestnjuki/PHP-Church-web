<?php 
    include("../../path.php");
    include(ROOT_PATH . "/app/controllers/members.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin side</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/css/index.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/css/admin.css" ?>">
</head>
<body>
    <!-- =========================== HEADER ========================= -->
    <?php
        include(ROOT_PATH . '/app/includes/adminHeader.php');
    ?>
    <!-- =========================== HEADER ========================= -->

    <!-- ===================== start of admin main content ==================== -->
    <section class="admin-main-content">
        <!-- ========================= INNER ADMIN SIDEBAR LINKS =========================== -->
        <?php
            include(ROOT_PATH . '/app/includes/innerAdminSideBarLinks.php');
        ?>
        <!-- ========================= INNER ADMIN SIDEBAR LINKS =========================== -->

        <div class="admin-mainbar">
            <span><a href="<?php echo BASE_URL . "/admin/members/addMembers.php" ?>" class="btn btn-primary">Add Members</a></span> &nbsp;&nbsp;
            <span><a href="<?php echo BASE_URL . "/admin/members/index.php" ?>" class="btn btn-primary">Manage Members</a></span> 
            <div class="py-5">
                <h4 class="font-oswald text-center">Add Members</h4>
                <form action="addMembers.php" method="post" class="font-poppins">
                    <!-- error messages -->
                    <?php include(ROOT_PATH . "/app/helpers/errorMessages.php") ?>
                    <!-- error messages -->
                    <div class="mb-2">
                        <label for="user">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo $username ?>" placeholder="John doe" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $email ?>" placeholder="John doe@gmail.com" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="phone" class="form-label">Enter Phone:</label>
                        <input type="number" class="form-control" name="phone" id="pnone" value="<?php echo $phone ?>" placeholder="Input your Phone Number">
                    </div>
                    <div class="mb-2">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" value="<?php echo $password ?>" class="form-control" placeholder="Enter your Password">
                    </div>
                    <div class="mb-2">
                        <label for="conf-password">Confirm password</label>
                        <input type="password" name="conf-password" id="conf-password" value="<?php echo $confPassword ?>" class="form-control" placeholder="Confirm your Password">
                    </div>
                    <div class="form-check mb-2">
                        <?php if(isset($admin) && $admin == 1): ?>
                            <input class="form-check-input" name="admin" type="checkbox" checked>
                            <label class="form-check-label">
                                Admin
                            </label>
                        <?php else: ?>
                            <input class="form-check-input" name="admin" type="checkbox">
                            <label class="form-check-label">
                                Admin
                            </label>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-info" name="uploadMember" type="submit">Upload member</button>
                </form>
            </div>
        </div>
    </section>
    <!-- ===================== end of admin main content ====================== -->


    <!-- CUSTORM JS LINKS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type='text/javascript' src="../view/js/church system.js"></script>
</body>
</html>