<?php
$dbhost = 'remotemysql.com:3306';
$dbuser = 'mYbI3h9znQ';
$dbpass = 'sLHdVNF0kV';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

$query = "USE mYbI3h9znQ";

mysqli_query($conn, $query);

foreach ($_POST as $key => $value) {
    if (!empty($value)) {
        $query = 'update data set value="' . $value . '" where name="' . $key . '";';
        $result = mysqli_query($conn, $query);
    }
}

echo 'Data has been updated! <a href="/">Click here to go to main page</a>';
