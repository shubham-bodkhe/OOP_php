        <?php

        class Person {

        private $name;
        private $age;


        function setAge($age){
        if($age < 18){ echo "Person is no valid" ; } 


        $this->age = $age;
            }

            function getAge(){
            return $this->age;
            }



            }


            $p1 = new Person("Shubham");

            $p1->setAge(22);
            // $p1->age=23;

            var_dump($p1)

            ?>