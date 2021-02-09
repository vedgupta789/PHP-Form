<?php

 
/* Attempt to connect to MySQL database */
$con = mysqli_connect("localhost", "id12554850_root", "mla@2019", "id12554850_notesite");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
