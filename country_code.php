<?php 
require 'dbconfig.php';
$sql = $conn -> query('select * from country_code');
    $myarray  = array();

    while($row = $sql->fetch_assoc())
    {
      $myarray[] = $row;
    }

    $returnArray = array ($myarray);
    echo json_encode($returnArray, JSON_PRETTY_PRINT);

?>