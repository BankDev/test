<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function WorkingDays($year, $month, $day) {
    if (!$year)
        $year = date('Y');
    if (!$month)
        $month = date('m');
    if (!$day)
        $day = date('d');
 
    //create a start and an end datetime
    $startdate = strtotime($year . '-' . $month . '-01');
    $enddate = strtotime($year . '-' . $month . '-' . $day);
    $currentdate = $startdate;
 
    while ($currentdate <= $enddate) {
        //if not Saturday or Sunday, +1
        if (!((date('D', $currentdate) == 'Sat') || (date('D', $currentdate) == 'Sun') )) {
            $return = $return + 1;
        }
        $currentdate = strtotime('+1 day', $currentdate);
    } //end date walk loop
    //return the number of working days
    return $return;
}
 
echo WorkingDays(2011,4,30);
?>
