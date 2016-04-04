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

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript" src="js/scrollToTop.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/techChart.js"></script>
    <script type="text/javascript" src="js/pace.min.js"></script>

    <script type="text/javascript" src="js/d3.v3.min.js"></script>
    <script type="text/javascript" src="js/queue.v1.min.js"></script>
    <script type="text/javascript" src="js/topojson.v1.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/vis/4.8.2/vis.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/vis/4.8.2/vis.min.css">

	<link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pace.css">

    <script type="text/javascript">
    function setTab(name,cursel,n){
    for(i=1;i<=n;i++){
    var menu=document.getElementById(name+i);//alert(name+i);
    var con=document.getElementById("con_"+name+"_"+i);
    menu.className=i==cursel?"hover":"";
    con.style.display=i==cursel?"block":"none";
    }
    }
    </script>


    <script>
    function showHint(str) {
      var xhttp;
      if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          document.getElementById("txtHint").innerHTML = xhttp.responseText;
        }
      };
      xhttp.open("GET", "php/convertor.php?q=" + str, true);
      xhttp.send();   
    }
    </script>

</head>


<body id="page-top">

	<nav id="mainNav" class="navbar-default navbar-page">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed navbar-page" style="color:#969696;" data-toggle="collapse" data-target="#navbar-list">
                    <span class="sr-only" style="color:#969696;">Toggle navigation</span>
                    <span class="icon-bar" style="color:#969696;"></span>
                    <span class="icon-bar" style="color:#969696;"></span>
                    <span class="icon-bar" style="color:#969696;"></span>
                </button>
                <img src="images/pika.png" id="pika" class="navbar-brand scroll" alt="Smiley face" href="#page-top">
                <a class="navbar-brand scroll" href="http://www.dingkevin.com/" style="color:#969696;">DkevDou</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-list">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="scroll" data-transition="slide" href="http://www.dingkevin.com/" style="color:#969696;">Home</a>
                    </li>
                    <li>
                        <a class="scroll " data-transition="slide" href="http://www.dingkevin.com/#projects" style="color:#969696;">Projects</a>
				    </li>
                    <li>
                        <a class="scroll" data-transition="slide" href="http://www.dingkevin.com/blog/" style="color:#969696;">Blog</a>
                    </li>
                    <li>
                        <a class="scroll" data-transition="slide" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <section class="page3" id="self-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="col-lg-3 text-center" >
                        <ul class="nav fillall">
                            <li style="background-color: #BBBBBB;font-size:160%;text-align: left;font-weight: bold;"><a>Supported Units</a></li>
                            <li style="background-color: #DDDDDD;font-size:120%;text-align: left;font-weight: bold;"><a>Length Units</a></li>
                            <p style="font-size:105%;font-weight: bold;">cm/centimeter/厘米, m/meter/米, km/kilometer/千米, ft/feet/千米, in/inch/英寸, mi/mile/英里, yd/yard/码</p>
                            <li style="background-color: #DDDDDD;font-size:120%;text-align: left;font-weight: bold;"><a>Volume Units</a></li>
                            <p style="font-size:105%;font-weight: bold;">gal/gallon/加仑, qt/quart/夸脱, l/liter/升, ml/milliliter/毫升</p>
                            <li style="background-color: #DDDDDD;font-size:120%;text-align: left;font-weight: bold;"><a>Temperature Units</a></li>
                            <p style="font-size:105%;font-weight: bold;">c/celsius/摄氏度, f/fahrenheit/华氏度</p>
                            <li style="background-color: #DDDDDD;font-size:120%;text-align: left;font-weight: bold;"><a>Mass Units</a></li>
                            <p style="font-size:105%;font-weight: bold;">kg/kilogram/千克, g/gram/克, lb/pound/磅, oz/ounce/盎司, mg/milligram/毫克</p>
                        </ul>
                    </div>
                    <div class="col-lg-9 contain height-control" align="center">
                            <div class="center">
                            <div id="con_help_1">
                            <h2> Unit Convertor</h2>
                            <p>Please input the number then space then the unit of the number, like : "100 cm" or "123 meter" or "30 千米"</p>
                            <hr/>
                            <div class="right">
                                <form action="unitconverter.php" method="POST">
                                <input type="text" name=val value="<?php echo isset($_POST['val']) ? $_POST['val'] : '' ?>" onkeyup="showHint(this.value)">
                                </form>
                                <p><span id="txtHint"></span></p> 
                            </div>
                            </div>
                            <div id="con_help_2" style="display:none;">
                            <h2> Volume Converter</h2>
                            <div class="right">
                            </div>
                            </div>
                            <div id="con_help_3" style="display:none;">
                            <h2> Temperature Converter</h2>
                            <div class="right">Coming Soon</div>
                            </div>
                            <div id="con_help_4" style="display:none;">
                            <h2> Mass Converter</h2>
                            <div class="right">Coming Soon</div>
                            </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12 text-center ">
                <p>Copyright &copy; DkevDou 2015</p>
            </div>
        </div>
    </footer>


    <!-- script for the bar chart -->
    <script type="text/javascript">
            drawed = 0;
            (function($){
            $(window).scroll(function() {

                if($(this).scrollTop() < $( window ).height()*0.7 && drawed == 1)  { 
                    drawed = 0;
                } 

                if($(this).scrollTop() > $( window ).height()*0.7 && drawed != 1)  { 
                    drawed = 1;
                    drawChart();
                } 

                if($(this).scrollTop() > ($( window ).height())*2)  { 
                    drawed = 0;
                }
            });
    })(jQuery);
    </script>


</body>
</html>
