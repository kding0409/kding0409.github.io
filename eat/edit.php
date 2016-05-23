<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="homepage of kevin">
    <meta name="author" content="kevin">

    <title>DkevDou backyard</title>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/angular.min.js"></script>
    <script type="text/javascript" src="../js/techChart.js"></script>
    <script type="text/javascript" src="../js/pace.min.js"></script>

    <script type="text/javascript" src="../js/queue.v1.min.js"></script>
    <script type="text/javascript" src="../js/topojson.v1.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/vis/4.8.2/vis.min.js"></script>
	<link rel="stylesheet" type="text/css" href="custom/custom.css">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    <script type="text/javascript" src="js/layer.js"></script>
    <script type="text/javascript">


    $(document).ready(function() {
        var id = window.location.search.replace("?", "").split("=")[1];
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var obj = JSON.parse(xmlhttp.responseText);

            var priority1 = (obj.data[0].priority=="1")?"checked":" ";
            var priority2 = (obj.data[0].priority=="2")?"checked":" ";
            var priority3 = (obj.data[0].priority=="3")?"checked":" ";
            var priority4 = (obj.data[0].priority=="4")?"checked":" ";
            var priority5 = (obj.data[0].priority=="5")?"checked":" ";

            var catagory1 = (obj.data[0].catagory=="正餐")?"checked":" ";
            var catagory2 = (obj.data[0].catagory=="小吃")?"checked":" ";

            var spicylevel1 = (obj.data[0].spicy_level=="1")?"checked":" ";
            var spicylevel2 = (obj.data[0].spicy_level=="2")?"checked":" ";
            var spicylevel3 = (obj.data[0].spicy_level=="3")?"checked":" ";
            var spicylevel4 = (obj.data[0].spicy_level=="4")?"checked":" ";
            var spicylevel5 = (obj.data[0].spicy_level=="5")?"checked":" ";

            var clean_level1 = (obj.data[0].clean_level=="1")?"checked":" ";
            var clean_level2 = (obj.data[0].clean_level=="2")?"checked":" ";
            var clean_level3 = (obj.data[0].clean_level=="3")?"checked":" ";
            var clean_level4 = (obj.data[0].clean_level=="4")?"checked":" ";
            var clean_level5 = (obj.data[0].clean_level=="5")?"checked":" ";

            var review_star1 = (obj.data[0].review_star=="1")?"checked":" ";
            var review_star2 = (obj.data[0].review_star=="2")?"checked":" ";
            var review_star3 = (obj.data[0].review_star=="3")?"checked":" ";
            var review_star4 = (obj.data[0].review_star=="4")?"checked":" ";
            var review_star5 = (obj.data[0].review_star=="5")?"checked":" ";

            var tryAgain2 = (obj.data[0].tryAgain=="0")?"checked":" "; 
            var tryAgain1 = (obj.data[0].tryAgain=="1")?"checked":" "; 

            var eat_flag2 = (obj.data[0].eat_flag=="0")?"checked":" "; 
            var eat_flag1 = (obj.data[0].eat_flag=="1")?"checked":" "; 

            document.getElementById("result").innerHTML = "<center><form action=\"includes/update.php\" method=\"post\"><table class=\"updateTable\"><tr><td>饭店编号</td><td><input type=\"restaurant_id\" class=\"record_id\" name=\"restaurant_id\" readonly value=\""+
            obj.data[0].restaurant_id+
            "\" /></td></tr><tr><td>饭店名称</rd><td><input type=\"restaurant_name\" name=\"restaurant_name\" value=\""+
            obj.data[0].restaurant_name+
            "\" /></td></tr><tr><td>城市</rd><td><input type=\"city\" name=\"city\" value=\""+
            obj.data[0].city+
            "\" /></td></tr><tr><td>必吃指数</rd><td><input type=\"radio\" name=\"priority\" value=\"1\" "+priority1+">1<input type=\"radio\" name=\"priority\" value=\"2\" "+priority2+">2<input type=\"radio\" name=\"priority\" value=\"3\" "+priority3+">3<input type=\"radio\" name=\"priority\" value=\"4\" "+priority4+">4<input type=\"radio\" name=\"priority\" value=\"5\" "+priority5+">5</td></tr><tr><td>关键词</rd><td><input type=\"keyword\" name=\"keyword\" value=\""+
            obj.data[0].keyword+
            "\" /></td></tr><tr><td>种类</rd><td><input type=\"radio\" name=\"catagory\" value=\"正餐\" "+catagory1+">正餐<input type=\"radio\" name=\"catagory\" value=\"小吃\" "+catagory2+
            ">小吃</td></tr><tr><td>辣度</rd><td><input type=\"radio\" name=\"spicy_level\" value=\"1\" "+spicylevel1+">1<input type=\"radio\" name=\"spicy_level\" value=\"2\" "+spicylevel2+">2<input type=\"radio\" name=\"spicy_level\" value=\"3\" "+spicylevel3+">3<input type=\"radio\" name=\"spicy_level\" value=\"4\" "+spicylevel4+">4<input type=\"radio\" name=\"spicy_level\" value=\"5\" "+spicylevel5+
            ">5</td></tr><tr><td>干净度</rd><td><input type=\"radio\" name=\"clean_level\" value=\"1\" "+clean_level1+"/>1<input type=\"radio\" name=\"clean_level\" value=\"2\" "+clean_level2+"/>2<input type=\"radio\" name=\"clean_level\" value=\"3\" "+clean_level3+"/>3<input type=\"radio\" name=\"clean_level\" value=\"4\" "+clean_level4+"/>4<input type=\"radio\" name=\"clean_level\" value=\"5\" "+clean_level5+
            ">5</td></tr><tr><td>计划去吃</rd><td><input type=\"date\" name=\"plan_eat_time\" value=\""+
            obj.data[0].plan_eat_time+            
            "\" /></td></tr><tr><td>吃到打卡</rd><td><input type=\"date\" name=\"eat_time\" value=\""+
            obj.data[0].eat_time+            
            "\" /></td></tr><tr><td>评价</rd><td><input type=\"radio\" name=\"review_star\" value=\"1\" "+review_star1+ "/>1<input type=\"radio\" name=\"review_star\" value=\"2\" "+review_star2+"/>2<input type=\"radio\" name=\"review_star\" value=\"3\" "+review_star3+"/>3<input type=\"radio\" name=\"review_star\" value=\"4\" "+review_star4+"/>4<input type=\"radio\" name=\"review_star\" value=\"5\" "+review_star5+
            ">5</td></tr><tr><td>点评</rd><td><textarea type=\"comments\" name=\"comments\" >"+
            obj.data[0].comments+            
            "</textarea></td></tr><tr><td>是否想再去</rd><td><input type=\"radio\" name=\"tryAgain\" value=\"1\" "+tryAgain1+"/>是<input type=\"radio\" name=\"tryAgain\" value=\"0\" "+tryAgain2+
            ">否</td></tr><tr><td>几人团</rd><td><input type=\"numberOfGroup\" name=\"numberOfGroup\" value=\""+
            obj.data[0].numberOfGroup+            
            "\" /></td></tr><tr><td>花了多少钱</rd><td><input type=\"how_much\" name=\"how_much\" value=\""+
            obj.data[0].how_much+            
            "\" /></td></tr><tr><td>哪次游玩</rd><td><input type=\"whichTrip\" name=\"whichTrip\" readonly value=\""+
            obj.data[0].whichTrip +
            "\" /></td></tr><tr><td>吃过了没</rd><td><input type=\"radio\" name=\"eat_flag\" value=\"1\" "+eat_flag1+"/>是<input type=\"radio\" name=\"eat_flag\" value=\"0\" "+eat_flag2+
            ">否</td></tr><tr><td><input type=\"submit\" /></td><td></td></tr></table></form></center><br/>";
        }
        };
        xmlhttp.open("GET","includes/select.php?id="+id,true);
        xmlhttp.send();

    });



    </script>

    <script>
    function myFunction()
    {

        layer.confirm('确定要从数据库中删除这个餐馆吗？', {
          btn: ['是','否'] //按钮
        }, function(){
            var id = document.querySelector('.record_id').value;

                $.ajax({
                    url: 'includes/delete.php',
                    type: 'get',
                    data: { "id": id},
                    success: function(response) { 
                        layer.msg(response);
                    }
                });


        }, function(){
        });
    
    }
    </script>

</head>


<body class="page1">

    <div class="col-lg-12" >
        <br/>

        <div id="result"></div>
        <center><button onclick="myFunction()">Delete</button><br/></center>
    </div>

</body>
</html>
