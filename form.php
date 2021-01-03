<?php
$dbhost = 'localhost:3306';
$dbuser = 'hardik';
$dbpass = 'zoro1803';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

$query = "USE PROJECT";
mysqli_query($conn, $query);

foreach ($_POST as $key => $value) {
    if (!empty($value)) {
        $query = 'update data set value="' . $value . '" where name="' . $key . '";';
        $result = mysqli_query($conn, $query);
    }
}

echo 'Data has been updated! <a href="/">Click here to go to main page</a>';
