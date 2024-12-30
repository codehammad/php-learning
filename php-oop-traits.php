<?php
// Traits are like collections of methods that can be shared between multiple classes.
// Instead of writing the same methods in different classes, you can put them in a trait 
// and "use" it in any class that needs them.

trait hello {
    public function sayhello() {
        echo "Hello everyone";
    }

    public function sayhi() {
        echo "Hi everyone";
    }
}

trait bye {
    public function saybye() {
        echo "Bye Bye everyone";
    }
}

class base {
    use hello, bye;
}

class base2 {
    use hello;
}

$test = new base();
$test->sayhello();
$test->saybye();

?>