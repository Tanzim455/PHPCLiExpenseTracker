<?php


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

if ($readline == 3) {
    include "output.php";
    $income = array_values($phpCodeArray["income"]);
    echo array_sum($income);


    exit();
}

if ($readline == 4) {
    include "output.php";
    $expense = array_values($phpCodeArray["expense"]);
    $total_expense = array_sum($expense);
    echo $total_expense;
    exit();
}
if ($readline == 5) {
    include "output.php";

    $income = array_values($phpCodeArray["income"]);
    $expense = array_values($phpCodeArray["expense"]);
    $total_income = array_sum($income);
    $total_expenses = array_sum($expense);

    $savingsorLoss = $total_income - $total_expenses;
    echo $savingsorLoss;
    exit();
}
if ($readline == 5) {
    include "output.php";

    $income = array_values($phpCodeArray["income"]);
    $expense = array_values($phpCodeArray["expense"]);
    $total_income = array_sum($income);
    $total_expenses = array_sum($expenses);

    $savingsorLoss = $total_income - $total_expenses;
    echo $savingsorLoss;
    exit();
}

if ($readline == 6) {
    include "output.php";

    foreach ($phpCodeArray as $key => $value) {

        echo $key . PHP_EOL;
        foreach ($value as $k => $v) {
            echo "$k.$v" . PHP_EOL;
        }
    }
    exit();
}
