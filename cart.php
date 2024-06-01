<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (isset($_POST['add_to_cart'])) {
        $product = $_POST['product'];
        $price = $_POST['price'];
        $item = array('product' => $product, 'price' => $price);
        $_SESSION['cart'][] = $item;
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
