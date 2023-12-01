<?php

//var_dump($_POST);
//echo "Name: " . $_POST['fullName']."\n";
$values =json_decode($_POST['values']);
$size=count($values);
//var_dump($values);

//for ($i=0;$i<$size;$i++){
foreach ($values as $row){
    echo "$row->name <hr/>";
    //var_dump($values[$i]->name);

}
    //echo "ID: ". $row['id'] . " - " . $row['name'] . "\n";



//$data = json_decode($_POST['values']);
//echo $data;
