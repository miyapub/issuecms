<?
session_start();
require "conn.php";
require "ip.php";
$sql ="SELECT * FROM `issues` ORDER BY id DESC limit 0,1";
$result = mysql_query($sql,$conn);
$row = mysql_fetch_array($result);
$issue_id=$row['id'];
header("Location: issue.php?id=$issue_id");
mysql_close();
?>