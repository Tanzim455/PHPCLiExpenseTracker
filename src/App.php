<?php

use App\Menu;

require_once 'vendor/autoload.php';

class App
{
    public function run()
    {
        Menu::allMenu();
        $readline = readline("Select an option: ");
    }
}
