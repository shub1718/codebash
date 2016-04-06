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
            
            $result = mysql_query("SELECT * FROM userpost,userdetails   where userpost.username=userdetails.username and userpost.blog>0");
            
$num_rows = mysql_num_rows($result);

if($bno+$bend>($num_rows))
{ 
    $bend=$num_rows-$bno;
}
//echo $bno .'\n'.$bend.'\n'.$num_rows;

                  $query = "SELECT * FROM userpost ,userdetails   where userpost.username=userdetails.username and userpost.blog>0
                          ORDER BY blog DESC LIMIT $bno,$bend
                        ";
            
            
$value = mysql_query($query);
$content = array();
$counter = 1;

while ($row = mysql_fetch_array($value)) {
    $content[$counter]['username'] = $row['username'];
    $content[$counter]['blog'] = $row['blog'];
    $content[$counter]['profilepic'] = $row['profilepic'];
    
    
    $counter+=1;
    
}
    for($i = 1;
    $i<=$bend;
    $i++)
    {
    echo'
        <form id="'.$content[$i]['username'].'" method="get" action="bloguser_blog.php">
    <input type="hidden" name="username" value="'.$content[$i]['username'].'" >
    </form>
    <div class="col-md-6 col-sm-6 col-xs-12 tile mid white" onclick="document.getElementById(\''.$content[$i]['username'].'\').submit();">
                        
                        <center><h1><img src="'.$content[$i]['profilepic'].'" height="200px"></h1></center>
                        
                        <div class=" col-md-12 col-sm-12 col-xs-12 com" style="height:40px;position:absolute;bottom:0;">
                            <span >'.$content[$i]['username'].'</span>&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-pencil" >'.$content[$i]['blog'].'</span>
                        </div>
                    </div>
        ';
    
    }
    ?>


</div>

                
