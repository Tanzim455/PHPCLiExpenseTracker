<?php

declare(strict_types=1);

namespace App;



class Menu
{
<<<<<<< HEAD
    const REGISTER = "1. Register\n";
    const LOGIN = "2.Login\n";

=======
    const ADD_INCOME = "1. Add Income\n";
    const ADD_EXPENSE = "2. Add Expense\n";
    const DISPLAY_TOTAL_INCOME = "3. Display Total Income\n";
    const DISPLAY_TOTAL_EXPENSE = "4. Display Total Expenses\n";
    const DISPLAY_SAVINGS_OR_LOSS = "5. Display Savings or Loss\n";
    const DISPLAY_AS_PER_CATEGORY = "6. Display as Per category\n";
    const EXIT = "7. Exit\n";
>>>>>>> f1a3cfebc03ea57387163dc6a7f5ecdfc6e2de22


    public static function allMenu(): void
    {
        echo "Menu:\n";
        echo MENU::REGISTER;
        echo MENU::LOGIN;
    }
}
