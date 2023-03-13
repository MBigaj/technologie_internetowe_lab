<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Users </title> 
</head>
<body>
    <?php
    require_once("./scripts/connect_db.php");

    // echo $conn->connect_errno;

    $sql = 'SELECT * FROM users';
    $result = $conn->query($sql);

    // $result_list = $result->fetch_assoc(); // Fetches an assiociative array from result query

    // print_r($result_list); // print_r() Displays array
    // var_dump($result_list); // var_dump() Displays array with types and sizes

    // while($result_list = $result->fetch_assoc())
    //     print_r($result_list) . "\n";
    //     var_dump($result_list);


    while($result_list = $result->fetch_assoc())
    {
        $year_of_birth = substr($result_list['birthday'], 0, -6);

        echo <<< USERS
            Name and surname: $result_list[first_name] $result_list[last_name] <br>
            Date of birth: $result_list[birthday] <br>
            Year of birth: $year_of_birth
            <hr>
        USERS;
    }

    ?>
</body>
</html>