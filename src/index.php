<?php
$x=5;
$y=3;
echo "x = ".$x."<br>y = ".$y."<br><br>x + y = ".($x+$y);



echo "<br><br><br><br>";



$fname="Krzesimir";
$lname="HYŻYK";
echo "My first name is: <span style=\"font-weight:800\">".$fname."</span><br>My last name is: <span style=\"font-weight:800\">".$lname."</span><br>My full name is: <span style=\"font-weight:800\">".$fname." ".$lname."</span><br><br>My first name has: <span style=\"font-weight:800\">".strlen($fname)."</span> characters<br>My full name has: <span style=\"font-weight:800\">".strlen($fname." ".$lname)."</span> characters";



echo "<br><br><br><br>";



echo "<body style=\"padding:0;margin:0;width:100%;height:100%\"><table style=\"position:absoulte;top:0;left:0\"><tr><th>x</th><th>2*x*x</th></tr>";
for ($n=1;$n<=25;$n++){
	echo "<tr><td>".$n."</td><td>".($n*$n*2)."</td></tr>";
}
echo "</table></body>";



echo "<br><br><br><br>";



echo "The current time is ".date("G").":".date("i")."<br>I wish you a good day!<br><br>There are ".(23-date("G"))." hours left in this day.";



echo "<br><br><br><br>";



echo "<body style=\"padding:0;margin:0;width:100%;height:100%\"><table style=\"position:absoulte;top:0;left:0;border:0px solid black;border-collapse: collapse;\">";
for ($n=1;$n<=25;$n++){
	echo "<tr style=\"background-color:".($n%2==0?"yellow":"white").";\"><td>".$n."</td><td>".($n%3)."</td></tr>";
}
echo "</table></body>";
?>