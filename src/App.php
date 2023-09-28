<?php

declare(strict_types=1);

namespace App;

require_once 'vendor/autoload.php';

use App\AddIncome;
use App\Category;
use App\TotalIncome;
use App\TotalExpense;

use App\Menu;
use App\MenuNumbers;
use App\SavingsorLoss;





class App
{

    public function main(
        AddIncome   $addIncome,
        AddExpense  $addExpense,
        TotalIncome $totalIncome,
        TotalExpense $totalExpense,
        SavingsorLoss $savingsOrLoss,
        Category      $category,

    ) {
        while (true) {
            // Display menu options

            Menu::allMenu();

            // Get user input
            $readline = readline("Select an option: ");

            switch ($readline) {
                case MenuNumbers::FIRST:
                    $addIncome->addIncome();
                    break;

                case MenuNumbers::SECOND:
                    $addExpense->addExpense();
                    break;

                case MenuNumbers::THIRD:
                    echo $totalIncome->totalIncome();
                    break;

                case MenuNumbers::FOUR:
                    echo $totalExpense->totalExpense();
                    break;

                case MenuNumbers::FIVE:
                    echo $savingsOrLoss->totalSavingsorLoss();
                    break;

                case MenuNumbers::SIX:
                    $category->IncomeExpensePerCategory();
                    break;

                case MenuNumbers::SEVEN:
                    exit();
                    break;
                default:
                    echo "Invalid option. Please select a valid option.\n";
            }
        }
    }
}
