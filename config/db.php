<?php

$hostname = 'YOUR_HOSTNAME';
$dbName = 'YOUR_DBNAME';
$username = 'YOUR_USERNAME';
$password = 'YOUR_PWD';


return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.$hostname.';dbname='.$dbName,
    'username' => $username,
    'password' => $password,
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
