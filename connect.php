<?php

// This code Snnipet for Database Connection

 $con = mysqli_connect('localhost', 'root', '', 'formsubmission');
 
if (!$con) {
    echo '<h3 style="color:red">Database connection error.</h3>' . mysqli_connect_error();
    die();
} else{
    echo '<h3 style="color:green">Database connection successfully</h3>';
}

?>