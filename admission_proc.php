<?php
    include 'connection.php';
    session_start();

    if($_POST['admission']){
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $nationality = $_POST['nationality'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];

        $admission = R::dispense('admission');
        $admission->firstname = $firstName;
        $admission->lastname = $lastName;
        $admission->nationality = $nationality;
        $admission->phone = $phone;
        $admission->email = $email;
        $admission->bio = $bio;
        $id = R::store($admission);//Returns ID of the newly stored
        if($id){
            echo "success";
        }
    }

    
    
?>