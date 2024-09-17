<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="dataview.css">
</head>
<body>
    <div class="container">
        <h2>Submitted Data</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email ID</th>
                    <th>Location</th>
                    <th>Property Type</th>
                    <th>Property Value</th>
                    <th>Ready to Get Leads</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $file = fopen('submissions.csv', 'r');

                while (($data = fgetcsv($file)) !== FALSE) {
                    echo '<tr>';
                    foreach ($data as $field) {
                        echo '<td>' . htmlspecialchars($field) . '</td>';
                    }
                    echo '</tr>';
                }

                fclose($file);
                ?>
            </tbody>
        </table>
        <a href="csvexport.php" class="button">Download CSV</a>
    </div>
</body>
</html>
