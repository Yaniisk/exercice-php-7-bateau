<?php

$bateau = array(
    "Manureva" => array ( "membre" => 3,
                        "passager" => 4
                        )
    "Surcouf" => array ( "membre" => 8
                        "passager" => 15
                        )
    "Sirius" => array ("membre" = > 4
                        "passager" => 6
                        )

)
foreach ($bateau as $key => value){
    if($value ["passager"]>10)
    (
        echo $key
    )
}
?>