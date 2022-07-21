<?php 
    include("../../path.php");
    include(ROOT_PATH . "/app/controllers/events.php");
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
            <span><a href="<?php echo BASE_URL . "/admin/events/addEvents.php" ?>" class="btn btn-primary">Add Events</a></span> &nbsp;&nbsp;
            <span><a href="<?php echo BASE_URL . "/admin/events/index.php" ?>" class="btn btn-primary">Manage Events</a></span> 
            <div class="py-5">
                <h4 class="font-oswald text-center">Add Events</h4>
                <form action="addEvents.php" method="post" enctype="multipart/form-data" class="font-poppins">
                    <!-- error messages -->
                    <?php include(ROOT_PATH . "/app/helpers/errorMessages.php") ?>
                    <!-- error messages -->
                    <div class="form-group mb-3">
                        <label for="user">Image</label>
                        <input type="file" name="image" id="image" placeholder="Choose am image for the Event" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="title">Event Title</label>
                        <input type="text" name="event_title" value="<?php echo $event_title ?>" id="event-title" placeholder="Enter Event Title" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Date">Date</label>
                        <input type="date" name="event_date" value="<?php echo $event_date ?>" id="event-date" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="time">Time</label>
                        <input type="time" name="time" value="<?php echo $time ?>" id="time" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="title">Venue</label>
                        <input type="text" name="event_venue" value="<?php echo $event_venue ?>" id="event-venue" placeholder="Enter Event Venue" class="form-control">
                    </div>
                    <button type="submit" name="btnAddEvent" class="btn btn-info">Add Event</button>
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