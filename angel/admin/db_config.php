<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'angel';

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
    die('Can not connect to Database' . mysqli_connect_error());
}

function filteration($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;

}

function select($sql, $value, $datatypes)
{
    $con = $GLOBALS['con']; 
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt,$datatypes, ...$value);
        mysqli_stmt_execute($stmt);
        if(mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }

        else{
            mysqli_stmt_close($stmt);
            die("Query can not be prepared"); 
        }
        
        

}
else {
    die('Query can not be executed - Select'. mysqli_error($con));
}
}

?>