<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/allValidations.php");

    $table = 'finances';
    $finance_data = selectAll($table);
    $errors = array();
    $date = '';
    $ref = '';
    $description = '';
    $depit = '';
    $credit = '';
    $balance = '';

    if (isset($_POST['btnAddFinances'])) {
        $errors = validateFinances($_POST);

        if (count($errors) === 0) {
            unset($_POST['btnAddFinances']);
            $_POST['admin_id'] = $_SESSION['id'];
            $finance_id = create($table, $_POST);
            $_SESSION['message'] = 'New finance data added';
            header('location:' . BASE_URL . '/admin/finances/index.php');
            exit();
        }else{
            $date = $_POST['date'];
            $ref = $_POST['ref'];
            $description = $_POST['description'];
            $depit = $_POST['depit'];
            $credit = $_POST['credit'];
            $balance = $_POST['balance'];
        }
    }

    // getting the total of all balances in finances table
    