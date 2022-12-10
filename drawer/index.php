<html lang="en">
<head>
    <title>Hello world page</title>
    <link rel="stylesheet" href="../phpdir/style.css" type="text/css"/>
</head>
<body>
    <?php
    require_once 'drawer.php';
    $id = $_GET["id"];
    if($id == 1) {
        echo circle();
    }
    if($id == 2) {
        echo rect();
    }
    if($id == 3) {
        echo ellipse();
    }
    ?>
</body>
</html>