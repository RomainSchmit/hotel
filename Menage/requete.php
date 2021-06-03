 <?php
 
 require "../connexion.php";
 $req = $bdd->prepare('Select * From Reservation Join comporte ON reservation.id = comporte.idReservation Join chambre ON comporte.idChambre = chambre.id  Where  arrivee= ?;');
 $req->execute(array($date));
 $reponse = $req->fetchAll(PDO::FETCH_ASSOC);
 //var_dump($reponse);
 
 ?>