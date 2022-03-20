<?php
class Restaurant{
    public $name;
    public $addr;
    public $phone;
    public $desc;
    public $img;

    public function __construct($name, $addr, $phone, $desc, $img){
        $this->name = $name;
        $this->addr = $addr;
        $this->phone = $phone;
        $this->desc = $desc;
        $this->img = $img;
    }
}
?>