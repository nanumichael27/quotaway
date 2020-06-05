<?php
    session_start();
    include('../../connection.php');

    if(isset($_GET['id']) and isset($_SESSION['admin_id'])){
        if(activateUser($_GET['id'])){
            echo "<script>
            alert('The user has been activated');
            history.back();
            </script>";
        }
    }

    function activateUser($id){
        $link = $GLOBALS['link'];
        $sql = "UPDATE `users` SET `activation_status` = 'activated' WHERE `id` = '$id'";
        if(mysqli_query($link, $sql)) return true; else return false;
    }

?>