<?php
global $link;
$link = mysqli_connect("localhost", "root", "", "vintek");
if(mysqli_connect_error()){
    die("<div class='alert alert-warning'>ERROR: Unable to connect:". mysqli_connect_error() . "</div>");
}

?> 