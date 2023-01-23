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
        require_once "personnage.php";
        $smith = new personnage("MR Smith","dague");
        echo $smith->infos();
        $neo = new personnage("Neo","épée");
        echo $neo->infos();
        $neo->attaquer($smith);
        echo $smith->infos();
        $smith->attaquer($neo);
        echo $neo->infos();
        $neo->attaquer($smith);
        echo $smith->infos();
        $neo->attaquer($smith);
        echo $smith->infos();
        $neo->attaquer($smith);
        echo $smith->infos();
        $neo->changerArme("dague");
        echo $neo->infos();
        $neo->attaquer($smith);
        echo $smith->infos();
        $neo->attaquer($smith);
        echo $smith->infos();

    ?>
</body>
</html>    
   