<?
$username="root";
$password="trov";
$database="contacts";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die ("unable to select database");

mysql_close();
?>
