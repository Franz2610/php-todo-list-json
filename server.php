<?php

$testo = file_get_contents('./data.json');
// echo $testo;

$phparray = json_decode($testo, true);
// var_dump($phparray);

if(isset($_POST['todoItem'])){
    $todoItem = [
      "task" => $_POST['todoItem'],
      "done" => false,
    ];
    array_push($phparray , $todoItem);
   file_put_contents('./data.json', json_encode($phparray)); 

} elseif(isset($_POST['updateItem'])){
    $index = $_POST['updateItem'];
    $phparray[$index]['done'] = !$phparray[$index]['done'];
    file_put_contents('./data.json', json_encode($phparray)); 

} else{

}


header('Content-Type: application/json');

echo json_encode($phparray);
