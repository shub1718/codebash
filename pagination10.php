<div class="col-md-12 col-sm-12 col-xs-12">
<center>
    <ul class="pagination">
        <?php
        $filename = explode('/', basename($_SERVER['PHP_SELF']));
        $url = isset($_SERVER['HTTPS']) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
        $url .= '://' . $_SERVER['SERVER_NAME'];
        $url .= in_array($_SERVER['SERVER_PORT'], array('80', '443')) ? '' : ':' . $_SERVER['SERVER_PORT'];
        $url .= $_SERVER['REQUEST_URI'];
        $x=$num_rows%10;
        if($x>0)
        {
            $totalpage=($num_rows-$x)/10+1;
        }
        else{
            $totalpage=($num_rows-$x)/10;
        }
        
        if (isset($_POST['page'])) {
            
            

            $pageno = $_POST['page'];
        } else {

            $pageno = 1;
        }
        

        $k = ($pageno - 1) % 5;
        $no = ($pageno - 1) - $k;




        if ($pageno > 5) {

            echo'
                                <form id="' . $no . '" method="post" action="' . $url . '">
                <input type="hidden" name="page" value="' . $no . '" >
            </form>';
        }

        for ($q = 1; $q <= 5; $q++) {
            $a = $no + $q;
            if($a<=$totalpage)
            {
            echo'
                <form id="' . $a . '" method="post" action="' . $url . '">
    <input type="hidden" name="page" value="' . $a . '" >
    </form>';
        }
        
        }

        $p = $no + 6;
        if($p<=$totalpage){
        echo'
                                <form id="' . $p . '" method="post" action="' . $url . '">
                <input type="hidden" name="page" value="' . $p . '" >
        </form>';}

        if ($pageno > 5) {


            echo'
                <li >
                <span onclick="document.getElementById(' . $no . ').submit();" class="glyphicon glyphicon-chevron-left" >
                        </span>
                        </li>';
        }

        for ($q = 1; $q <= 5; $q++) {
            $a = $no + $q;
            if($a<=$totalpage)
            {
            echo'
        
        <li ';
            if ($pageno == $a)
                echo'class="active"';echo'><span onclick="document.getElementById(' . $a . ').submit();">' . $a . '</span></li>';
        }
        }
        if($p<=$totalpage){
        echo'
                <li >
                <span onclick="document.getElementById(' . $p . ').submit();" class="glyphicon glyphicon-chevron-right" >
                        </span>
        </li>';}
        ?>


    </ul>
</center>
</div>
