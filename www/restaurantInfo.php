<!DOCTYPE html>
<html>

    <?php
        include 'structure/navbar.php';
        include 'structure/footer.php';
        include 'content/getRestaurants.php';
    ?> 

    <head>
        <title>Espardenya's Testing Area</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    
    <body class="bg-light">
        
        <?php navbar()?>

        <?php 
        $i = $_GET["restid"];
        $restaurant = getRestaurant($i); 
        ?>

        <div class="p-3">
            <div class = "row">
                <div class = "col-sm-2">
                    <img src=<?php print($restaurant->img) ?> class="card-img">
                </div>
                <div class = "col">
                    <div>
                        <h4><?php print($restaurant->name)?></h4>
                    </div>
                    <div >
                        <p style = "text-align: justify; padding: 1%;"><?php print($restaurant ->desc)?></p>
                    </div>
                </div>
                <div class = "col-sm-4">
                    <p>Contact at: <?php print($restaurant->phone)?></p>
                    <p>Address info: <?php print ($restaurant->addr)?></p>
                </div>
            </div>
        </div>

    


        <?php footer(); ?>

    </body>
    
</html>