<?php
abstract class People{
    public abstract function sleeping();
}
class I extends People{
    public function sleeping(){
        echo 'я не высыпаюсь...&#128564</br>';
    }
}
class anotherPeople extends People{
    public function sleeping(){
        echo 'я высыпаюсь!</br>';
    }
}
class We{
    public function sleep(People $people){
        return $people->sleeping();
    }
}
$me = new I();
$people = new anotherPeople();
$someone = new We();
$someone->sleep($me);
$someone->sleep($people);















