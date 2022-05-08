<?php
function navbar() {
    $pageName = getCurrentPageName();
    print('
        <header class = "bg-dark d-flex">
            <img src = "./../resources/logo.png" style="width:100px; float: none; text-align:center;">
            <div class ="mx-auto my-4">
                <h3 style = "color:whitesmoke;"> Restaurant Guide </h3>
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