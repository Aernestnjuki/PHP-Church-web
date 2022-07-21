<?php 
    include("../path.php");
    include(ROOT_PATH . "/app/controllers/appointments.php");

    $schedule = selectOne('appointments', ['user_id' => $_SESSION['id']]);
    //show($schedule);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sermons in AwesomeChurch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/css/index.css" ?>">
</head>
<body>
    <!-- =========================== HEADER ========================= -->
    <?php
        include(ROOT_PATH . '/app/includes/header.php');
    ?>
    <!-- =========================== HEADER ========================= -->



    <!-- ===================== START OF APPOINTMENTS ======================== -->
    <section class="appointments">
        <!-- ===================== START OF APPOINTMENTS LANDING ========================== -->
        <div class="pages-landing " style="background-image: url(../assets/images/banner.jpg); background-position: center; background-size: cover; height: 40vh;">
            <div class="pages-text font-roboto">Book for an Appointment</div>
        </div>
        <!-- ===================== END OF APPOINTMENTS LANDING ========================== -->

        <!-- ===================== START OF APPOINTMENTS CONTENT ========================= -->
        <div class="container">
            <div class="appointments-content py-5">
                <div class="row">
                    <?php if(isset($_SESSION['message'])): ?>
                        <?php
                            include(ROOT_PATH . '/app/helpers/successMessages.php');
                        ?>
                    <?php else: ?>
                        <?php if(isset($schedule['meeting_time']) && isset($schedule['meeting_date'])): ?>
                            <div class="alert alert-info" role="alert">
                                Your Appointment date has been set on <?php echo $schedule['meeting_date'] ?> At  <?php echo $schedule['meeting_time'] ?>. See you then.
                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger" role="alert">
                                You have not made any appointment requests!!!
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <div class="col-sm-6">
                        <form action="appointments.php" method="post" class="font-roboto">
                            <h5 class="text-center text-warning">Schedule some Time</h5>
                            <!-- error messages -->
                            <?php include(ROOT_PATH . "/app/helpers/errorMessages.php") ?>
                            <!-- error messages -->
                            <div class="mb-3">
                                <label for="appointment-email" class="form-label">Email</label>
                                <input type="email" name="appoint_email" value="<?php echo $appoint_email ?>" id="appoint-email" class="form-control" placeholder="Enter Email Address">
                            </div>
                            <div class="mb-3">
                                <label for="appointment-username" class="form-label">Name</label>
                                <input type="text" name="appoint_name" value="<?php echo $appoint_name ?>" id="appoint-name" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="appointment-county" class="form-label">County</label>
                                <input type="text" name="appoint_county" value="<?php echo $appoint_county ?>" id="appoint-county" class="form-control" placeholder="Enter Your County">
                            </div>
                            <div class="mb-3">
                                <label for="appointment-mobile" class="form-label">Phone</label>
                                <input type="number" name="appoint_mobile" value="<?php echo $appoint_mobile ?>" id="appoint-mobile" class="form-control" placeholder="Enter Your Mobile Number">
                            </div>
                            <div class="mb-3">
                                <label for="appointment-date" class="form-label">Set a Date</label>
                                <input type="date" name="appoint_date" value="<?php echo $appoint_date ?>" id="appoint-date" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" name="meeting_date" id="meeting-date" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" name="meeting_time" id="meeting-time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="btnBook" class="btn btn-lg btn-success">BOOK!</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 bg-light">
                        <img src="../assets/images/calender.png" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== END OF APPOINTMENTS CONTENT =========================== -->
    </section>
    <!-- ===================== END OF APPOINTMENTS US ========================= -->

    
    
    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php");
    ?>
    <!-- ====================================== FOOTER ================================== -->