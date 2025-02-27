<?php
//  Selfwork PHP OOP 8
//  Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:
 
//      public function sum($a, $b) {
//        return $a + $b;
//      }
 
//      public function sub($a, $b) {
//        return $a - $b;
//      }
 
//      public function mul($a, $b) {
//        return $a * $b;
//      }
 
//      public function div($a, $b) {
//        return $a / $b;
//      }
 
//      public function sqr($a){
//        return sqrt($numero);
//      }
 
 
 
//  Crea quindi una classe Rettangolo con i seguenti attributi:
 
//      Base (b);
//      Altezza (h);
 
 
//  Il tuo compito sara' quello di creare 3 metodi che andranno a calcolare:
 
//      Area → b * h
//      Perimetro → 2 * b + 2 * h
//      Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)
 
 
//  Tutte queste operazioni pero' dovranno essere richiamate dal trait Calculator

 
trait Calculator
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function mul($a, $b)
    {
        return $a * $b;
    }

    public function div($a, $b)
    {
        return $a / $b;
    }

    public function sqr($a)
    {
        return sqrt($a);
    }
}

 
class Rettangolo {

    use Calculator;

    public $base;
    public $altezza;


    public function __construct($base, $altezza)
    {
        $this->base = $base;
        $this->altezza = $altezza;
    }



    public function calcolaArea()
    {
        return $this->mul($this->base, $this->altezza);
    }

    public function calcolaPerimetro()
    {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza));
    }

    public function calcolaDiagonale()
    {
        $baseSquared = $this->mul($this->base, $this->base);
        $altezzaSquared = $this->mul($this->altezza, $this->altezza);
        $sumOfSquares = $this->sum($baseSquared, $altezzaSquared);
        return $this->sqr($sumOfSquares);
    }
}

 

// Crea un rettangolo random con base 5 e altezza 10
$randBase = rand(2, 10);
$randAltezza = rand(1, 5); 
$rettangolo = new Rettangolo($randBase, $randAltezza);

echo "Rettangolo con base $randBase e altezza $randAltezza\n";

// Calcola Area
$area = $rettangolo->calcolaArea();
echo "Area: " . $area . "\n";

// Calcola e stampa il perimetro  
$perimetro = $rettangolo->calcolaPerimetro();
echo "Perimetro: " . $perimetro . "\n";

// Calcola e stampa la  diagonale
$diagonale = $rettangolo->calcolaDiagonale();
echo "Diagonale: " . $diagonale . "\n";



 

?>




?>