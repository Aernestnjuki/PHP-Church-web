<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/allValidations.php");

    $table = 'counselling';
    $consel_data = selectAll($table);
    $errors = array();
    $your_name = '';
    $phone_number = '';
    $country = '';
    $religion = '';
    $gender = '';
    $request = '';
    $id = '';
    $meeting_date = '';
    $meeting_time = '';
    $user_id = '';

    if (isset($_POST['btnCounselling'])) {
        $errors = validateCounselling($_POST);
        //show($errors);
        if (count($errors) === 0) {
            unset($_POST['btnCounselling']);
            $_POST['user_id'] = $_SESSION['id'];
            $_POST['admin_id'] = 1;
            $_POST['meeting_date'] = 0;
            $_POST['meeting_time'] = 0;

            $couselling_id = create($table, $_POST);
            $_SESSION['message'] = 'You have successfully added a counselling schedule';
            header('location:' . BASE_URL . '/templates/counseling.php');
            exit();
            //show($_POST);
        }else {
            $your_name = $_POST['your_name'];
            $phone_number = $_POST['phone_number'];
            $country = $_POST['country'];
        }
    }

    if (isset($_GET['id'])) {
        $user = selectOne($table, ['id' => $_GET['id']]);
        $id = $user['id'];
        $user_id = $user['user_id'];
        $your_name = $user['your_name'];
        $phone_number = $user['Phone_number'];
        $country = $user['country'];
        $religion = $user['religion'];
        $gender = $user['gender'];
        $request = $user['request'];
        $meeting_date = $user['meeting_date'];
        $meeting_time = $user['meeting_time'];
    }

    if (isset($_POST['btnUpdate'])) {
        $errors = adminCounsel($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['btnUpdate'], $_POST['id']);
            $_POST['admin_id'] = $_SESSION['id'];

            $couselling_id = update($table, $id, $_POST);
            $_SESSION['message'] = 'You have successfully scheduled the counselling time and date';
            header('location:' . BASE_URL . '/admin/counselling/index.php');
            exit();
            //show($_POST);
        }else {
            $meeting_date = $_POST['meeting_date'];
            $meeting_time = $_POST['meeting_time'];
        }
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        $user = delete($table, $id);
        $_SESSION['message'] = 'You have successfully deleted counselling meeting';
        header('location:' . BASE_URL . '/admin/counselling/index.php');
        exit();
    }