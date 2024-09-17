<?php
$file = 'submissions.csv';

if (file_exists($file)) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="submissions.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');

    readfile($file);
    exit();
} else {
    echo "No data available.";
}
?>
