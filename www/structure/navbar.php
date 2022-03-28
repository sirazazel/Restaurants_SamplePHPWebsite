<?php

function navbar() {
    $pageName = getCurrentPageName();
    print('
        <header class =" bg-dark mx-0" style="width: 100%">
            <div class = "row">
                <div class = "col-md-1">
                    <img src = "./../resources/logo.png" style="width:100px">
                </div>
                <div class = "col-md-8">
                    <h3 style = "color:whitesmoke; padding-top: 40px"> Restaurants </h3>
                </div>
            </div>
            <div class = "row">
                <nav class = "navbar nav-pills  navbar-expand-lg navbar-dark p-2 sticky-top bg-dark">
                    <div class = "collapse navbar-collapse">
                        <a class = "navbar-brand mx-5');
                            if($pageName === "index.php"){print(' disabled active ');} print('" href="index.php">Top 5 of Today
                        </a>
                        <a class = "nav-item nav-link text-light'); 
                            if($pageName === "restaurants.php"){ print(' disabled active ');}print('" href="catalog.php">All restaurants
                        </a>
                    </div>
                </nav>
            </div>
        </header>
    ');
}

function getCurrentPageName(){
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
?>