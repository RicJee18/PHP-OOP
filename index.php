<?php

class Date {

    public $sdate;
    public $edate;

    function __construct($sdate, $edate){

        $this->$sdate = $sdate;
        $this->$edate = $edate;
        
        // $interval = $sdate->diff($edate);
        // echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
        
        $date_diff = abs(strtotime($edate) - strtotime($sdate));
        $years = floor($date_diff / (365*60*60*24));
        $months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        
        printf("Result: %d years, %d months, %d days", $years, $months, $days);
        printf("\n");

    }

    
  
 }

 $date = new Date("1981-11-03", "2013-09-04");

?>