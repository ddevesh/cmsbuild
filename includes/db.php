<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";


foreach ($db as $key=>$value) {
    define(strtoupper($key),($value));

}

$connection = new mysqli( DB_HOST,DB_USER,'',DB_NAME);  //as DB_HOST(etc) are predefined variable then don't need to pass them in string

if ($connection) {
   "";
}
else {
    echo "ISSUE IN CONNECTION".$connection->error;
}

/*$connection =  new mysqli("localhost","root","","cms");
    if($connection  ) {
        echo "tets";
    }*/

