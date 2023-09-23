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



if (file_exists('output.php')) {
    require_once 'output.php';
}

class App
{
    public string $category;
    public string $incomeClass;
    public string $expenseClass;
    public string $savingsOrLoss;
    public string  $addIncome;

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

            if ($readline == MenuNumbers::FIRST) {


                $addIncome->addIncome();
                break;
            }
            if ($readline == MenuNumbers::Second) {
                $addExpense->addExpense();
                break;
            }

            if ($readline == MenuNumbers::Third) {

                echo $totalIncome->totalIncome();
            }

            if ($readline == MenuNumbers::Four) {

                echo $totalExpense->totalExpense();
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
