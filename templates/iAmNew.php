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



    <!-- ===================== START OF NEW FRIEND US ======================== -->
    <section class="sermons">
        <!-- ===================== START OF NEW FRIEND LANDING ========================== -->
        <div class="pages-landing " style="background-image: url(../assets/images/banner.jpg); background-position: center; background-size: cover; height: 40vh;">
            <div class="pages-text font-roboto">I'm New Here</div>
        </div>
        <!-- ===================== END OF NEW FRIEND LANDING ========================== -->

        <!-- ===================== START OF NEW FRIEND CONTENT ========================= -->
        <div class="new-here-content py-5">
            <div class="container">
                <h2 class="font-oswald">Hey Friend welcom to AwesomeChurch!</h2>
                <hr>
                <div class="row">
                    <div class="col-12">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid laborum cum nemo, maxime atque nam deserunt at maiores earum, expedita ex ipsam nesciunt 
                        consectetur! Quae quos deleniti repellat aspernatur exercitationem corrupti facere earum. Suscipit obcaecati minima sed beatae, accusantium sit fugiat est 
                        quas accusamus voluptas, qui, sunt earum ipsam commodi aspernatur illo veniam optio. Explicabo atque iure rerum commodi nobis expedita aspernatur doloribus 
                        tempore ex, ad eveniet itaque voluptatum, qui corrupti. Repellendus rem cum, excepturi voluptate alias ipsa sequi nemo quos, ducimus in dolores aspernatur. 
                        Eaque quaerat reprehenderit consectetur assumenda, nostrum eligendi, tempora, illum impedit quibusdam beatae soluta iste! Amet.
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== END OF NEW FRIEND CONTENT =========================== -->
    </section>
    <!-- ===================== END OF NEW FRIEND US ========================= -->

    
    
    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php")
    ?>
    <!-- ====================================== FOOTER ================================== -->