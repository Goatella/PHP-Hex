 <table> 
 <?php 
 //This is our first loop, changing the R value
 $r=0;
 while ($r <= 15)
 { 
 echo "<tr>"; 
 //Our second loop (G value) occurs 6 times for ever R value, 36 times
 $g=0;
 while ($g <= 15)
 { 
 echo "<tr>";

 //Our third loop (B value) occurs 6 times for ever G value, or 216 times
 $b=0;
 while ($b <= 15) 
 { 

 //Here we actually generate the color blocks
 $background = dechex($r) . dechex($r) . dechex($g) .dechex($g) . dechex($b) . dechex ($b);
 echo "<td bgcolor=\"#$background\">#$background</td>";

 //At the end of each loop we add 3
 $b = $b+3;
 } 
 $g = $g+3;
 }
 $r = $r+3;
 } 
 ?>
 </table> 


<p>
<a href="http://www.goatella.com">Goatella's Home Page</a><p>
<a href="https://github.com/Goatella/PHP-Hex">This script on GitHub</a>
