<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $headers = array_keys($_POST);

    $file = "userdata.csv";

    $file = fopen($file, 'a');
    fputcsv($file, $headers);
    fputcsv($file, $_POST);
    fclose($file);

    print_r($_POST);
}
