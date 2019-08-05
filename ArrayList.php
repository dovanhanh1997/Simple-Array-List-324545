<?php


class ArrayList
{
    public $arrayList = [];

    public function __construct()
    {
    }

    public function ArrayList($arr = ""){
        if (is_array($arr)){
            $this->arrayList = $arr;
        }else {
            $this->arrayList = array();
        }
    }

    public function add($obj){
        array_push($this->arrayList,$obj);
    }

    public function getArray($index){
        $size = count($this->arrayList) +1;
        if (is_integer($index) && $index < $size){
            return $this->arrayList[$index];
        }else{
            die("Error in ArrayList.get");
        }
    }

    public function isInteger($toCheck){
        return preg_match("/^[0-9]+$/",$toCheck);
    }


}