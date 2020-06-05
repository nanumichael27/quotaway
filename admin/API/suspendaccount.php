<?php
    session_start();
    include('../../connection.php');

    if(isset($_GET['id']) and isset($_SESSION['admin_id'])){
        if(suspendUser($_GET['id'])){
            echo "<script>
            alert('The user has been suspended');
            history.back();
            </script>";
        }
    }

    function suspendUser($id){
        $link = $GLOBALS['link'];
        $sql = "UPDATE `users` SET `activation_status` = 'pending' WHERE `id` = '$id'";
        if(mysqli_query($link, $sql)) return true; else return false;
    }

?>