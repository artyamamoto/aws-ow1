<?php 
ini_set("display_errors" , true);
error_reporting(E_ALL);

header("Content-Type: text/html; Charset=UTF-8");
	echo "this is an elastic netbeans test aaa2<br />"; 

$dsn = "mysql:dbname=opstest1;host=ec2-54-249-134-89.ap-northeast-1.compute.amazonaws.com";
$user = "root";
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
