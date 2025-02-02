<?php

class TestClass
{

    private $var1;
    private $var2;

    public function __construct()
        $this->var1 = 'Hello';
        $this->var2 = 'World';
        echo $this->var1 . ' ' . $this->var2;
    }

    public function badMethodName()
    {
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                echo 'Pair';
            }
        }
    }

    public function complexMethod()
    {
        $sum = 0;
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }
}
