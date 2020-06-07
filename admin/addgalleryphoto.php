<?php
    include '../connection.php';
    session_start();

    if($_POST['galleryphoto']){
        $image = $_POST['image'];
        $caption = $_POST['caption'];
        list($type, $image) = explode(';',$image);
        list(, $image) = explode(',',$image);
        $image = base64_decode($image);
        $image_name = time().'.png';
        file_put_contents('dist/img/gallery/'.$image_name, $image);

        // $sql = "UPDATE `users` SET `profile_picture` = '$image_name' WHERE `id` = '$id'";
        // if(mysqli_query($link, $sql)){
        //     echo 'success';
        //     $_SESSION['dp'] = $image_name;
        // }else{
        //     echo 'Profile picture not uploaded! Try again';
        // }

        $gallery = R::dispense('gallery');
        $gallery->image = $image_name;
        $gallery->caption = $caption;
        $id = R::store($gallery);
        if($id){
            echo $id;
        }
    }

    
    
?>