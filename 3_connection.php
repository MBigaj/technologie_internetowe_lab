<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> Beginning of website </h4>

    <?php
    // require_once, include, include_once
    include("./script/list.php");
    include_once("./script/list.php"); // Checks if has already been included, if yes doesn't display again

    require("./script/list.php");
    require_once("./script/list.php");
    ?>

    <h4> End of website </h4>
</body>
</html>