<?php
if (file_exists('output.php')) {
    require_once 'output.php';
}
require_once 'Menu.php';
require_once 'MenuNumbers.php';
require_once 'IncomeClass.php';
require_once 'ExpenseClass.php';
require_once  'SavingsOrLoss.php';
require_once  'Category.php';
class MainClass
{
    // public function __construct(IncomeClass $incomeClass)
    // {
    // }
    public function main()
    {
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
                $incomeClass = new IncomeClass();
                echo $incomeClass->totalIncome();
            }

            if ($readline == MenuNumbers::Four) {
                $expenseClass = new ExpenseClass();
                echo $expenseClass->totalExpense();
            }
            if ($readline == MenuNumbers::Five) {
                $savingsOrLoss = new SavingsorLoss();
                echo $savingsOrLoss->totalSavingsorLoss();
            }
            if ($readline == MenuNumbers::Six) {
                $category = new Category();
                $category->IncomeExpensePerCategory();
            }
            if ($readline == MenuNumbers::Seven) {
                exit();
            }
        }
    }
}

$mainclass = new MainClass();

$mainclass->main();
