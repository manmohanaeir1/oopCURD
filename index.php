<?php
    include 'database.php';
    
    $obj =new database();
    // $obj->insert('students', ['name'=>'Hari', 'age'=>19, 'city'=>'KTM']);
    // echo "insert  result is";
    // print_r($obj->getResult());

    // $obj->update('students', ['name'=>'YahooBaba', 'age'=>29, 'city'=>'INDIA' ,'id = "9"']);
    // echo "updated   result is";
    // print_r($obj->getResult()); /// Error

    //$obj->delete('students', 'id = "6"');

    // $obj->delete('students', 'age = "20"');
    // echo "deleted   result is";
    // print_r($obj->getResult()); 

    // $obj->sql('SELECT * FROM  students WHERE  age = "21"');
    // echo "SQL result is:";
    // echo "<br>";
    // print_r($obj->getResult()); 
    // echo "<br>";


    $obj->select('students', '*', null, null , null, null);  // 'city = "ktm"'
    echo "SELECTED  result is:";
    echo "<br>";
    print_r($obj->getResult()); 
    echo "<br>";

    


?>