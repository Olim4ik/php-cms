<?php 

use Engine\Cms;
use Engine\DI\DI;

try {
    // Dependency injection
    $di = new DI();

    // Set up some dependencies

    $cms = new Cms($di);
    $cms->run();

} catch (\ErrorException $e) {
    echo $e->getMessage();
}
