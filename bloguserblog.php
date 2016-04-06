<div >

    <?php
    if (isset($_POST['page'])) {
            
            

            $bno = ($_POST['page']-1)*6;
            
        } else {

            $bno = 0;
           
        }
      $bend=6;
    $con = mysql_connect('localhost', 'root', '');
            mysql_select_db("codebash", $con);
            
                $username=$_GET['username'];
                $result = mysql_query("SELECT * FROM blog where username='$username'");
            
$num_rows = mysql_num_rows($result);

if($bno+$bend>($num_rows))
{ 
    $bend=$num_rows-$bno;
}
//echo $bno .'\n'.$bend.'\n'.$num_rows;

                  $query = "SELECT * FROM blog where username='$username' ORDER BY time DESC LIMIT $bno,$bend";
           

            
$value = mysql_query($query);
$content = array();
$counter = 1;

while ($row = mysql_fetch_array($value)) {
    $content[$counter]['blogno'] = $row['blogno'];
    $content[$counter]['blogtopic'] = $row['blogtopic'];
    $content[$counter]['blogarticle'] = $row['blogarticle'];
    $content[$counter]['category'] = $row['category'];
    $content[$counter]['username'] = $row['username'];
    $content[$counter]['time'] = $row['time'];
    $content[$counter]['likes'] = $row['likes'];
    $content[$counter]['comment'] = $row['comment'];
    $content[$counter]['views'] = $row['views'];
    $counter+=1;
    
}
    for($i = 1;
    $i<=$bend;
    $i++)
    {
    echo'
        <form id="'.$content[$i]['blogno'].'" method="get" action="blogdisplay.php">
    <input type="hidden" name="blog" value="'.$content[$i]['blogno'].'" >
    </form>
    <div class="col-md-6 col-sm-6 col-xs-12 tile mid white" onclick="document.getElementById(\''.$content[$i]['blogno'].'\').submit();">
                        <h2 class="q">'.$content[$i]['blogtopic'].'</h2>
                        <hr>
                        <p>
                            '.$content[$i]['blogarticle'].'
                        </p>
                        <div class=" col-md-12 col-sm-12 col-xs-12 com" style="height:40px;position:absolute;bottom:0;">
                            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;'.$content[$i]['likes'].'&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-comment"></span>&nbsp;'.$content[$i]['comment'].'&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-eye-open"></span>&nbsp;'.$content[$i]['views'].'
                        </div>
                    </div>
        ';
    
    }
    ?>


</div>

                
