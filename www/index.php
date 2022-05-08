<?php session_start();?>

<!DOCTYPE html>

<html>

    <?php
        include 'structure/navbar.php';
        include 'structure/footer.php';
        include 'content/getRestaurants.php';
        include 'structure/login.php';
    ?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Espardenya's Testing Area</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style/sticky-footer.css" rel="stylesheet"> 
    </head>
    
    <?php 
    //Executing the login on refresh page and form variables set.
    if(!isset($_SESSION['user_id'])&&(isset($_POST['username']) and isset($_POST['password']))){
        login();
    }
    ?>


    <body class="bg-light">
        
        <?php navbar()?>
        <main class = "d-flex justify-content-center" role="main">
            <?php
            
            $restaurants = getRestaurants();
            $length = count($restaurants);
            
            for($i = 0; $i < $length; $i++){
                print('
                <div class="card m-3 border border-dark my-5">
                    <img src="'.$restaurants[$i] ->img.'" class="card-img" style = "width: 250px; filter: blur(2px);">
                    <a href="restaurantInfo.php?restid='.$restaurants[$i]->id.'" class="stretched-link"></a>
                    <div class = "card-img-overlay text-center align-self-center" style = "color:whitesmoke">
                        <h4>'.$restaurants[$i]->name.'</h4>
                    </div>          
                </div>
                    ');
            }
            ?>       

        </main>

        <?php footer()?>
    </body>
    
</html>