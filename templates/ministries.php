<?php 
    include("../path.php");
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



    <!-- ===================== START OF MINISTRIES ======================== -->
    <section class="ministries">
        <!-- ===================== START OF MINISTRIES LANDING ========================== -->
        <div class="pages-landing " style="background-image: url(../assets/images/banner.jpg); background-position: center; background-size: cover; height: 40vh;">
            <div class="pages-text font-roboto">Join our Ministries</div>
        </div>
        <!-- ===================== END OF MINISTRIES LANDING ========================== -->

        <!-- ===================== START OF MINISTRIES CONTENT ========================= -->
        <div class="container">
            <div class="ministries-content py-5">
                <h3 class="font-poppins font-30">Here are some of our ministries</h3>
                <div class="row py-3">
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Dancing Ministry</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Praice & Worship Ministry</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Drammer Ministry</div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Women Ministry</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Youth Ministry</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Men Ministry</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Evergelism Ministry</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Hospitality Ministry</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="overlay">
                                    <img src="../assets/images/church img.jpg" alt="pastor" class="img-fluid">
                                    <div class="ministry-overlay">Band Ministry</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 font-ostward">
                        <div>
                            <h5>Blog Topics</h5>
                            <li>Love & Dating</li>
                            <li>Business & Entreprenuership</li>
                            <li>Marriage</li>
                            <li>Christian living</li>
                            <li>Bible study</li>
                        </div>

                        <div class="py-3">
                            <h5>Our upcoming Events</h5>
                            <li>Love & Dating</li>
                            <li>Business & Entreprenuership</li>
                            <li>Marriage</li>
                            <li>Christian living</li>
                            <li>Bible study</li>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== END OF MINISTRIES CONTENT =========================== -->
    </section>
    <!-- ===================== END OF MINISTRIES ========================= -->

    
    
    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php")
    ?>
    <!-- ====================================== FOOTER ================================== -->