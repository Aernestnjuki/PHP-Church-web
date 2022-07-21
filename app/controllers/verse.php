<?php

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/allValidations.php");

    $table = 'verse';
    $verse_data = selectAll($table);
    $errors = array();
    $id = '';
    $bible_verse = '';
    $verse_content = '';

    if (isset($_POST['btnAddVerse'])) {
        $errors = validateVerse($_POST);

        if (count($errors) === 0) {
            unset($_POST['btnAddVerse']);
            $_POST['admin_id'] = $_SESSION['id'];

            $verse_id = create($table, $_POST);
            $_SESSION['message'] = "Verse have been posted";
            header('location:' . BASE_URL . '/admin/verses/index.php');
            exit();
        }else {
            $bible_verse = $_POST['bible_verse'];
            $verse_content = $_POST['verse_content'];
        }
    }

    if (isset($_GET['id'])) {
        $user = selectOne($table, ['id' => $_GET['id']]);
        $id = $user['id'];
        $bible_verse = $user['bible_verse'];
        $verse_content = $user['verse_content'];
    }

    if (isset($_POST['btnEditVerse'])) {
        $errors = validateVerse($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['btnEditVerse'], $_POST['id']);
            $_POST['admin_id'] = $_SESSION['id'];

            $verse_id = update($table, $id, $_POST);
            $_SESSION['message'] = "Verse have been edited";
            header('location:' . BASE_URL . '/admin/verses/index.php');
            exit();
        }else {
            $bible_verse = $_POST['bible_verse'];
            $verse_content = $_POST['verse_content'];
        }
    }