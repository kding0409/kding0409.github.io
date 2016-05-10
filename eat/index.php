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
</head>


<body class="page">

    <div class="col-lg-12" >
        <div class="col-lg-4">
        </div>
        <div class="back col-lg-4">

            <div >

                      <?php
                      if (isset($_GET['error'])) {
                          echo '<h3 class="error" >Error Logging In!</h3>';
                      }
                      ?> <br/>
                  <form class = "form-signin" action="includes/process_login.php" method="post" name="login_form">                      
                      <input type="text" placeholder = "E-mail" class = "form-control" name="email" required autofocus/><br/>
                      <input type="password" placeholder = "password" class = "form-control"
                                       name="password" 
                                       id="password"/><br/>
                      <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                                        name = "login" onclick="formhash(this.form, this.form.password);" >Login</button>

                  </form>
             
          </div> 
        </div>
    </div>

</body>
</html>
