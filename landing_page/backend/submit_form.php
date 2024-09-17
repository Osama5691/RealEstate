<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $property_type = $_POST['property_type'];
    $value = $_POST['value'];
    $ready_to_get_leads = $_POST['ready_to_get_leads'];

    // Open or create CSV file
    $file = fopen('submissions.csv', 'a');

    // Add CSV header if file is empty
    if (filesize('submissions.csv') == 0) {
        fputcsv($file, ['Name', 'Number', 'Email ID', 'Location', 'Property Type', 'Property Value', 'Ready to Get Leads']);
    }

    // Write form data to CSV
    fputcsv($file, [$name, $number, $email, $location, $property_type, $value, $ready_to_get_leads]);

    // Close file
    fclose($file);

    // Redirect to thank you page or confirmation
    header('Location: thank_you.html');
    exit();
}
?>
