<?php

//var_dump($_POST);
echo "Name: " . $_POST['name']."\n";
foreach ($_POST['values'] as $row)
    echo "Value: ". $row['val'] . "\n";



//$data = json_decode($_POST['values']);
//echo $data;
