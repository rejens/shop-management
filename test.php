<?php

$pass = "password";

$encrypt_pass = (password_hash($pass, PASSWORD_DEFAULT));
echo ($encrypt_pass . "<br>");

if (password_verify($pass, $encrypt_pass))
    echo ("correct");
else
    echo "wrong password";
