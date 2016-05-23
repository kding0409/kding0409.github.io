<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
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
    <meta name="description" content="must eat">
    <meta name="author" content="kevin">

    <title>DkevDou backyard</title>

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/angular.min.js"></script>
    <script type="text/javascript" src="../js/techChart.js"></script>
    <script type="text/javascript" src="../js/pace.min.js"></script>

    <script type="text/javascript" src="../js/d3.v3.min.js"></script>
    <script type="text/javascript" src="../js/queue.v1.min.js"></script>
    <script type="text/javascript" src="../js/topojson.v1.min.js"></script>

    <script type="text/javascript" src="js/layer.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="custom/custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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


    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    
    <script type="text/javascript">

    $(document).ready(function() {
    $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
        $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
    } );
     
    $('table.table').DataTable( {
        ajax:           'includes/ajax.php',
        scrollY:        300,
        scrollCollapse: true,
        paging:         false,
        "order": [[ 1, "desc" ]],
        buttons: [
        'copy', 'excel', 'pdf'
        ],
        "initComplete": function () {
            var api = this.api();
            api.$('tr').click( function () {
                var a = this.innerHTML.split(">")[1];
                var a = a.split("<")[0];
                layer.open({
                    type: 2,
                    title: '餐馆信息更新',
                    maxmin: true,
                    shadeClose: true,
                    area : ['70%' , '70%'],
                    content: 'edit.php?id='+a,
                    cancel: function(index){
                        layer.close(index);
                        location.reload();
                    }
                });
            } );
        }
    } );

    // Apply a search to the second table for the demo
    $('#myTable2').DataTable().search( '主食' ).draw();
    $('#myTable3').DataTable().search( '小吃' ).draw();
    } );

    </script>

    <script>
    function addNew() {
        layer.open({
            type: 2,
            title: '新增饭店信息',
            maxmin: true,
            shadeClose: true,
            area : ['70%' , '70%'],
            content: 'addnew.php',
            cancel: function(index){
                layer.close(index);
                location.reload();
            }
        });
    }
    </script>

</head>


<body id="page-top">

    <?php if (login_check($mysqli) == true) : ?>


	<nav id="mainNav" class="navbar-default navbar-page">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed navbar-page" style="color:#969696;" data-toggle="collapse" data-target="#navbar-list">
                    <span class="sr-only" style="color:#969696;">Toggle navigation</span>
                    <span class="icon-bar" style="color:#969696;"></span>
                    <span class="icon-bar" style="color:#969696;"></span>
                    <span class="icon-bar" style="color:#969696;"></span>
                </button>
                <img src="../images/pika.png" id="pika" class="navbar-brand scroll" alt="Smiley face" href="#page-top">
                <a class="navbar-brand scroll" href="" style="color:#969696;">Food Monster</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-list">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="scroll " data-transition="slide" href="" style="color:#969696;"> <?php echo htmlentities($_SESSION['username']); ?></a>
                    </li>
                    <li>
                        <a class="scroll " data-transition="slide" href="" style="color:#969696;">calendar</a>
                    </li>
                    <li>
                        <a class="scroll " data-transition="slide" href="" style="color:#969696;">history</a>
                    </li>
                    <li>
                        <a class="scroll " data-transition="slide" href="includes/logout.php" style="color:#969696;">Logout</a>
				    </li>
                    <li>
                        <a class="scroll" data-transition="slide" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>


    <div class="page1 ">
        <div class="">
            <div > 
                <div class="col-lg-12 text-center" >
                <h1>Must eat checklist</h1>   
                <br/> 
                    <div style="width:80%;margin-left:10%" > 
                        


                <div >
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active">
                            <a href="#tab-table1" style="color:#d90007;" data-toggle="tab">All</a>
                        </li>
                        <li>
                            <a href="#tab-table2" style="color:#d90007;" data-toggle="tab">主食</a>
                        </li>
                        <li>
                            <a href="#tab-table3" style="color:#d90007;" data-toggle="tab">小吃</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <button type="button" onclick="addNew()">Add New</button>
                        <div class="tab-pane active" id="tab-table1">
                            <table id="myTable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>餐馆编号</th>
                                        <th>餐馆</th>
                                        <th>城市</th>
                                        <th>必吃指数</th>
                                        <th>关键字</th>
                                        <th>种类</th>
                                        <th>吃否</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-table2">
                            <table id="myTable2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>餐馆编号</th>
                                        <th>城市</th>
                                        <th>必吃指数</th>
                                        <th>关键字</th>
                                        <th>种类</th>
                                        <th>吃否</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-table3">
                            <table id="myTable3" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>餐馆编号</th>
                                        <th>餐馆</th>
                                        <th>城市</th>
                                        <th>必吃指数</th>
                                        <th>关键字</th>
                                        <th>种类</th>
                                        <th>吃否</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>


                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>

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

        <?php else :   ?>
        <?php 
            header('Location: ../eat/');
            exit;
        endif; ?>

</body>
</html>
