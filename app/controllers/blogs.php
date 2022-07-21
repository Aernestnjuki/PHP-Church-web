<?php
    
    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/helpers/allValidations.php');

    $table = 'blogs';
    $blog_data = selectAll($table);
    $errors = array();
    $id = '';
    $blogTitle = '';
    $admin_id = '';
    $blogBody = '';
    $blogAuthor = '';
    $blogPublish = '';


    if (isset($_POST['btnAddBlog'])) {
        $errors = validateBlog($_POST);

        if (!empty($_FILES['image']['name'])) {
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = ROOT_PATH . '/assets/images/' . $image_name;
    
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    
            if ($result) {
                $_POST['image'] = $image_name;
            }else{
                array_push($errors, 'Failed to upload image');
            }
        }else{
            array_push($errors, 'Blog image is required');
        }
        
        if (count($errors) === 0) {
            unset($_POST['btnAddBlog']);
            $_POST['admin_id'] = $_SESSION['id'];
            $_POST['publish'] = isset($_POST['publish'])? 1 : 0;

            $_POST['blogBody'] = htmlentities($_POST['blogBody']);
            $blog_id = create($table, $_POST);
            $_SESSION['message'] = 'Blog post added successfully';
            header('location:' . BASE_URL . '/admin/blogs/index.php');
            exit();
            //show($_POST);
        }else{
            $blogTitle = $_POST['blogTitle'];
            $blogBody = $_POST['blogBody'];
            $blogAuthor = $_POST['blogAuthor'];
            $blogPublish = isset($_POST['publish'])? 1 : 0;
        }
    }

    if (isset($_GET['publish']) && $_GET['p_id']) {
        $publish = $_GET['publish'];
        $p_id = $_GET['p_id'];

        $update = update($table, $p_id, ['publish' => $publish]);
        $_SESSION['message'] = 'Blog publish status has been updated';
        header('location:' . BASE_URL . '/admin/blogs/index.php');
        exit();
    }

    if (isset($_GET['id'])) {
        $blog = selectOne($table, ['id' => $_GET['id']]);

        $id = $blog['id'];
        $blogTitle = $blog['blogTitle'];
        $blogBody = $blog['blogBody'];
        $blogAuthor = $blog['blogAuthor'];
        $blogPublish = $blog['publish'];
    }

    if (isset($_POST['btnEditBlog'])) {
        $errors = validateBlog($_POST);

        if (!empty($_FILES['image']['name'])) {
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = ROOT_PATH . '/assets/images/' . $image_name;
    
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    
            if ($result) {
                $_POST['image'] = $image_name;
            }else{
                array_push($errors, 'Failed to upload image');
            }
        }else{
            array_push($errors, 'Blog image is required');
        }

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['btnEditBlog'], $_POST['id']);
            $_POST['admin_id'] = $_SESSION['id'];
            $_POST['publish'] = isset($_POST['publish'])? 1 : 0;

            $_POST['blogBody'] = htmlentities($_POST['blogBody']);

            $blog_id = update($table, $id, $_POST);
            $_SESSION['message'] = "Blog post have been updated";
            header('location:' . BASE_URL . '/admin/blogs/index.php');
            exit();
            //show($_POST);
        }else {
            $blogTitle = $_POST['blogTitle'];
            $blogBody = $_POST['blogBody'];
            $blogAuthor = $_POST['blogAuthor'];
            $blogPublish = isset($_POST['publish'])? 1 : 0;
        }
    }

    if (isset($_GET['delete_id'])) {
        $blog = delete($table, $_GET['delete_id']);
        $_SESSION['message'] = "Blog post have been deleted";
        header('location:' . BASE_URL . '/admin/blogs/index.php');
        exit();
    }