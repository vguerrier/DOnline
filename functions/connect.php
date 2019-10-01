<?php
//connect.php file code start

$hote = '10.132.16.37';
$port = '1521'; // port par défaut
$service = 'RDTOOLS';
$utilisateur = 'DASHMAINT';
$motdepasse = 'DASHMAINT';

$lien_base =
"oci:dbname=(DESCRIPTION =
(ADDRESS_LIST =
	(ADDRESS =
		(PROTOCOL = TCP)
		(Host = ".$hote .")
		(Port = ".$port."))
)
(CONNECT_DATA =
    (SERVER = DEDICATED)
	(SERVICE_NAME = ".$service.")
)
)";

try
{
	// connexion à la base Oracle et création de l'objet
    $connexion = new PDO($lien_base, $utilisateur, $motdepasse);
    
    //lecture table Cards
    $requete=$connexion->prepare("select * from Cards");
    $requete->execute();
    
    //$requete=$connexion->prepare("select numerofiche, numeroreference from cqcentral.anomalie where numerofiche = :numCard"); // on va chercher tous les membres de la table qu'on trie par ordre croissant
    //$requete->execute(array('numCard' => 'GCENT19080261'));
    $requete->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet
    ?>
    
    <div class='main'>
    Welcome to Dashboard Online !
    <table class="heavyTable">
    <thead>
        <tr>
          <th>Case</th>
          <th>Card</th>
        </tr>
      </thead>
      <tbody>
    <?php
    while( $ligne = $requete->fetch() ) // on récupère la liste des membres
    {       
            echo '<tr>';
            echo '<td>'.$ligne->CASENUMBER.'</td>'; // on affiche les membres
            echo '<td>'.$ligne->NUMEROFICHE.'</td>';
            echo '</tr>';
    }
    ?>
        </tbody>
    </table>
    <?php
    $requete->closeCursor(); // on ferme le curseur des résultats
//$connexion->close
}
catch (PDOException $erreur)
{
	echo $erreur->getMessage();
}
?>