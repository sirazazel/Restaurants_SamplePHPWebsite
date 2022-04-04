<?php
include 'restaurant.php';
include 'connection.php';

// Function with hardcoded sample of restaurants for exercise 1

// function getRestaurants(){
//     $restaurant1 = new Restaurant ("Japo Santa Catalina", "Sant Magí, 25 07013", "971738321", "Menjar japonès amb especialitat en el sushi.","./../resources/japosc.png");
//     $restaurant2 = new Restaurant ("Enoteca 1918", "La Fàbrica, 3 07013", "605939063", "Deliciosa pasta i menjar mediterrani","./../resources/Enoteca 1918.png");
//     $restaurant3 = new Restaurant ("Cannibal Cantina Bistro", "Sant Antoni, 8 07002", "662542089", "Cuina deliciosa i un ambient familiar i acollidor","./../resources/cannibal.png");
//     $restaurant4 = new Restaurant ("Izakaya Mallorca", "d'Espartero, 15 07014", "871037633", "Street food japonesa amb opcions vegetarianes, veganes i fora gluten.","./../resources/izakaya.png");
//     $restaurant5 = new Restaurant ("Fabrik", "Sant Magí 84, 07013", "610890621", "Menjar contemporani amb cervesa artesanal i plats generosos.","./../resources/fabrik.png");

//     $restaurants = [$restaurant1,$restaurant2,$restaurant3,$restaurant4,$restaurant5];

//     return $restaurants;
// }

// Function with restaurant data stored into a MySQL database.

function getRestaurants(){

    $database = getConnection();

    $selectAllRestaurants = "SELECT * FROM restaurant";

    // If our query returns rows of data...
    if($restaurantsTable = $database->query($selectAllRestaurants)) {
        while ($restaurantRow = $restaurantsTable->fetch_object()){
            //All fields of a row of data are formatted into an object of my class Restaurant and then stored into an array.
            $allRestaurants[] = new Restaurant ($restaurantRow->id, $restaurantRow->name,$restaurantRow->address,$restaurantRow->phone, $restaurantRow->description, $restaurantRow->picture);
        }
    }

    return $allRestaurants;

}

// Getting a single restaurant passed as attribute. 

function getRestaurant($id){

    $database = getConnection();
    $selectRestaurants = "SELECT * FROM restaurant WHERE id = $id";
    
    // If our query returns rows of data...
    if($restaurantsTable = $database->query($selectRestaurants)) {
        while ($restaurantRow = $restaurantsTable->fetch_object()){
            $restaurant = new Restaurant ($restaurantRow->id, $restaurantRow->name,$restaurantRow->address,$restaurantRow->phone, $restaurantRow->description, $restaurantRow->picture);
        }
    }

    return $restaurant;
}
?>