<?php

function conectar() {
    $pdo = new PDO("mysql:host=localhost;dbname=dssd2016", "root", "");
    return $pdo;
}
