<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/allValidations.php");

    $table = 'appointments';
    $appointment_data = selectAll($table);
    $errors = array();
    $id = '';
    $appoint_email = '';
    $appoint_name = '';
    $appoint_county = '';
    $appoint_mobile = '';
    $appoint_date = '';
    $meeting_date = '';
    $meeting_time = '';
    $user_id = '';

    if (isset($_POST['btnBook'])) {
        $errors = validateAppointment($_POST);
        //show($errors);

        if (count($errors) === 0) {
            unset($_POST['btnBook']);
            $_POST['user_id'] = $_SESSION['id'];
            $_POST['admin_id'] = 1;
            //show($_POST);

            $appoint_id = create($table, $_POST);
            //show($appoint_id);
            $_SESSION['message'] = "Appointment request have been set";
            header('location:' . BASE_URL . '/templates/appointments.php');
            exit();
        }else {
            $appoint_email = $_POST['appoint_email'];
            $appoint_name = $_POST['appoint_name'];
            $appoint_county = $_POST['appoint_county'];
            $appoint_mobile = $_POST['appoint_mobile'];
            $appoint_date = $_POST['appoint_date'];
        }
    }

    if (isset($_GET['id'])) {
        $user = selectOne($table, ['id' => $_GET['id']]);

        $id = $user['id'];
        $user_id = $user['user_id'];
        $appoint_email = $user['appoint_email'];
        $appoint_name = $user['appoint_name'];
        $appoint_county = $user['appoint_county'];
        $appoint_mobile = $user['appoint_mobile'];
        $appoint_date = $user['appoint_date'];
        $meeting_date = $user['meeting_date'];
        $meeting_time = $user['meeting_time'];
    }


    if (isset($_POST['btnUpdate'])) {
        $errors = adminAppointment($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['btnUpdate'], $_POST['id']);
            $_POST['admin_id'] = $_SESSION['id'];

            $appoint_id = update($table, $id, $_POST);
            $_SESSION['message'] = "Appointment date and time have been updated";
            header('location:' . BASE_URL . '/admin/appointments/index.php');
            exit();
        }else {
            $appoint_email = $_POST['appoint_email'];
            $appoint_name = $_POST['appoint_name'];
            $appoint_county = $_POST['appoint_county'];
            $appoint_mobile = $_POST['appoint_mobile'];
            $appoint_date = $_POST['appoint_date'];
            $meeting_date = $_POST['meeting_date'];
            $meeting_time = $_POST['meeting_time'];
        }
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];

        $del = delete($table, $id);
        $_SESSION['message'] = "Appointment content Deleted successfully";
        header('location:' . BASE_URL . '/admin/appointments/index.php');
        exit();
    }