<?php
$data = "data/data.txt";
$data = fopen($data, "r");
while(!feof($data)) {
$line = fgets($data);
echo $line.'<br>';
// fclose($data);
}
?>