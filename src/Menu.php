<?php

declare(strict_types=1);

namespace App;

class Menu
{
    const ADD_INCOME = "1. Add Income\n";
    const ADD_EXPENSE = "2. Add Expense\n";
    const DISPLAY_TOTAL_INCOME = "3. Display Total Income\n";
    const DISPLAY_TOTAL_EXPENSE = "4. Display Total Expenses\n";
    const DISPLAY_SAVINGS_OR_LOSS = "5. Display Savings or Loss\n";
    const DISPLAY_AS_PER_CATEGORY = "6. Display as Per category\n";
    const EXIT = "7. Exit\n";


    public static function allMenu(): void
    {
        echo "Menu:\n";
        echo MENU::ADD_INCOME;
        echo MENU::ADD_EXPENSE;
        echo MENU::DISPLAY_TOTAL_INCOME;
        echo Menu::DISPLAY_TOTAL_EXPENSE;
        echo Menu::DISPLAY_SAVINGS_OR_LOSS;
        echo Menu::DISPLAY_AS_PER_CATEGORY;
        echo Menu::EXIT;
    }
}
