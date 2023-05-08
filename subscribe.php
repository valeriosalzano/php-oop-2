<?php 

include_once "Models/UserSubscribed.php";

$mail = 'somemail';

session_start();

$_SESSION['user'] = $mail;

header('Location: index.php');
