<?php

$dbh = new PDO('pgsql:host=185.252.146.89;port=5432;dbname=postgres;user=saiple;password=password');
$query = 'SELECT inet_server_addr() as ip, current_timestamp as time;';
$statement = $dbh->prepare($query);
$statement->execute();
$res = $statement->fetch();

echo 'master ip ' . $res[0];
echo "<br>";
echo 'time ' . $res[1];

$dbh1 = new PDO('pgsql:host=185.252.146.89;port=5432;dbname=postgres;user=saiple;password=password');
$query1 = 'SELECT inet_server_addr() as ip, current_timestamp as time;';
$statement1 = $dbh1->prepare($query1);
$statement1->execute();
$res1 = $statement1->fetch();
echo "<br>";
echo 'slave ip ' . $res1[0];
echo "<br>";
echo 'time ' . $res1[1];

?>
