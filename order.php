<?php
    if (isset($_POST["product"])){
        $payment = '';
        if (isset($_POST["cart-form__cash"])) {
            $payment = "cash";
        } else if (isset($_POST["cart-form__card"])) {
            $payment = "card";
        }
        $response = json_decode( $_POST["product"], true);
        var_dump($response);
    }else{
        print_r($_POST);
        echo "Error";
        http_response_code(400);
    }

    $user1 = 0;
    $fullPrice = 0;
    $products = '';
    foreach ($response as &$value) {
        $fullPrice += $value["price"];
        $products .= $value["title"];
        $products .= ', ';
        $user1 = (int) $value["user"];
    }

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'samsung';

    $con = new mysqli($host, $user, $password, $database);
    if ($con->connect_error) {
        die("connection failed " .$con->connect_error);
    }
    echo $user1;
    echo $products;
    echo $fullPrice;
    echo $payment;
    $sql = "INSERT INTO `orders` (`user_id`, `products`, `price`, `payment`)
            VALUES('$user1', '$products', '$fullPrice', '$payment')";
    $result = $con->query($sql);

    $con->close();
?>