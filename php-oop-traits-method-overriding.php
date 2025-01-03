<?php
trait hello {
    public function sayhello() {
        echo "Hello from Hello Trait.\n";
    }
}

trait hi {
    public function sayhello() {
        echo "Hello from Hi Trait.\n";
    }
}

class base {
    use hello, hi {
        hello::sayhello insteadof hi;
        hi::sayhello as newhello;
    }
}

$test = new base();

$test->sayhello();
?>