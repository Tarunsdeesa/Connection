<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "login_register";

$conn = new mysqli($server, $username, $password, $database);

if ($conn) {
    echo "Connected successfully";

}

else{
    echo "filed";
}


?>
