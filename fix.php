<?php
class fix {
    public function sayHello() {
        return "Hello, World!";
    }

    public function add($a, $b) {
        return $a + $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b == 0) {
            echo "this is a test";
            return "Division by zero error!";
        }
        return $a / $b;
    }
    public function subtract($a, $b) {
        return $a - $b;
    }
}