<?php 

include_once "Models/UserSubscribed.php";

$user = new UserSubscribed('someMail');

session_start();

$_SESSION['user'] = $user;

header('Location: index.php');
