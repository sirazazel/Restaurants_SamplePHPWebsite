<?php
class Restaurant{
    public $name;
    public $addr;
    public $phone;
    public $desc;

    public function __construct($name, $addr, $phone, $desc){
        $this->name = $name;
        $this->add = $addr;
        $this->phone = $phone;
        $this->desc = $desc;

    }

    public function getFirstFiveRestaurants(){
       
        $restaurants = getRestaurants();

        print_r($restaurants);

        // print('
        //         <!-- <div class = "d-flex mx-lg-5">
        //         <h3 style = "color: lightgray; text-align:center; padding-top: 75px; padding-bottom: 10px;">Restaurant Reviews</h3>            
                
        //         <div class = "card">
        //             <div class = "card-header text-center">
        //                 <h4>'.$restaurant1->name.'</h4>
        //             </div>
        //             <div class = "card-body">
        //                 <p> '.$restaurant1->desc.' </p>
        //                 <p>'.$restaurant1->phone.'</p>
        //                 <p>'.$restaurant1->addr.'</p>
        //             </div>
        //         </div>
        //         </div> -->
        //     ');
    }

}


?>