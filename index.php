<?php
class inputChecker{
    public $string;
    public $int;
    public $bool;
    public $double;
    public $array;
    public $emptyArray;
    public $function;
    public $class;

    function __construct($string, $int, $bool, $double, $array, $emptyArray, $function, $class) {
        $this->string = $string;
        $this->int = $int;
        $this->bool = $bool;
        $this->double = $double;
        $this->array = $array;
        $this->emptyArray = $emptyArray;
        $this->function = $function;
        $this->class = $class;
    }
    function thisIsAFunction(){
        
    }
    function dataTypeChecker(){
        echo $this->string . " " . gettype($this->string) . "<br>";
        echo intval($this->int) . " " . gettype($this->int) . "<br>";
        echo boolval($this->bool) . " " . gettype($this->bool) . "<br>";
        echo doubleval($this->double) . " " .gettype($this->double) . "<br>";
        print_r($this->array); echo gettype($this->array) . "<br>";  
        print_r($this->emptyArray); echo gettype($this->emptyArray) . "<br>";  
        var_dump(is_callable($this->function, true, $callable_name));  
        echo $callable_name, "<br>";
        var_dump(is_callable($this->class, true, $callable_name));  
        echo $callable_name, "<br>"; 
    }

}
$inputChecker = new inputChecker("Hello",2, true, 6.9, array("red", "blue", "green", "blue"),array(), "thisIsAFunction", "inputChecker");
$inputChecker->dataTypeChecker();

?>
