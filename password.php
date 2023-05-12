<?php

$letters = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$specials = '.-_!"£$%&*';
$password = '';
$all_characters = $letters . strtoupper($letters) . $numbers . $specials;
$pw_length = $_GET['password'];

if($pw_length < 8) {
    echo 'password non valida';
} elseif (!empty($pw_length) && $pw_length >= 8) {
    while (strlen($password) < $pw_length) {
        $index = rand(0, strlen($all_characters));
        $single_character = $all_characters[$index];

        if(!str_contains($password, $single_character)) {
            $password .= $single_character;
        }
    }
    echo $password;
}