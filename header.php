<?php
$osm_db_mysql_host='localhost';
$osm_db_mysql_user='username';/*Please replace username with your username  */
$osm_db_mysql_password='password';/* Please replacepasswod with your password*/
$osm_db_mysql_database='fsheepdb';

$osm_mysqllink = mysql_connect($osm_db_mysql_host, $osm_db_mysql_user, $osm_db_mysql_password);
if(!$osm_mysqllink)
        die("Database Connection Error!");
mysql_select_db($osm_db_mysql_database) or die("Database Error!");
?>

