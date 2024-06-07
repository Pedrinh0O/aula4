<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = 'fulano';
    switch($nome){
        case "fulano";

        echo 'eai fulano';

        case 'siclano';
        echo 'eai silacno';
        break;

        case "beltrano";
        echo "eai beltrano";
        break;

        default;
        echo'qual o seu nome';
        break;
    }
    //resultado é "eai fulano"
    ?>
</body>
</html>