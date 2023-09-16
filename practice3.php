<?php
if (file_exists('output.php')) {
    include 'output.php';
}

// if ($output == 1) { // Use == for comparison
//     include "output.php";

//     var_dump($phpCodeArray);
// }
$readline = readline("Please press the following for:\n"
    . "1. For adding income\n"
    . "2. For adding expense\n"
    . "3. View Total income\n"
    . "4. View Total expense\n"
    . "5. View savings or loss\n"
    . "6.View income expense as per category");

if ($readline == 1) {
    include 'income.php';
}
if ($readline == 2) {
    include 'expense.php';
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
    echo $savingsorLoss;
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
