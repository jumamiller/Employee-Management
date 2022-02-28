<?php 
// DB credentials.
//define('DB_HOST','localhost');
//define('DB_USER','root');
//define('DB_PASS','@Mj37055765');
//define('DB_NAME','smarthr');
const DB_HOST = 'ec2-54-157-160-218.compute-1.amazonaws.com';
const DB_USER = 'keyecoeroglpdb';
const DB_PASS = 'eca78cf7811f12e23f57864d2aece57490748c55bb7e93a93612d760c81d169f';
const DB_NAME = 'd5umnani84g37v';
// Establish database connection.
//url: postgres://keyecoeroglpdb:eca78cf7811f12e23f57864d2aece57490748c55bb7e93a93612d760c81d169f@ec2-54-157-160-218.compute-1.amazonaws.com:5432/d5umnani84g37v
try
{
    $dbh = new PDO("pgsql:" . sprintf(
            "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            DB_HOST,
            5432,
            DB_USER,
            DB_PASS,
            DB_NAME
        ));

//    $dbh = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
