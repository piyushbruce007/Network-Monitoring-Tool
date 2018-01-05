<?php
$file = "/var/www/html/ipresult";
$myfile = fopen($file, "r") or die("Unable to open file!");
 
echo "<table border='1'>";
echo "<tr><th>TIMESTAMP</th>
<th>SOURCE IP</th>
<th>DESTINATION IP</th>";
echo "</tr>";
while(!feof($myfile)) {
   $data = fgets($myfile); 
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($myfile);
?>

