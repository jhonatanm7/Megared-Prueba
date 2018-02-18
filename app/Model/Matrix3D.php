<?php
namespace App\Model;
/**
 * Created by IntelliJ IDEA.
 * User: Cristian Parada
 * Date: 28/06/2016
 * Time: 3:30
 */
class Matrix3D
{
    private $n, $matrix;

    function __construct($n)
    {
        $this->n = $n;
        $this->setUpMatrix($n);
    }

    private function setUpMatrix($n)
    {
        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j <= $n; $j++) {
                for ($k = 0; $k <= $n; $k++) {
                    $this->matrix[$i][$j][$k] = 0;
                }
            }
        }
    }

    public function update($x, $y, $z, $value)
    {
        $this->matrix[$x][$y][$z] = $value;
    }

    public function query($x1, $y1, $z1, $x2, $y2, $z2)
    {
        $sum = 0;
        for ($i = $x1; $i <= $x2; $i++) {
            for ($j = $y1; $j <= $y2; $j++) {
                for ($k = $z1; $k <= $z2; $k++) {
                    $sum += $this->matrix[$i][$j][$k];
                }
            }
        }
        return $sum;
    }


    public function getMatrix()
    {
        return $this->matrix;
    }

    public function getN()
    {
        return $this->n;
    }
}