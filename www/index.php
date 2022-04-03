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
        
        $restaurants = getRestaurants();
        $length = count($restaurants);
        
        for($i = 0; $i < $length; $i++){
            print('
            <div class="card p-3">
                <div class = "row">
                    <div class = "col-sm-2">
                        <img src="'.$restaurants[$i] ->img.'" class="card-img">
                        <a href="restaurantInfo.php?restid='.$i.'" class="stretched-link"></a>
                    </div>
                    <div class = "col">
                        <div class = "card-title">
                            <h4>'.$restaurants[$i]->name.'</h4>
                        </div>
                        <div class = "card-body">
                            <p class="card-text" style = "text-align: justify; padding: 1%;">'.$restaurants[$i]->desc. '</p>
                        </div>
                    </div>
                </div>
            </div>
                ');
        }
        ?>            

        <?php footer(); ?>

    </body>
    
</html>