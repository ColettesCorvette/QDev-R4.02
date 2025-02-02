<?php

class test_class { // 1. Mauvaise convention de nommage (PSR-12, PHP CodeSniffer)

    private $var1;
    private $var2;

    function __construct() { // 2. Manque de visibilité explicite (PHP CodeSniffer)
        $this->var1 = "Hello";
        $this->var2 = "World";
        echo $this->var1 . " " . $this->var2;
    }

    function BadMethodName() { // 3. Mauvaise convention de nommage (PSR-12, PHP CodeSniffer)
        for($i=0;$i<10;$i++) { // 4. Mauvais espacement et absence d'accolades (PHP CodeSniffer)
            if($i%2==0){echo "Pair";} // 5. Manque d’espaces et d’accolades (PHP CodeSniffer)
        }
    }

    public function complexMethod() { // 6. Complexité cyclomatique trop élevée (PHP Mess Detector)
        $sum = 0;
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0) {
                if ($i % 5 == 0) {
                    if ($i % 7 == 0) {
                        $sum += $i;
                    }
                }
            }
        }
        return $sum;
    }
}

// 7. Variable inutilisée (PHP Mess Detector)
$unusedVar = "I am not used";

// 8. Erreur de syntaxe (PHP Lint)
echo "This is an error // manque un guillemet fermant

?>
