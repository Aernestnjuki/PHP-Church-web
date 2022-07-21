<?php 
    include("../path.php");
    include(ROOT_PATH . "/app/controllers/about.php");

    $aboutUs = selectOne('about', ['id' => 1]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Management System</title>
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
    <section class="about">
        <!-- ===================== START OF ABOUT LANDING ========================== -->
        <div class="pages-landing " style="background-image: url(../assets/images/banner.jpg); background-position: center; background-size: cover; height: 40vh;">
            <div class="pages-text font-roboto">About Us</div>
        </div>
        <!-- ===================== START OF ABOUT LANDING ========================== -->
        
        <!-- ===================== START OF ABOUT CONTENT ========================== -->
        <div class="about-content py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-12">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $aboutUs['rev_image'] ?>" alt="pastor" class="img-fluid pastor">
                    </div>
                    <div class="col-sm-8 col-12">
                        <h4 class="font-poppins pb-4">About the Reverend</h4>
                        <div class="font-ostward">
                            <?php echo $aboutUs['about_rev'] ?>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-sm-8 col-12">
                        <h4 class="font-poppins pb-4">About AwesomeChurch</h4>
                        <div class="fontroboto">
                            <?php echo $aboutUs['about_church'] ?>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $aboutUs['church_image'] ?>" alt="pastor" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== START OF ABOUT CONTENT ========================== -->
    </section>
    <!-- ===================== END OF ABOUT US ========================= -->

    
    
    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php")
    ?>
    <!-- ====================================== FOOTER ================================== -->