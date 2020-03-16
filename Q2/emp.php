<?php
$xml=simplexml_load_file('emp.xml') or die("can not load");
echo"EMPLOYEE DETAILS<br>";
echo"<table border='1'>";
echo"<tr><th>eid</th><th>ename</th><th>des</th><th>sal</th></tr>";
foreach($xml->emp as $a)
{
echo "<tr><td>".$a->eid."</td>";
echo "<td>".$a->ename."</td>";
echo "<td>".$a->des."</td>";
echo"<td>".$a->sal."</td></tr>";
}
echo"</table>";
?>
