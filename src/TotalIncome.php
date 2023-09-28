<?php

declare(strict_types=1);

namespace App;

class TotalIncome
{
    public function totalIncome(): string
    {
        include 'output.php';
        $income = array_values($IncomenExpense["income"]);
        return "Total Income: " . array_sum($income) . "\n";
    }
}
