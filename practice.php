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
    if (isset($phpCodeArray)) {
        $categories = $phpCodeArray;
    }
}

while (true) {
    echo "Select a category (income/expense) or type 'exit' to finish: ";
    $category = trim(fgets(STDIN));

    if ($category === 'exit') {
        break;
    }

    if (!in_array($category, ['income', 'expense'])) {
        echo "Invalid category. Please enter 'income' or 'expense'." . PHP_EOL;
        continue;
    }
    if ($category === 'income') {
        echo "Enter the type of $category (e.g., Salary, Investments): ";
    }

    if ($category === 'expense') {
        echo "Enter the type of $category (e.g., Rent,Utilities,Grocery,Transportation,Entertainment): ";
    }

    $type = trim(fgets(STDIN));

    echo "Enter the amount for $type $category: ";
    $amount = floatval(trim(fgets(STDIN)));

    // Check if the category and type exist in the associative array
    if (!isset($categories[$category][$type])) {
        // If not, initialize it to the entered amount
        $categories[$category][$type] = $amount;
    } else {
        // If it already exists, add the entered amount to the existing value
        $categories[$category][$type] += $amount;
    }
}

// Open the PHP file for writing
$file = fopen($phpFilePath, "w");

if ($file) {
    // Write the updated categories associative array to the PHP file
    fwrite($file, "<?php\n\$phpCodeArray = " . var_export($categories, true) . ";\n?>");

    // Close the PHP file
    fclose($file);

    echo "Data has been updated in $phpFilePath." . PHP_EOL;
} else {
    echo "Failed to open the PHP file for writing." . PHP_EOL;
}
