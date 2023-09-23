<?php
$phpFilePath = "output.php";
$categories = [
    'income' => [],
    'expense' => [],


];

// Check if the PHP file already exists
if (file_exists($phpFilePath)) {
    // Include the existing PHP file to access its data
    include $phpFilePath;

    // If the existing array variable exists, copy its content to $categories
    if (isset($IncomenExpense)) {
        $categories = $IncomenExpense;
    }
}

echo "Select a category (Rent/Utility/InternetBill) or type 'exit' to finish: ";
$category = trim(fgets(STDIN));

if (!in_array($category, ['Rent', 'Utility', 'InternetBill']) && $category !== 'exit') {
    echo "Invalid category. Please enter Rent,Utility or InternetBills." . PHP_EOL;
    exit;
}
if ($category == 'exit') {
    exit();
}
while ($category !== 'exit') {
    // Prompt for the amount
    echo "Enter the amount for $category: ";
    $amount = floatval(trim(fgets(STDIN)));
    //check if category exists here
    if (!isset($categories['expense'][$category])) {
        // If not, initialize it to the entered amount
        $categories['expense'][$category] = $amount;
    } else {
        $categories['expense'][$category] += $amount;
    }


    // echo "Data has been updated for $category." . PHP_EOL;

    echo "Select a category (Rent/Utility/InternetBill) or type 'exit' to finish: ";

    $file = fopen($phpFilePath, "w");

    if ($file) {
        // Write the updated categories associative array to the PHP file
        fwrite($file, "<?php\n\$IncomenExpense= " . var_export($categories, true) . ";\n?>");

        // Close the PHP file
        fclose($file);

        echo "Data has been updated in $phpFilePath." . PHP_EOL;
    } else {
        echo "Failed to open the PHP file for writing." . PHP_EOL;
    }
    $category = trim(fgets(STDIN));

    if (!in_array($category, ['Rent', 'Utility', 'InternetBill']) && $category !== 'exit') {
        echo "Invalid category. Please enter 'Salary' or 'Investments'." . PHP_EOL;
        exit;
    }
}

// Open the PHP file for writing
