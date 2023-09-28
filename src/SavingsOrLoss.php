<?php

declare(strict_types=1);

namespace App;

class SavingsorLoss
{
    public function totalSavingsorLoss(): string
    {
        include 'output.php';
        $income = array_values($IncomenExpense["income"]);
        $expense = array_values($IncomenExpense["expense"]);
        $total_income = array_sum($income);
        $total_expenses = array_sum($expense);
        $savingsorLoss = $total_income - $total_expenses;

        switch (true) {
            case ($savingsorLoss > 0):
                return "You have a savings of $savingsorLoss\n";
                break;
            case ($savingsorLoss == 0):
                return "Your income and expenses are the same: $savingsorLoss\n";
                break;
            case ($savingsorLoss < 0):
                $negativeToPositive = abs($savingsorLoss);
                return "Your expenses exceed your income by $negativeToPositive\n";
                break;
        }
    }
}
