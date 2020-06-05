<?php

 session_start();
include ('../connection.php');

if($_POST['login']){
    $username = cleanString($_POST["username"]);
    $password = hash('sha256', $_POST['password']);

    // if(!adminExists($username, $username)){
    //     echo 'Sorry this admin is not registered';
    //     exit;
    // }


    if(!validLogin($username, $password)){
        echo 'Wrong Details';
        exit;
    }

    $id = getUserContent($username, 'id');
    $_SESSION['admin_id'] = $id;
    echo 'success';
}

function getUserContent($user, $content){
    $link = $GLOBALS['link'];
    $context = 'username';
    $sql = "SELECT * FROM `admin` WHERE `$context` = '$user'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $row["$content"];
}


function adminExists($username){
    if(contextExists('username', $username)) return true; else return false;
}

// function contextExists($context, $value){
//     $link = $GLOBALS['link'];
//     $sql = "SELECT * FROM admin WHERE `$context` = '$value'";
//     $result = mysqli_query($link, $sql);
//         if(mysqli_num_rows($result) > 0) return true; else return false;
// }

function validLogin($context, $password){
    $link = $GLOBALS['link'];
    $sql = "SELECT * FROM admin WHERE `username` = '$context' AND `password` = '$password' ";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) == 1) return true; else return false;
    }


function cleanString($text){
    return filter_var($text, FILTER_SANITIZE_STRING);
}

function prepare($text){
    $link = $GLOBALS['link'];
    return mysqli_real_escape_string($link, $text);
}
?>