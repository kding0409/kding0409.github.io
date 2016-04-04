<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";


function printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya){
    echo "<br><br><table border='3' style='margin-bottom:20px;font-size:20px;width:80%;'>
    <tr align=right><td>",(double)($val*$cm),"</td><td align=right>cm (厘米)</td></tr>
    <tr align=right><td>",(double)($val*$me),"</td><td align=right>m (米)</td></tr>
    <tr align=right><td>",(double)($val*$km),"</td><td align=right> km (千米)</td></tr>
    <tr align=right><td>",(double)($val*$in),"</td><td align=right> in (英寸)</td></tr>
    <tr align=right><td>",(double)($val*$ft),"</td><td align=right> ft (英尺)</td></tr>
    <tr align=right><td>",(double)($val*$mi),"</td><td align=right> mi (英里)</td></tr>
    <tr align=right><td>",(double)($val*$ya),"</td><td align=right> yd (码)</td></tr></table>";    
}

function printMass($val,$kg,$g,$lb,$oz,$mg){
    echo "<br><br><table border='3' style='margin-bottom:20px;font-size:20px;width:80%;'>
    <tr align=right><td>",(double)($val*$kg),"</td><td align=right> kg (千克)</td></tr>
    <tr align=right><td>",(double)($val*$g),"</td><td align=right> g (克)</td></tr>
    <tr align=right><td>",(double)($val*$lb),"</td><td align=right> lb (磅)</td></tr>
    <tr align=right><td>",(double)($val*$oz),"</td><td align=right> oz (盎司)</td></tr>
    <tr align=right><td>",(double)($val*$mg),"</td><td align=right> mg (毫克)</td></tr>";
}

function printTemp($val,$c,$f){
    echo "<br><br><table border='3' style='margin-bottom:20px;font-size:20px;width:80%;'>
    <tr align=right><td>",(double)($c),"</td><td align=right> C (摄氏度)</td></tr>
    <tr align=right><td>",(double)($f),"</td><td align=right> F (华氏度)</td></tr>";
}

