<?php
$email = $_POST ['email'];
$password = $_POST ['password'];

if ($email == 'hanaapriliani42@gmail.com' && $password == 'HANA') {
    header('Location: dashboard.php');
} else {
    echo "Login Gagal";
}