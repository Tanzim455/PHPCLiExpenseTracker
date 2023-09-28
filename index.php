<?php




require_once 'vendor/autoload.php';

use App\AddExpense;
use App\AddIncome;
use App\App;
use App\Category;

use App\TotalIncome;
use App\SavingsorLoss;
use App\TotalExpense;

$app = new App();
$addIncome = new AddIncome();
$addExpense = new AddExpense();
$totalIncome = new TotalIncome();
$totalExpense = new TotalExpense();
$category = new Category();
$savingsOrLoss = new SavingsorLoss();

$app->main($addIncome, $addExpense, $totalIncome, $totalExpense, $savingsOrLoss, $category);
