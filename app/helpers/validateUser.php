<?php
function validateUser($user)
{
    $errors = array();
    if (empty($user['username'])) {
        array_push($errors, 'username is required');
    }
    if (empty($user['email'])) {
        array_push($errors, 'email is required');
    }
    if (empty($user['password'])) {
        array_push($errors, 'password is required');
    }
    if ($user['password'] !== $user['passwordconf']) {
        array_push($errors, 'password did not matched try again');
    }

    $existingEmail = SelectOne('users', ['email' => $user['email']]);
    if ($existingEmail){
        array_push($errors, "email is exists");
    }

    // return $errors;
    $existingUser = SelectOne('users', ['username' => $user['username']]);
    if ($existingUser){
        array_push($errors, " Username is exists");
    }

    return $errors;

}

function validateLogin($user)
{
    $errors = array();
    if (empty($user['email'])) {
        array_push($errors, 'username is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'password is required');
    }
    return $errors;

}
?>