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
        spl_autoload_register('monChargeur'); 
        function monChargeur($classe)
        {
          require $classe.'.php'; 
        }
        
        $epee = new arme("épée",20);
        $dague = new arme("dague",10);

        $aragorn = new perso("Aragorn");
        $aragorn->changerArme($epee);
        echo $aragorn->infos();
        $legolas = new perso("Legolas");
        $legolas->changerArme($dague);
        echo $legolas->infos();
        $aragorn->attaquer($legolas);
        echo $legolas->infos();
        $gandalf = new magicien("Gandalf");
        echo $gandalf->infos();
        $gandalf->AvadaKedavra($aragorn);
        echo $aragorn->infos();
        $legolas->Potion();
        echo $legolas->infos();
        $eomer = new guerrier("Eomer");
        echo $eomer->infos();
        $eomer->monterCheval();
        $eomer->verifCheval();
        
    ?>
</body>
</html>    
   