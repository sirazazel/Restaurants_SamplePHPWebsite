<?php

function getConnection(){
    return new mysqli("db", "sirazazel", "passwd", "restaurantsdb");
}
?>