<?php

include_once('EnhanceTestFramework.php');

class Foo{

    public function sumTwoNumbers($a, $b){

        return -1;
    }
}

class FooTests extends \Enhance\TestFixture{

    public function sumTwoNumbersWith1and1Expect2Test(){

        $target = new Foo();
        $result = $target->sumTwoNumbers(1, 1);

        \Enhance\Assert::areIdentical(2, $result);
    }
}


\Enhance\Core::runTests();