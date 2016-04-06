
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
<nav class="navbar navbar-default navbar-side" role="navigation">
    <div class="collapse navbar-collapse" id="sidenav">
        <ul class="nav" id="main-menu">
            <li >
                <a href='index.php' class="<?php if($page==1){echo'active';} else{echo'normal';} ?>">
                    <span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp; Home
                </a>
            </li>
            <li>
                <a href='tutorial.php' class='<?php if($page==2){echo"active";} else{echo'normal';}?>'>
                    <span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp; Tutorials
                </a>
            </li>
            <li>
                <a href='codingtips.php' class='<?php if($page==3){echo"active";} else{echo'normal';} ?>'>
                    <span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp; Coding tips&tricks
                </a>
            </li>
            
            <li>
                <a href='blog.php' class='<?php if($page==4){echo"active";}  else{echo'normal';}?>'>
                    <span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp; Blog
                </a>
            </li>
            <li>
                <a href='discussion.php' class='<?php if($page==5){echo"active";}  else{echo'normal';}?>'>
                    <span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp; Discussion
                </a>
            </li>
            <li>
                <a href='about_us.php'    class='<?php if($page==6){echo"active";}  else{echo'normal';}?>'>
                    <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp; About Us
                </a>
            </li>
        </ul>
    </div>
</nav>
