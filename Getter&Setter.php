<?php

class Person {

public $name;
public $age;


function setAge($age){
if($age <18){ throw new Exception("Person is no valid" ); } 


$this->age = $age;
    }

    function getAge(){
    return $this->age;
    }



    }


    $p1 = new Person("Shubham");

    $p1->setAge(18);
    

    var_dump($p1)

    ?>