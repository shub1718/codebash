<?php
$con = mysql_connect('localhost', 'root', '');
mysql_select_db("codebash", $con);
$viewresult = mysql_query("SELECT * from tips ORDER BY views DESC LIMIT 0,5");

$view = array();
$counter = 1;
while ($viewrow = mysql_fetch_array($viewresult)) {
    $view[$counter]['tipsno'] = $viewrow['tipsno'];
    $view[$counter]['tipstopic'] = $viewrow['tipstopic'];


    $counter+=1;
}
$mostlikedresult = mysql_query("SELECT * from tips ORDER BY likes DESC LIMIT 0,5");

$likestips = array();
$likescounter = 1;
while ($likesrow = mysql_fetch_array($mostlikedresult)) {
    $likestips[$likescounter]['tipsno'] = $likesrow['tipsno'];
    $likestips[$likescounter]['tipstopic'] = $likesrow['tipstopic'];


    $likescounter+=1;
}
$recentresult = mysql_query("SELECT * from tips ORDER BY time DESC LIMIT 0,5");

$recenttips = array();
$recentcounter = 1;
while ($recentsrow = mysql_fetch_array($recentresult)) {
    $recenttips[$recentcounter]['tipsno'] = $recentsrow['tipsno'];
    $recenttips[$recentcounter]['tipstopic'] = $recentsrow['tipstopic'];


    $recentcounter+=1;
}
?>
<div class="container col-md-12 col-sm-12 col-xs-12 ">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Highly viewed
                </div>
                <div class="panel-body">
                    <?php
                for ($i = 1; $i <=5; $i++) {
                    echo'
                        
        <form id="' . nl2br($view[$i]['tipsno'] ). '" method="get" action="tips.php">
    <input type="hidden" name="tips" value="' . nl2br($view[$i]['tipsno'] ) . '" >
    </form>
    <li onclick="document.getElementById(\'' . nl2br($view[$i]['tipsno'] ) . '\').submit();"><a>
                       ' . nl2br($view[$i]['tipstopic'] ) .' 
                    </a></li>
        ';
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    recent
                </div>
                <div class="panel-body">
                    <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo'
                        
        <form id="' . nl2br($recenttips[$i]['tipsno'] ). '" method="get" action="tips.php">
    <input type="hidden" name="tips" value="' . nl2br($recenttips[$i]['tipsno'] ) . '" >
    </form>
    <li onclick="document.getElementById(\'' . nl2br($recenttips[$i]['tipsno'] ) . '\').submit();"><a>
                       ' . nl2br($recenttips[$i]['tipstopic'] ) .' 
                    </a></li>
        ';
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    most liked
                </div>
                <div class="panel-body">
                     <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo'
                        
        <form id="' . nl2br($likestips[$i]['tipsno'] ). '" method="get" action="tips.php">
    <input type="hidden" name="tips" value="' . nl2br($likestips[$i]['tipsno'] ) . '" >
    </form>
    <li onclick="document.getElementById(\'' . nl2br($likestips[$i]['tipsno'] ) . '\').submit();"><a>
                       ' . nl2br($likestips[$i]['tipstopic'] ) .' 
                    </a></li>
        ';
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>


