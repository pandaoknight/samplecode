<?php

class LinkedList {
    public $val;
    public $next;

    public function __construct($val, $next){
        $this->val = $val;
        $this->next = $next;
    }

    public function travel(){
        print "travel start:\n";
        $traveled = array();
        $curr = $this;
        while(true){
            print $curr->val;
            // 检查环
            if(in_array($curr, $traveled)){
                print " circled-link-list-node";
                break;
            }
            $traveled[] = $curr;

            if(empty($curr->next)){
                break;
            }
            print " => ";
            $curr = $curr->next;
        }

        print "\ntravel end.\n";
    }
}

$list = new LinkedList(1, null);
$list->travel();

$list = new LinkedList(1, new LinkedList(2, null));
$list->travel();

$list = new LinkedList(1, new LinkedList(2, null));
$list->next->next = $list;
$list->travel();
