<?php




require_once 'vendor/autoload.php';

use App\App;
use App\Category;
use App\ExpenseClass;
use App\IncomeClass;
use App\MainClass;
use App\SavingsorLoss;


$app = new App();
$incomeClass = new IncomeClass();
$expenseClass = new ExpenseClass();
$category = new Category();
$savingsOrLoss = new SavingsorLoss();

$app->main($incomeClass, $expenseClass, $savingsOrLoss, $category);
