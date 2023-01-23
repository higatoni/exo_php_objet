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
        require_once "ballon.php";

        $bob = new ballon("Bob","rouge");
        echo $bob->getInfos();

        $toby = new ballon("Toby","bleu");
        echo $toby->getInfos();

        $toby->changeCouleur($bob,"vert");
        echo $bob->getInfos();
    ?>
</body>
</html>
