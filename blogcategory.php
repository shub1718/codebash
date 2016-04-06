<?php $page = 4; ?>
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
                        <h4><span class="q">Category</span>:<span class="com"><?php echo $_GET['category'];?> </span>
                                <span class='glyphicon glyphicon-chevron-right'></span> Blogs</h4>
                   </div>
                   
                  <?php include('blogpage.php'); ?>  
                    <?php include('nextprevpage.php');?>
                   
                </div>
                <?php include('blogside.php'); ?>
                
                











            </div>

        </div>
   
    </body>
</html>

