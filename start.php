<?php
    $firstName = "Robert";
    $lastName = "Synak";
    echo 'Imię i nazwisko: $firstName $lastName<br>';
    echo "Imię i nazwisko: $firstName $lastName<br>";

    //heredoc
    echo <<< DATA
    Imię: $firstName<br>
    Nazwisko: $lastName
    <hr>
    DATA;

    $data = <<< DATA
    Imię: $firstName<br>
    Nazwisko: $lastName
    <hr>
    DATA;

    echo $data;

    //nowdoc
    echo <<< 'DATA'
    Imię: $firstName<br>
    Nazwisko: $lastName
    <hr>
    DATA;

    echo "<br>";
    $bin = 0b1011;
    echo $bin; //11

    echo "<br>";
    $oct = 0o12;
    echo $oct; //10

    echo "<br>";
    $hex = 0x1A;
    echo $hex; //16
?>