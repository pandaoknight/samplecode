<?php
$dir = 'sqlite:./record.sqlite';
$dbh  = new PDO($dir) or die("cannot open the database");
$query =  "SELECT * FROM record WHERE type=1";
foreach ($dbh->query($query) as $row){
    echo $row[0];
}
