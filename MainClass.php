<?php
if (file_exists('output.php')) {
    require_once 'output.php';
}
require_once 'Menu.php';
require_once 'MenuNumbers.php';
require_once 'IncomeClass.php';
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
                $incomeClass = new IncomeClass();
                echo $incomeClass->totalExpense();
            }
            if ($readline == MenuNumbers::Five) {
                $incomeClass = new IncomeClass();
                echo $incomeClass->totalSavingsorLoss();
            }
            if ($readline == MenuNumbers::Six) {
                $incomeClass = new IncomeClass();
                echo $incomeClass->IncomeExpensePerCategory();
            }
            if ($readline == MenuNumbers::Seven) {
                exit();
            }
        }
    }
}

$mainclass = new MainClass();

$mainclass->main();
