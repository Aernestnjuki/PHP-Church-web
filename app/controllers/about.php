<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/allValidations.php");

    $table = 'about';
    $about_data = selectAll($table);
    $errors = array();
    $id = '';
    $rev_image = '';
    $about_rev = '';
    $church_image = '';
    $about_church = '';
    $publish = '';



    if (isset($_POST['btnUploadAbout'])) {
        $errors = validateAbout($_POST);

        if (!empty($_FILES['rev_image']['name'])) {
            $rev_image = time() . '_' . $_FILES['rev_image']['name'];
            $destination = ROOT_PATH . '/assets/images/' . $rev_image;

            $move = move_uploaded_file($_FILES['rev_image']['tmp_name'], $destination);
            if ($move) {
                $_POST['rev_image'] = $rev_image;
            }else {
                array_push($errors, "Failed to upload reverend image");
            }
        }else{
            array_push($errors, "Reverend image is required");
        }


        if (!empty($_FILES['church_image']['name'])) {
            $church_image = time() . '_' . $_FILES['church_image']['name'];
            $destination = ROOT_PATH . '/assets/images/' . $rev_image;

            $move_img = move_uploaded_file($_FILES['church_image']['tmp_name'], $destination);
            if ($move_img) {
                $_POST['church_image'] = $rev_image;
            }else {
                array_push($errors, "Failed to upload church image");
            }
        }else{
            array_push($errors, "Church image is required");
        }

        if (count($errors) === 0) {
            unset($_POST['btnUploadAbout']);
            $_POST['admin_id'] = $_SESSION['id'];
            $_POST['publish'] = isset($_POST['publish'])? 1 : 0;

            $about_id = create($table, $_POST);
            $_SESSION['message'] = "About of the church hass been uploaded";
            header('location:' . BASE_URL . '/admin/about/index.php');
            exit();
        }else {
            $about_rev = $_POST['about_rev'];
            $about_church = $_POST['about_church'];
            $publish = isset($_POST['publish'])? 1 : 0;
        }
    }

    if (isset($_GET['id'])) {
        $about = selectOne($table, ['id' => $_GET['id']]);
        $id = $about['id'];
        $about_rev = $about['about_rev'];
        $about_church = $about['about_church'];
        $publish = $about['publish'];
    }

    if (isset($_POST['btnEditAbout'])) {
        $errors = validateAbout($_POST);

        if (!empty($_FILES['rev_image']['name'])) {
            $rev_image = time() . '_' . $_FILES['rev_image']['name'];
            $destination = ROOT_PATH . '/assets/images/' . $rev_image;

            $move = move_uploaded_file($_FILES['rev_image']['tmp_name'], $destination);
            if ($move) {
                $_POST['rev_image'] = $rev_image;
            }else {
                array_push($errors, "Failed to upload reverend image");
            }
        }else{
            array_push($errors, "Reverend image is required");
        }


        if (!empty($_FILES['church_image']['name'])) {
            $church_image = time() . '_' . $_FILES['church_image']['name'];
            $destination = ROOT_PATH . '/assets/images/' . $rev_image;

            $move_img = move_uploaded_file($_FILES['church_image']['tmp_name'], $destination);
            if ($move_img) {
                $_POST['church_image'] = $rev_image;
            }else {
                array_push($errors, "Failed to upload church image");
            }
        }else{
            array_push($errors, "Church image is required");
        }

        if (count($errors) == 0) {
            $id = $_POST['id'];
            unset($_POST['btnEditAbout'], $_POST['id']);
            $_POST['admin_id'] = $_SESSION['id'];
            $_POST['publish'] = isset($_POST['publish'])? 1 : 0;

            $about_id = update($table, $id, $_POST);
            $_SESSION['message'] = "About of the church hass been edited";
            header('location:' . BASE_URL . '/admin/about/index.php');
            exit();
            //show($_POST);
        }else {
            $about_rev = $_POST['about_rev'];
            $about_church = $_POST['about_church'];
            $publish = isset($_POST['publish'])? 1 : 0;
        }
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];

        $about_id = delete($table, $id);
        $_SESSION['message'] = "About of the church has been deleted";
        header('location:' . BASE_URL . '/admin/about/index.php');
        exit();
    }

    if (isset($_GET['publish']) && isset($_GET['p_id'])) {
        $publish = $_GET['publish'];
        $p_id = $_GET['p_id'];

        $about_id = update($table, $p_id, ['publish' => $publish]);
        $_SESSION['message'] = "Status of About the church has been updated";
        header('location:' . BASE_URL . '/admin/about/index.php');
        exit();
    }