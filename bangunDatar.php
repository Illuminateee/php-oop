<?php

class Lingkaran{
    var $r;

    public function area($r){
        $this->r = $r;
        return 3.14 * $r * $r;
    }

    public function circumference($r){
        return 2 * 3.14 * $r;
    }

    public function enlarge(int $r, int $scale){
        return $r * $scale;
    }

    public function shrink(int $r, int $scale){
        return $r / $scale;
    }

    public function __destruct()
    {
        echo "Lingkaran, yang memiliki luas {$this->area($this->r)} dan keliling {$this->circumference($this->r)}";
    }
}

class Persegi{
    var $s;

    public function area($s){
        $this->s = $s;
        return $s * $s;
    }

    public function circumference($s){
        return 4 * $s;
    }

    public function enlarge(int $s, int $scale){
        return $s * $scale;
    }

    public function shrink(int $s, int $scale){
        return $s / $scale;
    }

    public function __destruct()
    {
        echo "Persegi, yang memiliki luas {$this->area($this->s)} dan keliling {$this->circumference($this->s)} ";
    }
}


class PersegiPanjang{
    var $p;
    var $l;

    public function area(int $p, int $l){
        $this->p = $p;
        $this->l = $l;
        return $p * $l;
    }

    public function circumference(int $p, int $l){
        return (2 * $p )+ (2 * $l);
    }

    public function enlarge(int $p, int $l,int $scale){
        return ($p * $scale) + ($l * $scale);
    }

    public function shrink(int $p, int $l,int $scale){
        return ($p / $scale) + ($l / $scale);
    }

    public function __destruct()
    {
        echo "Persegi Panjang, yang memiliki luas {$this->area($this->p, $this->l)} dan keliling {$this->circumference($this->p, $this->l)}";
    }
}



$lingkaran = new Lingkaran;
var_dump($lingkaran->area(10));

$persegi = new Persegi;
var_dump($persegi->area(10));

$persegipanjang = new PersegiPanjang;
var_dump($persegipanjang->area(10,10));

?>