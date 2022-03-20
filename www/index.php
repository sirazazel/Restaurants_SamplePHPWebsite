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

        <?php navbar()?>
        <div style = "margin-top:30px">

        <?php
        
        $restaurants = getRestaurants();
        $length = count($restaurants);

        for($i = 0; $i < $length; $i++){
                print('
                    <div class = "d-flex mx-lg-5 py-3 ">
                        <img src="'.$restaurants[$i] ->img.'" style="width:300px">
                        <div class = "card">
                            <div class = "card-header text-center">
                                <h4>'.$restaurants[$i]->name.'</h4>
                            </div>
                            <div class = "card-body">
                                <p> '.$restaurants[$i]->desc.'</p>
                                <p>'.$restaurants[$i]->phone.'</p>
                                <p>'.$restaurants[$i]->addr.'</p>
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
