<?php

function navbar(){ //
    $pageName=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); //This.. thing outputs a string of the current page. 
    print(
        '<nav class = "navbar nav-pills  navbar-expand-lg navbar-dark p-2 fixed-top bg-dark">
            <div class = "collapse navbar-collapse">
                <a class = "navbar-brand mx-5');
                if($pageName === "index.php"){
                    print(' disabled active ');
                }
                print('" href="index.php">All exercises</a>
                <a class = "nav-item nav-link text-light'); 
                if($pageName === "primeNumbers.php"){
                    print(' disabled active ');
                }
                print('" href="primeNumbers.php">Prime Numbers</a>
                <a class = "nav-item nav-link text-light'); 
                if($pageName === "multiplicationTables.php"){
                    print(' disabled active ');
                }
                print('" href="multiplicationTables.php">Multiplication Tables</a>
                <a class = "nav-item nav-link text-light'); 
                if($pageName === "divisors.php"){
                    print(' disabled active ');
                }
                print('" href="divisors.php">Divisors</a>
                <a class = "nav-item nav-link text-light'); 
                if($pageName === "numberSpelling.php"){
                    print(' disabled active ');
                }
                print('" href="numberSpelling.php">Number Spelling</a>
            </div>
        </nav>
        '
    );   
}

?>