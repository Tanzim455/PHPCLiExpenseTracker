<?php

declare(strict_types=1);
class IncomeClass
{
    public function totalIncome(): string
    {
        include 'output.php';
        $income = array_values($IncomenExpense["income"]);
        return "Total Income: " . array_sum($income) . "\n";
    }
    public function totalExpense(): string
    {
        include 'output.php';
        $expense = array_values($IncomenExpense["expense"]);
        $total_expense = array_sum($expense);
        return "Total Expenses: $total_expense\n";
    }
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

    public function IncomeExpensePerCategory()
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
