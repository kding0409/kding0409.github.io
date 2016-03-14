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

    window.onresize = resize;

    function resize()
    {
     window.location.reload();
    }

    </script>

    <script src="js/wow.min.js"></script>
          <script>
          new WOW().init();
    </script>

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
</head>


<body id="page-top">

	<nav id="mainNav" class="navbar-page">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-list">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/pika.png" id="pika" class="navbar-brand scroll" alt="Smiley face" href="#page-top">
                <a class="navbar-brand scroll" href="http://www.dingkevin.com/">DkevDou</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-list">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="scroll" data-transition="slide" href="http://www.dingkevin.com/">Home</a>
                    </li>
                    <li>
                        <a class="scroll " data-transition="slide" href="http://www.dingkevin.com/#projects">Projects</a>
				    </li>
                    <li>
                        <a class="scroll" data-transition="slide" href="http://www.dingkevin.com/blog/">Blog</a>
                    </li>
                    <li>
                        <a class="scroll" data-transition="slide" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- page 1 -->
    <section class="page3" id="self-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="col-lg-3 text-center" >
                        <ul class="nav fillall">
                            <li><a onclick="setTab('help',1,9)" id="help1">Length Converter</a></li>
                            <li><a onclick="setTab('help',2,9)" id="help2">Volume Converter</a></li>
                            <li><a onclick="setTab('help',3,9)" id="help3">Temperature Converter</a></li>
                            <li><a onclick="setTab('help',4,9)" id="help4">Mass Converter</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-9 contain" align="center">
                            <div class="center">
                            <div id="con_help_1">
                            <h2> Length Converter</h2>
                            <hr/>
                            <div class="right">
                                <form action="unitconverter.php" method="POST">
                                <p class="btn" style="font-size: 25px;">from: </p>
                                <input class="btn" type="text" name=val value="<?php echo isset($_POST['val']) ? $_POST['val'] : '' ?>">
                                <select class="btn-convertor" name="from">
                                    <option value=1> m 米</option>
                                    <option value=2>cm 厘米</option>
                                    <option value=3>km 千米</option>
                                    <option value=4>ft 英尺</option>
                                    <option value=5>in 英寸</option>
                                    <option value=6>mi 英里</option>
                                    <option value=7>yd 码</option>
                                </select>
                                <input class="btn"  type=submit value=Convert>
                                <?php include 'php/length.php';?>
                                </form>
                            </div>
                            </div>
                            <div id="con_help_2" style="display:none;">
                            <h2> Volume Converter</h2>
                            <div class="right">Coming Soon</div>
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