<?php

function navbar() {
    $pageName = getCurrentPageName();
    print('
        <header class = "bg-dark d-flex">
            <div class = "row">
                <div class = "col">
                    <img src = "./../resources/logo.png" style="width:75px">
                </div>
                <div class = "col align-self-center">
                    <h3 style = "margin: 1vw; color:whitesmoke;"> Restaurants </h3>
                </div>
            </div>
        </header>
        <nav class = "navbar sticky-top bg-dark">
            <div class = "flex-column">
                <a class = "mx-5 nav-item nav-link text-light ');
                    if($pageName === "index.php"){print(' disabled active ');} print('" href="index.php">Today\'s recommendations
                </a>
            </div>
            <div class = "flex-column">');
                if (isset($_SESSION['id']) && isset($_SESSION['username'])){
                    print('
                    <p>Hello, </p>
                    <a class = "mx-5 nav-item nav-link text-light mr-auto href="structure/logout.php">Log out</a>
                    ');
                } else {
                    print('
                    <p>Hello, </p>
                    <a class = "mx-5 nav-item nav-link text-light mr-auto href="structure/login.php">Log in</a>
                    ');
                }
            print('
                </a>
            </div>
        </nav>
    ');
}

function getCurrentPageName(){
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
?>