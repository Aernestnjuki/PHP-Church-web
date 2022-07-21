<?php 
    include("../path.php");
    include(ROOT_PATH . "/app/controllers/events.php")
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



    <!-- ===================== START OF EVENTS US ======================== -->
    <section class="sermons">
        <!-- ===================== START OF EVENTS LANDING ========================== -->
        <div class="pages-landing " style="background-image: url(../assets/images/banner.jpg); background-position: center; background-size: cover; height: 40vh;">
            <div class="pages-text font-roboto">Our Events</div>
        </div>
        <!-- ===================== END OF EVENTS LANDING ========================== -->

        <!-- ===================== START OF EVENTS CONTENT ========================= -->
        <div class="events-content py-5">
            <div class="container">
                <h4 class="font-roboto pb-3 text-center">Get updated with our up coming events</h4>
                <div class="row">
                    <?php foreach($events_data as $event): ?>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="<?php echo BASE_URL . '/assets/images/' . $event['image'] ?>" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-8 font-poppins">
                                    <h5 class="text-primary"><?php echo $event['event_title'] ?></h5>
                                    <div class="text-danger py-3"><?php echo $event['event_date'] . ', ' . $event['time']. 'PM' ?></div>
                                    <div class="text-info"><?php echo $event['event_venue'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- ===================== END OF EVENTS CONTENT =========================== -->
    </section>
    <!-- ===================== END OF EVENTS US ========================= -->

    
    
    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php")
    ?>
    <!-- ====================================== FOOTER ================================== -->