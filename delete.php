<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = getenv('DB_HOST');
    $username   = getenv('DB_USER');
    $password   = getenv('DB_PASS');
    $database   = getenv('DB_NAME');

    //create connection
    $connection = new mysqli($servername,$username,$password,$database);


    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}
header("location: ./index.php");
exit;
?>