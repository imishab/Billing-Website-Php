<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");

$table = 'products';

$errors = array();
$id = '';
$name = '';
$rate = '';

$products = selectAll($table);


if (isset($_POST['add-product'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-product']);
        $product_id = create($table, $_POST);
        $_SESSION['message'] = 'Product created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/products/index.php');
        exit(); 
    } else {
        $name = $_POST['name'];
        $rate = $product['rate'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = selectOne($table, ['id' => $id]);
    $id = $product['id'];
    $name = $product['name'];
    $rate = $product['rate'];

}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Product deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/products/index.php');
    exit();
}


if (isset($_POST['update-product'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-product'], $_POST['id']);
        $product_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Product updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/products/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $rate = $_POST['rate'];

    }

}
