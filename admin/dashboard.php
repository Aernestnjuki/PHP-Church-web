<?php 
    include("../path.php");
    include(ROOT_PATH . "/app/controllers/finances.php");

    $total = 0;
    foreach ($finance_data as $key => $value) {
        $total = $total + $value['balance'];
    }

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

            <?php
                include(ROOT_PATH . '/app/helpers/successMessages.php');
            ?>
            <div class="row font-poppins">
                <div class="col-md-3">
                    <div class="bg-light d-flex justify-content-between">
                        <div class="py-2 px-3">
                            <p class="numbers c-orange"><?php echo count(selectAll('members')) ?></p> <p class="text-title">Members</p>
                        </div>
                        <div class="py-4 px-3">
                            <i class="fa-solid fa-people-roof c-carnation"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light d-flex justify-content-between">
                        <div class="py-2 px-3">
                            <p class="numbers c-orange"><?php echo count(selectAll('sermons')) ?></p> <p class="text-title">Sermons</p>
                        </div>
                        <div class="py-4 px-3">
                            <i class="fa-solid fa-book-bible c-carnation"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light d-flex justify-content-between">
                        <div class="py-2 px-3">
                            <p class="numbers c-orange">46</p> <p class="text-title">Blogs</p>
                        </div>
                        <div class="py-4 px-3">
                            <i class="fa-solid fa-book-open c-carnation"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-greenish d-flex justify-content-between">
                        <div class="py-2 px-3">
                            <p class="numbers text-white">$<?php echo $total ?>K</p> <p class="text-white">Finances</p>
                        </div>
                        <div class="py-4 px-3">
                            <i class="fa-solid fa-money-bill-1-wave text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row font-poppins py-5">
                <div class="col-md-3">
                    <div class="bg-light d-flex justify-content-between">
                        <div class="py-2 px-3">
                            <p class="numbers c-orange">7</p> <p class="text-title">Events</p>
                        </div>
                        <div class="py-4 px-3">
                            <i class="fa-solid fa-clipboard-list c-carnation"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light d-flex justify-content-between">
                        <div class="py-2 px-3">
                            <p class="numbers c-orange">10</p> <p class="text-title">Appointments</p>
                        </div>
                        <div class="py-4 px-3">
                            <i class="fa-solid fa-calendar-check c-carnation"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light d-flex justify-content-between">
                        <div class="py-2 px-3">
                            <p class="numbers c-orange">12</p> <p class="text-title">Guidance & Counselling</p>
                        </div>
                        <div class="py-4 px-3">
                            <i class="fa-solid fa-person-chalkboard c-carnation"></i>
                        </div>
                    </div>
                </div>
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