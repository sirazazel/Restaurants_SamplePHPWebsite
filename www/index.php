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
    </head>
    
    <body class="bg-light">
        
        <?php navbar_top()?>   

        <?php navbar()?>
        
        <div style = "margin-top:30px">
            <?php
            
            $restaurants = getRestaurants();
            $length = count($restaurants);

            for($i = 0; $i < $length; $i++){
                print('
                    <div class = "d-flex py-3">
                        <div class = "card mx-auto" style="width: 50vw;">
                            <div class = "card-header text-center">
                                <h4>'.$restaurants[$i]->name.'</h4>
                            </div>
                            <div class = "row no-gutters">
                                <div class="col">
                                    <img src="'.$restaurants[$i] ->img.'" style="width: 350px;" class="card-img">
                                </div>
                                <div class="col">
                                    <div class = "card-body p-2">
                                        <p>'.$restaurants[$i]->desc. '</p>
                                        <p>'.$restaurants[$i]->phone.'</p>
                                        <p>'.$restaurants[$i]->addr. '</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ');
            }
            ?>
        </div>
            
        <?php footer(); ?>

    </body>
    
</html>