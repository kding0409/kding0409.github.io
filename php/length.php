<?php
if(isset($_POST['val']))
{
$val=$_POST['val'];
if(!preg_match('/^[0-9.]/',$val))
{
 echo '<script language="JavaScript">'."\n".'alert("Invalid input");'."\n";
 echo "window.location=('unitconverter.php');\n";
 echo '</script>';
}
$from=$_POST['from'];
if($from==0)
{
echo '<script language="JavaScript">'."\n".'alert("Please select a base unit");'."\n";
echo '</script>';
}
else
{
function assign($from,$val)
{
switch ($from)
{
case 1:
$fromu="m";$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;break;
case 2:
$fromu="cm";$cm=1;$me=0.01;$km=0.00001;$ft=0.3280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;break;
case 3:
$fromu="km";$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;break;
case 4:
$fromu="ft";$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12;$mi=0.00018939;$ya=0.33333;break;
case 5:
$fromu="in";$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;break;
case 6:
$fromu="mi";$cm=160934.4;$me=1609.344;$km=1.609344;$ft=5280;$in=63360;$mi=1;$ya=1760;break;
case 7:
$fromu="yd";$cm=91.44;$me=0.9144;$km=0.0009144;$ft=3;$in=36;$mi=0.000568181;$ya=1;break;
}
 echo "<br><br><table border='3' style='margin-bottom:20px;font-size:20px;width:300px;'>
 <tr align=right><td>",(double)($val*$cm),"</td><td align=right>cm (厘米)</td></tr>
 <tr align=right><td>",(double)($val*$me),"</td><td align=right>m (米)</td></tr>
 <tr align=right><td>",(double)($val*$km),"</td><td align=right> km (千米)</td></tr>
 <tr align=right><td>",(double)($val*$in),"</td><td align=right> in (英尺)</td></tr>
 <tr align=right><td>",(double)($val*$ft),"</td><td align=right> ft (英寸)</td></tr>
 <tr align=right><td>",(double)($val*$mi),"</td><td align=right> mi (英里)</td></tr>
 <tr align=right><td>",(double)($val*$ya),"</td><td align=right> yd (码)</td></tr></table>";
}
assign($from,$val);
}
}
?>