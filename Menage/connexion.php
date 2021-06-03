<?php 
    require "../connexion.php";

    $req = $bdd->prepare(Select * From Reservation Join comporte ON reservation.id = comporte.idReservation Join chambre ON comporte.idChambre = chambre.id  Where  arrivee='2021-05-13';);
    $req->execute();
    $reponse_mot_du_titre = $req->fetchAll(PDO::FETCH_ASSOC);


?>