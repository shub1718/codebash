<?php

$page = 3;
$tipsno = $_GET['tips'];
$con = mysql_connect('localhost', 'root', '');
mysql_select_db("codebash", $con);
$tipsquery = "SELECT * FROM tips where tipsno='$tipsno' ";
$tipsvalue = mysql_query($tipsquery);
$tipscontent = array();

$tipsrow = mysql_fetch_array($tipsvalue) ;
    
    $tipscontent['tipsno'] = $tipsrow ['tipsno'];
    $tipscontent['tipstopic'] = $tipsrow ['tipstopic'];
    $tipscontent['tipsarticle'] = $tipsrow ['tipsarticle'];
    
    $tipscontent['username'] = $tipsrow ['username'];
    $tipscontent['time'] = $tipsrow ['time'];
    $tipscontent['likes'] = $tipsrow ['likes'];
    $tipscontent['comment'] = $tipsrow ['comment'];
  $tipscontent['views'] = $tipsrow['views'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <?php include('header.php'); ?>
        <div id="page-wrapper" class="container-fluid">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-9 ">
                        <h1 class="page-header">
                            Coding Tips & Tricks
                        </h1>
                    </div>
                </div> 
                <div class="col-md-8 ">
                    <div class="col-md-12 col-sm-12 col-xs-12  ">
                        <h4><a href='codingtips.php' class='com'>All tips</a> 
                            <span class='glyphicon glyphicon-chevron-right '></span> 
<?php echo $tipscontent['tipsno']; ?></h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-12  ">
                                    <a><h4 class="question"><?php echo $tipscontent['tipstopic'];?></h4></a>

                                </div>
                            </div>
                            <hr>
                            
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <?php echo $tipscontent['tipsarticle'];?>
                                    </p>

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="pull-right"> 1 hr ago  <a><?php echo $tipscontent['username'];?></a></span>
                                </div>
                            </div>
                            <hr>
                            <div class=" col-md-12 col-sm-12 col-xs-12 com" style="height:40px;position:relative;bottom:0;">
                            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;<?php echo $tipscontent['likes'];?>&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-comment"></span>&nbsp;<?php echo $tipscontent['comment'];?>&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;<?php echo $tipscontent['views'];?>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                <?php
                
                include('tipsside.php');
                ?>
                </div>









            </div>

        </div>
    </body>
</html>