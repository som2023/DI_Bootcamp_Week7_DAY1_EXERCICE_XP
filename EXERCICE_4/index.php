<?php
 
 $sdate = new DateTime("1981-11-03");
 $edate = new DateTime("2013-09-04");
 $interval = $sdate->diff($edate);
 echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
 ?>