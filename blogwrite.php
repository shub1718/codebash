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
                    <div class="tile col-md-6 col-sm-6 col-xs-12  sm teal" >
                        
                            
                            <center>All</center>
                        
                    </div>
                    </a>
                    <a href="bloguser.php">
                    <div class="tile col-md-6 col-sm-6 col-xs-12  sm teal" >
                        
                            
                            <center>Users</center>
                        
                    </div>
                        
                    </a>
                    
                   
                    <div class="col-md-12 col-sm-12 col-xs-12 container full whiteno" style="padding:30px;">
                        <div class="q">
                            Category
                        </div>
                        <select class="q form-control" style="height:50px;">
                            <option class="q">asdf</option>
                            <option class="q">asdf</option>
                            <option class="q">asdf</option>
                            <option class="q">asdf</option>
                            <option class="q">asdf</option>
                            </select>
                        <div class="null"></div>
                        <div class="q">
                            About .....
                        </div>
                        
                        <textarea rows="3" class="com form-control">
                            
                        </textarea>
                        <div class="null"></div>
                        <div class="q">
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
                <?php include('blogside.php'); ?>
                
                











            </div>

        </div>
   
    </body>
</html>
