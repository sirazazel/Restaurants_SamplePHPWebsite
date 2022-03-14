<!DOCTYPE html>
<html>

    <?php
        include 'structure/navbar.php';
        include 'structure/footer.php';
        include 'content/createRestaurants.php';
    ?> 

    <head>
        <title>Espardenya's Testing Area</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    
    <body class="bg-light">

        <?php navbar()?>

        <!-- <div class = "d-flex mx-lg-5">
            <h3 style = "color: lightgray; text-align:center; padding-top: 75px; padding-bottom: 10px;">Restaurant Reviews</h3>            
            
            <div class = "card">
                <div class = "card-header text-center">
                    <h4>Restaurant d'exemple</h4>
                </div>
                <div class = "card-body">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum tincidunt erat, non efficitur ante gravida ullamcorper. Sed feugiat lobortis diam, eget placerat nibh malesuada eget. Suspendisse tincidunt vulputate diam, in laoreet lorem dignissim vel. Morbi augue ex, tempor quis viverra at, fermentum ac arcu. Aenean dapibus nunc eu tellus ultricies, porttitor venenatis tortor euismod. In hac habitasse platea dictumst. Nulla facilisi. Duis at velit fermentum, mattis ipsum nec, vulputate felis. </p>
                    <p>Adreça d'exemple</p>
                </div>
            </div>
        </div> -->

        <div style = "margin-top:30px">

        <?php Restaurant::getFirstFiveRestaurants(); ?>

        </div>
            
        <?php footer(); ?>

    </body>
    
</html>
