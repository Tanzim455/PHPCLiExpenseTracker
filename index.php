<?php
if (file_exists('output.php')) {
    require_once 'output.php';
}

require_once 'readline.php';



if ($readline == 1) {
    require_once 'income.php';
}
if ($readline == 2) {
    require_once 'expense.php';
}
if ($readline == 3) {

    $income = array_values($IncomenExpense["income"]);
    echo array_sum($income);


    exit();
}

if ($readline == 4) {

    $expense = array_values($IncomenExpense["expense"]);
    $total_expense = array_sum($expense);
    echo $total_expense;
    exit();
}
if ($readline == 5) {


    $income = array_values($IncomenExpense["income"]);
    $expense = array_values($IncomenExpense["expense"]);
    $total_income = array_sum($income);
    $total_expenses = array_sum($expense);

    $savingsorLoss = $total_income - $total_expenses;
    switch (true) {
        case ($savingsorLoss > 0):
            echo "You have a savings of $savingsorLoss";
            break;
        case ($savingsorLoss == 0):
            echo "Your income and expenses are the same: $savingsorLoss";
            break;
        case ($savingsorLoss < 0):
            //Convert the negative value to positive
            $negativeToPositive = abs($savingsorLoss);
            echo "Your expenses exceed your income by $negativeToPositive";
            break;
    }

    exit();
}
if ($readline == 5) {


    $income = array_values($IncomenExpense["income"]);
    $expense = array_values($IncomenExpense["expense"]);
    $total_income = array_sum($income);
    $total_expenses = array_sum($expenses);

    $savingsorLoss = $total_income - $total_expenses;
    echo $savingsorLoss;
    exit();
}

if ($readline == 6) {


    foreach ($IncomenExpense as $key => $value) {

        echo $key . PHP_EOL;
        foreach ($value as $k => $v) {
            echo "$k.$v" . PHP_EOL;
        }
    }
    exit();
}
if ($readline == 7) {
    exit();
}
