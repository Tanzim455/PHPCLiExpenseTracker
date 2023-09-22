<?php
if (file_exists('output.php')) {
    require_once 'output.php';
}
require_once 'Menu.php';
require_once 'MenuNumbers.php';
class MainClass
{
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
                require_once 'output.php';
                $income = array_values($IncomenExpense["income"]);
                echo "Total Income: " . array_sum($income) . "\n";
            }
            if ($readline == MenuNumbers::Four) {
                $expense = array_values($IncomenExpense["expense"]);
                $total_expense = array_sum($expense);
                echo "Total Expenses: $total_expense\n";
            }
            if ($readline == MenuNumbers::Five) {
                $income = array_values($IncomenExpense["income"]);
                $expense = array_values($IncomenExpense["expense"]);
                $total_income = array_sum($income);
                $total_expenses = array_sum($expense);
                $savingsorLoss = $total_income - $total_expenses;

                switch (true) {
                    case ($savingsorLoss > 0):
                        echo "You have a savings of $savingsorLoss\n";
                        break;
                    case ($savingsorLoss == 0):
                        echo "Your income and expenses are the same: $savingsorLoss\n";
                        break;
                    case ($savingsorLoss < 0):
                        $negativeToPositive = abs($savingsorLoss);
                        echo "Your expenses exceed your income by $negativeToPositive\n";
                        break;
                }
            }
            if ($readline == MenuNumbers::Six) {
                foreach ($IncomenExpense as $key => $value) {
                    echo "$key\n";
                    foreach ($value as $k => $v) {
                        echo "$k: $v\n";
                    }
                }
            }
            if ($readline == MenuNumbers::Seven) {
                exit();
            } else {
                echo "Invalid option. Please select a valid option.\n";
            }
        }
    }
}

$mainclass = new MainClass();

$mainclass->main();
