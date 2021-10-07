<?php
abstract class People{
    protected $name;

    public abstract function sleep();
    public abstract function work();
}
class I extends People{
    //мои методы
    public function sleep(){//cон
        echo 'я не высыпаюсь...&#128564</br>';
    }
    public function work(){//выполнение каких-либо дел
        echo 'who is work?</br>';
    }
}
class anotherPeople extends People{
    public function sleep(){//cон
        echo 'я высыпаюсь!</br>';
    }
    public function work(){//выполнение каких-либо дел
        echo 'work is good';
    }
}
$me = new I();
$people = new anotherPeople();
$me->sleep();
$me->work();
$people->sleep();
$people->work();
