<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");

$table = 'customers';

$errors = array();
$id = '';
$name = '';
$phone = "";
$place = "";
$customers = selectAll($table);


if (isset($_POST['add-customer'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-customer']);
        $customer_id = create($table, $_POST);
        $_SESSION['message'] = 'Customer created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/customers/index.php');
        exit(); 
    } else {
        $name = $_POST['name'];
        $phone = $customer['phone'];
        $place = $customer['place'];

    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $customer = selectOne($table, ['id' => $id]);
    $id = $customer['id'];
    $name = $customer['name'];
    $phone = $customer['phone'];
    $place = $customer['place'];

}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Customer deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/customers/index.php');
    exit();
}


if (isset($_POST['update-customer'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-customer'], $_POST['id']);
        $customer_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Customer updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/customers/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $place = $_POST['place'];

    }

}
