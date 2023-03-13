<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $city = "Poznan";
    echo <<< LIST
    HEREDOC <br>
    <hr>
    <ul>
        <li>
            $city
            <ol type="A">
                <li>Polna</li>
                <li>Gnieznienska</li>
            </ol>
        </li>
        <li>Gniezno</li>
        <li>Jarocin</li>
    </ul>
    LIST;
?>
</body>
</html>