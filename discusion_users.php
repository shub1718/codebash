<div >
    <h4>Users
        <span class="pull-right">


            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#searchusers"><i class="glyphicon glyphicon-search"></i>
            </button>
        </span>
    </h4>
    <h4 id="searchusers" class="collapse" style="padding-top:10px;">

        <div class="form-group input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default btn-md" type="button">search
                </button>
            </span>
        </div>

    </h4>
    <hr>
    <div class="col-md-12">
        <div class="row">


            <?php
            if (isset($_POST['page'])) {
            
            

            $bno = ($_POST['page']-1)*10;
            
        } else {

            $bno = 0;
           
        }
      $bend=10;
    $con = mysql_connect('localhost', 'root', '');
            mysql_select_db("codebash", $con);
            
            $result = mysql_query("SELECT * from userdetails   ORDER BY username");
            
$num_rows = mysql_num_rows($result);

if($bno+$bend>($num_rows))
{ 
    $bend=$num_rows-$bno;
}
//echo $bno .'\n'.$bend.'\n'.$num_rows;

                
                $query = "SELECT * from userdetails   ORDER BY username LIMIT $bno,$bend";
           

            
$value = mysql_query($query);
$content = array();
$counter = 1;

while ($row = mysql_fetch_array($value)){
    $content[$counter]['username'] = $row['username'];
    $content[$counter]['profilepic'] = $row['profilepic'];
    
    $counter+=1;
    
}
            for ($i = 1; $i <= $bend; $i++) {
               
                    echo"
                        <div class='container col-md-6 col-sm-6'>
        <form id=\"".$content[$i]['username']."\" method=\"get\" action=\"userspage.php\" style='display:none'>
    <input type=\"hidden\" name=\"username\" value=\"".$content[$i]['username']."\" />
    </form>
        <a onclick=\"document.getElementById('".$content[$i]['username']."').submit();\">
        <div><center><img src='".$content[$i]['profilepic']."' class='img-circle '  width='80' height='80'></center></div><div><center><span class='com'>".$content[$i]['username'].""
                            . "</span></center></div></a><hr> </div>";
                
                    
            }
            ?>







        </div>
        
    </div>
</div>
