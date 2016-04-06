<?php
$con = mysql_connect('localhost', 'root', '');
mysql_select_db("codebash", $con);
$catresult = mysql_query("SELECT * from blogcategory");
$categorycount = mysql_num_rows($catresult);
$category = array();
$counter = 1;
while ($catrow = mysql_fetch_array($catresult)) {
    $category[$counter]['category'] = $catrow['category'];
    $category[$counter]['blogs'] = $catrow['blogs'];


    $counter+=1;
}
$mostlikedresult = mysql_query("SELECT * from blog ORDER BY likes DESC LIMIT 0,5");

$likesblog = array();
$likescounter = 1;
while ($likesrow = mysql_fetch_array($mostlikedresult)) {
    $likesblog[$likescounter]['blogno'] = $likesrow['blogno'];
    $likesblog[$likescounter]['blogtopic'] = $likesrow['blogtopic'];


    $likescounter+=1;
}
$recentresult = mysql_query("SELECT * from blog ORDER BY time DESC LIMIT 0,5");

$recentblog = array();
$recentcounter = 1;
while ($recentsrow = mysql_fetch_array($recentresult)) {
    $recentblog[$recentcounter]['blogno'] = $recentsrow['blogno'];
    $recentblog[$recentcounter]['blogtopic'] = $recentsrow['blogtopic'];


    $recentcounter+=1;
}
?>
<div class="col-md-4 col-xs-12 ">

    <div class="flip-container col-md-12 col-sm-12 col-xs-12  mid" ontouchstart="this.classList.toggle('hover');">
        <div class="front tile container col-md-12 col-sm-12 col-xs-12 vermid mid green" >
            <h1>Categories</h1>
        </div>
        <div class="back tile   col-md-12 col-sm-12 col-xs-12 mid green verpad" style="height:100%;">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <?php
                for ($i = 1; $i <= $categorycount; $i++) {
                    echo'
        <form id="' . nl2br($category[$i]['category'] ). '" method="get" action="blogcategory.php">
    <input type="hidden" name="category" value="' . nl2br($category[$i]['category'] ) . '" >
    </form>
    <li onclick="document.getElementById(\'' . nl2br($category[$i]['category'] ) . '\').submit();">
                       ' . nl2br($category[$i]['category'] ) . "-(" . $category[$i]['blogs'] . ') 
                    </li>
        ';
                }
                ?>
            </div>


        </div>

    </div>

    <div class="flip-container col-md-12 col-sm-12 col-xs-12  mid" ontouchstart="this.classList.toggle('hover');">
        <div class="front tile col-md-12 col-sm-12 col-xs-12 vermid mid blue">
            <h1>Most liked</h1>
        </div>
        <div class="back tile col-md-12 col-sm-12 col-xs-12 mid blue verpad">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
<?php
for ($i = 1; $i <= 5; $i++) {
    echo'
        <form id="' . $likesblog[$i]['blogno'] . '" method="get" action="blogdisplay.php">
    <input type="hidden" name="blog" value="' . $likesblog[$i]['blogno'] . '" >
    </form>
    <li onclick="document.getElementById(\'' . $likesblog[$i]['blogno'] . '\').submit();">
    <p>
                      ' . nl2br(substr($likesblog[$i]['blogtopic'], 0, 25)) . '</p>
                    </li>
        ';
}
?>



            </div>


        </div>

    </div>

    <div class="flip-container col-md-12 col-sm-12 col-xs-12  mid" ontouchstart="this.classList.toggle('hover');">
        <div class="front tile col-md-12 col-sm-12 col-xs-12 vermid mid tle">
            <h1>Recent</h1>
        </div>
        <div class="back tile col-md-12 col-sm-12 col-xs-12 mid tle verpad">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
<?php
for ($i = 1; $i <= 5; $i++) {
    echo'
        <form id="' . $recentblog[$i]['blogno'] . '" method="get" action="blogdisplay.php">
    <input type="hidden" name="blog" value="' . $recentblog[$i]['blogno'] . '" >
    </form>
    <li onclick="document.getElementById(\'' . $recentblog[$i]['blogno'] . '\').submit();">
    <p>
                      ' . nl2br(substr($recentblog[$i]['blogtopic'], 0, 25)) . '</p>
                    </li>
        ';
}
?>

            </div>


        </div>

    </div>

</div>