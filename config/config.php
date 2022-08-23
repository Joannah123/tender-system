<?php

$connection = mysqli_connect("localhost", "root", "", "tender_system");
if(mysqli_connect_error()) {
    echo "There was an error";
}else{
    echo "Do your thang";
}
?>