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
            return "Division by zero error!";
        }
        return $a / $b;
    }
}