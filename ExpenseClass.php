<?php

class ExpenseClass
{
    public function totalExpense(): string
    {
        include 'output.php';
        $expense = array_values($IncomenExpense["expense"]);
        $total_expense = array_sum($expense);
        return "Total Expenses: $total_expense\n";
    }
}
