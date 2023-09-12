<?php
// find error why
include 'C:\xampp\htdocs\blog\app\database\db.php';
include 'C:\xampp\htdocs\blog\app\helpers\validateUser.php';

$table = 'users';
$admin_users = SelectAll($table, ['admin' => 1]);

$errors = array();
$id = '';
$username = '';
$admin = '';
$email = '';
$password = '';
$passwordconf = '';
function loginUser($user)
{
    // user login
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = "you are login";
    $_SESSION['type'] = 'success';
    if ($_SESSION['admin']) {
        header('location: /blog/ADMIN/topics/index.php');
    } else {

        header('location: /blog/index.php');
    }

    exit();

}
// create
if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
    $errors = validateUser($_POST);
    // form validation
    if (count($errors) == 0) {
        unset($_POST['register-btn'], $_POST['passwordconf'], $_POST['create-admin']);
        // increption password
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            // create database input from frontend
            $user_id = create($table, $_POST);
            $_SESSION['message'] = "admin user created successfully";
            $_SESSION['type'] = "success";
            header('location: /blog/admin/users/index.php');
            exit();

        } else {
            $_POST['admin'] = 0;
            // create database input from frontend
            $user_id = create($table, $_POST);

            $user = SelectOne($table, ['id' => $user_id]);
            // dd($user);
            loginUser($user);
        }
    } else {


        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordconf = $_POST['passwordconf'];

    }
}
// edit
if (isset($_POST['update-user'])) {
    // dd($_POST);
    $errors = validateUser($_POST);
    // form validation
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['passwordconf'], $_POST['update-user'], $_POST['id']);
        // increption password
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        // create database input from frontend
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = "admin user created successfully";
        $_SESSION['type'] = "success";
        header('location: /blog/admin/users/index.php');
        exit();


    } else {


        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordconf = $_POST['passwordconf'];

    }
}
if (isset($_GET['id'])) {
    $user = SelectOne($table, ['id' => $_GET['id']]);
    // dd($user);

    $id = $user['id'];

    $username = $user['username'];
    $admin = isset($user['admin']) ? 1 : 0;
    $email = $user['email'];


}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) == 0) {

        $user = SelectOne($table, ['email' => $_POST['email']]);
        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
            array_push($errors, 'wrong credentials');

        }
    }
    $username = $_POST['email'];
    $password = $_POST['password'];

}
if (isset($_GET['delete_id'])) {
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "admin user Deleted successfully";
    $_SESSION['type'] = "success";
    header('location: /blog/admin/users/index.php');
    exit();
}
?>