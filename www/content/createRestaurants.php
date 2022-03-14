<?php
include 'restaurant.php';

//name address phone description

function getRestaurants(){
    $restaurant1 = new Restaurant ("Japo Santa Catalina", "Sant Magí, 25 07013", "971738321", "Menjar japonès amb especialitat en el sushi.");
    $restaurant2 = new Restaurant ("Enoteca 1918", "La Fàbrica, 3 07013", "605939063", "Deliciosa pasta i menjar mediterrani");
    $restaurant3 = new Restaurant ("Cannibal Cantina Bistro", "Sant Antoni, 8 07002", "662542089", "Cuina deliciosa i un ambient familiar i acollidor");
    $restaurant4 = new Restaurant ("Izakaya Mallorca", "d'Espartero, 15 07014", "871037633", "Street food japonesa amb opcions vegetarianes, veganes i fora gluten.");
    $restaurant5 = new Restaurant ("Fabrik", "Sant Magí 84, 07013", "610890621", "Menjar contemporani amb cervesa artesanal i plats generosos.");


    $restaurants[] = [$restaurant1,$restaurant2,$restaurant3,$restaurant4,$restaurant5];

    return $restaurants;
}

?>