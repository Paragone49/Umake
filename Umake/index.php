<?php





$Dictionnaire=array(
    $loup = array("loup",
        $etoile1= array( $viande = array("GrosGibier",1,0.75),
            $peau = array("PeauDeLoup",1,4),
            $carcasse = array("CarcasseLoup",1,5),
            $loot = array("CoeurDeLoup",1,2),
        ),
        $etoile2= array( $viande = array("GrosGibier",2,0.75),
            $peau = array("PeauDeLoup",1,5),
            $carcasse = array("CarcasseLoup",1,5),
            $loot = array("CoeurDeLoup",1,2),
        ),
        $etoile3= array( $viande = array("GrosGibier",4,0.75),
            $peau = array("PeauDeLoup",1,5),
            $carcasse = array("CarcasseLoup",1,5),
            $loot = array("CoeurDeLoup",1,2),
        ),
    ),
    $ours = array("Ours",
        $etoile1= array( $viande = array("GrosGibier",1,0.75),
            $peau = array("PeauDeOurs",1,5),
            $loot = array("GriffeDeOurs",1,2),
        ),
        $etoile2= array( $viande = array("GrosGibier",2,0.75),
            $peau = array("PeauDeOurs",1,6),
            $loot = array("GriffeDeOurs",1,2),
        ),
        $etoile3= array( $viande = array("GrosGibier",4,0.75),
            $peau = array("PeauDeOurs",1,7),
            $loot = array("GriffeDeOurs",1,2),
        ),
    ),
);
foreach ($Dictionnaire as $Animal){
    echo $Animal[0];
}

