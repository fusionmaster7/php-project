<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP Project</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'hardik';
$dbpass = 'zoro1803';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

$sql = "CREATE DATABASE PROJECT;";

if (mysqli_query($conn, $sql)) {
    echo 'DB Created';
}
?>
    <!--HEADER -->
    <div class="header-container">
        Header
    </div>

    <!--CONTAINER -->
    <div class="container">
        <div>
            Container 1
        </div>
        <div>Container 2</div>
    </div>
    <script type="text/javascript" src="./script.js"></script>
</body>

</html>
