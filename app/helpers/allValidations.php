<?php

    // validation of users or members ************************************
    function validateSignIn($user){
        global $conn;

        $errors = array();

        if (empty($user['username'])) {
            array_push($errors, "Username is Required");
        }
        if (empty($user['email'])) {
            array_push($errors, "Email is Required");
        }
        if (empty($user['phone'])) {
            array_push($errors, "Phone number is Required");
        }
        if (empty($user['password'])) {
            array_push($errors, "Password is Required");
        }
        if ($user['password'] !== $user['conf-password']) {
            array_push($errors, 'Password does not match');
        }

        $existingEmail = selectOne('members', ['email' => $user['email']]);
        if (isset($existingEmail)) {
            array_push($errors, "Email already Exists");
        }
        

        return $errors;
    }

    function validatelogin($user){
        global $conn;

        $errors = array();

        if (empty($user['username'])) {
            array_push($errors, "Username is Required");
        }
        if (empty($user['password'])) {
            array_push($errors, "Password is Required");
        }

        return $errors;
    }

    /// validation of sermons ***************************************
    function validateSermons($user){
        global $conn;
        $errors = array();

        if (empty($user['sermon_name'])) {
            array_push($errors, "Sermon name is required");
        }
        if (empty($user['youtube_link'])) {
            array_push($errors, "Youtube link is required");
        }

        $existingSermon = selectOne('sermons', ['sermon_name' => $user['sermon_name']]);
        if (isset($existingSermon)) {
            array_push($errors, "Sermon name already Exists");
        }

        return $errors;
    }

    // validate finances ********************************************
    function validateFinances($user){
        global $conn;

        $errors = array();

        if (empty($user['date'])) {
            array_push($errors, 'Date is required');
        }
        if (empty($user['ref'])) {
            array_push($errors, 'Reference value is required');
        }
        if (empty($user['description'])) {
            array_push($errors, 'Description value is required');
        }
        if (empty($user['depit'])) {
            array_push($errors, 'Depit value is required');
        }
        if (empty($user['credit'])) {
            array_push($errors, 'credit value is required');
        }
        if (empty($user['balance'])) {
            array_push($errors, 'Balance value is required');
        }

        return $errors;
    }

    // validate blogs ********************************************************************************
    function validateBlog($user){
        global $conn;
        $errors = array();

        if (empty($user['blogTitle'])) {
            array_push($errors, "Blog title is required");
        }
        if (empty($user['blogBody'])) {
            array_push($errors, "Blog body is required");
        }
        if (empty($user['blogAuthor'])) {
            array_push($errors, "Blog author is required");
        }

        return $errors;
    }

    // validate appointments *************************************************************************
    function validateAppointment($user){
        $errors = array();

        if (empty($_POST['appoint_email'])) {
            array_push($errors, "Email is required");
        }
        if (empty($_POST['appoint_name'])) {
            array_push($errors, "Name is required");
        }
        if (empty($_POST['appoint_county'])) {
            array_push($errors, "County is required");
        }
        if (empty($_POST['appoint_mobile'])) {
            array_push($errors, "Phone number is required");
        }
        if (empty($_POST['appoint_date'])) {
            array_push($errors, "Date is required");
        }

        return $errors;
    }

    function adminAppointment($user){
        $errors = array();

        if (empty($_POST['meeting_date'])) {
            array_push($errors, "Meeting date is required");
        }
        if (empty($_POST['meeting_time'])) {
            array_push($errors, "Meeting time is required");
        }

        return $errors;
    }

    // validate counselling ******************************************************************
    function validateCounselling($user){
        $errors = array();

        if (empty($_POST['your_name'])) {
            array_push($errors, 'Your name is required');
        }
        if (empty($_POST['phone_number'])) {
            array_push($errors, 'Phone number is required');
        }
        if (empty($_POST['country'])) {
            array_push($errors, 'Country name is required');
        }
        if (empty($_POST['religion'])) {
            array_push($errors, 'Yore religion is required');
        }
        if (empty($_POST['gender'])) {
            array_push($errors, 'Gender is required');
        }
        if (empty($_POST['request'])) {
            array_push($errors, 'Your request is required');
        }

        return $errors;
    }

    function adminCounsel($user){
        $errors = array();

        if (empty($_POST['meeting_date'])) {
            array_push($errors, "Meeting date is required");
        }
        if (empty($_POST['meeting_time'])) {
            array_push($errors, "Meeting time is required");
        }

        return $errors;
    }

    // validate events **************************************************************
    function validateEvents($user){
        $errors = array();

        if (empty($_POST['event_title'])) {
            array_push($errors, "Event Title is required");
        }
        if (empty($_POST['event_date'])) {
            array_push($errors, "Event date is required");
        }
        if (empty($_POST['time'])) {
            array_push($errors, "Time for event is required");
        }
        if (empty($_POST['event_venue'])) {
            array_push($errors, "Event venue is required");
        }

        return $errors;
    }

    // validate about *****************************************************
    function validateAbout($user){
        $errors = array();

        if (empty($_POST['about_rev'])) {
            array_push($errors, "About reverend is required");
        }
        if (empty($_POST['about_church'])) {
            array_push($errors, "About church is required");
        }

        return $errors;
    }

    // validate verse ***************************************************************
    function validateVerse($user){
        $errors = array();

        if (empty($_POST['bible_verse'])) {
            array_push($errors, "Bible verse is required");
        }
        if (empty($_POST['verse_content'])) {
            array_push($errors, "Verse content is required");
        }

        return $errors;
    }