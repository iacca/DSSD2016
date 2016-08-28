<?php
require_once 'connection.php';

$db = conectar();
// Create the query
$sql = 'SELECT * FROM agenda order by id desc limit 1';
// Create the query and asign the result to a variable call $result
$result = $db->query($sql);
// Extract the values from $result
$rows = $result->fetchAll();

foreach ($rows as $row) {
    echo 'Fecha: ' . $row['fecha'] . '<br/>';
    echo 'Lugar: ' . $row['lugar'] . '<br/>';
    echo "<hr/>";
}



