<?php
// include 'app/database/db.php';
// include 'app/helpers/validateTopic.php';


include 'C:\xampp\htdocs\blog\app\database\db.php';
include 'C:\xampp\htdocs\blog\app\helpers\validateTopic.php';
// include __DIR__ . '/app/database/db.php';
// include __DIR__ . '/app/helpers/validateTopic.php';

$table = 'topics';
$errors = array();
$id = '';
$name = '';
$descriptions = '';

$topics = SelectAll($table);


if (isset($_POST['add-topic'])) {

    // validation
    $errors = validateTopic($_POST);
    if (count($errors) == 0) {
        // dd($_POST);
        unset($_POST['add-topic']);
        // dd($_POST);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic created';
        $_SESSION['type'] = 'success';
        header('location: /blog/ADMIN/topics/index.php');
        exit();
    } else {
        $name = $_POST['name'];
        $descriptions = $_POST['descriptions'];

    }

}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = SelectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $descriptions = $topic['descriptions'];
    # code...
}
if (isset($_GET['del_id'])) {
    # code...
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    //   display msg
    $_SESSION['message'] = 'Topic Deleted Successfully';
    $_SESSION['type'] = 'success';
    header('location: /blog/ADMIN/topics/index.php');
    exit();
}
if (isset($_POST['update-topic'])) {
    # code...
    // dd($_POST);
    $errors = validateTopic($_POST);
    if (count($errors) == 0) {
        # code...
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        //   display msg
        $_SESSION['message'] = 'Topic Updated Successfully';
        $_SESSION['type'] = 'success';
        header('location: /blog/ADMIN/topics/index.php');
        exit();
    
    }
    else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $descriptions = $_POST['$descriptions'];
    }
   


}


?>