function printVol($val,$gal,$qt,$l,$ml){
    echo "<br><br><table border='3' style='margin-bottom:20px;font-size:20px;width:80%;'>
    <tr align=right><td>",(double)($val*$gal),"</td><td align=right> gal (加仑)</td></tr>
    <tr align=right><td>",(double)($val*$qt),"</td><td align=right> qt (夸脱)</td></tr>
    <tr align=right><td>",(double)($val*$l),"</td><td align=right> l (升)</td></tr>
    <tr align=right><td>",(double)($val*$ml),"</td><td align=right> ml (毫升)</td></tr>";
}

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $array = explode(' ', $q);    
    if(count($array)!=2)
    {
        echo "<p style=\"color:red;\"><b>Wrong input numbers! <br/> Please input \"value(space)unit\" like \"100 m\".</b></p>";
    }else{
        $val=$array[0];
        $from=$array[1];

        switch ($from)
        {
            case "m":
            $fromu="m";$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "meter":
            $fromu="m";$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "米":
            $fromu="m";$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;

            case "cm":
            $fromu="cm";$cm=1;$me=0.01;$km=0.00001;$ft=0.03280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "centimeter":
            $fromu="cm";$cm=1;$me=0.01;$km=0.00001;$ft=0.03280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "厘米":
            $fromu="cm";$cm=1;$me=0.01;$km=0.00001;$ft=0.03280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break; 

            case "km":
            $fromu="km";$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "kilometer":
            $fromu="km";$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "千米":
            $fromu="km";$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;

            case "ft":
            $fromu="ft";$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12;$mi=0.00018939;$ya=0.33333;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "feet":
            $fromu="ft";$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12;$mi=0.00018939;$ya=0.33333;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "英尺":
            $fromu="ft";$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12;$mi=0.00018939;$ya=0.33333;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;

            case "in":
            $fromu="in";$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "inch":
            $fromu="in";$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "英寸":
            $fromu="in";$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;

            case "mi":
            $fromu="mi";$cm=160934.4;$me=1609.344;$km=1.609344;$ft=5280;$in=63360;$mi=1;$ya=1760;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "mile":
            $fromu="mi";$cm=160934.4;$me=1609.344;$km=1.609344;$ft=5280;$in=63360;$mi=1;$ya=1760;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "英里":
            $fromu="mi";$cm=160934.4;$me=1609.344;$km=1.609344;$ft=5280;$in=63360;$mi=1;$ya=1760;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;

            case "yd":
            $fromu="yd";$cm=91.44;$me=0.9144;$km=0.0009144;$ft=3;$in=36;$mi=0.000568181;$ya=1;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "yard":
            $fromu="yd";$cm=91.44;$me=0.9144;$km=0.0009144;$ft=3;$in=36;$mi=0.000568181;$ya=1;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;
            case "码":
            $fromu="yd";$cm=91.44;$me=0.9144;$km=0.0009144;$ft=3;$in=36;$mi=0.000568181;$ya=1;printLength($val,$cm,$me,$km,$ft,$in,$mi,$ya);break;


            case "kg":
            $fromu="kg";$kg=1;$g=1000;$lb=2.205;$oz=35.27;$mg=1000000;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "kilogram":
            $fromu="kg";$kg=1;$g=1000;$lb=2.205;$oz=35.27;$mg=1000000;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "千克":
            $fromu="kg";$kg=1;$g=1000;$lb=2.205;$oz=35.27;$mg=1000000;printMass($val,$kg,$g,$lb,$oz,$mg);break;

            case "g":
            $fromu="g";$kg=0.001;$g=1;$lb=0.002205;$oz=0.03527;$mg=1000;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "gram":
            $fromu="g";$kg=0.001;$g=1;$lb=0.002205;$oz=0.03527;$mg=1000;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "克":
            $fromu="g";$kg=0.001;$g=1;$lb=0.002205;$oz=0.03527;$mg=1000;printMass($val,$kg,$g,$lb,$oz,$mg);break;

            case "lb":
            $fromu="lb";$kg=0.4536;$g=453.6;$lb=1;$oz=16;$mg=453600;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "pound":
            $fromu="lb";$kg=0.4536;$g=453.6;$lb=1;$oz=16;$mg=453600;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "磅":
            $fromu="lb";$kg=0.4536;$g=453.6;$lb=1;$oz=16;$mg=453600;printMass($val,$kg,$g,$lb,$oz,$mg);break;

            case "oz":
            $fromu="oz";$kg=0.02835;$g=28.35;$lb=0.0625;$oz=1;$mg=28350;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "ounce":
            $fromu="oz";$kg=0.02835;$g=28.35;$lb=0.0625;$oz=1;$mg=28350;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "盎司":
            $fromu="oz";$kg=0.02835;$g=28.35;$lb=0.0625;$oz=1;$mg=28350;printMass($val,$kg,$g,$lb,$oz,$mg);break;

            case "mg":
            $fromu="mg";$kg=0.000001;$g=0.001;$lb=0.000002205;$oz=0.00003527;$mg=1;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "milligram":
            $fromu="mg";$kg=0.000001;$g=0.001;$lb=0.000002205;$oz=0.00003527;$mg=1;printMass($val,$kg,$g,$lb,$oz,$mg);break;
            case "毫克":
            $fromu="mg";$kg=0.000001;$g=0.001;$lb=0.000002205;$oz=0.00003527;$mg=1;printMass($val,$kg,$g,$lb,$oz,$mg);break;

            case "c":
            $fromu="c";$c=$val;$f=$val*9/5 +32;printTemp($val,$c,$f);break;
            case "celsius":
            $fromu="c";$c=$val;$f=$val*9/5 +32;printTemp($val,$c,$f);break;
            case "摄氏度":
            $fromu="c";$c=$val;$f=$val*9/5 +32;printTemp($val,$c,$f);break;

            case "f":
            $fromu="f";$c=($val-32)*5/9;$f=$val;printTemp($val,$c,$f);break;
            case "fahrenheit":
            $fromu="f";$c=($val-32)*5/9;$f=$val;printTemp($val,$c,$f);break;
            case "华氏度":
            $fromu="f";$c=($val-32)*5/9;$f=$val;printTemp($val,$c,$f);break;

            case "gal":
            $fromu="gal";$gal=1;$qt=4;$l=3.785;$ml=3785;printVol($val,$gal,$qt,$l,$ml);break;
            case "gallon":
            $fromu="gal";$gal=1;$qt=4;$l=3.785;$ml=3785;printVol($val,$gal,$qt,$l,$ml);break;
            case "加仑":
            $fromu="gal";$gal=1;$qt=4;$l=3.785;$ml=3785;printVol($val,$gal,$qt,$l,$ml);break;

            case "qt":
            $fromu="qt";$gal=0.25;$qt=1;$l=0.9464;$ml=946.4;printVol($val,$gal,$qt,$l,$ml);break;
            case "quart":
            $fromu="qt";$gal=0.25;$qt=1;$l=0.9464;$ml=946.4;printVol($val,$gal,$qt,$l,$ml);break;
            case "夸脱":
            $fromu="qt";$gal=0.25;$qt=1;$l=0.9464;$ml=946.4;printVol($val,$gal,$qt,$l,$ml);break;

            case "l":
            $fromu="l";$gal=0.2642;$qt=1.057;$l=1;$ml=1000;printVol($val,$gal,$qt,$l,$ml);break;
            case "liter":
            $fromu="l";$gal=0.2642;$qt=1.057;$l=1;$ml=1000;printVol($val,$gal,$qt,$l,$ml);break;
            case "升":
            $fromu="l";$gal=0.2642;$qt=1.057;$l=1;$ml=1000;printVol($val,$gal,$qt,$l,$ml);break;

            case "ml":
            $fromu="ml";$gal=0.0002642;$qt=0.001057;$l=0.001;$ml=1;printVol($val,$gal,$qt,$l,$ml);break;
            case "milliliter":
            $fromu="ml";$gal=0.0002642;$qt=0.001057;$l=0.001;$ml=1;printVol($val,$gal,$qt,$l,$ml);break;
            case "毫升":
            $fromu="ml";$gal=0.0002642;$qt=0.001057;$l=0.001;$ml=1;printVol($val,$gal,$qt,$l,$ml);break;

            default :
                echo "<p style=\"color:red;\"><b>Type not support! </b></p>";
                exit();
        }

    }
}

?>