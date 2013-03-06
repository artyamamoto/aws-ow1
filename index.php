<?php 
ini_set("display_errors" , true);
error_reporting(E_ALL);
	echo "this is an elastic netbeans test aaa2<br />"; 

$dsn = "mysql:dbname=ebdb;host=aa1d42byd0pgr7.ct6ddgfemi2m.ap-northeast-1.rds.amazonaws.com";
$user = "ebroot";
$passwd = "ar10ban9";

try {
	$dbh = new PDO( $dsn , $user, $passwd );
	$dbh->query("set names utf8;");
	foreach( $dbh->query("select * from mytest") as $r) {
		echo "<pre>";
		print_r($r);
		echo "</pre>";
	}
} catch(Exception $e) {
	throw $e;
}


?>
