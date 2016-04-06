<?php $page=3; ?>
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
                    <div class="col-md-8 ">
                        <h1 class="page-header">
                            Coding Tips & Tricks
                        </h1>
                    </div>
                </div> 
                <div class="col-md-8">
                <div class="col-md-12">
                    <a href="codingtips.php"><button type="button" class="btn btn-info btn-lg btn-block">All tips</button></a>
                </div>
                <div class="col-md-12" style="margin-top:30px;">
                    <div class="col-md-12 col-sm-12 col-xs-12 container full whiteno" style="padding:30px;">
                        
                        <div class="com">
                            About .....
                        </div>
                        
                        <textarea rows="3" class="com form-control">
                            
                        </textarea>
                        <div class="null"></div>
                        <div class="com">
                            Write .....
                        </div>
                        <textarea rows="15" class="com form-control">
                            
                        </textarea>
                        <div class="null"></div>
                        <center>
                            <button type="button" class="btn btn-success btn-lg " style="width:100%;">Post</button>
                        </center>
                        
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

