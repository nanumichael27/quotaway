<?php
    include 'connection.php';
    session_start();

    if($_POST['newsletter']){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $newsletter = R::dispense('newsletter');
        $newsletter->name = $name;
        $newsletter->email = $email;
        $id = R::store($newsletter);//Returns ID of the newly stored
        if($id){
            echo "success";
        }
    }

    
    
?>