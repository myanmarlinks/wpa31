<?php
class Calculate {
    private $value = 0;
    public function reset() {
        $this->value = 0;
        return $this;
    }
    public function sum($value) {
        $this->value += $value;
        return $this;
    }
    public function minus($value) {
        $this->value -= $value;
        return $this;
    }
    public function multiply($value) {
        $this->value *= $value;
        return $this;
    }
    public function divide($value) {
        $this->value /= $value;
        return $this;
    }
    public function result() {
        return $this->value;
    }
}
$cal = new Calculate();
$foo = $cal->sum(100)
->sum(100)->minus(50)->multiply(2)
->divide(10)->result();
echo $foo . "<br>";
$bar = $cal->reset()->sum(50)
    ->sum(30)->minus(3)->minus(4)->result();
echo $bar . "<br>";


