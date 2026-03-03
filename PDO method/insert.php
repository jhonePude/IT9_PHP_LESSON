<?php
require 'config.php';

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $amount = $_POST['amount'];

    //INSERT INTO users
    $stmt = $pdo->prepare("INSERT INTO users(name,email) VALUES (?,?)");
    $stmt->execute([$name,$email]);

    // GET LAST INSERTED users_id
    $users_id = $pdo->lastInsertId();

    //Insert into orders using the users_id
    $stmt2 = $pdo->prepare("INSERT INTO orders(user_id, product, amount) VALUES (?,?,?)");
    $stmt2 -> execute([$users_id,$product,$amount]);

    echo "User and Orded Added Successfully!";


}
?>