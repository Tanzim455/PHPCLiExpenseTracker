<?php




require_once 'vendor/autoload.php';

use App\AddIncome;
use App\App;
use App\Category;
use App\ExpenseClass;
use App\IncomeClass;

use App\SavingsorLoss;


$app = new App();
$addIncome = new AddIncome();
$incomeClass = new IncomeClass();
$expenseClass = new ExpenseClass();
$category = new Category();
$savingsOrLoss = new SavingsorLoss();

$app->main($addIncome, $incomeClass, $expenseClass, $savingsOrLoss, $category);
