<?php 
    include("../path.php");
    include(ROOT_PATH . "/app/controllers/counselling.php");

    $counsel = selectOne('counselling', ['user_id' => $_SESSION['id']]);
    //show($counsel);
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



    <!-- ===================== START OF COUNSELING ======================== -->
    <section class="sermons">
        <!-- ===================== START OF COUNSELING LANDING ========================== -->
        <div class="pages-landing " style="background-image: url(../assets/images/banner.jpg); background-position: center; background-size: cover; height: 40vh;">
            <div class="pages-text font-roboto">Guidance & Counselling Programmes</div>
        </div>
        <!-- ===================== END OF COUNSELING LANDING ========================== -->

        <!-- ===================== START OF COUNSELING CONTENT ========================= -->
        <div class="container">
            <div class="counseling py-4">
                <div class="row">
                    <div class="col-sm-4 font-roboto">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum inventore esse quae alias! Ipsum laborum amet aliquid itaque suscipit possimus aut ratione ab, aspernatur molestiae in dignissimos fugiat id, temporibus consectetur? Numquam, dolore ut doloribus iusto non deleniti voluptatem nobis delectus esse praesentium, veritatis, quod officia voluptas voluptates quasi? Quam!
                        <br>
                        <img src="../assets/images/lake.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h4 class="font-roboto text-center">Private, Affordable Guidance & Counseling Therapy</h4>
                        <hr>
                        <div class="py-3">
                            <?php if(isset($_SESSION['message'])): ?>
                                <?php
                                    include(ROOT_PATH . '/app/helpers/successMessages.php');
                                ?>
                            <?php else: ?>
                                <?php if(isset($counsel['meeting_time']) && isset($counsel['meeting_date'])): ?>
                                    <div class="alert alert-info" role="alert">
                                        Your Guidance & Counselling date has been set on <?php echo $counsel['meeting_date'] ?> At  <?php echo $counsel['meeting_time'] ?>. We will call you before to notify you.
                                    </div>
                                <?php else: ?>
                                    <div class="alert alert-danger" role="alert">
                                        You have not made any requests yet. Always feel free to make anytime!!
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <form action="counseling.php" method="post" class="py-3 fornt oswald">
                            <!-- error messages -->
                            <?php include(ROOT_PATH . "/app/helpers/errorMessages.php") ?>
                            <!-- error messages -->
                            <input type="text" name="your_name" value="<?php echo $your_name ?>" id="your-name" placeholder="Please enter your full name" class="form-control"><br>
                            <input type="number" name="phone_number" value="<?php echo $phone_number ?>" id="phone-number" placeholder="Please enter your modile number : +254 700 000 000" class="form-control"><br>
                            <input type="text" name="country" value="<?php echo $country ?>" id="country" placeholder="Entry the name of your county" class="form-control"><br>
                            <label for="option" class="form-group">Religion</label>
                            <select class="form-select" name="religion">
                                <option selected></option>
                                <option value="Christian">Christian</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddhist">Buddhist</option>
                                <option value="Other">Other</option>
                            </select><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Male" id="gender">
                                <label class="form-check-label" for="gender2">
                                  Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Female" id="gender">
                                <label class="form-check-label" for="gender2">
                                  Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Other" id="gender">
                                <label class="form-check-label" for="gender2">
                                  Other
                                </label>
                            </div><br>
                            <label for="option" class="form-group">Enter your request</label>
                            <select class="form-select" name="request">
                                <option selected></option>
                                <option value="Anger">Anger</option>
                                <option value="Depresion">Depresion</option>
                                <option value="Anxiety">Anxiety</option>
                                <option value="Self-esteem">Self-esteem</option>
                                <option value="Relationship issue">Relationship issues</option>
                                <option value="Mental Health">Mental Health</option>
                                <option value="Stress">Stress</option>
                                <option value="Any other">Any other...</option>
                            </select><br>
                            <button type="submit" name="btnCounselling" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== END OF COUNSELING CONTENT =========================== -->
    </section>
    <!-- ===================== END OF COUNSELING US ========================= -->

    
    
    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php")
    ?>
    <!-- ====================================== FOOTER ================================== -->