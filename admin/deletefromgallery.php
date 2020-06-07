<?php
    include '../connection.php';
    session_start();

    if($_POST['deletefromgallery']){
        $id = $_POST['id'];

        $photo = R::load('gallery', $id);
        $reply = R::trash($photo);
        if($reply){
            echo 'success';
        }

    }

    
    
?>