@ok
<?php

class WithStaticVariadicFun {
    public static function sum($x, ...$args) {
        return $x + array_sum($args);
    }
}

class WithStaticVariadicFunDerived extends WithStaticVariadicFun {}

class WithVariadicMethod {
    public function sum($x, ...$args) {
        return $x + array_sum($args);
    }
}

var_dump((int)WithStaticVariadicFun::sum(1, 2, 3, 4, 5));
var_dump((int)WithStaticVariadicFunDerived::sum(1, 2, 3, 4, 5));

$inst = new WithVariadicMethod();
var_dump((int)$inst->sum(1, 2, 9, 10));
