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
                <nav class = "navbar nav-pills  navbar-expand-lg navbar-dark p-2 sticky-top bg-dark" style="overflow: hidden;">
                    <div class = "collapse navbar-collapse ">
                        <div class = "d-flex align-content-start flex-column">
                            <a class = "mx-5 nav-item nav-link text-light ');
                                if($pageName === "index.php"){print(' disabled active ');} print('" href="index.php">Today\'s recommendations
                            </a>
                        </div>
                        <div class = "d-flex align-content-end flex-column">
                            <a class = "nav-item nav-link text-light mr-auto'); 
                                if($pageName === "login.php"){ print(' disabled active ');}print('" href="login.php">Login
                            </a>
                        </div>
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