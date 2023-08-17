<?php

// Animal base class
class Animal {
    public function makeSound() {
        return "Some generic sound";
    }
}

// Dog class
class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

// Cat class
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Duck class
class Duck extends Animal {
    public function makeSound() {
        return "Quack! Quack!";
    }
}

// Usage
$animals = [
    new Dog(),
    new Cat(),
    new Duck()
];

foreach ($animals as $animal) {
    echo get_class($animal) . " says: " . $animal->makeSound() . PHP_EOL;
}

?>
