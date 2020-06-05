<?php
    session_start();
    include('../../connection.php');

    if(isset($_GET['id']) and isset($_SESSION['admin_id'])){
        if(deactivateUser($_GET['id'])){
            echo "<script>
            alert('The user has been deactivated');
            history.back();
            </script>";
        }
    }

    function deactivateUser($id){
        $link = $GLOBALS['link'];
        $sql = "UPDATE `users` SET `activation_status` = 'deactivated' WHERE `id` = '$id'";
        if(mysqli_query($link, $sql)) return true; else return false;
    }

?>