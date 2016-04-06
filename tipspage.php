

    <?php
    
    if (isset($_POST['page'])) {
            
            

            $bno = ($_POST['page']-1)*6;
            
        } else {

            $bno = 0;
           
        }
      $bend=6;
    $con = mysql_connect('localhost', 'root', '');
            mysql_select_db("codebash", $con);
            
                $result = mysql_query("SELECT * FROM tips ");
           
$num_rows = mysql_num_rows($result);

if($bno+$bend>($num_rows))
{ 
    $bend=$num_rows-$bno;
}

                
                $query = "SELECT * FROM tips  ORDER BY time DESC LIMIT $bno,$bend";
           
$value = mysql_query($query);
$content = array();
$counter = 1;

while ($row = mysql_fetch_array($value)) {
    $content[$counter]['tipsno'] = $row['tipsno'];
    $content[$counter]['tipstopic'] = $row['tipstopic'];
    $content[$counter]['tipsarticle'] = $row['tipsarticle'];
    
    $content[$counter]['username'] = $row['username'];
    $content[$counter]['time'] = $row['time'];
    $content[$counter]['likes'] = $row['likes'];
    $content[$counter]['comment'] = $row['comment'];
    $content[$counter]['views'] = $row['views'];
    
    $counter+=1;
    
}
   
        for ($i = 1; $i <= $bend; $i++) {
            echo"
        
    
        <div class='row'>
        <form id=\"".$content[$i]['tipsno']."\" method=\"get\" action=\"tips.php\">
    <input type=\"hidden\" name=\"tips\" value=\"".$content[$i]['tipsno']."\" />
    </form>
            <div class='well' onclick=\"document.getElementById('".$content[$i]['tipsno']."').submit();\">
                

                <h4 class='question'><p>".$content[$i]['tipstopic']."</p></h4>
                <p>
                    ".$content[$i]['tipsarticle']."
                </p>
                <hr>
                <span class='pull-right'>
                    by <a>".$content[$i]['username']."</a>
                </span>

                <span class='glyphicon glyphicon-thumbs-up'></span>&nbsp;".$content[$i]['likes']."&nbsp;&nbsp;
                            <span class='glyphicon glyphicon-comment'></span>&nbsp;".$content[$i]['comment']."&nbsp;&nbsp;
                                <span class='glyphicon glyphicon-eye-open'></span>&nbsp;".$content[$i]['views']."

            </div>
            
            
        </div>
        ";
        }

        
    
    ?>



