<?php 

    
    $connect = DataBase::connect();

    $sqlEducation = 'SELECT * FROM education ORDER BY id ASC LIMIT 6';
    $educationStatement = $connect->query($sqlEducation);
    $educationStatement->execute();
    $rows = $educationStatement->fetchAll();

    DataBase::disconnect();

