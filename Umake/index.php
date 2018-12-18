<?php





$Dictionnaire=array(
    $loup = array(
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
    $ours = array(
        $etoile1= array( $viande = array("GrosGibier",1,0.75),
            $peau = array("PeauDeOurs",1,5),
            $loot = array("GriffeDeOurs",1,2),
        ),
        $etoile2= array( $viande = array("GrosGibier",2,0.75),
            $peau = array("PeauDeLoup",1,6),
            $loot = array("GriffeDeOurs",1,2),
        ),
        $etoile3= array( $viande = array("GrosGibier",4,0.75),
            $peau = array("PeauDeLoup",1,7),
            $loot = array("GriffeDeOurs",1,2),
        ),
    ),
);




foreach ($loup as $raret){
    foreach ($raret as $loot){
        foreach ($loot as $desk){
            echo " ".$desk;
        }
    }
}

