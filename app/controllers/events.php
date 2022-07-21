<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/allValidations.php");

    $table = 'events';
    $events_data = selectAll($table);
    $errors = array();
    $id = '';
    $event_title = '';
    $event_date = '';
    $time = '';
    $event_venue = '';
    $image = '';

    if (isset($_POST['btnAddEvent'])) {
        $errors = validateEvents($_POST);

        if (!empty($_FILES['image']['name'])) {
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = ROOT_PATH . '/assets/images/' . $image_name;

            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if ($result) {
                $_POST['image'] = $image_name;
            } else {
                array_push($errors, "Failed to upload image");
            }
            
        }else {
            array_push($errors, "Event image is required");
        }

        if (count($errors) === 0) {
            unset($_POST['btnAddEvent']);
            $_POST['admin_id'] = $_SESSION['id'];
            //show($_POST);

            $event_id = create($table, $_POST);
            $_SESSION['message'] = "Event post has been added";
            header('location:' . BASE_URL . '/admin/events/index.php');
            exit();
        }else {
            $event_title = $_POST['event_title'];
            $event_date = $_POST['event_date'];
            $time = $_POST['time'];
            $event_venue = $_POST['event_venue'];
        }
    }

    if (isset($_GET['id'])) {
        $user = selectOne($table, ['id' => $_GET['id']]);
        $id = $user['id'];
        $image = $user['image'];
        $event_title = $user['event_title'];
        $event_date = $user['event_date'];
        $time = $user['time'];
        $event_venue = $user['event_venue'];
    }

    if (isset($_POST['btnEditEvent'])) {
        $errors = validateEvents($_POST);

        if (!empty($_FILES['image']['name'])) {
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = ROOT_PATH . '/assets/images/' . $image_name;

            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if ($result) {
                $_POST['image'] = $image_name;
            } else {
                array_push($errors, "Failed to upload image");
            }
            
        }else {
            array_push($errors, "Event image is required");
        }

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['btnEditEvent'], $_POST['id']);
            $_POST['admin_id'] = $_SESSION['id'];
            //show($_POST);

            $event_id = update($table, $id, $_POST);
            $_SESSION['message'] = "Event post has been updated";
            header('location:' . BASE_URL . '/admin/events/index.php');
            exit();
        }else {
            $event_title = $_POST['event_title'];
            $event_date = $_POST['event_date'];
            $time = $_POST['time'];
            $event_venue = $_POST['event_venue'];
        }
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        $event_id = delete($table, $id);
        $_SESSION['message'] = "Event post has been Deleted";
        header('location:' . BASE_URL . '/admin/events/index.php');
        exit();
    }