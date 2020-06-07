<?php
global $link;
$link = mysqli_connect("localhost", "root", "", "quotaway");
if(mysqli_connect_error()){
    die("<div class='alert alert-warning'>ERROR: Unable to connect:". mysqli_connect_error() . "</div>");
}

include'db/rb.php';
R::setup( 'mysql:host=localhost;dbname=quotaway',
'root', '' ); //for both mysql or mariaDB

?> 