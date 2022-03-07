<?php
    include 'database.php';
    
    $obj =new database();
    $obj->insert('students', ['name'=>'Hari', 'age'=>19, 'city'=>'KTM']);
    echo "insert  result is";
    print_r($obj->getResult());
?>