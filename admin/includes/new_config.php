<?php
/**
 * Created by PhpStorm.
 * User: Rimvydas
 * Date: 5/19/2018
 * Time: 12:34
 */

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD","");
define("DB_NAME", "photo_gallery");

$db_connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

if ($db_connect){
    echo "Connected";
}else {
    mysqli_errno($db_connect);
}