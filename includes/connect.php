<?php
define('DB_USER','d36234-db8');
define('DB_PASSWORD','WHS3XMfPK');
define('DB_HOST','mysqlsemi1.space2u.com');
define('DB_NAME','d36234_db8');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>