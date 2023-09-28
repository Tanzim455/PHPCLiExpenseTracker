<?php

declare(strict_types=1);

namespace App;



class Menu
{
    const REGISTER = "1. Register\n";
    const LOGIN = "2.Login\n";



    public static function allMenu(): void
    {
        echo "Menu:\n";
        echo MENU::REGISTER;
        echo MENU::LOGIN;
    }
}
