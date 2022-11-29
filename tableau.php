<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
$annee = array(
   "janvier" => 31,
   "février" => 28,
   "mars" => 31,
   "avril" => 30,
   "mai" => 31 ,
   "juin" => 30,
   "juillet" => 31,
   "septembre" => 30,
   "octobre" => 31,
   "novembre" => 30,
   "décembre" => 31
);
asort($annee);

foreach($annee as $cle => $valeur)
{
   echo $cle." : ".$valeur."<br>";
}
?>
<br> <br>
<?php
 $capitales = array(
   "Bucarest" => "Roumanie",
   "Bruxelles" => "Belgique",
   "Oslo" => "Norvège",
   "Ottawa" => "Canada",
   "Paris" => "France",
   "Port-au-Prince" => "Haïti",
   "Port-d'Espagne" => "Trinité-et-Tobago",
   "Prague" => "République tchèque",
   "Rabat" => "Maroc",
   "Riga" => "Lettonie",
   "Rome" => "Italie",
   "San José" => "Costa Rica",
   "Santiago" => "Chili",
   "Sofia" => "Bulgarie",
   "Alger" => "Algérie",
   "Amsterdam" => "Pays-Bas",
   "Andorre-la-Vieille" => "Andorre",
   "Asuncion" => "Paraguay",
   "Athènes" => "Grèce",
   "Bagdad" => "Irak",
   "Bamako" => "Mali",
   "Berlin" => "Allemagne",
   "Bogota" => "Colombie",
   "Brasilia" => "Brésil",
   "Bratislava" => "Slovaquie",
   "Varsovie" => "Pologne",
   "Budapest" => "Hongrie",
   "Le Caire" => "Egypte",
   "Canberra" => "Australie",
   "Caracas" => "Venezuela",
   "Jakarta" => "Indonésie",
   "Kiev" => "Ukraine",
   "Kigali" => "Rwanda",
   "Kingston" => "Jamaïque",
   "Lima" => "Pérou",
   "Londres" => "Royaume-Uni",
   "Madrid" => "Espagne",
   "Malé" => "Maldives",
   "Mexico" => "Mexique",
   "Minsk" => "Biélorussie",
   "Moscou" => "Russie",
   "Nairobi" => "Kenya",
   "New Delhi" => "Inde",
   "Stockholm" => "Suède",
   "Téhéran" => "Iran",
   "Tokyo" => "Japon",
   "Tunis" => "Tunisie",
   "Copenhague" => "Danemark",
   "Dakar" => "Sénégal",
   "Damas" => "Syrie",
   "Dublin" => "Irlande",
   "Erevan" => "Arménie",
   "La Havane" => "Cuba",
   "Helsinki" => "Finlande",
   "Islamabad" => "Pakistan",
   "Vienne" => "Autriche",
   "Vilnius" => "Lituanie",
   "Zagreb" => "Croatie"
);

$nb = count($capitales); 

echo 'nombre de capitales = '.$nb.'<br><br>';

asort($capitales);

foreach($capitales as $nom => $Pays)
    {
        $b = substr($nom,0,1) ;
    if ($b == "B") {
        unset($capitales[$nom]);
    }
    else {
    echo $nom." : ".$Pays."<br>";
} 
    }

foreach($capitales as $cle => $valeur)
{
   echo $cle." : ".$valeur."<br>";
}

foreach($capitales as $nom => $Pays)
   {
      $b = substr($nom,0,1) ;
   if ($b == "B") {
      unset($capitales[$nom]);
   }
   else {
   echo $nom." : ".$Pays."<br>";
} 
   }


echo '<br> <br>';



   $capitales = array(
      "Bucarest" => "Roumanie",
      "Bruxelles" => "Belgique",
      "Oslo" => "Norvège",
      "Ottawa" => "Canada",
      "Paris" => "France",
      "Port-au-Prince" => "Haïti",
      "Port-d'Espagne" => "Trinité-et-Tobago",
      "Prague" => "République tchèque",
      "Rabat" => "Maroc",
      "Riga" => "Lettonie",
      "Rome" => "Italie",
      "San José" => "Costa Rica",
      "Santiago" => "Chili",
      "Sofia" => "Bulgarie",
      "Alger" => "Algérie",
      "Amsterdam" => "Pays-Bas",
      "Andorre-la-Vieille" => "Andorre",
      "Asuncion" => "Paraguay",
      "Athènes" => "Grèce",
      "Bagdad" => "Irak",
      "Bamako" => "Mali",
      "Berlin" => "Allemagne",
      "Bogota" => "Colombie",
      "Brasilia" => "Brésil",
      "Bratislava" => "Slovaquie",
      "Varsovie" => "Pologne",
      "Budapest" => "Hongrie",
      "Le Caire" => "Egypte",
      "Canberra" => "Australie",
      "Caracas" => "Venezuela",
      "Jakarta" => "Indonésie",
      "Kiev" => "Ukraine",
      "Kigali" => "Rwanda",
      "Kingston" => "Jamaïque",
      "Lima" => "Pérou",
      "Londres" => "Royaume-Uni",
      "Madrid" => "Espagne",
      "Malé" => "Maldives",
      "Mexico" => "Mexique",
      "Minsk" => "Biélorussie",
      "Moscou" => "Russie",
      "Nairobi" => "Kenya",
      "New Delhi" => "Inde",
      "Stockholm" => "Suède",
      "Téhéran" => "Iran",
      "Tokyo" => "Japon",
      "Tunis" => "Tunisie",
      "Copenhague" => "Danemark",
      "Dakar" => "Sénégal",
      "Damas" => "Syrie",
      "Dublin" => "Irlande",
      "Erevan" => "Arménie",
      "La Havane" => "Cuba",
      "Helsinki" => "Finlande",
      "Islamabad" => "Pakistan",
      "Vienne" => "Autriche",
      "Vilnius" => "Lituanie",
      "Zagreb" => "Croatie"
   );
   
   $nb = count($capitales); 
   

   echo 'Pays suivi des caapitales<br><br>';
   

   asort($capitales);
   

   foreach($capitales as $nom => $Pays)
       {
           $b = substr($nom,0,1) ;
       if ($b == "B") {
           unset($capitales[$nom]);
       }
       else {
       echo $Pays." : ".$nom."<br>";
   } 
       }
   
   foreach($capitales as $cle => $valeur)
   {
      echo $cle." : ".$valeur."<br>";
   }
   
   ?>
   



<br> <br>











<?php
$departements = array(
   "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
   "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
   "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
   "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

ksort($departements);


foreach($departements as $cle => $valeur)
{
echo $cle." : ".count($valeur)."<br>";
}

?>
</body>
</html>



