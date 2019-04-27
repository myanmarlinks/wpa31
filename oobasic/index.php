<?php
interface CeoInterface {
    public function resign();
}
class CEO implements CeoInterface {
    public function resign() {
        echo "Resign! <br>";
    }
}
interface GmInterface {
    public function giveMoney();
}
class GM {
    public function giveMoney() {
        echo "Give Money! <br>";
    }
}
class Manager {
    private $ceo;
    private $gm;
    public function __construct(CeoInterface $ceo, GmInterface $gm) {
        $this->ceo = $ceo;    
        $this->gm = $gm;
    } 
    public function resign() {
        $this->ceo->resign();
    }
    public function giveMoney() {
        $this->gm->giveMoney();
    }
}
$ceo = new CEO();
$gm = new GM();
$manager = new Manager($ceo, $gm);
$manager->resign();
$manager->giveMoney();

?>

