<?php
$dir = 'sqlite:./record.sqlite';
$dbh  = new PDO($dir) or die("cannot open the database");
$sql = "CREATE TABLE record(id INTEGER, type, name, value, ctime, mtime PRIMARY KEY(id DESC));";
$dbh->execute($sql);
$dhb->execute("insert record values(1, 1, 'chen', 26, '2016-5-23 21:39:17', '2016-5-23 21:39:28')");
