<?php

session_set_cookie_params(0);
session_start();


require_once 'database/user.php';

$user = new User();

$userInfo = array(
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'confirmPassword' => $_POST['confirmPassword'],
    'age' => $_POST['age'],
    'gender' => $_POST['gender'],
    'email' => $_POST['email']);

$user->createUser($userInfo);

header('Location: view_user.php');

?>