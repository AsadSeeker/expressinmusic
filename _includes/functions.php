<?php

if (!$_POST) exit("direct access not permitted");

include '../bootstrap.php';

if (isset($_POST['register'])) {

    $url = strtok($_SERVER['HTTP_REFERER'], '?');

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$_POST['email']]);
    $user = $stmt->fetch();

    if (!empty($user)) {
       return header('Location: ' . $url . '?exist');
    }


    $data = [
        'name'          => $_POST['name'],
        'email'         => $_POST['email'],
        'password_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'created_at'    => date('Y-m-d H:i:s'),
        'updated_at'    => date('Y-m-d H:i:s')
    ];
    $sql = "INSERT INTO users (name, email, password_hash, created_at, updated_at) VALUES (:name, :email, :password_hash, :created_at, :updated_at)";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        return header('Location: ' . $url . '?success');
    } catch (Exception $e) {
        return header('Location: ' . $url . '?error');
        // echo 'Message: ' . $e->getMessage();
    }
}


if (isset($_POST['login'])) {

    echo "<pre>";

    $url = strtok($_SERVER['HTTP_REFERER'], '?');

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$_POST['email']]);
    $user = $stmt->fetch();

    if (!empty($user)) {
        if (password_verify($_POST['password'], $user['password_hash'])) {
            session_start();
            $_SESSION["user"] = $user;
            return header('Location: ' . $url . 'user/dashboard');
        } else {
            return header('Location: ' . $url . '?invalid');
        }
    } else {
        return header('Location: ' . $url . '?notexist');
    }
   
}
