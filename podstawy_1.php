<?php
    $firstname = "Nick";
    $lastname = "Here";

    echo "First name and last name: $firstname, $lastname<br>";
    echo 'First name and last name: $firstname, $lastname<br><br>';

    // heredoc
    $data = <<< DATA
        Name: $firstname<br>
        Surname: $lastname<br><br>
    DATA;

    echo $data;

    // nowdoc
    echo <<< 'DATA'
        Name: $firstname<br>
        Surname: $lastname<br><br>
    DATA;

    // Binary
    $bin = 0b1011;
    echo $bin . '<br>'; // 11

    $oct = 011;
    echo $oct . '<br>'; // 9

    $hex = 0xA1;
    echo $hex . '<br>'; // 161
?>