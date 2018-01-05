<html>
<head>
<title>NETWORK ANALYSER</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body bgcolor="#66CDAA">
<div id="bg">
<div id="logo">
<h1 align="center">Network Monitoring Tool</h1>
<div align="right">IPv4 Traffic Analyzer</div></div>
<div id="wrap">
<div id="nav">
<ul>
<li><a href="login.html">Home</a></li>
</ul></div>


<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host="localhost";

$username="root";

$password="Sense007@";

$db_name="db";

$tbl_name="login1";

$conn = mysqli_connect("$host", "$username", "$password");
if(mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($conn,"$db_name");

$myusername=$_POST['usr'];

$mypassword=$_POST['pwd'];
$selectOption = $_POST['Packets'];
$selectOption2 = $_POST['FIELDS'];

;

$sql="select * from login1 where mypassword='123piy' AND myusername='root'";

$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);
$result1= shell_exec('./totalpackets.sh');

if ($count==1 && $selectOption=="ARP")
{
print"<font color=green size=2><center><h2>WELCOME</h2></center></font>";
print "<font color=green size=2><center><h2>To Traffic Analyzer.</h2>
<h3>ALL THE INFORMATION RELATED TO CAPTURED <h1><b><u>ARP PACKETS</b></u></h1></h3></center></font><hr size=2 color=green>"."<br>";
$result= shell_exec('/var/www/html/ip.sh');
echo $result ;
$file = "/var/www/html/resultip";
$myfile = fopen($file, "r") or die("Unable to open file!");
 
echo "<table align='center' border='1'>";
echo "<tr><th>TIMESTAMP</th>
<th>PACKET TYPE</th>
<th>SOURCE IP</th>
<th>DESTINATION IP</th>
<th>PACKET LENGTH</th>";
echo "</tr>";
while(!feof($myfile)) {
   $data = fgets($myfile); 
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($myfile);


 print "<br><br><br><br>";
}else if ($count==1 && $selectOption=="IP" && $selectOption2=="ALL")
{
print"<font color=green size=2><center><h2>WELCOME</h2></center></font>";
print "<font color=green size=2><center><h2>To Traffic Analyzer.</h2>
<h3>ALL THE INFORMATION RELATED TO CAPTURED <h1><b><u>IP PACKETS</b></u></h1></h3</center></font><hr size=2 color=green>"."<br>";


$result= shell_exec('/var/www/html/callip.sh');
echo $result ;
$file = "/var/www/html/ipresult";
$myfile = fopen($file, "r") or die("Unable to open file!");
 
echo "<table border='1'>";
echo "<tr><th>TIMESTAMP</th>
<th>SOURCE IP</th>
<th>SOURCE PORT</th>
<th>DESTINATION IP</th>
<th>DESTINATION PORT</th>
<th>FLAGS</th>
<th>PACKET LENGTH</th>";
echo "</tr>";
while(!feof($myfile)) {
   $data = fgets($myfile); 
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($myfile);

 print "<br><br><br><br>";
}else if ($count==1 && $selectOption=="IP" && $selectOption2=="PORT")
{
print"<font color=green size=2><center><h2>WELCOME</h2></center></font>";
print "<font color=green size=2><center><h2>To Traffic Analyzer.</h2>
<h3>ALL THE INFORMATION RELATED TO CAPTURED <h1><b><u>IP PACKETS PORT</b></u></h1></h3</center></font><hr size=2 color=green>"."<br>";


$result= shell_exec('/var/www/html/callpip.sh');
echo $result ;
$file = "/var/www/html/pipresult";
$myfile = fopen($file, "r") or die("Unable to open file!");
 
echo "<table border='1'>";
echo "<tr><th>SOURCE PORT</th>
<th>DESTINATION PORT</th>";
echo "</tr>";
while(!feof($myfile)) {
   $data = fgets($myfile); 
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($myfile);

 print "<br><br><br><br>";
}else if ($count==1 && $selectOption=="IP" && $selectOption2=="IP ADDRESS")
{
print"<font color=green size=2><center><h2>WELCOME</h2></center></font>";
print "<font color=green size=2><center><h2>To Traffic Analyzer.</h2>
<h3>ALL THE INFORMATION RELATED TO CAPTURED <h1><b><u>IP PACKETS SOURCE & DEST IP</b></u></h1></h3</center></font><hr size=2 color=green>"."<br>";


$result= shell_exec('/var/www/html/calloip.sh');
echo $result ;
$file = "/var/www/html/oipresult";
$myfile = fopen($file, "r") or die("Unable to open file!");
 
echo "<table border='1'>";
echo "<tr><th>SOURCE IP</th>
<th>DESTINATION IP</th>";
echo "</tr>";
while(!feof($myfile)) {
   $data = fgets($myfile); 
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($myfile);

 print "<br><br><br><br>";
}else if ($count==1 && $selectOption=="UDP" && $selectOption2=="ALL")
{
print"<font color=green size=2><center><h2>WELCOME</h2></center></font>";
print "<font color=green size=2><center><h2>To Traffic Analyzer.</h2>
<h3>ALL THE INFORMATION RELATED TO CAPTURED <h1><b><u>UDP PACKETS</b></u></h1></h3</center></font><hr size=2 color=green>"."<br>";


$result= shell_exec('/var/www/html/calludp.sh');
echo $result ;
$file = "/var/www/html/udpresult";
$myfile = fopen($file, "r") or die("Unable to open file!");
 
echo "<table align='center' border='1'>";
echo "<tr><th>TIMESTAMP</th>
<th>SOURCE MAC ADDRESS</th>
<th>DESTINATION MAC ADDRESS</th>
<th>LENGTH</th>
<th>SOURCE IP</th>
<th>SOURCE PORT</th>
<th>DESTINATION IP</th>
<th>DESTINATION PORT</th>";
echo "</tr>";
while(!feof($myfile)) {
   $data = fgets($myfile); 
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($myfile);

 print "<br><br><br><br>";
}else if ($count==1 && $selectOption=="UDP" && $selectOption2=="PORT")
{
print"<font color=green size=2><center><h2>WELCOME</h2></center></font>";
print "<font color=green size=2><center><h2>To Traffic Analyzer.</h2>
<h3>ALL THE INFORMATION RELATED TO CAPTURED <h1><b><u>UDP PACKETS PORT ID</b></u></h1></h3</center></font><hr size=2 color=green>"."<br>";


$result= shell_exec('/var/www/html/callpudp.sh');
echo $result ;
$file = "/var/www/html/pudpresult";
$myfile = fopen($file, "r") or die("Unable to open file!");
 
echo "<table align='center' border='1'>";
echo "<tr><th>SOURCE PORT</th>
<th>DESTINATION PORT</th>";
echo "</tr>";
while(!feof($myfile)) {
   $data = fgets($myfile); 
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($myfile);

 print "<br><br><br><br>";
}else if ($count==1 && $selectOption=="UDP" && $selectOption2=="IP ADDRESS")
{
print"<font color=green size=2><center><h2>WELCOME</h2></center></font>";
print "<font color=green size=2><center><h2>To Traffic Analyzer.</h2>
<h3>ALL THE INFORMATION RELATED TO CAPTURED <h1><b><u>UDP PACKETS SOURCE & DEST IP</b></u></h1></h3</center></font><hr size=2 color=green>"."<br>";


$result= shell_exec('/var/www/html/calloudp.sh');
echo $result ;
$file = "/var/www/html/oudpresult";
$myfile = fopen($file, "r") or die("Unable to open file!");
 
echo "<table align='center' border='1'>";
echo "<tr><th>SOURCE IP</th>
<th>DESTINATION IP</th>";
echo "</tr>";
while(!feof($myfile)) {
   $data = fgets($myfile); 
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($myfile);

 print "<br><br><br><br>";
}else
{
print "
</br><font size=2 color=green><h2><center> <blink>Sorry, Insufficient Access Privileges</blink></center></h2></font>
<hr size=2 color=green>
<p>You do not have sufficient privileges to access the page that you requested. Some possible reasons:</p>
<ol>
<li>The level of access required for this page is inconsistent with your account.</li>
<li>There is not yet an access level assigned to this page. If you have been granted rights to do so, you can try to set or 
    change the access level for this resource using the <strong>,access</strong> tool.</li>
<li>Username or Password u typed is incorrect so <a href=login.html>goback</a> to home page</li>
</ol>
<p>If you still have a question, please consult the Webmaster FAQ</a> or to find the information you are looking for</a></p>";
}

?>

</div>
</body>
</html>
