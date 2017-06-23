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


function printPrice($q){
    if ($q<1000){
        $shipping=round(200/floor(1000/($q*1.1*6.9)));
        $number=floor(1000/($q*1.1*6.9));
        $rest=(1000-($q*1.1*6.9))/6.9/1.1;
        echo "一个包裹可以装 ",($number)," 件这个物品. ";
        echo "除去这个包裹，还可以买 ",((int)$rest)," USD本金的东西";
    }else{
        $shipping=200;
        echo "一个包裹只能装1件这个物品";
    }
    echo "<br><br><table border='3' style='margin-bottom:20px;font-size:15px;width:80%;'>
    <tr align=right>
        <td align=right>用途</td>
        <td align=right>本金</td>
        <td align=right>消费税</td>
        <td align=right>邮费</td>
        <td align=right>汇率</td>
        <td align=right>总计（RMB）</td>
    </tr>
    <tr align=right>
        <td>","对外报价","</td>
        <td>",(double)($q),"</td>
        <td>",(double)(0.1),"</td>
        <td>",(double)(200),"</td>
        <td>",(double)(6.9),"</td>
        <td>",(int)($q*1.1*6.9+200),"</td>
    </tr>
    <tr align=right>
        <td>","实际成本","</td>
        <td>",(double)($q),"</td>
        <td>",(double)(0.08),"</td>
        <td>",(double)($shipping),"</td>
        <td>",(double)(6.9),"</td>
        <td>",(int)($q*1.08*6.9+$shipping),"</td>
    </tr>
    </table>";    
}

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    if(!is_numeric($q))
    {
        echo "<p style=\"color:red;\"><b>Wrong input! <br/> Please input digit number only.</b></p>";
    }else{

        printPrice($q);

    }
}

?>