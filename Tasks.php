<?php 

class Task{


    public $desc ;
    public $title;

    public $ava = false;

    function __construct($title,$desc){

        $this->$title =$title;
        $this->$desc = $desc;
    }

   public function available(){
        $this->ava =true;

    }


}

$task = new Task("Title","This is description");

$task->available();
var_dump($task);












?>