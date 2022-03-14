<?php

function navbar(){ //
    $pageName=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); //This.. thing outputs a string of the current page. 
    print(
        '<nav class = "navbar nav-pills  navbar-expand-lg navbar-dark p-2 sticky-top bg-dark">
            <div class = "collapse navbar-collapse">
                <a class = "navbar-brand mx-5');
                if($pageName === "index.php"){
                    print(' disabled active ');
                }
                print('" href="index.php">Top 5 Restaurants in Mallorca</a>
                <a class = "nav-item nav-link text-light'); 
                if($pageName === "restaurants.php"){
                    print(' disabled active ');
                }                
                print('" href="numberSpelling.php">All restaurants</a>
            </div>
        </nav>
        '
    );   
}

?>