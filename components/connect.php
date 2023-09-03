<?php

$db_name ='mysql:host=localhost;dbname=flowershop_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

if(!$conn){
    echo "Not connect to Database";
}

function unique_id(){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsLenght = strlen($chars);
    $randomString ='';

    for($i=0; $i < 20; $i++){
        $randomString.=$chars[mt_rand(0, $charsLenght - 1)];
    }
    
    return $randomString;
}


?>