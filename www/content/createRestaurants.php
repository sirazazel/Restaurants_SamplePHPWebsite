<?php
include 'restaurants.php';

//name address phone description
function setupRestaurants(){
    $restaurant1 = new Restaurant ("Japo Santa Catalina", "Sant Magí, 25 07013", "971738321", "Menjar japonès amb especialitat en el sushi.");
    $restaurant2 = new Restaurant ("Enoteca 1918", "La Fàbrica, 3 07013", "605939063", "Deliciosa pasta i menjar mediterrani");
    $restaurant3 = new Restaurant ("Cannibal Cantina Bistro", "Sant Antoni, 8 07002", "662542089", "Cuina deliciosa i un ambient familiar i acollidor");
    $restaurant4 = new Restaurant ("Izakaya Mallorca", "", "", "");
    $restaurant5 = new Restaurant ("Fabrik", "", "", "");


}


?>