<?php

function getConnection(){

    //why??

    $connection = new mysqli("db", "sirazazel", "passwd", "restaurantsdb");
    return $connection;
}

?>