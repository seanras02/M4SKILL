<?php

function showArray($array){
    foreach($array as $element){
        echo $element . "<br>";
    }
}

$mijnArray = array(12, 65, 25, 43, 324);
showArray($mijnArray);
?>



<?php

function vulArray($aantalCijfers) {

    if ($aantalCijfers < 5) {

        echo "Minimaal 5 cijfers zoals je kan zien.";

        return;

    }

   

    $array = array();

    for ($i = 0; $i < $aantalCijfers; $i++) {

        $array[] = rand(1, 100);

    }

   

    return $array;

}




function toonArrayInBrowser($array) {

    echo "<pre>";

    print_r($array);

    echo "</pre>";

}




$cijfers = vulArray(20);

toonArrayInBrowser($cijfers);




?>