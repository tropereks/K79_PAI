<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Lista</h4>
    <ul>
        <li>Poznań</li>
        <li>Gniezno</li>
        <li>Września</li>
    </ul>
    <?php
    $city = "Jarocin";
    echo <<< LIST
    <ul>
        <li>Poznań</li>
        <li>Gniezno</li>
        <li>Września</li>
        <li>$city</li>
    </ul>
    LIST;
    ?>

    <h4>Lista numerowana</h4>
    <?php
    //include, include_once, require, require_once
    include_once("scripts/script.php");
    include('connect.php');
    $sql = "SELECT * FROM `users`";
    $result = $conn->query($sql);

    while($user = $result->fetch_assoc()){
        echo <<< USER
            Imię i nazwisko: $user[firstName]
                $user[lastName]<br>
USER;
            
    }


    ?>
</body>
</html>