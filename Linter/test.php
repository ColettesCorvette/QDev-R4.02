<?php

class TestClass
{ // 1. Correction de la convention de nommage (PSR-12, PHP CodeSniffer)

    private $var1;
    private $var2;

    public function __construct() // 2. Ajout de visibilité explicite (PHP CodeSniffer)
    {
        $this->var1 = 'Hello';
        $this->var2 = 'World';
        echo $this->var1 . ' ' . $this->var2;
    }

    public function badMethodName() // 3. Correction de la convention de nommage (PSR-12, PHP CodeSniffer)
    {
        for ($i = 0; $i < 10; $i++) { // 4. Correction de l'espacement et ajout d'accolades (PHP CodeSniffer)
            if ($i % 2 == 0) {
                echo 'Pair'; // 5. Ajout d’espaces et d’accolades (PHP CodeSniffer)
            }
        }
    }

    public function complexMethod() // 6. Complexité cyclomatique réduite (PHP Mess Detector)
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
