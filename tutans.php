<?php $page = 2; ?>
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
                    <div class="col-md-9 col-sm-9">
                        <h1 class="page-header">
                            Tutorials
                        </h1>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <?php
             
                include('tutanspage.php');
                
                ?>
                    </div>
                    <?php
             
                
                include('tutorialsidebar.php');
                ?>
                    
                </div> 
                
                









            </div>

        </div>
    </body>
</html>