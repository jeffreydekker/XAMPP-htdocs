<?php


if(!empty($_POST['data_type'])) 
{
    $info['data_type']  = $_POST['data_type'];
    $info['errors']     = [];
    $info['success']    = false;

    if($_POST['data_type'] == "signup") 
    {
        // validate firstname
        if(empty($_POST['firstname']))
        {
            $info['errors']['firstname'] = "A first name is required";
        } else {
            if(!preg_match("/^[\p{L}]+$/", $_POST['firsname']))
            {
                $info['errors']['firstname'] = "First name can't have spaces, special characters or numbers";
            }
        }

        // validate lastname
        if(empty($_POST['lastname']))
        {
            $info['errors']['lastname'] = "A last name is required";
        } else {
            if(!preg_match("/^[\p{L}]+$/", $_POST['firsname']))
            {
                $info['errors']['firstname'] = "Last name can't have spaces, special characters or numbers";
            }
        }

        // validate email
        if(empty($_POST['email']))
        {
            $info['errors']['firstname'] = "An email is required";
        } else {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                $info['errors']['email'] = "Email is not valid";
            }
        }

        // validate password
        if(empty($_POST['password']))
        {
            $info['errors']['password'] = "A password is required";
        } 
        elseif ($_POST['password'] !== $_POST['repeat_password']) 
        {
            $info['errors']['password'] = "Passwords don't match";
        }
        elseif (strlen($_POST['password'] < 8))
        {
            $info['errors']['password'] = "Password must be at least 8 characters long";
        }



        if(empty($info['errors']))
        {

            // save to db

            $info['success'] = true;
        }
    }

    echo json_encode($info);
}
