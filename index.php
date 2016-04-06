<?php $page = 1; ?>
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
        <div>
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidenav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <button type="button" class="navbar-toggle collapsed side" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-plus-sign"></span>
                    </button>
                    <a class="navbar-brand logo" href="#"><b><span class="c">Code</span><span class="b">bash</span></b></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="toplink">
                            <input type="text" placeholder="search">
                            <span>
                                <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </li>

                        <li class="toplink">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle">sign up</button>
                                <ul class="dropdown-menu" id="signin">
                                    <li><center><input type="text" class="input" placeholder="Email"></center></li>
                                    <li><center><input type="password" class="input" placeholder="password"></center></li>
                                    <li><center><input type="submit" class="input btn-danger" value="login"></center></li>
                                    <li><center><a href="#" class="input">forget password?</a></center></li>
                                    <li class="divider"></li>
                                    <li><center><input type="submit" class="input btn-info" value="register"></center></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container" style="margin-top:100px;">
            <div class="col-md-4" >
                <div class="row" >
                    <a href="tutorial.php"><div class="col-md-12 sm green1 vermid block">
                            TUTORIAL

                        </div>
                    </a>
                </div>
                <div class="row" style="margin-top:10px;">
                    <a href="codingtips.php"><div class="col-md-12 sm green1 vermid block">
                            CODING TIPS&TRICKS

                        </div>
                    </a>
                </div>
                <div class="row" style="margin-top:10px;">
                    <a href="blog.php"><div class="col-md-12 sm green1 vermid block">
                            BLOG

                        </div>
                    </a>
                </div>
                <div class="row" style="margin-top:10px;">
                    <a href="discussion.php"><div class="col-md-12 sm green1 vermid block">
                            DISCUSSIONS

                        </div>
                    </a>
                </div>
                <div class="row" style="margin-top:10px;">
                    <a href="about_us.php"><div class="col-md-12 sm green1 vermid block">
                            ABOUT US

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="col-md-6 tile red block1 hit">
                        <h1>
                            <center>Recent Blog</center>
                        </h1>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                    </div>
                    <div class="col-md-6 tile red block1 hit">
                        <h1>
                            <center>Recent Tips</center>
                        </h1>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6 tile red block1 hit">
                        <h1>
                            <center>Recent Questions</center>
                        </h1>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                    </div>
                    <div class="col-md-6 tile red block1 hit">
                        <h1>
                            <center>Recent Tut</center>
                        </h1>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                        <li>dsfsdghkfsjgfs</li>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>