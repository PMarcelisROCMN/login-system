<?php

if(isset($_POST["submit"]))
{

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    include "../include/signup-contr.classes.php";
    include "../include/signup.classes.php";

    $signupController = new SignupController($uid, $pwd, $pwdRepeat, $email);
}