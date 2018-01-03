<?php


require "vendor\autoload.php";

use interfaces\sort;

use sorting\BubbleSort;
use sorting\SmartSort;




print_r(
  (new BubbleSort)->ascending(1,3,2,54,43)
);
echo "<hr/>";
print_r(
  (new BubbleSort)->descending(1,3,2,54,43)
);
echo "<hr/>";

print_r(
  (new SmartSort)->ascending(1,3,2,54,43)
);
echo "<hr/>";
print_r(
  (new SmartSort)->descending(1,3,2,54,43)
);
echo "<hr/>";
