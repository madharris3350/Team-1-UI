
<?php
    $url_1 = $_POST["url_1"];
    $url_2 = $_POST["url_2"];
    $url_3 = $_POST["url_3"];
    $data = [$url_1, $url_2, $url_3, "\n"];

    $f= fopen("url_data.csv", "a");
    fputcsv($data, $f);
    fclose($f)
?>
