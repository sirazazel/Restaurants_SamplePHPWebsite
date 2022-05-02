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
                if (isset($_SESSION['user_id'])){
                    print('
                    <h4 class = "mx-5 text-light mr-auto" >Hello, '.$_SESSION['user_id'].'</h4>
                    <p class = "mx-5 text-light mr-auto" >'.$_SESSION['email'].'</p>
                    ');
                } else {
                    print('
                    <p class = "mx-5 text-light mr-auto" >Hello, guest</p>
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