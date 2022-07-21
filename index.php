<?php 
    include("path.php");
    include(ROOT_PATH . "/app/controllers/members.php");

    $verse = selectAll('verse');
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
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>

<!-- =========================== HEADER ========================= -->
<?php
    include(ROOT_PATH . '/app/includes/header.php');
?>
<!-- =========================== HEADER ========================= -->

    <!-- ====================== START OF MAIN SECTION ================= -->
    <section id="main-section">
        <!-- +++++++++++++ START OF BANNER SECTION ++++++++++++++++ -->
        <div class="banner-section" style="background-image: linear-gradient(rgba(247, 193, 252, 0.3), rgba(163, 100, 160, 0.3)), url('assets/images/banner.jpg');">
            <div class="container">
                <div class="banner-wrapper">
                    <div class="banner-text font-oswald text-white pb-2">
                        <?php
                            include(ROOT_PATH . '/app/helpers/successMessages.php');
                        ?>
                        Building people through a loving, caring fellowship: <br>
                        Building a church through loving, caring people.
                    </div>
                    <div class="banner-short font-roboto c-grape mb-5">
                        “Anyone who is to find Jesus must first find the church. <br>
                        How could anyone know where Christ is and what faith is in him <br>
                        unless he knew where his believers are?”
                    </div>
                    <a href="#" class="font-poppins bg-sky c-grape font-18 btn1">Get Connected</a>
                    &nbsp;
                    <span><a href="#" class="font-poppins bg-orange c-grape font-18 btn2">Sermons</a></span>

                    <div class="social-media">
                        <div class="d-flex">
                            <a href="#" class="link"><i class="fa-brands fa-facebook"></i></a> &nbsp;
                            <a href="#" class="link"><i class="fa-brands fa-youtube"></i></a> &nbsp;
                            <a href="#" class="link"><i class="fa-brands fa-instagram"></i></a> &nbsp;
                            <a href="#" class="link"><i class="fa-brands fa-whatsapp"></i></a> &nbsp;
                            <a href="#" class="link"><i class="fa-solid fa-envelope-circle-check"></i></a> &nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- +++++++++++++ END OF BANNER SECTION ++++++++++++++++++ -->

        <!-- +++++++++++++ START OF word SECTION +++++++++++++++++ -->
        <div class="verse-section font-roboto">
            <div class="word-sider text-center text-white">
                <h2 class="m-0">Verse of the Day</h2>
                <h5>Friday, March 25, 2022</h5>
            </div>
            <div class="word-main text-center">
                <?php foreach($verse as $ver): ?>
                    "<?php echo $ver['verse_content'] ?>"
                    <div class="reading text-danger"><?php echo $ver['bible_verse'] ?></div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- +++++++++++++ END OF word SECTION +++++++++++++++++ -->

        <!-- +++++++++++++ START OF WELCOME SECTION ++++++++++++ -->
        <section class="welcome-section">
            <div class="container">
                <div class="come-all font-poppins">
                    <h3 class="text-center c-carnation">Welcome to AwesomeChurch</h3>
                    <div class="owl-carousel owl-theme">
                        <div class="item px-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="null" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <a href="<?php echo BASE_URL . "/templates/iAmNew.php" ?>">I'M New Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item px-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="null" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <a href="<?php echo BASE_URL . "/templates/counseling.php" ?>">Guidance & Counselling</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item px-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="null" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <a href="<?php echo BASE_URL . "/templates/appointments.php" ?>">Appointment Booking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item px-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="null" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <a href="<?php echo BASE_URL . "/templates/finances.php" ?>">Finances</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- +++++++++++++ END OF WELCOME SECTION ++++++++++++++ -->

        <!-- +++++++++++++ START Of ABOUT SECTION +++++++++++++++ -->
        <section class="about-church">
            <div class="container">
                <h3 class="py-4 text-center c-sky font-30 font-oswald">More about Awesome Church</h3>
                <div class="about-info font-poppins text-center">
                    AwesomeChurch is a church family who look to Be Love, as we are loved. Together as we take up the call of Jesus to; Abide in His love, Be Transformed by the Holy Spirit, Go with the Good News of the Kingdom of God. We will be able to Be Love, as we are loved.
                </div>
                <div class="church-programs">
                    <h4 class="text-center py-2 font-20 font-oswald c-carnation">AwesomeChurch programs and services</h4>
                    <div class="row font-roboto">
                        <div class="col-sm-6 col-12">
                            <h5 class="bg-grape py-3 text-center text-white">Sunday service from 7AM - 10AM</h5>
                            <ul>
                                <li>English service</li>
                                <li>Morning devotion</li>
                                <li>Praise and worship</li>
                                <li>Ministries presentations</li>
                                <li>Announcements</li>
                                <li>sermon</li>
                                <li>Offerings and tithe</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-12">
                            <h5 class="bg-grape py-3 text-center text-white">Sunday service from 10:20AM - 1PM</h5>
                            <ul>
                                <li>Kiswahili service</li>
                                <li>Morning devotion</li>
                                <li>Praise and worship</li>
                                <li>Ministries presentations</li>
                                <li>Announcements</li>
                                <li>sermon</li>
                                <li>Offerings and tithe</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-12">
                            <h5 class="bg-grape py-3 text-center text-white">Weekly services for members</h5>
                            <ul>
                                <li>Monday - Prayer and Fasting</li>
                                <li>Tuesday - Bible study</li>
                                <li>Wednesday - Evangelisim</li>
                                <li>Thursday - Ministerial Meetings</li>
                                <li>Friday - Open air Praise and worship</li>
                                <li>Saturday - Mentaship forams</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- +++++++++++++ END Of ABOUT SECTION +++++++++++++++ -->

        <!-- +++++++++++++ START Of CATCH UP ON OUR CONTENT +++++++++++++++ -->
        <section class="our-content">
            <div class="container">
                <h3 class="py-4 text-center font-30 font-poppins c-sky">Catch up on our latest content</h3>
                <div>
                    <h5>Latest sermons</h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title fw-bold">
                                        Sunday 3 April 2022
                                    </div>
                                    <div class="card-text">
                                        Politices and Christianity
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title fw-bold">
                                        Sunday 3 April 2022
                                    </div>
                                    <div class="card-text">
                                        Sexual Purity
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title fw-bold">
                                        Sunday 3 April 2022
                                    </div>
                                    <div class="card-text">
                                        Persuing Rightousness
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-success">View More</a>
                </div>
                <!-- end of sermons -->
                <div class="pt-5">
                    <h5>Latest Blogs/News</h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title fw-bold">
                                        Keeping a faithfull marriage even as christians
                                    </div>
                                    <div class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est non consequatur inventore sunt accusantium eligendi quasi hic aut laborum labore.
                                    </div>
                                    <a class="btn btn-success">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title fw-bold">
                                        Keeping a faithfull marriage even as christians
                                    </div>
                                    <div class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est non consequatur inventore sunt accusantium eligendi quasi hic aut laborum labore.
                                    </div>
                                    <a class="btn btn-success">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="assets/images/banner.jpg" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-title fw-bold">
                                        Keeping a faithfull marriage even as christians
                                    </div>
                                    <div class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est non consequatur inventore sunt accusantium eligendi quasi hic aut laborum labore.
                                    </div>
                                    <a class="btn btn-success">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- +++++++++++++ END OF CATCH UP ON OUR CONTENT +++++++++++++++++ -->

        <!-- +++++++++++++ START OF JOIN ANY MINISTRY +++++++++++++++++ -->
        <section class="join-ministry mt-5" style="background-image: url(assets/images/lake.jpg); height: 60vh; background-position: center; background-attachment: fixed;">
            <div class="container">
                <div class="join-us py-5 font font-roboto text-center">
                    <h4 class="text-primary">Join us in the spreading the gospel of the lord Jesus Christ</h4>
                    <!-- <hr> -->

                    <div class="join-content text-white mt-5">
                        <h5>John 18:36 ESV</h5>
                        <p>Jesus answered, “My kingdom is not of this world. If my kingdom were of this world, my servants would have been fighting, that I might not be delivered over to the Jews. But my kingdom is not from the world.”</p>
                        <p>I that case you are all welcome to join hand with us as we spread this great word of Jesus Christ as 
                            he commanded us to walk from door to door hearing, casting out demon, feeding the hungry and praying for 
                            the sick. 
                        </p>
                        <a href="sign-up.html" class="btn btn-warning">Join us in ministry</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- +++++++++++++ END OF JOIN ANY MINISTRY +++++++++++++++++++ -->

    </section>
    <!-- ====================== END OF MAIN SECTION =================== -->

    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php")
    ?>
    <!-- ====================================== FOOTER ================================== -->