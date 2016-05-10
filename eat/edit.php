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

            document.getElementById("result").innerHTML = "<form action=\"includes/update.php\" method=\"post\">饭店编号：<input type=\"restaurant_id\" name=\"restaurant_id\" readonly value=\""+obj.data[0].restaurant_id+"\" /><br/>饭店名称：<input type=\"restaurant_name\" name=\"restaurant_name\" value=\""+obj.data[0].restaurant_name+"\" /><br/>城市：<input type=\"city\" name=\"city\" value=\""+obj.data[0].city+"\" /><br/>必吃指数：<input type=\"priority\" name=\"priority\" value=\""+obj.data[0].priority+"\" /><br/>关键词：<input type=\"keyword\" name=\"keyword\" value=\""+obj.data[0].keyword+"\" /><br/>种类：<input type=\"catagory\" name=\"catagory\" value=\""+obj.data[0].catagory+"\" /><br/>吃过了没：<input type=\"eat_flag\" name=\"eat_flag\" value=\""+obj.data[0].eat_flag+"\" /><input type=\"submit\" /></form>";
        }
        };
        xmlhttp.open("GET","includes/select.php?id="+id,true);
        xmlhttp.send();

    });



    </script>



</head>


<body class="page1">

    <div class="col-lg-12" >
        
        <h2>饭店信息</h2>
        <div id="result"></div>

    </div>

</body>
</html>
