<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is a CSV
if ($fileType != "csv") {
    echo "Sorry, only CSV files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";

        // Execute the Python script
        $command = escapeshellcmd('sales_prediction_env\Scripts\python.exe predict.py ' . escapeshellarg($target_file));
        $output = shell_exec($command);

        // Display the Python script output
        echo "<h2>Prediction Results:</h2>";
        echo "<pre>$output</pre>";

        // Check if the predicted file was generated
        $predicted_file = 'predicted_sales_next_year.csv';
        if (file_exists($predicted_file)) {
            // Move the file to the upload directory and provide a download link
            rename($predicted_file, $target_dir . $predicted_file);
            echo '<a href="' . $target_dir . $predicted_file . '" download>Download Predicted Sales Data</a>';
        } else {
            echo "Sorry, the predicted file was not found.";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
