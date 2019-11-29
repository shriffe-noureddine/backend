<?php

/* MKTime take as arguments :
  - Hour
  - Minutes
  - Seconds
  - Month
  - Day
  - Year
  */

// Return a timestamp for this date : 2019/04/22 at 19h00m30s
$timeStamp = mktime(19, 00, 30, 04, 22, 2019);

// Display a format date for a specific timestamp
echo date('Y-m-d H:i:s', $timeStamp);
