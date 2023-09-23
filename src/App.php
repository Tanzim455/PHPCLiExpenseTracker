<?php

namespace App;

require_once 'vendor/autoload.php';

use App\Category;
use App\ExpenseClass;
use App\IncomeClass;
use App\Menu;
use App\MenuNumbers;
use App\SavingsorLoss;



if (file_exists('output.php')) {
    require_once 'output.php';
}

class App
{
    public $category;
    public $incomeClass;
    public $expenseClass;
    public $savingsOrLoss;

    public function main(
        IncomeClass $incomeClass,
        ExpenseClass $expenseClass,
        SavingsorLoss $savingsOrLoss,
        Category      $category
    ) {
        while (true) {
            // Display menu options

            Menu::allMenu();

            // Get user input
            $readline = readline("Select an option: ");

            if ($readline == MenuNumbers::FIRST) {
                require_once 'income.php';
                break;
            }
            if ($readline == MenuNumbers::Second) {
                require_once 'expense.php';
                break;
            }

            if ($readline == MenuNumbers::Third) {

                echo $incomeClass->totalIncome();
            }

            if ($readline == MenuNumbers::Four) {

                echo $expenseClass->totalExpense();
            }
            if ($readline == MenuNumbers::Five) {

                echo $savingsOrLoss->totalSavingsorLoss();
            }
            if ($readline == MenuNumbers::Six) {

                $category->IncomeExpensePerCategory();
            }
            if ($readline == MenuNumbers::Seven) {
                exit();
            }
        }
    }
}
