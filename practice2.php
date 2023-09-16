<?php
// $output = 1;

// if ($output == 1) { // Use == for comparison
//     include "output.php";

//     var_dump($phpCodeArray);
// }
// $readline = readline("Please press the following for:\n"
//     . "1. For adding income\n"
//     . "2. For adding expense\n"
//     . "3. For finding total Income\n"
//     . "4. For finding total expense\n") > PHP_EOL;


// if ($readline == 4) {
//     include "output.php";
//     $array_sum = array_sum($phpCodeArray);
//     echo $array_sum;
// }
$categories = [
    'income' => [
        'Salary' => 500,
        'Investments' => 1200,
        'Rent Income' => 122,
    ],
    'expense' => [
        'Rent' => 1200,
        'Utilities' => 1200,
        'Groceries' => 890,
        'Transportation' => 1500,
        'Entertainment' => 980,
    ],
];

$array_income = array_values($categories["income"]);

//sum all income it all up 

$total_income = array_sum($array_income);

echo $total_income;

//sum all expenses 
//find all values of the expense
$array_expense = array_values($categories["expense"]);
//find total expense
$total_expense = array_sum($array_expense);

echo $total_expense;
