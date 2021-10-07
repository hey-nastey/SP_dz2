<?php
interface MechanismInterface{
    public function rotation();
}
class ferrisWheel{
    private $seats,$doors,$windows, $mechanismWheel;//Сиденья,Двери,Окна
    //конструктор
    public function __construct($seats ,$doors ,$windows,MechanismInterface $newMechanism){
        $this->doors = $doors;
        $this->seats = $seats;
        $this->windows = $windows;
        $this->mechanismWheel = $newMechanism;
    }
    //геттеры
    public function getDoors()
    {
        return $this->doors;
    }
    public function getSeats()
    {
        return $this->seats;
    }
    public function getWindows()
    {
        return $this->windows;
    }
}
class Wheel implements MechanismInterface{
    public function rotation(){}
}
$mechanism = new Wheel();
$myFerrisWheel = new ferrisWheel('мягкие', 'надежные','имеются',$mechanism);
echo 'Сиденья: '.$myFerrisWheel->getSeats().'<br>';
echo 'Двери: '.$myFerrisWheel->getDoors().'<br>';
echo 'Окна: '.$myFerrisWheel->getWindows().'<br>';







