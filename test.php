<?php

$pass = "123";



$encrypt_pass = md5($pass);
echo   "$encrypt_pass <br>";

$encrypt_pass = password_hash($pass, PASSWORD_DEFAULT);
echo "$encrypt_pass";
