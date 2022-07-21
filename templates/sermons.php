<?php 
    include("../path.php");
    include(ROOT_PATH . "/app/controllers/sermons.php")
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


    <!-- ===================== START OF ABOUT US ======================== -->
    <section class="sermons">
        <!-- ===================== START OF ABOUT LANDING ========================== -->
        <div class="pages-landing " style="background-image: url(../assets/images/banner.jpg); background-position: center; background-size: cover; height: 40vh;">
            <div class="pages-text font-roboto">Our Sermons</div>
        </div>
        <!-- ===================== START OF ABOUT LANDING ========================== -->

        <!-- ===================== START OF SERMON CONTENT ========================= -->
        <div class="container">
            <div class="row py-5">
                <?php foreach($sermon_data as $key => $sermon): ?>
                    <?php if($sermon['publish'] == 1): ?>
                        <div class="col-sm-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?php echo $sermon['youtube_link'] ?>"></iframe>
                            </div>
                            <div class="sermon-title">
                                <a href="#"><?php echo $sermon['sermon_name'] ?></a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- ===================== END OF SERMON CONTENT =========================== -->
    </section>
    <!-- ===================== END OF ABOUT US ========================= -->

    
    
    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php")
    ?>
    <!-- ====================================== FOOTER ================================== -->