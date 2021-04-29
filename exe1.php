<?php

class Date {

    public $firstdate;
    public $seconddate;

    function __construct($firstdate, $seconddate){

        $this->firstdate = $firstdate;
        $this->seconddate = $seconddate;
        
    }
    
    function get_diff(){    

        echo "First Date: " . $this->firstdate."<br>";
        echo "Second Date: " .$this->seconddate."<br>";
       
        $difference = (new DateTime($this->firstdate))->diff (new DateTime($this->seconddate));
        echo "Difference : " . $difference->y . " years, " . $difference->m." months, ".$difference->d." days ";
    } 

 }
    
  

 $date = new Date("1981-11-03", "2013-09-04");
 $date->get_diff();

?>