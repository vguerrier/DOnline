<?php
//connect.php file code start

$hote = '10.132.16.30';
$port = '1521'; // port par défaut
$service = 'CQSCM1';
$utilisateur = 'readcquest';
$motdepasse = 'readcquest';

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
    
    $requete=$connexion->prepare("select numerofiche, numeroreference from cqcentral.anomalie where numerofiche = :numCard"); // on va chercher tous les membres de la table qu'on trie par ordre croissant
    $requete->execute(array('numCard' => 'GCENT19080261'));
    $requete->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet
    while( $ligne = $requete->fetch() ) // on récupère la liste des membres
    {
            echo '<br />numero Case : '.$ligne->NUMEROREFERENCE.'<br />'; // on affiche les membres
            echo 'numero fiche : '.$ligne->NUMEROFICHE.'<br />';
    }
$requete->closeCursor(); // on ferme le curseur des résultats
//$connexion->close
}
catch (PDOException $erreur)
{
	echo $erreur->getMessage();
}
?>