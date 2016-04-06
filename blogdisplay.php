<?php

$page = 4;
$blogno = $_GET['blog'];
$con = mysql_connect('localhost', 'root', '');
mysql_select_db("codebash", $con);
$blogquery = "SELECT * FROM blog where blogno='$blogno' ";
$blogvalue = mysql_query($blogquery);
$blogcontent = array();

$blogrow = mysql_fetch_array($blogvalue) ;
    
    $blogcontent['blogno'] = $blogrow ['blogno'];
    $blogcontent['blogtopic'] = $blogrow ['blogtopic'];
    $blogcontent['blogarticle'] = $blogrow ['blogarticle'];
    $blogcontent['category'] = $blogrow ['category'];
    $blogcontent['username'] = $blogrow ['username'];
    $blogcontent['time'] = $blogrow ['time'];
    $blogcontent['likes'] = $blogrow ['likes'];
    $blogcontent['comment'] = $blogrow ['comment'];
  $blogcontent['views'] = $blogrow['views'];
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
    <body >
<?php include('header.php'); ?>
        <div id="page-wrapper" class="container-fluid">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Blog

                        </h1>

                    </div>
                </div>
                <div class="col-md-8 col-xs-12 ">
                    <a href="blog.php">
                        <div class="tile col-md-4 col-sm-4 col-xs-12  sm teal" >


                            <center>All</center>

                        </div>
                    </a>
                    <a href="bloguser.php">
                        <div class="tile col-md-4 col-sm-4 col-xs-12  sm teal" >


                            <center>Users</center>

                        </div>

                    </a>
                    <a href="blogwrite.php">
                        <div class="tile col-md-4 col-sm-4 col-xs-12  sm teal" >


                            <center>Write</center>

                        </div>

                    </a>
                    <div class="col-md-12 col-sm-12 col-xs-12  ">
                        <h4><a href='blog.php' class='com'>All blogs</a> 
                            <span class='glyphicon glyphicon-chevron-right '></span> 
<?php echo $blogcontent['blogno']; ?></h4>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 full container whiteno" > 
                        <h2 class="q"><?php echo $blogcontent['blogtopic'];?></h2>
                        by <a class="com"><?php echo $blogcontent['username'];?></a> 
                        2 sec ago
                        
                        <hr>
                        <p>
<?php echo $blogcontent['blogarticle'];?>
                        </p>
                        <hr>
                        <div class=" col-md-12 col-sm-12 col-xs-12 com" style="height:40px;position:relative;bottom:0;">
                            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;<?php echo $blogcontent['likes'];?>&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-comment"></span>&nbsp;<?php echo $blogcontent['comment'];?>&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;<?php echo $blogcontent['views'];?>
                        </div>
                    </div>

                </div>
<?php include('blogside.php'); ?>













            </div>

        </div>
 
    </body>
</html>
