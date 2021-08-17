<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';

$topics = selectAll('topics');
$products = selectAll('products');
$customers = selectAll('customers');
$posts = selectAll($table);


$errors = array();
$id = "";
$title = "";
$sr = "";
$qty = "";
$total = "";
$borrow = "";
$topic_id = "";
$product_id = "";
$customer_id = "";
$published = "";

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];
    $sr = $post['sr'];
    $qty = $post['qty'];
    $total = $post['total'];
    $borrow = $post['borrow'];
    $topic_id = $post['topic_id'];
    $product_id = $post['product_id'];
    $customer_id = $post['customer_id'];
    $published = $post['published'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/bill.php"); 
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published state changed!";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/posts/index.php"); 
    exit();
}



if (isset($_POST['add-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

   
    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
    
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Bill Added successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/bill.php"); 
        exit();    
    } else {
        $title = $_POST['title'];
        $sr = $_POST['sr'];
        $qty = $_POST['qty'];
        $total = $_POST['total'];
        $borrow = $_POST['borrow'];
        $topic_id = $_POST['topic_id'];
        $product_id = $_POST['product_id'];
        $customer_id = $_POST['customer_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


if (isset($_POST['update-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

   

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
    
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/posts/index.php");       
    } else {
        $title = $_POST['title'];
        $sr = $_POST['sr'];
        $qty = $_POST['qty'];
        $total = $_POST['total'];
        $borrow = $_POST['borrow'];
        $topic_id = $_POST['topic_id'];
        $product_id = $_POST['product_id'];
        $customer_id = $_POST['customer_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}