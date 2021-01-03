<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP Project</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
<?php
$dbhost = 'DB_URL here';
$dbuser = 'DB_USERNAME here';
$dbpass = 'DB_PASSWORD here';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect' . mysqli_error());
}

$query = "USE mYbI3h9znQ";
mysqli_query($conn, $query);

?>
    <!--HEADER -->
    <div class="header-container">
        Header
    </div>

    <!--CONTAINER -->
    <div class="container">
        <!--PARAGRAPH 1-->
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
        <!--HEADING-->
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
        <!--IMAGE-->
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
    <!--PARAGRAPH-->
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
    <!--VIDEO -->
    <div class="video-container">
    <?php
$query = "select * from data where id=7;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<iframe height="720" width="1280" src="' . $row["value"] . '"></iframe>';
    }

}
?>
</div>
<br />
        <div class="centered">
        <?php
$query = "select * from data where id = 6;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="/admin.php"><button class="btn" onclick="adminHandler()" style="color:' . $row["value"] . ';">Button 1</button></a>';
    }
}
?>
</div>
        <!--PARAGRAPH 3-->
        <div class="centered">
        <?php
$query = "select * from data where id=5;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>' . $row["value"] . '</p>';
    }
}
?>
        </div>
        <div class="centered">
        <?php
$query = "select * from data where id = 8;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="/admin.php"><button class="btn" style="color:' . $row["value"] . ';">Button 2</button></a>';
    }
}
?>
</div>
        <div class="timer-container">
            <div id="timer"></div>
            <button>Second button here </button>
    </div>
    <div class="centered">
        <button onclick="toggleTimer()">Toggle Timer</button>
    </div>
    <script type="text/javascript" src="./script.js"></script>
</body>

</html>
