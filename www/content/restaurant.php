<?php
class Restaurant{
    public $id;
    public $name;
    public $addr;
    public $phone;
    public $desc;
    public $img;

    public function __construct($id, $name, $addr, $phone, $desc, $img){
        $this->name = $name;
        $this->addr = $addr;
        $this->phone = $phone;
        $this->desc = $desc;
        $this->img = $img;
        $this->id = $id;
    }
}
?>