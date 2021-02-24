<?php

$host = "localhost";
$user = "root";
$password = "";

$dbname = "ayushstore";

$conect = mysqli_connect($host,$user,$password,$dbname);

if ($conect->mysqli_error) {
    echo "No connection";
}
else {
    echo "We are good to go.";
}

