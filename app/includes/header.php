    <!-- ====================== START OF HEADER SECTION ================= -->
    <section id="header-section">
        <nav class="navbar navbar-expand-lg navbar-light bg-purple fixed-top py-4">
            <div class="container">
                <div class="navbar-brand font-roboto font-30">
                    <a href="<?php echo BASE_URL . "/index.php" ?>"><span class="c-sky">Awe</span><span class="c-orange">some</span><span class="c-sky">Church</span></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#church-nav" aria-controls="church-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="church-nav">
                    <ol class="navbar-nav ms-auto">
                        <li class="item active">
                            <a href="<?php echo BASE_URL . "/index.php" ?>" class="font-poppins font-20 c-orange px-2">Home</a>
                        </li>
                        <li class="item active">
                            <a href="<?php echo BASE_URL . "/templates/aboutUs.php" ?>" class="font-poppins font-20 c-orange px-2">About</a>
                        </li>
                        <li class="item active">
                            <a href="<?php echo BASE_URL . "/templates/sermons.php" ?>" class="font-poppins font-20 c-orange px-2">Sermons</a>
                        </li>
                        <li class="item active">
                            <a href="<?php echo BASE_URL . "/templates/ministries.php" ?>" class="font-poppins font-20 c-orange px-2">Ministries</a>
                        </li>
                        <li class="item active">
                            <a href="<?php echo BASE_URL . "/templates/blogs.php" ?>" class="font-poppins font-20 c-orange px-2">Blogs</a>
                        </li>
                        <li class="item active">
                            <a href="<?php echo BASE_URL . "/templates/events.php" ?>" class="font-poppins font-20 c-orange px-2">Events</a>
                        </li>
                        <li class="item active">
                            <a href="<?php echo BASE_URL . "/templates/contacts.php" ?>" class="font-poppins font-20 c-orange px-2">Contacts</a>
                        </li>
                        <?php if(isset($_SESSION['id'])): ?>
                            <li class="item active">
                                <a href="#" class="font-poppins font-20 c-orange px-2">
                                    <i class="fa-solid fa-user text-white"></i>
                                    <?php echo $_SESSION['username']; ?>
                                </a>
                            </li>
                            <?php if($_SESSION['admin']): ?>
                            <li class="item active">
                                <a href="<?php echo BASE_URL . "/admin/dashboard.php" ?>" class="font-poppins font-20 c-orange px-2">Admin</a>
                            </li>
                            <?php endif; ?>
                            <li class="item active">
                                <a href="<?php echo BASE_URL . '/logout.php' ?>" class="font-poppins font-20 c-orange px-2">
                                    Logout
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="item active">
                                <a href="<?php echo BASE_URL . "/login.php" ?>" class="font-poppins font-20 c-orange px-2">Login/Signin</a>
                            </li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </nav>
    </section>
    <!-- ====================== END OF HEADER SECTION =================== -->