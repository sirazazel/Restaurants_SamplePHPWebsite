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
        <title>Espardenya's Testing Area</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    
    <body class="bg-light">
        
        <?php navbar()?>
        <div class = "d-flex justify-content-center" style="height:100%">
            <?php
            
            $restaurants = getRestaurants();
            $length = count($restaurants);
            
            for($i = 0; $i < $length; $i++){
                print('
                <div class="card m-3 border border-dark">
                    <img src="'.$restaurants[$i] ->img.'" class="card-img" style = "width: 250px; filter: blur(2px);">
                    <a href="restaurantInfo.php?restid='.$restaurants[$i]->id.'" class="stretched-link"></a>
                    <div class = "card-img-overlay text-center align-self-center" style = "color:whitesmoke">
                        <h4>'.$restaurants[$i]->name.'</h4>
                    </div>          
                </div>
                    ');
            }
            ?>       
        </div>

        <?php footer()?>
    </body>
    
</html>