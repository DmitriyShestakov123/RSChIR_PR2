<html lang="en">
<head>
    <title>Sorter</title>
    <link rel="stylesheet" href="../phpdir/style.css" type="text/css"/>
</head>
<body>
    <?php
    require_once 'sorter.php';
    echo 'Получено: ' . $_GET["array"] . '<br>';
    $array = explode(",", $_GET["array"]);
    $array = ShellSort($array);
    $array = implode(",", $array);
    echo 'Отсортировано: ' . $array;
    ?>
</body>
</html>