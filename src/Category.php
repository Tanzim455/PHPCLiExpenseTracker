<?php

declare(strict_types=1);

namespace App;

class Category
{
    public function IncomeExpensePerCategory(): void
    {
        include 'output.php';
        foreach ($IncomenExpense as $key => $value) {
            echo "$key\n";
            foreach ($value as $k => $v) {
                echo "$k: $v\n";
            }
        }
    }
}
