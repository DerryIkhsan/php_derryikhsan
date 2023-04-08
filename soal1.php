<?php

$jml = $_GET['jml'];

echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{
    $total = countTotal($a);

  echo "<th colspan='$jml'>Total: $total</th>";
  echo "<tr>";
  for ($b = $a; $b > 0; $b--)
  { 
    echo "<td>$b</td>";
  }
  echo "</tr>";
}
echo "</table>";

function countTotal($count){
    $total = 0;

    for ($b = $count; $b > 0; $b--)
    {
        $total += $b;
    }
    
    return $total;
}

?>