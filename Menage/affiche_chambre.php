
<!doctype html>
<html>
 <head>
     <title>
        Chambres trouvées
     </title>
     <meta charset="utf8">
 </head>
 <body>
    <?php if (count($reponse) == 0){
         echo "<h2>Pas de Chambre trouvée</h2>";
     }
     else {
        echo "<h2>Chambres libérées le $date </h2>";
     }
    ?>
     <ul>
         <?php foreach($reponse as $element) : ?>
            <li> Chambre <?= $element["numero"]  ?> avec <?= $element["places"]  ?>  places</li>
         <?php endforeach ;?>
     </ul>
 </body>
</html>