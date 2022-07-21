<?php 
    include("../path.php");
    include(ROOT_PATH . "/app/controllers/blogs.php");

    if (isset($_GET['id'])) {
        $blog = selectOne('blogs', ['id' => $_GET['id']]);
    }

    //show($blog);

    $publishedBlogs = selectAll('blogs', ['publish' => 1]);

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



    <!-- ===================== START OF BLOG ======================== -->
    <section class="blogs" style="margin-top: 66px;">
        <!-- ===================== START OF BLOG CONTENT ========================= -->
        <div class="container">
            <div class="row font-poppins py-5">
                <div class="col-sm-8">
                    <h1 class="py-4 m-0"><?php echo $blog['blogTitle'] ?></h1>
                    <div class="blog-view">
                        <?php echo html_entity_decode($blog['blogBody']) ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="blog-links bg-light px-2 py-4">
                        <h3 class="py-3 text-center">Popular</h3>

                        <?php foreach($publishedBlogs as $pBlog): ?>
                            <div class="d-flex justify-content-between">
                                <img src="<?php echo BASE_URL . '/assets/images/' . $pBlog['image'] ?>" alt="img" class="img-fluid" style="width: 150px; height: 100px;">
                                <a href="#" class="mt-2 font-18" style="color: black; text-decoration: none;"><?php echo $pBlog['blogTitle'] ?></a>
                            </div>
                            <hr>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== END OF BLOG CONTENT =========================== -->
    </section>
    <!-- ===================== END OF BLOG US ========================= -->

    
    
    <!-- ====================================== FOOTER ================================== -->
    <?php
        include(ROOT_PATH . "/app/includes/footer.php")
    ?>
    <!-- ====================================== FOOTER ================================== -->