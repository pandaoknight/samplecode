<?php
function pqnum(){
    static $num = 1;
    print "\n(q{$num}):\n";
    $num++;
}

pqnum();
print "用php打印出前一天的时间格式是2006-5-10 22:21:21\n";
$answer = 'print date("Y-m-d H:i:s", strtotime("-1 day"));';
print $answer . "\n";
eval($answer);

pqnum();
