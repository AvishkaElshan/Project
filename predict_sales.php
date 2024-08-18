<?php
// Define the CSV file and year for prediction
$csvFile = 'path/to/sales_data_sample.csv';
$year = 2024;

// Build the command to run the Python script
$command = escapeshellcmd("python3 /path/to/predict_sales.py $csvFile $year");

// Execute the command
$output = shell_exec($command);

// Decode the JSON output from the Python script
$predictions = json_decode($output, true);

// Process the predictions
if ($predictions) {
    foreach ($predictions as $prediction) {
        echo "Year: " . $prediction['YEAR_ID'] . " - Predicted Sales: " . $prediction['PREDICTED_SALES'] . "<br>";
    }
} else {
    echo "Failed to retrieve predictions.";
}
?>
