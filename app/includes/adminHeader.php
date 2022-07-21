<!--====================== start of admin header ========================== -->
<section id="admin-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-purple py-4">
            <div class="container">
                <div class="navbar-brand font-roboto font-30">
                    <a href="<?php echo BASE_URL . "/admin/dashboard.php" ?>"><span class="c-sky">Awe</span><span class="c-orange">some</span><span class="c-sky">Church</span></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#church-nav" aria-controls="church-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="church-nav">
                    <ol class="navbar-nav ms-auto">
                        
                        <li class="item active">
                            <a href="<?php echo BASE_URL . "/index.php" ?>" class="font-poppins font-20 c-orange px-3">Front Page</a>
                        </li>
                        <li class="item active">
                            <a href="#" class="font-poppins font-20 c-orange px-3"><i class="fa-solid fa-user text-white"></i><?php echo $_SESSION['username'] ?></a>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>
    </section>
    <!--====================== end of admin header ============================ -->