<!doctype hmtl>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <h1 class ="centered">Admin Panel</h1>
    <h2>Update data for various fields here:</h2>
    <form action="/form.php" method="post">
        <div>
            <span>Update Data for Paragraph 1: </span>
            <input type="text" name="p1">
        </div>
        <div>
            <span>Update Data for Paragraph 2: </span>
            <input type="text" name="p2">
        </div>
        <div>
            <span>Update Data for Paragraph 3: </span>
            <input type="text" name="p3">
        </div>
        <div>
            <span>Update Color for Button 1: </span>
            <input type="text" name="b1">
        </div>
        <div>
            <span>Update Color for Button 2: </span>
            <input type="text" name="b2">
        </div>
        <button class="form-btn" type="submit">Update Data</button>
        <button class="form-btn" type="reset">Clear</button>
    </form>
</body>
</html>
