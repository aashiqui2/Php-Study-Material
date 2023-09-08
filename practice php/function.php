<?php
// Defining function
function whatIsToday(){
    echo "Today is " . date('l');
}
// Calling function
whatIsToday();
echo "Today is " . date("m/d/Y") . "<br>";
echo "Today is " . date("m.d.Y") . "<br>";
echo "Today is " . date("m-d-Y") . "<br>";
echo "Today is " . date("l");
echo "The time is " . date("h:i:sa");
  echo "The time is " . date("H:i:s");
  $d=mktime(01, 1, 1, 1, 01, 0002);
  echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
