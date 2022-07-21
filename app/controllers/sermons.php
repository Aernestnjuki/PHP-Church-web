<?php
    
    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/allValidations.php");

    $errors = array();
    $table = 'sermons';
    $sermon_data = selectAll($table);
    $sermon_name = '';
    $sermon_id = '';
    $youtube_link = '';
    $id = '';
    $publish = '';

    // adding sermons
    if (isset($_POST['btnAddSermon'])) {
        $errors = validateSermons($_POST);
        
        
        if (count($errors) === 0) {
            unset($_POST['btnAddSermon']);
            $_POST['admin_id'] = $_SESSION['id'];
            $_POST['publish'] = isset($_POST['publish'])? 1 : 0;
            $sermon_id = create($table, $_POST);
            $_SESSION['message'] = 'New sermon was Add';
            header('location:' . BASE_URL . '/admin/sermons/index.php');
            exit(); 
        }else{
            $sermon_name = $_POST['sermon_name'];
            $youtube_link = $_POST['youtube_link'];
            $publish = isset($_POST['publish']) ? 1 : 0;
        }
    }

    // geting sermon data for editing
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sermon = selectOne($table, ['id' => $id]);

        $sermon_name = $sermon['sermon_name'];
        $youtube_link = $sermon['youtube_link'];
        $publish = $sermon['publish'];
    }

    // edit sermon
    if (isset($_POST['btnEditSermon'])) {
        $errors = validateSermons($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            $_POST['publish'] = isset($_POST['publish'])? 1 : 0;
            $_POST['admin_id'] = $_SESSION['id'];
            unset($_POST['id'], $_POST['btnEditSermon']);
            //show($_POST);
            $edit_sermon = update($table, $id, $_POST);
            $_SESSION['message'] = 'The sermon was Edited';
            header('location:' . BASE_URL . '/admin/sermons/index.php');
            exit();
        }else{
            $sermon_name = $_POST['sermon_name'];
            $youtube_link = $_POST['youtube_link'];
            $publish = isset($_POST['publish']) ? 1 : 0;
        }
    }

    // publish && unpublish
    if (isset($_GET['publish']) && $_GET['p_id']) {
        $publish = $_GET['publish'];
        $p_id = $_GET['p_id'];

        // publish
        $count = update($table, $p_id, ['publish' => $publish]);
        $_SESSION['message'] = 'Sermon publish state has been changed';
        header('location:' . BASE_URL . '/admin/sermons/index.php');
        exit();
    }

    // delete sermon
    if (isset($_GET['delete_id'])) {
        $sermon = delete($table, $_GET['delete_id']);
        $_SESSION['message'] = 'The sermon was deleted';
        header('location:' . BASE_URL . '/admin/sermons/index.php');
        exit();
    }