<?php 
    include("../../path.php");
    include(ROOT_PATH . "/app/controllers/counselling.php");
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
            <!-- <span><a href="add blog.html" class="btn btn-primary">Add Blogs</a></span> &nbsp;&nbsp; -->
            <span><a href="<?php echo BASE_URL . "/admin/counselling/index.php" ?>" class="btn btn-primary">Manage Guidance & Counselling</a></span> 
            <div class="py-5">
                <h4 class="font-oswald text-center">Make the meeting time and date</h4>
                <!-- error messages -->
                <?php include(ROOT_PATH . "/app/helpers/errorMessages.php") ?>
                <!-- error messages -->
                <form action="editCounselling.php" method="post" class="font-poppins">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $id ?>" id="your-name"  class="form-control">   
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>" id="your-name"  class="form-control">   
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="your_name" value="<?php echo $your_name ?>" class="form-control">   
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="phone_number" value="<?php echo $phone_number ?>"  class="form-control">   
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="country" value="<?php echo $country ?>" class="form-control">   
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="religion" value="<?php echo $religion ?>" class="form-control">   
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="gender" value="<?php echo $gender ?>" class="form-control">   
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="request" value="<?php echo $request ?>"  class="form-control">   
                    </div>
                    <div class="form-group mb-3">
                        <label for="user">set the meeting date</label>
                        <input type="date" name="meeting_date" value="<?php echo $meeting_date ?>" id="meeting-date" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="user">set the meeting time</label>
                        <input type="time" name="meeting_time" value="<?php echo $meeting_time ?>" id="meeting-time" class="form-control">
                    </div>
                    <button type="submit" name="btnUpdate" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
    </section>
    <!-- ===================== end of admin main content ====================== -->


    <!-- CUSTORM JS LINKS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>