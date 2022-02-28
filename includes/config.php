<?php 
// DB credentials.
//define('DB_HOST','localhost');
//define('DB_USER','root');
//define('DB_PASS','@Mj37055765');
//define('DB_NAME','smarthr');
define('DB_HOST','ec2-54-157-160-218.compute-1.amazonaws.com');
define('DB_USER','keyecoeroglpdb');
define('DB_PASS','eca78cf7811f12e23f57864d2aece57490748c55bb7e93a93612d760c81d169f');
define('DB_NAME','d5umnani84g37v');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
