<?php

declare(strict_types=1);

namespace App;

class AddIncome
{
    public array $categories = [
        'income' => [],
        'expense' => []
    ];
    public string $phpFilePath = 'output.php';
    public string $category;
    public   $amount;
    public mixed $file;
    public function filePathExists()
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
    public function selectCategoriesorFinish()
    {
        echo "Select a category (Salary/Investments) or type 'exit' to finish: ";
        $this->category = trim(fgets(STDIN));

        if (!in_array($this->category, ['Salary', 'Investments']) && $this->category !== 'exit') {
            echo "Invalid category. Please enter 'Salary' or 'Investments'." . PHP_EOL;
            exit;
        }
        if ($this->category === 'exit') {
            exit();
        }
    }
    public function selectCategories()
    {
        $this->selectCategoriesorFinish();
        if ($this->category == 'exit') {
            exit();
        }
    }
    public function enterAmountToOutputFile()
    {
        echo "Enter the amount for $this->category: ";
        $this->amount = floatval(trim(fgets(STDIN)));
        // Check if the category exists in the associative array
        if (!isset($this->categories['income'][$this->category])) {
            // If not, initialize it to the entered amount
            $this->categories['income'][$this->category] = $this->amount;
        } else {
            $this->categories['income'][$this->category] += $this->amount;
        }
    }
    public function fileWriting()
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

    public function addIncome()
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
