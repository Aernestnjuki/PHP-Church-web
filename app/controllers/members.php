<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/allValidations.php");

    
    $table = 'members';
    $admin_members = selectAll($table);
    $errors = array();
    $username = '';
    $email = '';
    $id = '';
    $phone = '';
    $admin = '';
    $password = '';
    $confPassword = '';

    // function for logging in the user
    function loginUser($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You have logged in Successfully';

        if ($_SESSION['admin']) {
            header('location:' . BASE_URL . '/admin/dashboard.php');
        }else{
            header('location:' . BASE_URL . '/index.php');
        }
        exit();
    }

    // registering members
    if (isset($_POST['btnSignUp']) || isset($_POST['uploadMember'])) {
        $errors = validateSignIn($_POST);
        if (count($errors) === 0) {
            unset($_POST['btnSignUp'], $_POST['conf-password'], $_POST['uploadMember']);            
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if (isset($_POST['admin'])) {
                $_POST['admin'] = 1;
                $user_id = create($table, $_POST);
                $_SESSION['message'] = 'Admin member created Successfully';
                header('location:' . BASE_URL . '/admin/dashboard.php');
                exit();
            } else {
                $_POST['admin'] = 0;
                $user_id = create($table, $_POST);
                $user = selectOne($table, ['id' => $user_id]);
            }
            if (isset($_SESSION['admin'])) {
                header('location:' . BASE_URL . '/admin/members/index.php');
            } else {
                header('location:' . BASE_URL . '/login.php');
            }
            
            
        } else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $confPassword = $_POST['conf-password'];
            $admin = isset($_POST['admin'])? 1 : 0;
        }
        
    }

    // login member
    if (isset($_POST['btnLogIn']) ){
        $errors = validatelogin($_POST);

        if (count($errors) === 0) {
            $user = selectOne($table, ['username' => $_POST['username']]);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                loginUser($user);
            }else{
                array_push($errors, 'Wrong Credentials!!');
            }
        }
        
        $username = $_POST['username'];
        $password = $_POST['password'];
    } 

    // get members from admin to edit
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $user = selectOne($table, ['id' => $id]);
        $username = $user['username'];
        $id = $user['id'];
        $email = $user['email'];
        $phone = $user['phone'];
        $admin = $user['admin'];
    }

    // admin editing members
    if (isset($_POST['editMember'])) {
        $errors = validateSignIn($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['editMember'], $_POST['conf-password'], $_POST['id']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $_POST['admin'] = isset($_POST['admin'])? 1 : 0;
            $edit_member = update($table, $id, $_POST);
            $_SESSION['message'] = 'Admin member created';
            header('location:' . BASE_URL . '/admin/members/index.php');
            exit();
        } else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $confPassword = $_POST['conf-password'];
            $admin = isset($_POST['admin'])? 1 : 0;
        }
        
    } 

    // admin deleting members
    if (isset($_GET['delete_id'])) {
        $user = delete($table, $_GET['delete_id']);
        $_SESSION['message'] = 'Admin member deleted';
        header('location:' . BASE_URL . '/admin/members/index.php');
        exit();
    }
    
    
