<?php

declare(strict_types=1);

namespace App;

class AddExpense implements Transaction
{
    public array $categories = [
        'income' => [],
        'expense' => []
    ];
    public string $phpFilePath = 'output.php';
    public string $category;
    public  float $amount;
    public mixed $file;
    public function filePathExists(): void
    {
        // Check if the PHP file already exists
        if (file_exists($this->phpFilePath)) {
            // Include the existing PHP file to access its data
            include $this->phpFilePath;

            // If the existing array variable exists, copy its content to $categories
            if (isset($IncomenExpense)) {
                $this->categories = $IncomenExpense;
            }
        }
    }
    public function selectCategoriesorFinish(): void
    {
        echo "Select a category (Rent/Utility/InternetBill) or type 'exit' to finish:";
        $this->category = trim(fgets(STDIN));

        if (!in_array($this->category, ['Rent', 'Utility', 'InternetBill']) && $this->category !== 'exit') {
            echo "Invalid category. Please enter Rent,Utility or InternetBills." . PHP_EOL;
            exit;
        }
        if ($this->category === 'exit') {
            exit();
        }
    }
    public function selectCategories(): void
    {
        $this->selectCategoriesorFinish();
        if ($this->category == 'exit') {
            exit();
        }
    }
    public function enterAmountToOutputFile(): void
    {
        echo "Enter the amount for $this->category: ";
        $this->amount = floatval(trim(fgets(STDIN)));
        // Check if the category exists in the associative array
        if (!isset($this->categories['expense'][$this->category])) {
            // If not, initialize it to the entered amount
            $this->categories['expense'][$this->category] = $this->amount;
        } else {
            $this->categories['expense'][$this->category] += $this->amount;
        }
    }
    public function fileWriting(): void
    {
        $this->file = fopen($this->phpFilePath, "w");
        if ($this->file) {
            // Write the updated categories associative array to the PHP file
            fwrite($this->file, "<?php\n\$IncomenExpense= " . var_export($this->categories, true) . ";\n?>");

            // Close the PHP file
            fclose($this->file);

            echo "Data has been updated in $this->phpFilePath." . PHP_EOL;
        } else {
            echo "Failed to open the PHP file for writing." . PHP_EOL;
        }
    }

    public function addExpense(): void
    {
        $this->filePathExists();
        $this->selectCategoriesorFinish();
        while ($this->category !== 'exit') {
            $this->enterAmountToOutputFile();
            $this->fileWriting();
            $this->selectCategoriesorFinish();
        }
    }
}
