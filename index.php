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

$query = "USE PROJECT";
mysqli_query($conn, $query);

?>
    <!--HEADER -->
    <div class="header-container">
        Header
    </div>

    <!--CONTAINER -->
    <div class="container">
        <div>
            <?php
$query = "select * from data where id=1;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>' . $row["value"] . '</p>';
    }
}
?>
        </div>
        <div>
            <div>
            <?php
$query = "select * from data where id = 2;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<h1>' . $row["value"] . '</h1>';
    }
}
?>
        </div>
        <div>
        <?php
$query = "select * from data where id = 3;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<img src=' . $row["value"] . '/>';
    }
}
?>
    </div>
    <div>
            <?php
$query = "select * from data where id=4;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>' . $row["value"] . '</p>';
    }
}
?>
        </div>
        </div>

    </div>
    <script type="text/javascript" src="./script.js"></script>
</body>

</html>
